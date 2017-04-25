<script src="js/delete.js"></script>
<script src="js/edit.js"></script>
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
       

<?php include('printBooks.php');?>
     
     
        <?php } ?>
        
        <?php echo $pagination->createLinks(); ?>
<?php }  ?>
                
                

