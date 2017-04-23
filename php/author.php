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
    $fn           = test_input($_POST['fn1']);
    $mi           = test_input($_POST['mi1']);
    $ln           = test_input($_POST['ln1']);
   
}

    


if (mysqli_connect_errno())
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

else if($testing == true){
    echo "First Name: ".$fn."\n";
    echo "Middle Name: ".$mi."\n";
    echo "Last Name: ".$ln."\n";
    
    
}

else  
{   
    //Need to figure out multiple authors and subgenres
    $sql = "INSERT INTO author (FirstName, MiddleName, LastName)
                VALUES('".$fn."', '".$mi."', '".$ln."');";
    $con->query($sql);
    echo $sql;
    
}




      

        

?>