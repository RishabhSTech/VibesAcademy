<?php include_once 'inc/config.php';
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    // echo "Welcome to the member's area, " . htmlspecialchars($_SESSION['username']) . "!";
 } else {
    
 header('Location: index.php');
 }
 
include 'inc/Donate.php';
$donate = new Donate();

$donationlist = $donate->getDonateList();

 ?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Transactions</title>

   <link rel="shortcut icon" href="https://www.thevibes.academy/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <section class="fullContent">
        <header class="wpadminbar">

            <div class="headerMenu">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <path fill="currentColor"
                        d="m16 8.5l1.53 1.53l-1.06 1.06L10 4.62l-6.47 6.47l-1.06-1.06L10 2.5l4 4v-2h2v4zm-6-2.46l6 5.99V18H4v-5.97zM12 17v-5H8v5h4z" />
                </svg>The Vibes Academy
            </div>
            <div class="headerMenu">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <path fill="currentColor"
                        d="M10 9.25c-2.27 0-2.73-3.44-2.73-3.44C7 4.02 7.82 2 9.97 2c2.16 0 2.98 2.02 2.71 3.81c0 0-.41 3.44-2.68 3.44zm0 2.57L12.72 10c2.39 0 4.52 2.33 4.52 4.53v2.49s-3.65 1.13-7.24 1.13c-3.65 0-7.24-1.13-7.24-1.13v-2.49c0-2.25 1.94-4.48 4.47-4.48z" />
                </svg> <a href="logout.php">Hi, Log out</a>
            </div>

        </header>
        <div class="FullContentDesign">
            <div class="sidebarMenu">
                <?php include_once 'inc/menu.php'; ?>
            </div>
            <div class="ContentViwer">
                <div class="FinalContent">
                    <h1>All Transactions</h1>
                    <div class="message">
                        <p>
                            Hi, Here you can find all the transactions </p>
                    </div>
                    <div class="DatatableLayout">
                        <table id="myTable" class="stripe">
                            <thead>
                                <tr>
                                    <th>Trxn ID</th>
                                    <th>Customer Name</th>
                                    <th>Email ID</th>
                                    <th>Mobile No</th>
                                    <th>customerID</th>
                                    <th>Payment Status</th>
                                    <th>Amount</th>
                                     <th>Phonepe Txn ID</th>
                                    <th>Date & Time</th>

                                </tr>
                            </thead>
                            <tbody>
							<?php 
							foreach($donationlist as $donate){ 
							
							?>
                                <tr>
                                    <td><?php echo $donate['txnID'];?></td>
                                    <td><?php echo $donate['CustName'];?></td>
                                    <td><?php echo $donate['email'];?></td>
                                    <td><?php echo $donate['mobile'];?></td>
                                    <td><?php echo $donate['customerID'];?></td>
                                    <td>
                                         <?php 
                                            if ($donate['PaymentStatus']=='PAYMENT_SUCCESS') { ?>
                                                 <span class="trxnStaussuccess">Success</span> 
                                         <?php   } else { ?>
                                                 <span class="trxnStausfailure">Failed</span>
                                        <?php  } ?>

                                    </td>
                                    <td><?php echo $donate['Amount'];?></td>
                                    <td><?php echo $donate['remarks'];?></td>
                                    <td><?php echo $donate['TXNdatetime'];?></td>
                                </tr>
							<?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>

    </section>

</body>
<?php include_once 'inc/footer.php'; ?>

</html>