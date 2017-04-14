<?php
 
$email  = "";
$password = "";

function test_input($data)
{   $data = trim($data); 
    $data = stripslashes($data); 
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{   $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
}






// Database connection 
$con = mysqli_connect("localhost","root","root","book_store_3");
if (mysqli_connect_errno())
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

else
{
    $query = "SELECT * FROM users where Email='$email' ";
    
    //$query = "SELECT * FROM users" ;
    $result = mysqli_query($con, $query);
    if ($result->num_rows == 1)
    {   // setting the session variable .
        session_start();
        
        while($row = mysqli_fetch_array($result)) 
        {
           if(password_verify( $password, $row['Password']))
           {// echo "matched";
           $_SESSION['User'] = $row['Email'];
           }

            else
            echo "nope!";
           
        }
        

         
    }
      
    header('Location:index.php');
}




?>