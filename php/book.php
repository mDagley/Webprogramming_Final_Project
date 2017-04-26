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
    $isbn           = test_input($_POST['isbn1']);
    $binding        = test_input($_POST['binding1']);
    $title          = test_input($_POST['title1']);
    $publish        = test_input($_POST['publish1']);
    $publisher      = test_input($_POST['publisher1']);
    $pages          = test_input($_POST['pages1']); 
    $genre          = test_input($_POST['genre1']);
    $price          = test_input($_POST['price1']);
    $qty            = test_input($_POST['qty1']);
    $author         = test_input($_POST['author1']);
    $authors        = explode(", ",$author);
    $description    = test_input($_POST['description1']);
    $subgenre       = test_input($_POST['subgenre1']);
    $subgenres      = explode(", ",$subgenre);
    $img            =test_input($_POST['img1']);
    $id             =test_input($_POST['id1']);
    $flag           =test_input($_POST['flag1']);
    
   
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
    echo "ID: ".$id;
    echo "Flag: ".$flag;
    
}

else  
{   
    if($id!=''){
        
        if($img==''){
            $booksql = "UPDATE books SET ISBN13='".$isbn."', Binding='".$binding."', Title='".$title."', PublishDate='".$publish."', Publisher='".$publisher."', 
                        Pages='".$pages."', GenreId='".$genre."', Price='".$price."', Qty='".$qty."', Description='".$description."', Flag='".$flag."'
                        WHERE Id='".$id."'";
        }
        
        else{
            $booksql = "UPDATE books SET ISBN13='".$isbn."', Binding='".$binding."', Title='".$title."', PublishDate='".$publish."', Publisher='".$publisher."', 
                        Pages='".$pages."', GenreId='".$genre."', Price='".$price."', Qty='".$qty."', Description='".$description."', Flag='".$flag."', CoverImage='".$img."'
                        WHERE Id='".$id."'";
        }
        
        $con->query($booksql);
        echo $booksql;

        
        $clearSql = "DELETE FROM authorbook WHERE BookId='".$id."'";
        $con->query($clearSql);
        echo $clearSql;

        foreach($authors as $a){
        $authorsql ="INSERT INTO authorbook (BookId, AuthorId)
                    VALUES(".$id.", ".$a.");";
        $con->query($authorsql);
            echo $authorsql;
        }

        $clearSql2 = "DELETE FROM subgenrebook WHERE BookId='".$id."'";
        $con->query($clearSql2);
        echo $clearSql2;
        
        foreach($subgenres as $s){
        $subgenresql= "INSERT INTO subgenrebook (BookId, SubGenreId)
                    VALUES(".$id.", ".$s.");";
        $con->query($subgenresql);
            echo $subgenresql;
        
        }
    }
        
    else{
        $booksql = "INSERT INTO books (ISBN13, Binding, Title, PublishDate, Publisher, Pages, GenreId, Price, Qty, Description, CoverImage, Flag)
                    VALUES('".$isbn."', '".$binding."', '".$title."', '".$publish."', '".$publisher."', '".$pages."', '".$genre."', '".$price."', '".$qty."', '".$description."',
                    '".$img."', '".$flag."');";
        $con->query($booksql);
        echo $booksql;

        $id = "SELECT Id FROM books WHERE ISBN13='".$isbn."'";
        $result=mysqli_query($con, $id);
        $book_id = mysqli_fetch_row($result);
        echo $id;
        echo $book_id[0];

        foreach($authors as $a){
        $authorsql ="INSERT INTO authorbook (BookId, AuthorId)
                    VALUES(".$book_id[0].", ".$a.");";
        $con->query($authorsql);
            echo $authorsql;
        }

        foreach($subgenres as $s){
        $subgenresql= "INSERT INTO subgenrebook (BookId, SubGenreId)
                    VALUES(".$book_id[0].", ".$s.");";
        $con->query($subgenresql);
            echo $subgenresql;
        }
    }
}




      

        

?>