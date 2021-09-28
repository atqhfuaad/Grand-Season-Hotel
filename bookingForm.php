<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Booking Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/HRS/static/bootstrap.css" rel="stylesheet" id="bootstrap-css">
    <script src="/HRS/static/bootstrap.js"></script>
    <script src="/HRS/static/jquery.js"></script>
    <link rel="icon" href="/HRS/hotel_image/baseline_location_city_black_18dp.png">
</head>

<style>
    body {
        background-image: url(hotel_image/interior/interior_view2.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 100vh;
        overflow: auto;
    }

    .heading {
        text-decoration: bold;
        text-align: center;
        font-size: 30px;
        color: #F96;
        padding-top: 10px;
    }

    .container {
        font-family: Roboto, sans-serif;
        background-image: url(https://image.freepik.com/free-vector/dark-blue-blurred-background_1034-589.jpg);

        border-style: 1px solid grey;
        margin: 0 auto;
        text-align: center;
        opacity: 0.8;
        box-shadow: 1px 4px 5px 1px #eee;
        max-width: 600px;
        padding-top: 10px;
        height: 680px;
        margin-top: 40px;
        margin-bottom: 40px;
    }

    .roomtype {
        margin-left: 16px;
        font-family: sans-serif;
        font-size: 14px;
        color: white;
        margin-top: 20px;
    }

    #roomtype {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .numofguest {
        margin-left: 16px;
        font-family: sans-serif;
        font-size: 14px;
        color: white;
        margin-top: 20px;
    }

    #numofguest {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .checkindate {
        margin-left: 16px;
        font-family: sans-serif;
        font-size: 14px;
        color: white;
        margin-top: 20px;
    }

    #checkindate {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .checkoutdate {
        margin-left: 18px;
        font-family: sans-serif;
        font-size: 14px;
        color: white;
        margin-top: 20px;
    }

    #checkoutdate {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .paymenttype {
        color: white;
        font-family: sans-serif;
        font-size: 14px;
        margin-top: 13px;
        margin-left: 40px;
    }

    #paymenttype {
        margin-top: 8px;
        margin-bottom: 3px;
    }

    .creditcardno {
        color: white;
        font-family: sans-serif;
        font-size: 14px;
        margin-top: 15px;
        margin-left: 17px;
    }

    #creditcardno {
        margin-top: 15px;
        margin-bottom: 10px;
    }

    .cardholdername {
        font-size: 14px;
        font-family: sans-serif;
        margin-top: 20px;
        color: white;
        margin-left: 48px;

    }

    #cardholdername {
        margin-top: 18px;
        margin-bottom: 10px;
    }

    .expirydate {
        margin-left: 52px;
        font-family: sans-serif;
        font-size: 14px;
        color: white;
        margin-top: 20px;
    }

    #expirydate {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .cvc {
        margin-left: 35px;
        font-family: sans-serif;
        font-size: 14px;
        color: white;
        margin-top: 20px;
    }

    #cvc {
        margin-top: 10px;
        margin-bottom: 20px;
    }

    .sbutton {
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
        background: #5900a6;
        color: #fff;
        transition: background-color 1.15s ease-in-out, border-color 1.15s ease-in-out, box-shadow 1.15s ease-in-out;
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
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        padding: 12px 16px;
        z-index: 1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>

<body>
<div class="container">
    <form action="input_booking.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="submit" value="true">
        <!--form heading-->
        <header class="heading">Booking Form</header>
        <hr></hr>
        <!--form starting-->
        <div class="row">

            <!--roomtype-->
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-xs-4">
                        <label class="roomtype">Room Type :</label>
                    </div>
                    <div class="dropdown col-xs-8" id="state">
                        <select name="roomtype" id="inputzip " class="form-control">
                            <option value="empty">-- Please select one --</option>
                            <option value="Deluxe">Deluxe</option>
                            <option value="Twin Deluxe">Twin Deluxe</option>
                            <option value="Grand Deluxe">Grand Deluxe</option>
                            <option value="Premier Deluxe">Premier Deluxe</option>
                        </select>
                    </div>
                </div>
            </div>

            <!--num of guest-->
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-xs-4">
                        <label class="numofguest">Number of guest :</label>
                    </div>
                    <div class="col-xs-8">
                        <input type="number" name="numofguest" id="numofguest" placeholder="Enter number of guest"
                               class="form-control" required>
                    </div>
                </div>
            </div>

            <!--check in date-->
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-xs-4">
                        <label class="checkindate">Check in date :</label>
                    </div>
                    <div class="col-xs-8">
                        <input type="date" name="checkindate" id="checkindate" placeholder="Enter your check in date"
                               class="form-control" required>
                    </div>
                </div>
            </div>

            <!--check out date-->
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-xs-4">
                        <label class="checkoutdate">Check out date :</label>
                    </div>
                    <div class="col-xs-8">
                        <input type="date" name="checkoutdate" id="checkoutdate" placeholder="Enter your check out date"
                               class="form-control" required>
                    </div>
                </div>
            </div>

            <!--payment type-->
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-xs-4 ">
                        <label class="paymenttype">Payment Type :</label>
                    </div>
                    <div class="dropdown col-xs-8" id="paymenttype">
                        <select name="paymenttype" id="inputzip " class="form-control">
                            <option value="empty">-- Please select one --</option>
                            <option value="cash">Cash</option>
                            <option value="creditcard">Credit Card</option>
                        </select>
                    </div>
                </div>
            </div>

            <!--credit card number-->
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-xs-4">
                        <label class="creditcardno">Credit Card Number :</label>
                    </div>
                    <div class="col-xs-8">
                        <input type="text" name="creditcardno" id="creditcardno"
                               placeholder="Enter your credit card number" class="form-control last">
                    </div>
                </div>
            </div>

            <!--card holder name-->
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-xs-4">
                        <label class="cardholdername">Card Holder Name :</label>
                    </div>
                    <div class="col-xs-8">
                        <input type="text" name="cardholdername" id="cardholdername"
                               placeholder="Enter your card holder name" class="form-control last">
                    </div>
                </div>
            </div>

            <!--expiry date-->
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-xs-4">
                        <label class="expirydate">Expiry Date :</label></div>
                    <div class="col-xs-8">
                        <input type="text" name="expirydate" id="expirydate" placeholder="mm / yy" class="form-control">
                    </div>
                </div>
            </div>

            <!--cvc-->
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-xs-4">
                        <label class="cvc">Cvc :</label>
                    </div>
                    <div class="col-xs-8">
                        <input type="text" name="cvc" id="cvc" placeholder="Enter valid 3 or 4 digits cvc"
                               class="form-control last"></textarea>
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