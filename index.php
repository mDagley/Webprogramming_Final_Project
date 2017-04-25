<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta name="description" content="Online Book Store" />
        <meta name="keywords" content="book, store, shop, books, novels, book store" />
        <meta charset="utf-8" />
        <title>Online Book Store</title>
        <link href="index.css" rel="stylesheet" type="text/css">
        <link href="favicon.ico" rel="shortcut icon" >
        <script src="js/jquery-3.1.1.min.js"></script>
     <script>
    function searchFilter(page_num){
        page_num = page_num?page_num:0;
        var keywords = $('#keywords').val();
        var releaseDate = $('#releaseDate').val();
        var genre = $('#genre').val();
        var price = $('#price').val();
        $.ajax({
            type: 'POST',
            url: 'php/filter.php',
            data: 'page='+page_num+'&keywords='+keywords+'&releaseDate='+releaseDate+'&genre='+genre+'&price='+price,
            
            success: function (html) {
                $('#listing').html(html);
                
            }
        });
    }

    $('document').ready(function () { 
        // $('.add').click(function(){
        //     console.log("clicked !!");
        // });


    });

    function btnClicked(bookId)
    {
         console.log(" in console bookid is : "+ bookId );
           $.ajax({
            type: 'POST',
            url: 'cookieSetter.php',  // cookieUpdater.php
            data: 'book_id='+bookId ,
            
            success: function (res) {
                console.log("this is from php : "+  res);
                window.location.reload(true);
            }
        });


       
  }

</script>
    </head>
    
    <body>
       
        <?php include ('php/nav.php'); ?>
    
<div id="wrapper">
        
        <aside>
            <form id="form" action="#">
            <input type="text" class="searchbox" id="keywords" onkeyup="searchFilter()" placeholder="Search..." class="search"/>
           
            
            <select id="releaseDate" name="releaseDate" class="filter" onchange="searchFilter()">
        
                <option value="" class="categoryHeader">Release Date</option>
            <option value="30">Last 30 Days</option>
            <option value="60">Last 60 Days</option>
            <option value="90">Last 90 Days</option>
            <option value="365">Last Year</option>
            <option value="0">Coming Soon</option>
        
            </select>
            
            <select id="genre" name="genre" class="filter" onchange="searchFilter()">
        
            <option value="" class="categoryHeader">Genre</option>
            <option value="1">Fiction</option>
            <option value="2">NonFiction</option>
            <option value="3">Teen</option>
            <option value="4">Kids</option>
        </select>
            
            <select id="price" name="price" class="filter" onchange="searchFilter()">
        
            <option value="" class="categoryFilter">Price</option>
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
            
           include ('php/connect.php');
            include ('php/Pagination.php'); 
        //Records per page
           $limit = 3;

           $queryNum = $con->query("SELECT COUNT(*) as postNum FROM books");
    $resultNum = $queryNum->fetch_assoc();
    $rowCount = $resultNum['postNum'];
            
//initialize pagination class
    $pagConfig = array(
        'totalRows' => $rowCount,
        'perPage' => $limit,
        'link_func' => 'searchFilter'
    );
    $pagination =  new Pagination($pagConfig);

            
            $query = $con->query("SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books ORDER BY Title LIMIT $limit");
           
            
             if($query->num_rows > 0){ ?>
        
<?php
            
            while($row = $query->fetch_assoc()) {
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
            echo "<table class='bookListing'>";
          
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
                echo"<td colspan='3' class='price'>[".$row['Binding']."] $".$row['Price']."</td>";
               echo"<td class='addButton'><input type='button' value='+ CART' class='add' onclick='btnClicked(".$bookId.")' ></td>";
                
                echo"</tr>";
                echo"</table>";
               echo"</div>";
            
           echo"<hr>";
             }
            ?>
            
      
        
        <?php echo $pagination->createLinks(); ?>
    <?php } ?>
        
          


            <br/>
    
        </main>
    
    
        </div>
        <?php include("php/footer.php");?>
        
        
    </body>
</html>
