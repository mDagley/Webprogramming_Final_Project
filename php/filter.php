<?php
$date = intval($_GET['releaseDate']);
$genre = intval($_GET['genre']);
$price = strval($_GET['price']);

var $low = NULL;
var $high = NULL;



switch($price) {
    case "5":
        $high = 5;
        break;
    case "5-10":
        $low = 5;
        $high = 10;
        break;
    case "10-15":
        $low = 10;
        $high = 25;
        break;
    case "15-25":
        $low = 25;
        $high = 50;
        break;
    case "25":
        $low = 50;
        break;
    default
        $high=NULL;
        $low=NULL;
        break;
}

include 'connect.php';

//NO VALUES SELECTED
if(($_GET['releaseDate']==="") && ($_GET['genre']==="") && ($low==="") && ($high===""))
{
    $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books";
}

//ALL VALUES SELECTED
if(!($_GET['releaseDate']==="") && !($_GET['genre']==="") && !($low==="") && !($high===""))
{
    
    if($date === 0){
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate > CURDATE() AND Price BETWEEN".$low." AND ".$high." AND GenreId = '".$genre."'";
    }
    
    else{
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate BETWEEN CURDATE() - INTERVAL".$date." DAY AND CURDATE()) AND Price BETWEEN".$low." AND ".$high." AND GenreId = '".$genre."'";
    }
}

//ONLY RELEASE DATE
if(!($_GET['releaseDate']==="") && ($_GET['genre']==="") && ($low==="") && ($high==="")){
    if($date === 0){
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate > CURDATE()";
    }
    
    else{
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate BETWEEN CURDATE() - INTERVAL".$date." DAY AND CURDATE()";
    }
}

//ONLY HIGH && LOW PRICE
if(($_GET['releaseDate']==="") && ($_GET['genre']==="") && !($low==="") && !($high==="")){
    $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE Price BETWEEN".$low." AND ".$high;
}

//ONLY HIGH PRICE
if(($_GET['releaseDate']==="") && ($_GET['genre']==="") && ($low==="") && !($high==="")){
    $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE Price < ".$high;
}

//ONLY LOW PRICE
if(($_GET['releaseDate']==="") && ($_GET['genre']==="") && !($low==="") && ($high==="")){
    $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE Price > ".$low;
}

//ONLY GENRE
if(($_GET['releaseDate']==="") && !($_GET['genre']==="") && ($low==="") && ($high==="")){
    $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE GenreId = '".$genre."'";
}

//RELEASE DATE && GENRE
if(!($_GET['releaseDate']==="") && !($_GET['genre']==="") && ($low==="") && ($high==="")){
    if($date === 0){
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate > CURDATE() AND GenreId = '".$genre."'";
    }
    
    else{
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate BETWEEN CURDATE() - INTERVAL".$date." DAY AND CURDATE() AND GenreId = '".$genre."'";
    }

//RELEASE DATE && HIGH PRICE
    if(!($_GET['releaseDate']==="") && ($_GET['genre']==="") && ($low==="") && !($high==="")){
    if($date === 0){
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate > CURDATE() AND Price <".$high;
    }
    
    else{
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate BETWEEN CURDATE() AND DATE_SUB(CURDATE(), INTERVAL".$date." DAY) AND Price < ".$high;
    }

//RELEASE DATE && LOW PRICE
        if(!($_GET['releaseDate']==="") && ($_GET['genre']==="") && !($low==="") && ($high==="")){
    if($date === 0){
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate > CURDATE() AND Price >".$low;
    }
    
    else{
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate BETWEEN CURDATE() AND DATE_SUB(CURDATE(), INTERVAL".$date." DAY) AND Price > ".$low;
    }

//RELEASE DATE && HIGH PRICE && LOW PRICE
            if(!($_GET['releaseDate']==="") && ($_GET['genre']==="") && !($low==="") && !($high==="")){
    if($date === 0){
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate > CURDATE() AND Price BETWEEN".$low." AND ".$high;
    }
    
    else{
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate BETWEEN CURDATE() AND DATE_SUB(CURDATE(), INTERVAL".$date." DAY) AND Price BETWEEN".$low." AND ".$high;
    }

//GENRE && HIGH PRICE
if(($_GET['releaseDate']==="") && !($_GET['genre']==="") && ($low==="") && !($high==="")){
    $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE Genre = '".$genre."' AND Price < ".$high;
}

//GENRE && LOW PRICE
if(($_GET['releaseDate']==="") && !($_GET['genre']==="") && !($low==="") && ($high==="")){
    $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE Genre = '".$genre."' AND Price > ".$low;
}

//GENRE && HIGH PRICE && LOW PRICE
if(($_GET['releaseDate']==="") && !($_GET['genre']==="") && !($low==="") && !($high==="")){
    $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE Genre = '".$genre."' AND Price BETWEEN".$low." AND ".$high;
}

$result = mysqli_query($con,$books);

while($row = mysqli_fetch_array($result)) {
                $bookId = $row['Id'];
            $author= " SELECT   
        GROUP_CONCAT(c.FirstName, ' ', c.MiddleName, ' ', c.LastName SEPARATOR ', ') author
FROM    books a 
        INNER JOIN authorbook b
            ON a.Id = b.BookId 
        INNER JOIN author c
            ON b.AuthorId = c.AuthorId WHERE a.Id=$bookId";
            $authors=mysqli_query($con,$author);
                
                $genre= " SELECT   
        Name
FROM    genre a 
        INNER JOIN books b
            ON a.GenreId = b.GenreId 
        WHERE b.Id=$bookId";
            $genres=mysqli_query($con,$genre);
                
                $subgenre= " SELECT   
        GROUP_CONCAT(c.Name SEPARATOR ', ') subgenre
FROM    books a 
        INNER JOIN subgenrebook b
            ON a.Id = b.BookId 
        INNER JOIN subgenre c
            ON b.SubGenreId = c.SunGenreId WHERE a.Id=$bookId";
            $subgenres=mysqli_query($con,$subgenre);
            echo"<div class='book'>";
            echo "<table>";
          
                echo"<tr>";
                   echo"<td class='coverImage'><img src='img/bookcovers/".$row['CoverImage']."' class='bookCover'></td>";
                    echo"<td colspan='3' class='description'>";
                        echo"<h4>".$row['Title']."</h4>";
                       echo"<h5>";
                            while($r = mysqli_fetch_array($authors)){
                                echo $r['0'];
                            }
                            
                           echo"</h5>";
                        echo"<p class='synopsis'>".$row['Description']."</p></td>";
                    
               echo"</tr>";
               echo"<tr class='info'>";
                    echo"<td colspan='2' class='date'>".$row['PublishDate']."</td>";
                   echo"<td colspan='2' class='genre'>";
                
                    while($rw = mysqli_fetch_array($genres)){
                                echo $rw['Name']." >> ";
                        //echo"Genre!";
                            }
                $i=0;
                    while($s = mysqli_fetch_array($subgenres)){
                                echo $s[$i];
                        $i= $i+1;
                        //echo"Genre!";
                            }
                
                echo "</td>";
     
                echo"</tr>";
               echo"<tr class='buy'>";
                echo"<td colspan='3' class='price'>$".$row['Price']."</td>";
               echo"<td class='addButton'><input type='button' value='+ CART' class='Add'></td>";
                
                echo"</tr>";
                echo"</table>";
               echo"</div>";
            
           echo"<hr>";
            }
                mysqli_close($con);
                
?>