
<?php
  
    //Include database configuration file
    include('connect.php');
    
    
$id = $_POST['id'];
$user = $_POST['user'];
$netPrice = 0;

$books="SELECT * FROM orderDetails WHERE OrderId='".$id."'";
$book = $con->query($books);

$dateSql ="SELECT DateCreated date, Flag flag, DateCompleted complete FROM orders WHERE OrderId='".$id."'";
$date = $con->query($dateSql);
      
      

      

 
       
 echo"<h2>Order Details</h2>";
     while($placed = $date->fetch_assoc()){
         $orderDate = new DateTime($placed['date']);
   echo"<h4>". $orderDate->format('l, F d, Y')." </h4>";
         if($placed['flag']=='0'){
             echo "<p>Order Status: In Progress</p>";
         }
         
         else{
             echo "<p>Order Status: Complete</p>";
             echo "<p>Date Completed: ".$placed['complete']."</p>";
         }
     }
     while($rows = $book->fetch_assoc()){
         $details = "SELECT GROUP_CONCAT(DISTINCT a.FirstName, ' ', a.MiddleName, ' ', a.LastName SEPARATOR ', ') AS author, 
GROUP_CONCAT(DISTINCT s.Name SEPARATOR ', ') AS SubGenre, b.CoverImage img, b.Title title, b.Description des, b.PublishDate date,  
b.Binding binding, d.Price price, g.Name genre, o.DateCreated created, o.DateCompleted complete, d.ExpectedShippingDate ship, d.ActualShippingDate shipped, d.Flag delivered FROM orders o INNER JOIN orderdetails d ON o.OrderId = d.OrderId INNER JOIN books b ON d.BookId = b.Id INNER JOIN authorbook ab ON b.Id = ab.BookId INNER JOIN author a ON ab.AuthorId = a.AuthorId INNER JOIN subgenrebook sb ON sb.BookId = b.Id INNER JOIN subgenre s ON s.SunGenreId = sb.SubGenreId INNER JOIN genre g ON g.GenreId = b.GenreId
WHERE d.BookId = '".$rows['BookId']."' && o.OrderId ='".$id."'"; 
         
        $query = $con->query($details);
         if($query->num_rows > 0 && $query->num_rows != 'false'){ 
while($row = $query->fetch_assoc()) {
    
            
            
    echo"<div class='book'>";
                            echo "<table class='bookListing'>";
                        
                                echo"<tr>";
                                echo"<td class='coverImage'><img src='img/bookcovers/".$row['img']."' class='bookCover'></td>";
                                    echo"<td colspan='3' class='description'>";
                                        echo"<h4>".$row['title']."</h4>";
                                    echo"<h5>";
                                            
                                                echo $row['author'];
                                            
                                            
                                        echo"</h5>";
                                        echo"<p class='synopsis'>".$row['des']."</p></td>";
                                    
                            echo"</tr>";
                            echo"<tr class='info'>";
                                    $publishDate = new DateTime($row['date']);
                                    echo"<td colspan='2' class='date'>".$publishDate->format('M Y')."</td>";
                                echo"<td colspan='2' class='genre'>";
                                
                                 
                                                echo $row['genre']." >> ";
                                       
                                            
                            
                                                echo $row['SubGenre'];
                                      
                                            
                               $netPrice += $row['price'] ;
                                echo "</td>";
                    
                                echo"</tr>";
                            echo"<tr class='buy'>";
                                echo"<td colspan='3' class='price'>[".$row['binding']."] $".$row['price']."</td>";
                            
                                
                                echo"</tr>";
                                echo"</table>";
                            echo"</div>";
                echo"<p>";
            if($row['ship']!="0000-00-00" && $row['shipped'] == "0000-00-00"){
                echo"Book Status: Processing <br/>";
                $exShipDate = new DateTime($row['ship']);
                echo"Expected Shipping Date: ".$exShipDate->format('l, F d, Y')." <br/>";
                
            }
            
    else if($row['shipped'] != "0000-00-00" && $row['delivered'] == "0"){
        echo"Book Status: Shipped <br/>";
        $shipDate = new DateTime($row['shipped']);
                echo"Shipping Date: ".$shipDate->format('l, F d, Y')." <br/>";
                
    }
    
    else {
         echo"Book Status: Delivered <br/>";
                
    }
                
            echo"    
            </p>";
                            
                        echo"<hr>";
}
     }
     }

     //Total
     echo"
     <p class='total'>
            
            Subtotal: $".number_format($netPrice, 2)."<br/>
            Tax: ";
            $tax = round($netPrice*0.1 , 2) ;
            echo "$".number_format($tax, 2)."<br/>
            Shipping:";
            $shiping = 3.00;
            echo "$".number_format($shiping, 2)."<br/>
            </p>
            
            <p class='total bold' >
            Total:";
            $total = $netPrice + $shiping +$tax;
            echo "$".number_format($total, 2)."   
            </p>";
        

                
            ?>    

