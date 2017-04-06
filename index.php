<html lang="en">
    <head>
        <meta name="description" content="Online Book Store" />
        <meta name="keywords" content="book, store, shop, books, novels, book store" />
        <meta charset="utf-8" />
        <title>Online Book Store</title>
        <link href="index.css" rel="stylesheet" type="text/css">
        <link href="favicon.ico" rel="shortcut icon" >
    </head>
    
    <body>
        <?php include 'php/connect.php'; 
        
        
           
        ?>
        <header>
            <img src="img/banner.jpg" class="bannerimage">
        </header>
        <nav>
            <ul> 
                <li><a href="index.html">Home</a></li>
                <li class="right"><a href="cart.html">Cart (2)</a></li>
                <li class="right"><a href="account.html">Account</a></li>
                <li class="right"><a href="login.html">Login</a></li>
                <li class="right"><a href="register.html">Register</a></li>
            </ul>
        </nav>
        
        <aside>
            <input type="text" class="searchbox">
            <input type="button" value="Search" class="searchbutton"><br/>
            
            <select id="releaseDate" name="releaseDate" class="filter">
        
            <option value="">------------Release Date------------</option>
            <option value="2005">Last 30 Days</option>
            <option value="2006">Last 60 Days</option>
            <option value="2007">Last 90 Days</option>
            <option value="2008">Last Year</option>
            <option value="2009">Coming Soon</option>
        
            </select>
            
            <select id="genre" name="genre" class="filter">
        
            <option value="">----------------Genre----------------</option>
            <option value="2005">Adult</option>
            <option value="2006">Young Adult</option>
            <option value="2007">Fiction</option>
            <option value="2008">Non-Fiction</option>
            <option value="2009">Poetry</option>
        
        </select>
            
            <select id="price" name="price" class="filter">
        
            <option value="">----------------Price----------------</option>
            <option value="2005">Under $5</option>
            <option value="2006">$5-$10</option>
            <option value="2007">$10-$25</option>
            <option value="2008">$25-$50</option>
            <option value="2009">Over $50</option>
        
        </select>
            
        </aside>
        
        <main>
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
            echo"<div class='book'>";
            echo "<table>";
          
                echo"<tr>";
                   echo"<td class='coverImage'><img src='img/bookcovers/".$row['CoverImage']."' class='bookCover'></td>";
                    echo"<td colspan='3' class='description'>";
                        echo"<h4>".$row['Title']."</h4>";
                       echo"<h5>";
                            while($r = mysqli_fetch_array($authors)){
                                echo $r[0];
                            }
                            
                           echo"</h5>";
                        echo"<p class='synopsis'>".$row['Description']."</p></td>";
                    
               echo"</tr>";
               echo"<tr class='info'>";
                    echo"<td colspan='2' class='date'>".$row['PublishDate']."</td>";
                   echo"<td colspan='2' class='genre'>";
                
                    while($rw = mysqli_fetch_array($genres)){
                                echo $rw['Name'];
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
