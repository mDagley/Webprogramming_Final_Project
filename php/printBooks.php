<?php
    
     if($admin==true){
                echo "<a href='updateBook.php'><input type='button' value='&#10010; NEW BOOK' class='new left'></a><a href='newAuthor.php'><input type='button' value='&#10010; NEW AUTHOR' class='new'></a><a href='newSubgenre.php'><input type='button' value='&#10010; NEW SUBGENRE' class='new right'></a>";
            }
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
                    $publishDate = new DateTime($row['PublishDate']);
                    echo"<td colspan='2' class='date'>".$publishDate->format('F Y')."</td>";
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
                   echo "<td class='addButton'><input type='button' value='Edit' class='edit add' name='".$row['Id']."' onclick='editBook(this.name)'></td>";
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
               echo"<td class='addButton'><input type='button' value='&#10010; CART' class='add' onclick='btnClicked(".$bookId.")'></td>";
                }
                echo"</tr>";
                echo"</table>";
               echo"</div>";
            
           echo"<hr>";
            }
     
     
          ?>