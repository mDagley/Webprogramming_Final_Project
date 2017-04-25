
<?php
  
    //Include database configuration file
    include('connect.php');
    
    
$id = $_POST['id'];
$user = $_POST['user'];



$details = "SELECT GROUP_CONCAT(DISTINCT a.FirstName, a.MiddleName, a.LastName) AS author, 
GROUP_CONCAT(DISTINCT s.Name) AS SubGenre, b.CoverImage, b.Description, b.ISBN13, b.PublishDate, b.Publisher, 
b.Binding, b.Pages, d.Price, g.Name, o.DateCreated, o.DateCompleted, d.ExpectedShippingDate, d.ActualShippingDate FROM orders o INNER JOIN orderdetails d ON o.OrderId = d.OrderId INNER JOIN books b ON d.BookId = b.Id INNER JOIN authorbook ab ON b.Id = ab.BookId INNER JOIN author a ON ab.AuthorId = a.AuthorId INNER JOIN subgenrebook sb ON sb.BookId = b.Id INNER JOIN subgenre s ON s.SunGenreId = sb.SubGenreId INNER JOIN genre g ON g.GenreId = b.GenreId
WHERE o.OrderId = '".$id."' ";
   



      
      
$query = $con->query($details);
      

 if($query->num_rows > 0 && $query->num_rows != 'false'){ 
       
 
while($row = $query->fetch_assoc()) {
    echo"<div class='book'>";
                            echo "<table class='bookListing'>";
                        
                                echo"<tr>";
                                echo"<td class='coverImage'><img src='img/bookcovers/".$row['b.CoverImage']."' class='bookCover'></td>";
                                    echo"<td colspan='3' class='description'>";
                                        echo"<h4>".$row['b.Title']."</h4>";
                                    echo"<h5>";
                                            
                                                echo $row['author'];
                                            
                                            
                                        echo"</h5>";
                                        echo"<p class='synopsis'>".$row['b.Description']."</p></td>";
                                    
                            echo"</tr>";
                            echo"<tr class='info'>";
                                    echo"<td colspan='2' class='date'>".$row['b.PublishDate']."</td>";
                                echo"<td colspan='2' class='genre'>";
                                
                                 
                                                echo $row['g.Name']." >> ";
                                       
                                            
                            
                                                echo $row['s.Name'];
                                      
                                            
                               $netPrice += $row['d.Price'] ;
                                echo "</td>";
                    
                                echo"</tr>";
                            echo"<tr class='buy'>";
                                echo"<td colspan='3' class='price'>[".$row['b.Binding']."] $".$row['d.Price']."</td>";
                            
                                
                                echo"</tr>";
                                echo"</table>";
                            echo"</div>";
                            
                        echo"<hr>";
}
        }

                
            ?>    

