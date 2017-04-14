<?php

function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}
include 'php/connect.php';
    
$email = $_POST['email1'];
$password = $_POST['password1'];
$fn = $_POST['fn1'];
$mi = $_POST['mi1'];
$ln = $_POST['ln1'];
$address = $_POST['address1'];
//$address2 = $_POST['address2'];
$city = $_POST['city1'];
$state = $_POST['state1'];
$zip = $_POST['zip1'];
$country = $_POST['country1'];
$phone = $_POST['phone1'];
$bd = $_POST['bd1'];

//$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
//if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
//echo "Invalid Email.......";

//else{

if(mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: ".mysqli_connect_error();
}
else{
    echo "Successful Connection";
    
        $sql="INSERT INTO users (FirstName, MiddleName, LastName, Address, City, State, Country, Postal, Phone, Email, Password) VALUES ('$fn', '$mi', '$ln', '$address', 
        '$city', '$state', '$country', '$zip', '$phone', '$email', '$password')";
    mysqli_query($con, $sql);
        //$num = mysqli_affected_rows($con);
    //echo $num;
    //debug_to_console( $num );

        if ( mysqli_query($sql) ) {
           
             echo "Success";
        } 
        
        else {
             echo "Error";
        }

       mysqli_close($conn);
    }

?>