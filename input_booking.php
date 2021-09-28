<?php var_dump($_SESSION);?>

<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

// Define booking information
$roomtype=$_POST['roomtype'];
$numofguest=$_POST['numofguest'];
$checkindate=$_POST['checkindate'];
$checkoutdate=$_POST['checkoutdate'];
$paymenttype=$_POST['paymenttype'];
$creditcardno=$_POST['creditcardno'];
$cardholdername=$_POST['cardholdername'];
$expirydate=$_POST['expirydate'];
$cvc=$_POST['cvc'];
$amount=$_POST['amount'];
$status=$_POST['status'];
$username = $_SESSION['login_user'];
	
	
if(isset($_POST['submit'])){
	
	if (isset($_POST['roomtype'])){
		switch ($roomtype) {
			case "Deluxe":
				$amount=260;
				break;
				
			case "Twin Deluxe":
				$amount=297;
				break;
				
			case "Grand Deluxe":
				$amount=355;
				break;
				
			case "Premier Deluxe":
				$amount=318;
				break;	
		}
} 
	
	$connection = mysqli_connect("localhost", "root", "ROOT","hrsdb");

    // SQL query to fetch information of booking
    $query = mysqli_query($connection,	"INSERT INTO booking (cust_id,roomtype, numofguest, checkindate, checkoutdate, paymenttype, 
															  creditcardno, cardholdername, expirydate, cvc, amount, status) 
										 VALUES((SELECT cust_id from customer WHERE username='$username'),'$roomtype', '$numofguest',
										         '$checkindate','$checkoutdate','$paymenttype','$creditcardno', '$cardholdername', 
												 '$expirydate','$cvc', '$amount', 'Pending')");

    if ($query == true) {
        //Start file upload
        echo "Booking Complete. Thank you!";
        header("location:home.php"); // Redirecting To Other Page
    } 
	
    else {
         echo $error = "Insert is invalid!";
    }

	mysqli_close($connection); // Closing Connection
}
?>



