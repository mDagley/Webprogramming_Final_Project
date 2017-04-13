<html>
    <head></head>
    <body>
<?php
        $testing = false;
$con=mysqli_connect('localhost','root','root','book_store_3');
if(mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: ".mysqli_connect_error();
}
        else if($testing==true){

        $query = "SELECT * FROM books";
        $result=mysqli_query($con,$query);
            
        
echo "<table>
<tr>
<th>Id</th>
<th>Title</th>
<th>ISBN 13</th>
<th>Publish Date</th>
<th>Publisher</th>
<th>Binding</th>
<th>Description</th>
<th>Qty</th>
<th>Cover Image</th>
<th>Price</th>
<th>Pages</th>
<th>Flag</th>
<th>Genre ID</th>



</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Id'] . "</td>";
    echo "<td>" . $row['Title'] . "</td>";
    echo "<td>" . $row['ISBN13'] . "</td>";
    echo "<td>" . $row['PublishDate'] . "</td>";
    echo "<td>" . $row['Publisher'] . "</td>";
    echo "<td>" . $row['Binding'] . "</td>";
    echo "<td>" . $row['Description'] . "</td>";
    echo "<td>" . $row['Qty'] . "</td>";
    echo "<td>" . $row['CoverImage'] . "</td>";
    echo "<td>" . $row['Price'] . "</td>";
    echo "<td>" . $row['Pages'] . "</td>";
    echo "<td>" . $row['Flag'] . "</td>";
    echo "<td>" . $row['GenreId'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
        }
        
else{
    
    echo "Database Connected";
}
?>
    </body>
</html>