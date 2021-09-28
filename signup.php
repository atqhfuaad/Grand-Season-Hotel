<!DOCTYPE html>
<html>

<head>
	<link rel="icon" href="hotel_image/icon.jpg">
	<meta charset="UTF-8">
	<title>Sign Up</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	
	<link rel="icon" href="hotel_image/baseline_location_city_black_18dp.png">
</head>

<style>
body{
	background-image:url(https://s3.envato.com/files/243754334/primag.jpg);
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
	box-shadow: 1px 4px 5px 1px #eee;
    max-width: 600px;
    padding-top: 10px;
    height: 850px;
    margin-top: 40px;
	margin-bottom: 40px;
}

.username{
	margin-left: 16px;
    font-family: sans-serif;
    font-size: 14px;
    color: white;
    margin-top: 20px;
}

#username{
	margin-top:10px;
	margin-bottom: 10px;
}

.password{
	margin-left: 16px;
    font-family: sans-serif;
    font-size: 14px;
    color: white;
    margin-top: 20px;
}

#password{
	margin-top:10px;
	margin-bottom: 10px;
}

.firstname{
	margin-left: 16px;
    font-family: sans-serif;
    font-size: 14px;
    color: white;
    margin-top: 20px;
}

#firstname{
	margin-top:10px;
	margin-bottom: 10px;
}

.lastname{
	margin-left: 18px;
    font-family: sans-serif;
    font-size: 14px;
    color: white;
    margin-top: 20px;
}

#lastname{
	margin-top:10px;
	margin-bottom: 10px;
}

.gender {
	color: white;
    font-family: sans-serif;
    font-size: 14px;
    margin-top: 13px;
    margin-left: 40px;
}

#gender{
	margin-top: 8px;
	margin-bottom: 3px;
}

.ic {
	color: white;
    font-family: sans-serif;
    font-size: 14px;
    margin-top: 15px;
    margin-left: 17px;
}

#ic{
	margin-top:10px;
	margin-bottom: 10px;
}
	
.phone{
	font-size: 14px;
	font-family: sans-serif;
    margin-top: 20px;
    color: white;
    margin-left: 48px;
	
}	

#phone{
	margin-top:10px;
	margin-bottom: 10px;
}

.email{
	margin-left: 52px;
    font-family: sans-serif;
    font-size: 14px;
	color: white;
    margin-top: 20px;
}

#email{
	margin-top: 10px;
	margin-bottom: 10px;
}

.address{
	margin-left: 35px;
    font-family: sans-serif;
    font-size: 14px;
	color: white;
    margin-top: 20px;
}

#address{
	margin-top: 10px;
	margin-bottom: 10px;
}

.postcode{
	margin-left: 30px;
    font-family: sans-serif;
    font-size: 14px;
	color: white;
    margin-top: 20px;
}

#postcode{
	margin-top: 10px;
	margin-bottom: 10px;
}

.city{
	margin-left: 65px;
    font-family: sans-serif;
    font-size: 14px;
	color: white;
    margin-top: 20px;
}

#city{
	margin-top: 10px;
	margin-bottom: 10px;
}

.state{
	margin-left: 61px;
    font-family: sans-serif;
    font-size: 14px;
	color: white;
    margin-top: 20px;
}

#state{
	margin-top: 10px;
	margin-bottom: 20px;
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

.dropdown {
	position: relative;
	display: inline-block; 
}

.dropdown-content {
	color: aliceblue;
	display: none;
	position: absolute;
	background-color: #3d3f44;
	min-width: 160px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	padding: 12px 16px;
	z-index: 1;
}

.dropdown:hover .dropdown-content {
	display: block;
}
</style>

