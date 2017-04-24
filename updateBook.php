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
	    <script src="js/validateBook.js"></script>
        <script>
         
            </script>
    </head>
    
    <body>
        
         <?php require ('php/nav.php');
        
        include('php/connect.php');
        include('php/loadBook.php');?>
        
        <?php
        if(!(isset($_GET['id']))) {
       echo "<div id='wrapper'>
        <div id='updateForm'>
        <form id='form' method='post' >
            <input type='text'      name='id'           placeholder='ID'                  class='short'           id='id' readonly>
            <input type='text'      name='isbn'         placeholder='ISBN13'               class='medium'     id='isbn'>
            <select name='binding' class='medium' id='binding'>
                <option value=''>Binding</option>
                <option value='hardcover'>Hardcover</option>
                <option value='paperback'>Paperback</option>
            </select>
            <input type='text'      name='title'        placeholder='Title'                 class='long'            id='title'   ><br/> 
            <label>Published Date </label>
            <input type='date'      name='publish'                                               class='empty btn'           id='publish'>
            <input type='text'      name='publisher'           placeholder='Publisher'           class='medium'          id='publisher'> 
            <input type='text'      name='pages'           placeholder='Pages'        class='short'           id='pages'> <br/>
            
            <select id='genre' name='genre' class='medium' id='genre'>
        
            <option value='' >Genre</option>
            <option value='1'>Fiction</option>
            <option value='2'>Non Fiction</option>
            <option value='3'>Teen</option>
            <option value='4'>Kids</option>
        </select>
            <input type='text'      name='price'      placeholder='Price $'       class='medium'            id='price'>
            <input type='text'      name='qty'     placeholder='Qty'        class='short'            id='qty'><br/>
            
            
            <select id='author' name='author' class='long' id='author' multiple>
                <option value=''>Author</option>";
            
                $sql='SELECT * FROM author ORDER BY LastName';
                $result = $con->query($sql);
                while($rows = $result->fetch_assoc() ){
                    echo "<option value='".$rows['AuthorId']."'>".$rows['LastName'].", ".$rows['FirstName']." ".$rows['MiddleName']."</option>";
                }
           
            echo "</select>
            
            <textarea rows='6' cols='100%'    name='description'          placeholder='Description'              class='long'          id='description'></textarea><br/><br/>
            <label>Subgenre:</label><br/><br/>";
            
                $query='SELECT * FROM subgenre ORDER BY Name';
                $result = $con->query($query);
                while($row = $result->fetch_assoc() ){
                    echo "<div class='checkbox'><input type='checkbox' name='subgenre' value='".$row['SunGenreId']."' >".$row['Name']." </div>";
                }
            
            echo"
            <input type='file' name='img'class='long' id='img' >
            <label>Make Listing Available?</label>
           <select id='flag' name='flag' class='short'>
                <option value='0' selected>Yes</option>
                <option value='1'>No</option>
           </select>
            <input type='submit'    name='register' value='Submit'                        class='submit btn'          id='register' >  
            <input type='button'    name='clear'    value='Clear'                           class='clear btn'           id ='clear' > 
        
        </form>
        
            
            
        </div>
        </div>";
        }?>
        <?php include("php/footer.php");?>
        
    </body>
</html>