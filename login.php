<?php
session_start();
$error='';

if(isset($_POST['username'])){
$username = $_POST['username'];
$password = $_POST['password'];

$connection = mysqli_connect("localhost","root","ROOT");

$username = stripcslashes($username);
$password = stripcslashes($password);

$db = mysqli_select_db($connection,"hrsdb");

$query = mysqli_query($connection,"select * from customer where password='$password' AND username='$username'");
$value = mysqli_fetch_object($query);
$row = mysqli_num_rows($query);

if($username == "admin" && $password == "admin"){
    header("location: admin");
}

else if($row==true){
	$_SESSION['login_user']=$username;
	$_SESSION["is_login"] = true;
	$_SESSION["user_id"] = $value->cust_id;
	
	header("location:home.php");
}

else{
	$error = "Username or Password Incorrect.";
	echo "<script type='text/javascript'>alert('$error');</script>";
	header("Refresh:0; url=login.php");
}

mysqli_close($connection);
}
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="icon" href="hotel_image/icon.jpg">
    <meta charset="UTF-8">
    <title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="icon" href="hotel_image/baseline_location_city_black_18dp.png">
</head>

<style>
body{
	background-image:url(https://images.pexels.com/photos/38238/maldives-ile-beach-sun-38238.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260);
	background-repeat:no-repeat;
	background-size:cover;
	width:100%;
	height:100vh;
	overflow:auto; 
}

.heading{
	text-decoration:bold;
	text-align : center;
	font-size:30px;
	color:#F96;
	padding-top:10px;
}

.container{
	font-family:Roboto,sans-serif;
	background-image:url(https://image.freepik.com/free-vector/dark-blue-blurred-background_1034-589.jpg) ;
    
    border-style: 1px solid grey;
    margin: 0 auto;
    text-align: center;
    opacity: 0.8;
    margin-top: 50px;
	box-shadow: 1px 4px 5px 1px #eee;
    max-width: 570px;
    padding-top: 10px;
    height: 410px;
}

.username{
	margin-left: 20px;
    font-family: sans-serif;
    font-size: 14px;
    color: white;
    margin-top: 20px;
}

#username{
	margin-top: 10px;
	margin-bottom: 20px;
}

.password{
	color: white;
    margin-top: 20px;
    font-size: 14px;
    font-family: sans-serif;
    margin-left: 20px;
}

#password{
	margin-top: 10px;
	margin-bottom: 30px;
}

.col-xs-4.male{
	color: white;
    font-size: 13px;
    margin-top: 9px;
    padding-bottom: 16px;
}

.col-xs-4.female {
    color: white;
    font-size: 13px;
    margin-top: 9px;
    padding-bottom: 16px;
	padding-right: 60px;
}	

.sbutton{
	color: white;
    font-size: 20px;
    border: 1px solid white;
    background-color: #080808;
    width: 32%;
    margin-left: 41%;
    margin-top: 16px;
	box-shadow: 0px 2px 2px 0px white;	   
}

.btn.btn-warning:hover {
    box-shadow: 2px 1px 2px 3px #99ccff;
	background:#5900a6;
	color:#fff;
	transition: background-color 1.15s ease-in-out,border-color 1.15s ease-in-out,box-shadow 1.15s ease-in-out;	
}	

.signup{
	color: white;
    margin-top: 40px;
    font-size: 14px;
    font-family: sans-serif;
    margin-left: 5px;
	margin-bottom: 13px;
}
</style>

<body>
	<div class="container">
	<form action="login.php" method="post" enctype="multipart/form-data">
	<!--form heading-->
	<header class="heading">Login</header><hr></hr>  
	<!--form starting--> 
	<div class="row ">
	
	<!--username-->
	<div class="col-sm-12">
		<div class="row">
			<div class="col-xs-4">
		        <label class="username" >Username :</label>
		    </div>
			<div class="col-xs-8"	>	 
				<input type="username" name="username"  id="username" placeholder="Enter your username" class="form-control" >
		    </div>
		</div>
	</div>
		
	<!--password-->
    <div class="col-sm-12">
		<div class="row">
			<div class="col-xs-4">
		 	    <label class="password">Password :</label>
			</div>
			<div class="col-xs-8">
			    <input type="password" name="password" id="password" placeholder="Enter your password" class="form-control">
			</div>
        </div>
	</div>	
	 
	<!-- submit Button-->	  
	<div class="col-sm-12">
		<input type="submit" name="submit" value="Submit" class="btn btn-warning">
		<input type="reset" name="reset" value="Reset" class="btn btn-warning">
	</div>
	
	<!--sign up button-->
	<div class="col-sm-12">
        <label class="signup">Don't have an account?</label>
        <br><a class="btn btn-warning" href="signup.php">Sign Up</a>
	</div>	
	
	</div>
	</form>
	</div>	
</body>	
	
</html>