<body>
	<div class="container">
	<form action="input_signup.php" method="post" enctype="multipart/form-data">
	<!--form heading-->
	<header class="heading">Sign Up</header><hr></hr>  
	<!--form starting--> 
	<div class="row">
	
	<!--username-->
    <div class="col-sm-12">
		<div class="row">
			<div class="col-xs-4">
          	    <label class="username">Username :</label> 
          	</div>
		    <div class="col-xs-8">
		        <input type="text" name="username" id="username" placeholder="Enter your username" class="form-control" required>
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
		        <input type="password" name="password" id="password" placeholder="Enter your password" class="form-control" required>
            </div>
		</div>
	</div>	
			
	<!--first name-->
    <div class="col-sm-12">
		<div class="row">
			<div class="col-xs-4">
          	    <label class="firstname">First Name :</label> 
          	</div>
		    <div class="col-xs-8">
		        <input type="text" name="firstname" id="firstname" placeholder="Enter your first name" class="form-control" required>
            </div>
		</div>
	</div>		
			
	<!--last name-->
    <div class="col-sm-12">
		<div class="row">
			<div class="col-xs-4">
          	    <label class="lastname">Last Name :</label> 
          	</div>
		    <div class="col-xs-8">
		        <input type="text" name="lastname" id="lastname" placeholder="Enter your last name" class="form-control" required>
            </div>
		</div>
	</div>
	
	<!--gender-->	 
	<div class="col-sm-12">
		<div class ="row">
            <div class="col-xs-4 ">
			    <label class="gender">Gender :</label>
			</div>
			<div class="col-xs-4 male">	 
				<input type="radio" name="gender"  id="gender" value="male" checked>Male</input>
			</div>
			<div class="col-xs-4 female">
				<input type="radio"  name="gender" id="gender" value="female">Female</input>
			</div>
		</div> 			
	</div>	
	
	<!--ic number-->	 
    <div class="col-sm-12">
		<div class="row">
			<div class="col-xs-4">
                <label class="ic">IC Number :</label>
            </div>
			<div class ="col-xs-8">	 
		        <input type="text" name="ic" id="ic" placeholder="Enter your IC number" class="form-control last" required>
            </div>
		</div>
	</div>	
	
	<!--phone number-->	 
    <div class="col-sm-12">
		<div class="row">
			<div class="col-xs-4">
                <label class="phone">Phone :</label>
            </div>
			<div class ="col-xs-8">	 
		        <input type="text" name="phone" id="phone" placeholder="Enter your phone number" class="form-control last" required>
            </div>
		</div>
	</div>
					   		
	<!--email-->
	<div class="col-sm-12">
		<div class="row">
			<div class="col-xs-4">
		        <label class="email" >Email :</label></div>
			<div class="col-xs-8"	>	 
			    <input type="text" name="email"  id="email" placeholder="Enter your email" class="form-control" required>
		    </div>
		</div>
	</div>		
			
	<!--address-->	 
    <div class="col-sm-12">
		<div class="row">
			<div class="col-xs-4">
                <label class="address">Address :</label>
            </div>
			<div class ="col-xs-8">	 
		        <textarea name="address" id="address" placeholder="Enter your address" class="form-control last" required></textarea>
            </div>
		</div>
	</div>
	
	<!--postcode-->	 
    <div class="col-sm-12">
		<div class="row">
			<div class="col-xs-4">
                <label class="postcode">Postcode :</label>
            </div>
			<div class ="col-xs-8">	 
		        <input type="text" name="postcode"  id="postcode" placeholder="Enter your postcode" class="form-control" required>
            </div>
		</div>
	</div>
			
	<!--city-->	 
    <div class="col-sm-12">
		<div class="row">
			<div class="col-xs-4">
                <label class="city">City :</label>
            </div>
			<div class ="col-xs-8">	 
		        <input type="text" name="city"  id="city" placeholder="Enter your city" class="form-control" required>
            </div>
		</div>
	</div>
			
	<!--state-->	 
    <div class="col-sm-12">
		<div class="row">
			<div class="col-xs-4">
                <label class="state"><b>State :</b></label>
            </div>
			<div class ="dropdown col-xs-8" id="state">	 
				<select name="state" id="inputzip " class="form-control">
					<option value="empty">-- Please select one --</option>
					<option value="Johor">Johor</option>
					<option value="Kedah">Kedah</option>
					<option value="Kelantan">Kelantan</option>
					<option value="Melaka">Melaka</option>
					<option value="Negeri Sembilan">Negeri Sembilan</option>
					<option value="Pahang">Pahang</option>
					<option value="Penang">Penang</option>
					<option value="Perak">Perak</option>
					<option value="Perlis">Perlis</option>
					<option value="Sabah">Sabah</option>
					<option value="Sarawak">Sarawak</option>
					<option value="Selangor">Selangor</option>
					<option value="Terengganu">Terengganu</option>
					<option value="Kuala Lumpur">Federal Territory of Kuala Lumpur</option>
					<option value="Labuan">Federal Territory of Labuan</option>
					<option value="Putrajaya">Federal Territory of Putrajaya</option>
				</select>
            </div>
		</div>
	</div>
	
	<!--submit button-->	  
	<div class="col-sm-12">
		<input type="submit" name="submit" value="Submit" class="btn btn-warning">
		<input type="reset" name="reset" value="Reset" class="btn btn-warning">
	</div>
	
	</div>
	</form>
	</div>
	
</body>	
</html>