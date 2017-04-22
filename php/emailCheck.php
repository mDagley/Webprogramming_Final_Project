<?php
 
 $email = "";
 echo query_search_with_php( $email );  // echo : so that it can send back the data as response .
function test_input($data)
{
	$data = trim($data); 
	$data = stripslashes($data); 
	$data = htmlspecialchars($data);
	return $data;
}
function query_search_with_php( $email )
 {
if ($_SERVER["REQUEST_METHOD"] == "POST")
	$email = test_input($_POST["email"]);
// Database connection 
include('connect.php');
      $query = "SELECT * FROM users where Email='$email' "; 
      $result = mysqli_query($con, $query);
			if ($result->num_rows > 0) 
               return "Email already exits" ; 
                  
			else 
			   return "Email does not exits";
                 
	  
}
?>