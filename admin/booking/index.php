<?php require_once("../helper.php") ?>
<?php

if (empty($_POST)) {
    $book_data = get_all_user_booking();
} 
elseif (isset($_POST["change"])) {
    change_book_status((int)$_POST["book_id"], $_POST["change"]);
    $book_data = get_user_booking_condition($_POST["change"]);
} 
elseif ($_POST["status"] == "pending") {
    $book_data = get_user_booking_condition("pending");
} 
elseif ($_POST["status"] == "check-in") {
    $book_data = get_user_booking_condition("check-in");
} 
elseif ($_POST["status"] == "check-out") {
    $book_data = get_user_booking_condition("check-out");
} 
elseif ($_POST["status"] == "cancelled") {
    $book_data = get_user_booking_condition("cancelled");
} 
elseif ($_POST["status"] == "confirmed") {
    $book_data = get_user_booking_condition("confirmed");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Booking Management</title>
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
    <h1>Booking Management</h1>
    <div class="row">
        <div class="col-sm">
            <br><input class="form-control" id="inputSearch" placeholder="Search by" onkeyup="search()"
                       style="font-size:20px">
        </div>
        <div class="col-sm">
            <br>
			<select class="form-control" id="filterBook">
                <option>Booking ID</option>
                <option>Customer ID</option>
				<option>Name</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10">
            <br>
            <a class="btn btn-primary" role="button" href="/HRS/admin/booking/" style="font-size:17px">All</a>
            <a class="btn btn-primary" role="button"
			   onclick="post('/HRS/admin/booking/',{status:'pending'})" style="font-size:17px">Pending</a>
            <a class="btn btn-primary" role="button" onclick="post('/HRS/admin/booking/',{status:'confirmed'})"
               style="font-size:17px">Confirmed</a>
            <a class="btn btn-primary" role="button" onclick="post('/HRS/admin/booking/',{status:'check-in'})"
               style="font-size:17px">Check In</a>
            <a class="btn btn-primary" role="button" onclick="post('/HRS/admin/booking/',{status:'check-out'})"
               style="font-size:17px">Check Out</a>
            <a class="btn btn-primary" role="button" onclick="post('/HRS/admin/booking/',{status:'cancelled'})"
               style="font-size:17px">Cancelled</a>
        </div>
    </div>
    <br>
	
    <table class="table table-striped table-sm" id="bookTable" border=1px style="font-size:20px">
        <thead>
        <tr>
			<th scope="col">No.</th>
            <th scope="col">Booking ID</th>
            <th scope="col">Customer ID</th>
            <th scope="col">Name</th>
            <th scope="col">Room Type</th>
            <th scope="col">Total Guest</th>
            <th scope="col">Check-In Date</th>
            <th scope="col">Check-Out Date</th>
            <th scope="col">Payment Type</th>
            <th scope="col">Amount</th>
            <th scope="col">Status</th>

        </tr>
        </thead>
		
        <tbody>
		<?php $bil=1?>
        <?php foreach ($book_data as $item): ?>

            <tr>
				<td><?= $bil ?></td>
                <td><?= $item["booking_id"] ?></td>
                <td><?= $item["cust_id"] ?></td>
                <td><?= $item["firstname"] ?> <?= $item["lastname"] ?></td>
                <td><?= $item["roomtype"] ?></td>
                <td><?= $item["numofguest"] ?></td>
                <td><?= $item["checkindate"] ?></td>
                <td><?= $item["checkoutdate"] ?></td>
                <td><?= $item["paymenttype"] ?></td>
                <td><?= $item["amount"] ?></td>
                <td>
                    <?php if ($item["status"] == "Check-Out" || $item["status"] == "Cancelled"): ?>
                        <?= $item["status"] ?>
                    <?php else: ?>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                    id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= $item["status"] ?>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <!--<a class="dropdown-item" href="#">Action</a>-->
                                <?php if ($item["status"] == "Pending"): ?>
                                    <a class="dropdown-item"
                                       onclick="post('/HRS/admin/booking/',{change:'confirmed',book_id:'<?= $item["booking_id"] ?>'})">Confirmed</a>
                                    <a class="dropdown-item"
                                       onclick="post('/HRS/admin/booking/',{change:'cancelled',book_id:'<?= $item["booking_id"] ?>'})">Cancel</a>

                                <?php elseif ($item["status"] == "Confirmed"): ?>
                                    <a class="dropdown-item"
                                       onclick="post('/HRS/admin/booking/',{change:'check-in',book_id:'<?= $item["booking_id"] ?>'})">Check-In</a>
                                    <a class="dropdown-item"
                                       onclick="post('/HRS/admin/booking/',{change:'cancelled',book_id:'<?= $item["booking_id"] ?>'})">Cancel</a>
                                <?php elseif ($item["status"] == "Check-In"): ?>
                                    <a class="dropdown-item"
                                       onclick="post('/HRS/admin/booking/',{change:'check-out',book_id:'<?= $item["booking_id"] ?>'})">Check-Out</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </td>
            </tr>
		<?php $bil++?>
        <?php endforeach; ?>
		
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

    function currentIndex() {
        let current = document.getElementById("filterBook");
        let selected_value = current.options[current.selectedIndex].value;

        switch (selected_value) {
            case "Booking ID":
                return 1;
            case "Customer ID":
                return 2;
			case "Name":
                return 3;	
        }
    }

    function search() {
		
        var input, filter, table, tr, td, i;
        input = document.getElementById("inputSearch");
        filter = input.value.toUpperCase();
        table = document.getElementById("bookTable");
        tr = table.getElementsByTagName("tr");

        if (input.value === "") {
            for (i = 0; i < tr.length; i++) {
                tr[i].style.display = "";
            }
            return;
        }


        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[currentIndex()];

            if (td) {
                if (td.innerHTML.toUpperCase() == filter) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>

</html>

