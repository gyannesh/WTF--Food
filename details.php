<?php
include 'conn.php';

    $name = mysqli_real_escape_string($conn, $_POST['name']) ;
    $email = mysqli_real_escape_string($conn , $_POST['email']) ;
    $address = mysqli_real_escape_string($conn, $_POST['address']) ;
    $cardnumber = mysqli_real_escape_string($conn , $_POST['cardnumber']) ;
    $expdate = mysqli_real_escape_string($conn, $_POST['expdate']) ;
    $cvv = mysqli_real_escape_string($conn, $_POST['cvv']) ;

    $insertquery = "insert into payment(name, email, address, cardnumber, expdate, cvv) VALUES('$name', '$email', '$address','$cardnumber','$expdate','$cvv')";            
    $iquery = mysqli_query($conn, $insertquery);
 
    if($iquery)
    {
        ?>
        <script>
        alert("Order Completed");
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
        alert("order not completed\n please check your card details");
        </script>
        <?php
    }
?>