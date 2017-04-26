<?php
if(isset($_GET['id'])) {
$id = $_GET['id'];


$book = ("SELECT * FROM books WHERE Id='".$id."'");
            
$books = mysqli_query($con, $book);       
        $author= " SELECT   
        * 
FROM    books a 
        INNER JOIN authorbook b
            ON a.Id = b.BookId 
        INNER JOIN author c
            ON b.AuthorId = c.AuthorId WHERE a.Id=$id";
            $authors=mysqli_query($con,$author);
            $selAuthors = array();
            while($row = mysqli_fetch_assoc($authors)){
                
                $selAuthors[] = $row['AuthorId'];
                
            }
                
                $genre= " SELECT   
        Name
FROM    genre a 
        INNER JOIN books b
            ON a.GenreId = b.GenreId 
        WHERE b.Id='".$id."'";
            $genres=mysqli_query($con,$genre);
                
                $subgenre= " SELECT   
        *
FROM    subgenrebook WHERE BookId='".$id."'";
            $subgenres=mysqli_query($con,$subgenre);
            $selSubgenres = array();
            while($rows = mysqli_fetch_assoc($subgenres)){
                
                $selSubgenres[] = $rows['SubGenreId'];
                
            }
                

$row = $books->fetch_assoc();
$isbn = $row['ISBN13'];
$binding = $row['Binding'];
$title = $row['Title'];
$date = $row['PublishDate'];
$publisher = $row['Publisher'];
$pages = $row['Pages'];
$genre = $row['GenreId'];
$price = $row['Price'];
$qty = $row['Qty'];
$description = $row['Description'];
$img = $row['CoverImage'];
$flag = $row['Flag'];
    
    
//Print Form
    
echo "<div id='wrapper'>
        <div id='updateForm'>
        <form id='form' method='post' >
            <input type='text'      name='id'           placeholder='ID'        value='".$id."'            class='short'           id='id' readonly>
            <input type='text'      name='isbn'         placeholder='ISBN13'     value='".$isbn."'           class='medium'     id='isbn'>
            <select name='binding' class='medium' id='binding'>
                <option value=''>Binding</option>
                <option value='Hardcover'"; if($binding == 'Hardcover'){ echo" selected='selected'";} echo">Hardcover</option>
                <option value='Paperback'"; if($binding == 'Paperback'){ echo" selected='selected'";} echo">Paperback</option>
            </select>
            <input type='text'      name='title'        placeholder='Title'   value='".$title."'              class='long'            id='title'   ><br/> 
            <label>Published Date </label>
            <input type='date'      name='publish'           value='".$date."'                                    class='empty btn'           id='publish'>
            <input type='text'      name='publisher'           placeholder='Publisher'   value='".$publisher."'        class='medium'          id='publisher'> 
            <input type='text'      name='pages'           placeholder='Pages'     value='".$pages."'   class='short'           id='pages'> <br/>
            
            <select id='genre' name='genre' class='medium' id='genre'>
        
            <option value='' >Genre</option>
            <option value='1'"; if($genre == '1'){ echo" selected='selected'";} echo">Fiction</option>
            <option value='2'"; if($genre == '2'){ echo" selected='selected'";} echo">Non Fiction</option>
            <option value='3'"; if($genre == '3'){ echo" selected='selected'";} echo">Teen</option>
            <option value='4'"; if($genre == '4'){ echo" selected='selected'";} echo">Kids</option>
        </select>
            <input type='text'      name='price'      placeholder='Price $'   value='".$price."'    class='medium'            id='price'>
            <input type='text'      name='qty'     placeholder='Qty'        class='short'   value='".$qty."'         id='qty'><br/>
            
            
            <select id='author' name='author' class='long' multiple>
                <option value=''>Author</option>";
            
                $sql='SELECT * FROM author ORDER BY LastName';
                $result = $con->query($sql);
                
                
    
                while($allAuthors = $result->fetch_assoc() ){
                    $sel = '';
                    if(in_array($allAuthors['AuthorId'], $selAuthors)) {
                        $sel = ' selected="selected " ';
                    }
                    echo "<option value='".$allAuthors['AuthorId']."'".$sel.">".$allAuthors['LastName'].", ".$allAuthors['FirstName']." ".$allAuthors['MiddleName']."</option>";
                }
                
           
            echo "</select>
            
            <textarea rows='6' cols='100%'    name='description'         placeholder='Description'              class='long'          id='description'>";
                echo $description;
            echo "</textarea><br/><br/>
            <label>Subgenre:</label><br/><br/>";
            
                $query='SELECT * FROM subgenre ORDER BY Name';
                $results = $con->query($query);
    echo"<div class='wrapper'>";
                while($allSubgenres = $results->fetch_assoc() ){
                    $chk = '';
                    if(in_array($allSubgenres['SunGenreId'], $selSubgenres)) {
                        $chk = ' checked " ';
                    }
                    echo "<div class='checkbox'><input type='checkbox' name='subgenre' value='".$allSubgenres['SunGenreId']."' ".$chk.">".$allSubgenres['Name']." </div>";
                }
            
            echo"
            <div class='clearfix'></div>
           </div>
            <div class='thumbImage'><img src='img/bookcovers/".$img."' class='thumbImage'><br/><br/><label>".$img."</label></div>
            <br/>
            <input type='file' name='img'class='long' id='img' >
            <label>Make Listing Available?</label>
           <select id='flag' name='flag' class='short'>";
           if($flag=='0'){
               echo"<option value='0' selected>Yes</option>
           <option value='1'>No</option>";
           }
    
            else{
                echo"<option value='0'>Yes</option>
           <option value='1' selected>No</option>";
            }
           
           echo"</select>
            <input type='submit'    name='register' value='Submit'                        class='submit btn'          id='register' >  
            <input type='button'    name='clear'    value='Clear'                           class='clear btn'           id ='clear' > 
        
        </form>
        </div>
        </div>";
   
}

            
?>