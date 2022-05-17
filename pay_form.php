<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style1.css">
</head>
<?php

if(isset($_POST['submit']))
{
    include 'details.php';
}

?>
<body>
    
    <div><h1 >Payment Form </h1></div>
    <form method="POST">
        <p class="a">Your Name <br><input type="text" name="name" id="" placeholder="Enter Your Full Name" required></p>
        <p class="b">Your E-mail <br><input type="email" name="email" id="" placeholder="Enter Your e-mail Address" required></p>
        <p class="c">Address <br><input type="text" name="address" id="" placeholder="Write your address"  required></p>
        
        <h2 style="font-family: sans-serif; padding: 20px;">Card information: </h2>
        <p class="z">Card No.: <br><input type="number" name="cardnumber" id="" required placeholder="XXXX-XXXX-XXXX-XXXX"></p>
        <p class="y">Exp Date: <br><input type="date" name="expdate" id=""required ></p>
        <p class="w">CVV: <br><input type="password" name="cvv" id=""required placeholder="Exp: 123"></p>
        <p class="e"><br><input type="submit" name="submit" value="Pay Now"></p>
    

    </form>
</body>
</html>