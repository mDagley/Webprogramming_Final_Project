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
        <script src="js/delete.js"></script>
        <script src="js/edit.js"></script>
     <script>
    function searchFilter(page_num){
        page_num = page_num?page_num:0;
        var keywords = $('#keywords').val();
        var releaseDate = $('#releaseDate').val();
        var genre = $('#genre').val();
        var price = $('#price').val();
        var admin = $('#admin').val();
        $.ajax({
            type: 'POST',
            url: 'php/filter.php',
            data: 'page='+page_num+'&keywords='+keywords+'&releaseDate='+releaseDate+'&genre='+genre+'&price='+price+'&admin='+admin,
            
            success: function (html) {
                $('#listing').html(html);
                
            }
        });
    }
</script>
    </head>
    
    <body>
       
        <?php include ('php/nav.php'); 
        ?>
    
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
                <?php
                echo "<input type='hidden' name='admin' id='admin' value='".$admin."'>";
               
        ?>
            </form>
            
        </aside>
        
        <main id="listing">
         <?php
            
           include ('php/connect.php');
            include ('php/Pagination.php'); 
        //Records per page
           $limit = 3;
            
            if($admin===true){
           $queryNum = $con->query("SELECT COUNT(*) as postNum FROM books");
            }
            
            else{
                $queryNum = $con->query("SELECT COUNT(*) as postNum FROM books WHERE Flag='0'");
            }
    $resultNum = $queryNum->fetch_assoc();
    $rowCount = $resultNum['postNum'];
            
//initialize pagination class
    $pagConfig = array(
        'totalRows' => $rowCount,
        'perPage' => $limit,
        'link_func' => 'searchFilter'
    );
    $pagination =  new Pagination($pagConfig);

            if($admin===true){
            
            $query = $con->query("SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books ORDER BY Title LIMIT $limit");
            }
            else {
                $query = $con->query("SELECT Id, Title, ISBN13, PublishDate, Publisher, Binding, Description, Qty, CoverImage, Price, Pages, Flag, GenreId FROM books WHERE Flag='0' ORDER BY Title LIMIT $limit");
            }
            
             if($query->num_rows > 0){ 
        

            
      include('php/printBooks.php');
        
         echo $pagination->createLinks(); 
     } ?>
        
          


            <br/>
    
        </main>
    
    
        </div>
        <?php include("php/footer.php");?>
        
        
    </body>
</html>
