<?php
    session_start();
    if (!isset($_SESSION['logged_user_id'])) {
        header('Location: login.php');
        exit;
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Poppins">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <div class="head1">
            <h1>Smart <span> Parking </span> System</h1>
        </div>
        <div class="body">
            <h1 class="head2">Parking Spaces</h1>
            <div class="parkingSpaces">
                <div>
                    <p>Parking space 1</p>
                </div>
                <div>
                    <p>Parking space 2</p>
                </div>
                <div>
                    <p>Parking space 3</p>
                </div>
                <div>
                    <p>Parking space 4</p>
                </div>
            </div>
        </div>
        <div class="bookin">
            <h1 class="head3">Book Now</h1>
            <div class="mpesa">
                <form  action="MpesaTest.php" method="POST">
                    <fieldset class="payment">
                       <label style="color:red;">Lipa Online</label>
                        <br>
                       <input class="input2" type="number" name="amount" placeholder="Enter Amount" style="margin-top: 30px;width:100% "></input>
                       <br><br>
                       <input type="number" type="number" name="phone_number" placeholder="enter Phone number" style = "width:100%"></input>
                       <br><br>
                       <button class="button" style="color: white;">
                       Make Payment Now
                       </button>
                    </fieldset>
                 </form>
            </div>
        </div>
    </div>
</body>
</html>