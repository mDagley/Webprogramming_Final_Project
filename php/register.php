<?php
include "connect.php" ;


function test_input($data)
{   $data = trim($data); 
    $data = stripslashes($data); 
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{   
    $email     = test_input($_POST['email1']);
    $password  = test_input($_POST['password1']);
    $fn        = test_input($_POST['fn1']);
    $mi        = test_input($_POST['mi1']);
    $ln        = test_input($_POST['ln1']);
    $address   = test_input($_POST['address1']) .test_input($_POST['address21']) ;
    $city      = test_input($_POST['city1']);
    $state     = test_input($_POST['state1']);
    $zip       = test_input($_POST['zip1']);
    $country   = test_input($_POST['country1']);
    $phone     = test_input($_POST['phone1']);
   
}

    $password   = password_hash ($password ,PASSWORD_DEFAULT );
    echo $password;

if (mysqli_connect_errno())
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

else  
{   
    $sql="INSERT INTO `users`(`FirstName`, `MiddleName`, `LastName`, `Address`, `City`, `State`, `Country`, `Postal`, `Phone`, `Email`, `Password`)
          VALUES ( '$fn', '$mi', '$ln', '$address','$city', '$state', '$country', '$zip', '$phone', '$email', '$password')";
    
    $result = mysqli_query($con, $sql);
    session_start();
    $_SESSION['User'] = $email;
    header('Location:../index.php');
}




      

        

?>