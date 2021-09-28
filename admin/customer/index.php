<?php require_once("../helper.php") ?>

<?php
if (empty($_POST)) {
    $customer_data = get_all_customer_info();
}	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Customer Information</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require_once("../../static.php") ?>
	<link rel="icon" href="../../hotel_image/baseline_location_city_black_18dp.png">
</head>

<body>

<div class="sidenav">
    <a href="../../home.php" style="font-size:29px">GRAND SEASONS HOTEL</a><br><br>
	<a href="../index.php">Admin Page</a>
</div>

<div class="main">
    <h1>Customer Information</h1>

    <div class="row">
        <div class="col-sm-12">
		<form action="index.php" method="post">
			<br><input type="text" name="searchValue" placeholder="Search by" style="font-size:21px"><br>
			<a class="btn btn-primary" role="button" href="/HRS/admin/customer/">All</a>
			<input type="submit" class="btn btn-primary" name="searchByIDButton" value="Customer ID">
			<input type="submit" class="btn btn-primary" name="searchByICButton" value="IC Number">
			<input type="submit" class="btn btn-primary" name="searchByPhoneButton" value="Phone Number">
			<input type="submit" class="btn btn-primary" name="searchByFNameButton" value="First Name">
		</form>
		</div>
    </div><br>
	
    <table class="table table-striped table-sm" border=1px style="font-size:20px">
        <thead>
			<tr>
				<th scope="col" style="text-align:center">No.</th>
				<th scope="col" style="text-align:center">Customer ID</th>
				<th scope="col" style="text-align:center">Name</th>
				<th scope="col" style="text-align:center">Gender</th>
				<th scope="col" style="text-align:center">IC Number</th>
				<th scope="col" style="text-align:center">Phone Number</th>
				<th scope="col" style="text-align:center">Email</th>
				<th scope="col" style="text-align:center">Address</th>
				<th scope="col" style="text-align:center">Postcode</th>
				<th scope="col" style="text-align:center">City</th>
				<th scope="col" style="text-align:center">State</th>
			</tr>
        </thead>
		
        <tbody>
		<!--search customer-->
		<?php
		$con = mysqli_connect("localhost","root","ROOT","hrsdb");
		
		function getPost(){
			$posts = array();
			$posts[0] = $_POST['searchValue'];

			return $posts;
		}
		
		if(!$con){
			echo "ERROR";
		}
		
		//search by customer id
		if(isset($_POST['searchByIDButton'])){
			$data = getPost();

			$qry = mysqli_query($con,"SELECT * from customer where cust_id = $data[0] ");
			
			if(mysqli_num_rows($qry)>0){
				$bil=1;	
				while($row = mysqli_fetch_array($qry)){
					echo "<tr>
							<td>$bil</td>
							<td>$row[cust_id]</td>
							<td>$row[firstname] $row[lastname]</td>
							<td>$row[gender]</td>
							<td>$row[ic]</td>
							<td>$row[phone]</td>
							<td>$row[email]</td>
							<td>$row[address]</td>
							<td>$row[postcode]</td>
							<td>$row[city]</td>
							<td>$row[state]</td>    
						  </tr>";
				$bil++;		  
				}
			}
			else{
				echo 'No Data For This Customer ID';
			}
		}
		
		//search by ic number
		else if(isset($_POST['searchByICButton'])){
			$data = getPost();
			$qry = mysqli_query($con,"SELECT * from customer where ic = $data[0] ");
			
			if(mysqli_num_rows($qry)>0){
				$bil=1;	
				while($row = mysqli_fetch_array($qry)){
					echo "<tr>
							<td>$bil</td>
							<td>$row[cust_id]</td>
							<td>$row[firstname] $row[lastname]</td>
							<td>$row[gender]</td>
							<td>$row[ic]</td>
							<td>$row[phone]</td>
							<td>$row[email]</td>
							<td>$row[address]</td>
							<td>$row[postcode]</td>
							<td>$row[city]</td>
							<td>$row[state]</td>    
						  </tr>";
				$bil++;		  
				}
			}
			else{
				echo 'No Data For This IC Number';
			}
		}
		
		//search by phone number
		else if(isset($_POST['searchByPhoneButton'])){
			$data = getPost();
			$qry = mysqli_query($con,"SELECT * from customer where phone = $data[0] ");
			
			if(mysqli_num_rows($qry)>0){
				$bil=1;	
				while($row = mysqli_fetch_array($qry)){
					echo "<tr>
							<td>$bil</td>
							<td>$row[cust_id]</td>
							<td>$row[firstname] $row[lastname]</td>
							<td>$row[gender]</td>
							<td>$row[ic]</td>
							<td>$row[phone]</td>
							<td>$row[email]</td>
							<td>$row[address]</td>
							<td>$row[postcode]</td>
							<td>$row[city]</td>
							<td>$row[state]</td>    
						  </tr>";
				$bil++;		  
				}
			}
			else{
				echo 'No Data For This Phone Number';
			}
		}
		
		//search by first name
		else if(isset($_POST['searchByFNameButton'])){
			$data = getPost();
			$qry = mysqli_query($con,"SELECT * from customer where firstname LIKE '%$data[0]%' ");
			
			if(mysqli_num_rows($qry)>0){
				$bil=1;	
				while($row = mysqli_fetch_array($qry)){
					echo "<tr>
							<td>$bil</td>
							<td>$row[cust_id]</td>
							<td>$row[firstname] $row[lastname]</td>
							<td>$row[gender]</td>
							<td>$row[ic]</td>
							<td>$row[phone]</td>
							<td>$row[email]</td>
							<td>$row[address]</td>
							<td>$row[postcode]</td>
							<td>$row[city]</td>
							<td>$row[state]</td>    
						  </tr>";
				$bil++;		  
				}
			}
			else{
				echo 'No Data For This Name';
			}
		}

		else{
			$qry = mysqli_query($con,"SELECT * from customer");
		
			if(mysqli_num_rows($qry)>0){
				$bil=1;	
				while($row = mysqli_fetch_array($qry)){
					echo "<tr>
							<td>$bil</td>
							<td>$row[cust_id]</td>
							<td>$row[firstname] $row[lastname]</td>
							<td>$row[gender]</td>
							<td>$row[ic]</td>
							<td>$row[phone]</td>
							<td>$row[email]</td>
							<td>$row[address]</td>
							<td>$row[postcode]</td>
							<td>$row[city]</td>
							<td>$row[state]</td>    
						  </tr>";
				$bil++;		  
				}
			}
		}
		?>
		
        </tbody>
    </table>
</div>
</body>

<script>
    function post(path, params, method) {
        method = method || "post"; // Set method to post by default if not specified.

        // The rest of this code assumes you are not using a library.
        // It can be made less wordy if you use one.
        var form = document.createElement("form");
        form.setAttribute("method", method);
        form.setAttribute("action", path);

        for (var key in params) {
            if (params.hasOwnProperty(key)) {
                var hiddenField = document.createElement("input");
                hiddenField.setAttribute("type", "hidden");
                hiddenField.setAttribute("name", key);
                hiddenField.setAttribute("value", params[key]);

                form.appendChild(hiddenField);
            }
        }

        document.body.appendChild(form);
        form.submit();
    }
</script>

</html>
