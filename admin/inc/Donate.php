<?php
class Donate{
	private $host  = 'localhost';
    private $user  = 'mba';
    private $password   = "mba@123";
    private $database  = "mba";   
	private $dbConnect = false;
    public function __construct(){
        if(!$this->dbConnect){ 
            $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
            if($conn->connect_error){
                die("Error failed to connect to MySQL: " . $conn->connect_error);
            }else{
                $this->dbConnect = $conn;
            }
        }
    }	
	private function getData($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$data= array();
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$data[]=$row;            
		}
		return $data;
	}
	private function getNumRows($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$numRows = mysqli_num_rows($result);
		return $numRows;
	}
 	public function gettodayDonation(){
 		$sqlQuery = "SELECT SUM(Amount) AS total FROM `payments` WHERE PaymentStatus = 'PAYMENT_SUCCESS' AND DATE(TXNdatetime) = CURDATE()";
 		$result = mysqli_query($this->dbConnect, $sqlQuery);	
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		return $row;
	}
	public function getcurrmonthDonation(){
 		$sqlQuery = "SELECT SUM(Amount) AS total FROM `payments` WHERE PaymentStatus='PAYMENT_SUCCESS' AND MONTH(TXNdatetime) = MONTH(NOW())";
 		$result = mysqli_query($this->dbConnect, $sqlQuery);	
 		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
 		return $row;
 	}
 	public function gettotalDonation(){
 		$sqlQuery = "SELECT sum(Amount) as total FROM `payments` WHERE PaymentStatus='PAYMENT_SUCCESS'";
 		$result = mysqli_query($this->dbConnect, $sqlQuery);	
 		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
 		return $row;
 	}

    
	

	public function getDonateList(){
		$sqlQuery = "SELECT* FROM `payments` ORDER BY id DESC";
		return  $this->getData($sqlQuery);
	}
		public function getLeadsList(){
		$sqlQuery = "SELECT* FROM `leads` ORDER BY id DESC";
		return  $this->getData($sqlQuery);
	}
}
?>