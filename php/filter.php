<script src="js/delete.js"></script>
<?php
  if(isset($_POST['page'])){
    //Include pagination class file
    include('Pagination.php');
    
    //Include database configuration file
    include('connect.php');
    
    $start = !empty($_POST['page'])?$_POST['page']:0;
    $limit = 3;

$whereSql = $limitSql = '';
$date = $_POST['releaseDate'];
$genre = $_POST['genre'];
$price = $_POST['price'];
$keywords = $_POST['keywords'];
$low = -1;
$high = -1;
$limitSql = " LIMIT ".$start.", ".$limit." ";
$orderSql = " ORDER BY Title";
$admin = $_POST['admin'];
    
if(!empty($keywords)){
    $whereSql = " AND Title LIKE '%".$keywords."%' OR Description LIKE '%".$keywords."%' ";
    
}

$flagSql = " AND Flag = '0'";
      

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
        $high = 15;
        break;
    case "15-25":
        $low = 15;
        $high = 25;
        break;
    case "25":
        $low = 25;
        break;
    default:
        $low = -1;
        $high = -1;
   
}




//NO VALUES SELECTED
if(($_POST['releaseDate']==="") && ($_POST['genre']==="") && ($low===-1) && ($high===-1))
{
   
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE 1 ";
    
}

//ALL VALUES SELECTED
if(!($_POST['releaseDate']==="") && !($_POST['genre']==="") && !($low===-1) && !($high===-1))
{
    
    if($date === "0"){
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate > CURDATE() AND Price BETWEEN ".$low." AND ".$high." AND GenreId = '".$genre."' ";
    }
    
    else{
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate BETWEEN CURDATE() - INTERVAL ".$date." DAY AND CURDATE() AND Price BETWEEN ".$low." AND ".$high." AND GenreId = '".$genre."' ";
    }
}

//ONLY RELEASE DATE
if(!($_POST['releaseDate']==="") && ($_POST['genre']==="") && ($low===-1) && ($high===-1)){
    if($date === "0"){
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate > CURDATE() ";
    }
    
    else{
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate BETWEEN CURDATE() - INTERVAL ".$date." DAY AND CURDATE() ";
    }
}

//ONLY HIGH && LOW PRICE
if(($_POST['releaseDate']==="") && ($_POST['genre']==="") && !($low===-1) && !($high===-1)){
    $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE Price BETWEEN ".$low." AND ".$high." ";
}

//ONLY HIGH PRICE
if(($_POST['releaseDate']==="") && ($_POST['genre']==="") && ($low===-1) && !($high===-1)){
    $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE Price < ".$high." ";
}

//ONLY LOW PRICE
if(($_POST['releaseDate']==="") && ($_POST['genre']==="") && !($low===-1) && ($high===-1)){
    $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE Price > ".$low." ";
}

//ONLY GENRE
if(($_POST['releaseDate']==="") && !($_POST['genre']==="") && ($low===-1) && ($high===-1)){
    $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE GenreId = '".$genre."' ";
}

//RELEASE DATE && GENRE
if(!($date==="") && !($genre==="") && ($low===-1) && ($high===-1)){
    if($date === 0){
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate > CURDATE() AND GenreId = '".$genre."' ";
    }
    
    else{
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate BETWEEN CURDATE() - INTERVAL ".$date." DAY AND CURDATE() AND GenreId = '".$genre."' ";
    }
}

//RELEASE DATE && HIGH PRICE
    if(!($_POST['releaseDate']==="") && ($_POST['genre']==="") && ($low===-1) && !($high===-1)){
    if($date === "0"){
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate > CURDATE() AND Price <".$high." ";
    }
    
    else{
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate BETWEEN CURDATE() - INTERVAL ".$date." DAY AND CURDATE() AND Price < ".$high." ";
    }
    }

//RELEASE DATE && LOW PRICE
        if(!($_POST['releaseDate']==="") && ($_POST['genre']==="") && !($low===-1) && ($high===-1)){
    if($date === "0"){
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate > CURDATE() AND Price > ".$low." ";
    }
    
    else{
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate BETWEEN CURDATE() - INTERVAL ".$date." DAY AND CURDATE() AND Price > ".$low." ";
    }
        }

//RELEASE DATE && HIGH PRICE && LOW PRICE
            if(!($_POST['releaseDate']==="") && ($_POST['genre']==="") && !($low===-1) && !($high===-1)){
    if($date === "0"){
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate > CURDATE() AND Price BETWEEN ".$low." AND ".$high." ";
    }
    
    else{
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate BETWEEN CURDATE() - INTERVAL ".$date." DAY AND CURDATE() AND Price BETWEEN ".$low." AND ".$high. " ";
    }
            }

