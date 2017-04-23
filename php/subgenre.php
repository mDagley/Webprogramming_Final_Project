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
    $name           = test_input($_POST['name1']);
   
}

    


if (mysqli_connect_errno())
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

else if($testing == true){
    echo "Name: ".$name."\n";
    
}

else  
{   
    //Need to figure out multiple authors and subgenres
    $sql = "INSERT INTO subgenre (Name)
                VALUES('".$name."');";
    $con->query($sql);
    echo $sql;
    
}




      

        

?>