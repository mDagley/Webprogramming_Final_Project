<html lang="en">
    <head>
        <meta name="description" content="Online Book Store" />
        <meta name="keywords" content="book, store, shop, books, novels, book store" />
        <meta charset="utf-8" />
        <title>Online Book Store</title>
        <link href="index.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <script src="js/jquery-3.1.1.min.js"></script>
	    <script src="js/validateAuthor.js"></script>
        <script>
         
            </script>
    </head>
    
    <body>
        <?php require ('php/nav.php'); ?>
        <div id="wrapper">
        <div id="updateForm">
        <form id="form" method="post" >
            <label>New Author</label><br/>
            <input type="text"      name="fn"           placeholder="*First Name"           class="medium"          id="fn"> 
            <input type="text"      name="mi"           placeholder="Middle Initial"        class="short"           id="mi"> 
            <input type="text"      name="ln"           placeholder="*Last Name"            class="medium"          id="ln">
            
            <input type="submit"    name="register" value="Submit"                        class="submit btn"          id="register" >  
            <input type="button"    name="clear"    value="Clear"                           class="clear btn"           id ="clear" > 
        
        </form>
        </div>
        </div>
        <?php include("php/footer.php");?>
       
    </body>
</html>