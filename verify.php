<?php
require 'vendor/autoload.php';
use Razorpay\Api\Api;

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'GET' && empty($_POST)) {
    $_POST = [
        'txnID' => $_GET['txnID'] ?? null,
        'razorpay_payment_id' => $_GET['payment_id'] ?? null,
        'razorpay_order_id' => $_GET['order_id'] ?? null,
        'razorpay_signature' => $_GET['signature'] ?? null
    ];
}

if (
    isset($_POST['razorpay_payment_id'], $_POST['razorpay_order_id'], $_POST['razorpay_signature'], $_POST['txnID'])
) {
    $txnID = $_POST['txnID'];
    
    $api_key = "rzp_test_j0AdRTrkd74Mb8";
    $api_secret = "SBN9J0ZzbZrQDNWQ7iDLhIwL";

    try {
        $api = new Api($api_key, $api_secret);

        // Verify signature
        $attributes = [
            'razorpay_order_id' => $_POST['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        ];

        $api->utility->verifyPaymentSignature($attributes);

        $conn = new mysqli("localhost", "u475996608_mba", "Ashi@2605", "u475996608_vibesacademy");
        if ($conn->connect_error) {
            throw new Exception("Database connection failed: " . $conn->connect_error);
        }

        date_default_timezone_set("Asia/Kolkata");
        $TXNdatetime = date('Y-m-d H:i:s');

        $responseJson = json_encode([
            'payment_id' => $_POST['razorpay_payment_id'],
            'order_id' => $_POST['razorpay_order_id'],
            'signature' => $_POST['razorpay_signature'],
            'verified' => true,
            'timestamp' => $TXNdatetime
        ], JSON_PRETTY_PRINT);

        $updateSql = "UPDATE payments SET 
            final_status = '1', 
            TXNdatetime = ?, 
            PaymentStatus = 'PAYMENT_SUCCESS', 
            remarks = ?, 
            response = ? 
            WHERE txnID = ?";
        $stmt = $conn->prepare($updateSql);
        if (!$stmt) {
            throw new Exception("Prepare failed: " . $conn->error);
        }
        $stmt->bind_param("ssss", $TXNdatetime, $_POST['razorpay_payment_id'], $responseJson, $txnID);

        if (!$stmt->execute()) {
            throw new Exception("Failed to update payment record: " . $stmt->error);
        }
        $stmt->close();

        $querySql = "SELECT * FROM payments WHERE txnID = ?";
        $stmt = $conn->prepare($querySql);
        if (!$stmt) {
            throw new Exception("Prepare failed (SELECT): " . $conn->error);
        }
        $stmt->bind_param("s", $txnID);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        if (!$row) {
            throw new Exception("Payment record not found after update");
        }

        $_SESSION['customerID'] = $row["customerID"];
        $_SESSION['CustName'] = $row["CustName"];
        $_SESSION['txnID'] = $row["txnID"];
        $_SESSION['Amount'] = $row["Amount"];
        $_SESSION['PaymentStatus'] = 'PAYMENT_SUCCESS';
        
        $stmt->close();
        $conn->close();

        header("Location: thank-you.php");
        exit();

    } catch (Exception $e) {
        header("Location: failed.php?error=" . urlencode($e->getMessage()));
        exit();
    }
} else {
    echo "<h3 style='color:red;'>Missing Parameters</h3>";
}
?>