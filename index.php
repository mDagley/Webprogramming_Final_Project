<html lang="en">
    <head>
        <meta name="description" content="Online Book Store" />
        <meta name="keywords" content="book, store, shop, books, novels, book store" />
        <meta charset="utf-8" />
        <title>Online Book Store</title>
        <link href="index.css" rel="stylesheet" type="text/css">
        <link href="favicon.ico" rel="shortcut icon" >
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
     <script type="text/javascript">
    function loadBooks(){
        var xmlhttp;
        var releaseDate = document.getElementById('releaseDate').value;
        var genre = document.getElementById('genre').value;
        var price = document.getElementById('price').value;
        if (window.XMLHttpRequest){
            xmlhttp = new XMLHttpRequest();
        }
        else{
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
                document.getElementById("listing").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "php/filter.php?releaseDate="+releaseDate+"&genre="+genre+"&price="+price, true);
        xmlhttp.send();
    }
</script>
    </head>
    
    <body>
        <?php require ('php/connect.php'); ?>
        <?php require ('php/nav.php'); ?>
        
        <aside>
            <form id="form" action="#">
            <input type="text" class="searchbox">
            <input type="button" value="Search" class="searchbutton"><br/>
            
            <select id="releaseDate" name="releaseDate" class="filter" onchange="loadBooks()">
        
            <option value="">------------Release Date------------</option>
            <option value="30">Last 30 Days</option>
            <option value="60">Last 60 Days</option>
            <option value="90">Last 90 Days</option>
            <option value="365">Last Year</option>
            <option value="0">Coming Soon</option>
        
            </select>
            
            <select id="genre" name="genre" class="filter" onchange="loadBooks()">
        
            <option value="">----------------Genre----------------</option>
            <option value="1">Fiction</option>
            <option value="2">NonFiction</option>
            <option value="3">Teen</option>
            <option value="4">Kids</option>
        </select>
            
            <select id="price" name="price" class="filter" onchange="loadBooks()">
        
            <option value="">----------------Price----------------</option>
            <option value="5">Under $5</option>
            <option value="5-10">$5-$10</option>
            <option value="10-15">$10-$15</option>
            <option value="15-25">$15-$25</option>
            <option value="25">Over $25</option>
        
        </select><br/>
        
            </form>
            
        </aside>
        
        <main id="listing">
         <?php
        
            $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books";
            $result=mysqli_query($con,$books);
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
            ?>
    
        </main>
        
        
    </body>
</html>
