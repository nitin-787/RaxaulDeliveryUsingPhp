<?php
$showAleart = false;
$showError = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $shopname = $_POST["shopname"];
    $fullname = $_POST["fullname"];
    $phonenumber = $_POST["phonenumber"];
    $address =  $_POST["address"];
    $pincode = $_POST["pincode"];
    $billamount = $_POST["billamount"];
    $datetime = $_POST["datetime"];

    $insertquery ="INSERT INTO `users_data`(`shopname`, `fullname`, `pincode`, `phonenumber`, `address`, `billamount`, `datetime`) VALUES ('$shopname', '$fullname', '$pincode', '$phonenumber', '$address', '$billamount', '$datetime')";
          $iquery = mysqli_query($conn, $insertquery);

          ?>
                <script>
                    alert("Your request has been successfully submited");
            
                </script>
                <?php

          
             }else{
                ?>
                <script>
                    alert("Not Sucessfull");
            
                </script>
                <?php
            }



?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Raxaulsehu Delivery</title>
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="author" content = "Nitin Sharma">
   </head>
<body>
  <div class="container">
    <div class="title">Pick UP</div>
    <div class="content">
      <form action="index.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Shop Name</span>
            <input type="text" placeholder="Enter your Shop name" name="shopname" id="shopname" required>
          </div>
          <div class="input-box">
            <span class="details">PinCode</span>
            <input type="text" placeholder="Enter Customer's Pincode" name="pincode" id="pincode" required>
          </div>
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" placeholder="Enter Customer's Name" name="fullname" id="fullname" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter Customer's Phone Number" name="phonenumber" id="phonenumber" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" placeholder="Enter Customer's address" name="address" id="address" required>
          </div>
          <div class="input-box">
            <span class="details">Bill amount</span>
            <input type="text" placeholder="Enter Customer's total bill amount" name="billamount" id="billamount" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" name="datetime">
          <input type="radio" name="gender" id="dot-2" name="datetime"> 
          <input type="radio" name="gender" id="dot-3" name="datetime">
          <span class="gender-title">Delivery options</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Item is ready for delivery</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Ready for delivery in 30 min</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">choose custom time</span>
            <input type="datetime-local" name="datetime">
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Submit" name="submit">
        </div>
      </form>
    </div>
  </div>

</body>
</html>