<?php
include "connect.php" ;
$testing = false;

function test_input($data)
{   $data = trim($data); 
    $data = stripslashes($data); 
    $data = htmlspecialchars($data, ENT_QUOTES);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{   
    $id           = test_input($_POST['id1']);
   
}

    


if (mysqli_connect_errno())
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

else if($testing == true){
    echo "Id: ".$id."\n";
    
}

else  
{   
    //Need to figure out multiple authors and subgenres
    $sql = "UPDATE books SET Flag='1' WHERE Id='".$id."'";
    $con->query($sql);
    echo $sql;
    
}




    header('Location:../index.php');   

        

?>