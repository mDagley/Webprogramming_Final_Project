<?php
include "php/connect.php" ;


function test_input($data)
{   $data = trim($data); 
    $data = stripslashes($data); 
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{   
    $email     = test_input($_POST['email']);
    $password  = test_input($_POST['password']);
    $fn        = test_input($_POST['fn']);
    $mi        = test_input($_POST['mi']);
    $ln        = test_input($_POST['ln']);
    $address   = test_input($_POST['address']) .test_input($_POST['address2']) ;
    $city      = test_input($_POST['city']);
    $state     = test_input($_POST['state']);
    $zip       = test_input($_POST['zip']);
    $country   = test_input($_POST['country']);
    $phone     = test_input($_POST['phone']);
   
}

    $password   = password_hash ($password ,PASSWORD_DEFAULT );


if (mysqli_connect_errno())
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

else  
{   
    $sql="INSERT INTO `users`(`FirstName`, `MiddleName`, `LastName`, `Address`, `City`, `State`, `Country`, `Postal`, `Phone`, `Email`, `Password`)
          VALUES ( '$fn', '$mi', '$ln', '$address','$city', '$state', '$country', '$zip', '$phone', '$email', '$password')";
    
    $result = mysqli_query($con, $sql);
    session_start();
    $_SESSION['User'] = $email;
    header('Location:index.php');
}




      

        

?>