//GENRE && HIGH PRICE
if(($_POST['releaseDate']==="") && !($_POST['genre']==="") && ($low===-1) && !($high===-1)){
    $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE GenreId = '".$genre."' AND Price < ".$high." ";
}

//GENRE && LOW PRICE
if(($_POST['releaseDate']==="") && !($_POST['genre']==="") && !($low===-1) && ($high===-1)){
    $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE GenreId = '".$genre."' AND Price > ".$low." ";
}

//GENRE && HIGH PRICE && LOW PRICE
if(($_POST['releaseDate']==="") && !($_POST['genre']==="") && !($low===-1) && !($high===-1)){
    $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE GenreId = '".$genre."' AND Price BETWEEN ".$low." AND ".$high." ";
}

//RELEASE DATE && HIGH PRICE && GENRE
    if(!($_POST['releaseDate']==="") && !($_POST['genre']==="") && ($low===-1) && !($high===-1)){
    if($date === "0"){
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate > CURDATE() AND Price <".$high." AND GenreId = '".$genre."' ";
    }
    
    else{
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate BETWEEN CURDATE() - INTERVAL ".$date." DAY AND CURDATE() AND Price < ".$high." AND GenreId = '".$genre."' ";
    }
    }

//RELEASE DATE && LOW PRICE && GENRE
        if(!($_POST['releaseDate']==="") && !($_POST['genre']==="") && !($low===-1) && ($high===-1)){
    if($date === "0"){
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate > CURDATE() AND Price >".$low." AND GenreId = '".$genre."' ";
    }
    
    else{
        $books = "SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE PublishDate BETWEEN CURDATE() - INTERVAL ".$date." DAY AND CURDATE() AND Price > ".$low." AND GenreId = '".$genre."' ";
    }
        }
        
      if($admin==true){
           $queryNum = $con->query($books.$whereSql.$orderSql);
      }

      else{
          $queryNum = $con->query($books.$whereSql.$flagSql.$orderSql);
      }
 
      if($queryNum != 'false'){
          
         $rowCount = $queryNum->num_rows;
          //$rowCount = 1;
      }

      else{
          echo '<script language="javascript">';
          echo 'alert($books.$whereSwl.$orderSql)';
          echo '</script>';
          
          $rowCount = 0;
      }

 //initialize pagination class
    $pagConfig = array(
        'currentPage' => $start,
        'totalRows' => $rowCount,
        'perPage' => $limit,
        'link_func' => 'searchFilter'
    );
    $pagination =  new Pagination($pagConfig);
      
      if($admin==true){
          $query = $con->query($books.$whereSql.$orderSql.$limitSql);
      }
      
      else{
          $query = $con->query($books.$whereSql.$flagSql.$orderSql.$limitSql);
      }

 if($query->num_rows > 0 && $query->num_rows != 'false'){ ?>
       

<?php
    
     if($admin==='1'){
                echo "<a href='updateBook.php'><input type='button' value='&#10010; NEW BOOK' class='new left'></a><a href='newAuthor.php'><input type='button' value='&#10010; NEW AUTHOR' class='new'></a><a href='newSubgenre.php'><input type='button' value='&#10010; NEW SUBGENRE' class='new right'></a>";
            }
while($row = $query->fetch_assoc()) {
                $bookId = $row['Id'];
            $author= " SELECT   
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
                if($row['Flag']=='1'){
                    echo"<h4>".$row['Title']." [Deleted]</h4>";
                }
                else{
                        echo"<h4>".$row['Title']."</h4>";
                }
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
                if($admin==true){
                    echo "<td class='addButton'><input type='button' value='Edit' class='edit add'></td>";
                    
                    echo "<td class='addButton'><input type='button' value='Delete' class='delete add' id='deleteButton' name='".$row['Id']."' onclick='deleteBook(this.name)'></td>";
                   echo "<td class='price'>[".$row['Binding']."] $".$row['Price']."</td>";
               }
                else{
                echo"<td colspan='3' class='price'>[".$row['Binding']."] $".$row['Price']."</td>";
                }
                if($row['Qty']=='0' || $row['Flag']=='1'){
                    echo "<td class='addButton'><input type='button' value='Out of Stock' class='add' disabled></td>";
                }
                else{
               echo"<td class='addButton'><input type='button' value='&#10010; CART' class='add'></td>";
                }
                echo"</tr>";
                echo"</table>";
               echo"</div>";
            
           echo"<hr>";
            }?>
     
     
        <?php } ?>
        
        <?php echo $pagination->createLinks(); ?>
<?php }  ?>
                
                

