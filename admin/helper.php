<?php
$CON = mysqli_connect("localhost", "root", "ROOT", "hrsdb");

function get_all_user_booking(){
    global $CON;

    $sql = "SELECT booking.booking_id, customer.cust_id, customer.firstname, customer.lastname, booking.roomtype, 
	               booking.numofguest, booking.checkindate, booking.checkoutdate, booking.paymenttype, booking.amount,booking.status 
            FROM booking INNER JOIN customer ON customer.cust_id = booking.cust_id
            ORDER BY booking.booking_id ASC";

    $payload = [];

    $retval = mysqli_query($CON, $sql);
    while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        array_push($payload,
            [
                "booking_id" => $row["booking_id"],
				"cust_id" => $row["cust_id"],
                "firstname" => $row["firstname"],
				"lastname" => $row["lastname"],
                "roomtype" => $row["roomtype"],
                "numofguest" => $row["numofguest"],
                "checkindate" => $row["checkindate"],
                "checkoutdate" => $row["checkoutdate"],
				"paymenttype" => $row["paymenttype"],
                "amount" => $row["amount"],
                "status" => $row["status"],
            ]);
    }

    return $payload;
}



function get_all_customer_info(){
    global $CON;

    $sql = "SELECT customer.cust_id, customer.firstname, customer.lastname, customer.gender, customer.ic, customer.phone, customer.email, 
				   customer.address, customer.postcode, customer.city, customer.state 
            FROM customer 
            ORDER BY customer.cust_id ASC";

    $payload = [];

    $retval = mysqli_query($CON, $sql);
	
    while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        array_push($payload,
            [
                "cust_id" => $row["cust_id"],
                "firstname" => $row["firstname"],
				"lastname" => $row["lastname"],
                "gender" => $row["gender"],
                "ic" => $row["ic"],
                "phone" => $row["phone"],
                "email" => $row["email"],
                "address" => $row["address"],
				"postcode" => $row["postcode"],
				"city" => $row["city"],
				"state" => $row["state"],
                
            ]);
    }

    return $payload;
}



function get_user_booking_condition($status){
    global $CON;
    $condition = "";

    switch ($status) {
        case "pending":
            $condition = "Pending";
            break;
        case "check-in":
            $condition = "Check-In";
            break;
        case "check-out":
            $condition = "Check-Out";
            break;
        case "cancelled":
            $condition = "Cancelled";
            break;
        case "confirmed":
            $condition = "Confirmed";
            break;
    }
	
	$sql = "SELECT booking.booking_id, customer.cust_id, customer.firstname, customer.lastname, booking.roomtype, 
	               booking.numofguest, booking.checkindate, booking.checkoutdate, booking.paymenttype, booking.amount,booking.status 
            FROM booking INNER JOIN customer ON customer.cust_id = booking.cust_id
            WHERE booking.status = '$condition' 
			ORDER BY booking.booking_id, booking.status ASC";

    $payload = [];

    $retval = mysqli_query($CON, $sql);
    
	while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        array_push($payload,
            [
                "booking_id" => $row["booking_id"],
				"cust_id" => $row["cust_id"],
                "firstname" => $row["firstname"],
				"lastname" => $row["lastname"],
                "roomtype" => $row["roomtype"],
                "numofguest" => $row["numofguest"],
                "checkindate" => $row["checkindate"],
                "checkoutdate" => $row["checkoutdate"],
				"paymenttype" => $row["paymenttype"],
                "amount" => $row["amount"],
                "status" => $row["status"],
            ]);
    }

    return $payload;
}



function change_book_status($book_id, $status){
    global $CON;
    
	switch ($status) {
        case "confirmed":
            $change = "Confirmed";
            break;
        case "cancelled":
            $change = "Cancelled";
            break;
        case "check-in":
            $change = "Check-In";
            break;
        case "check-out":
            $change = "Check-Out";
            break;
    }

    $sql = "UPDATE booking SET status = '$change' WHERE booking_id = $book_id";
    $CON->query($sql);
}

?>