<?php
include "connect.php" ;
$testing = true;

function test_input($data)
{   $data = trim($data); 
    $data = stripslashes($data); 
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{   
    $isbn     = test_input($_POST['isbn1']);
    $binding  = test_input($_POST['binding1']);
    $title        = test_input($_POST['title1']);
    $publish        = test_input($_POST['publish1']);
    $publisher        = test_input($_POST['publisher1']);
    $pages   = test_input($_POST['pages1']); 
    $genre      = test_input($_POST['genre1']);
    $price     = test_input($_POST['price1']);
    $qty       = test_input($_POST['qty1']);
    $author   = test_input($_POST['author1']);
    $description     = test_input($_POST['description1']);
    $subgenre = test_input($_POST['subgenre1']);
    $img = test_input($_POST['img1']);
   
}

    


if (mysqli_connect_errno())
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

else if($testing == true){
    echo "ISBN: ".$isbn."\n";
    echo "Binding: ".$binding."\n";
    echo "Title: ".$title."\n";
    echo "Published Date: ".$publish."\n";
    echo "Publisher: ".$publisher."\n";
    echo "Pages: ".$pages."\n";
    echo "Genre: ".$genre."\n";
    echo "Price: ".$price."\n";
    echo "Qty: ".$qty."\n";
    echo "Author: ".$author."\n";
    echo "Description: ".$description."\n";
    echo "Subgenre: ".$subgenre."\n";
    echo "Image File: ".$img."\n";
}

else  
{   
    //Insert values into tables
    
}




      

        

?>