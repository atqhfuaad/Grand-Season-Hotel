<?php

session_start(); // Starting Session
$error=''; // Variable To Store Error Message

// Define customer information
$username=$_POST['username'];
$password=$_POST['password'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$ic=$_POST['ic'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$postcode=$_POST['postcode'];
$city=$_POST['city'];
$state=$_POST['state'];

if(isset($_POST['submit'])){
	
	$connection = mysqli_connect("localhost", "root", "ROOT","hrsdb");

  
    // SQL query to fetch information of customer
    $query = mysqli_query($connection,	"INSERT INTO customer (username, password, firstname, lastname, gender, ic, phone, email, address, 
															   postcode, city, state) 
										 VALUES('$username', '$password', '$firstname','$lastname','$gender','$ic','$phone','$email','$address',
												'$postcode','$city','$state')");

    if ($query == true) {
        //Start file upload
        echo "Sign Up Complete. Thank you!";
        header("location:login.php"); // Redirecting To Other Page
    } 
	
    else {
         echo $error = "Insert is invalid!";
    }

mysqli_close($connection); // Closing Connection

}
?>