<?php
session_start();
$cookie_name = "book_id";
 $data = json_decode($_COOKIE[$cookie_name]);
     include ('connect.php'); 
        $query =  $con->query("SELECT *  FROM books ORDER BY Title");
         if($query->num_rows > 0)
         {
             //Add order to orders table
                 $getUser = "SELECT Email, UserId FROM users WHERE Email='".$_SESSION['User']."'";
                $result = mysqli_query($con, $getUser);
                 while($r = $result->fetch_assoc()){
                     $user = $r['UserId'];
                 }
             $sql="INSERT INTO orders (DateCreated, UserId) VALUES (CURDATE(), '".$user."');";
                 $con->query($sql);
                 $orderId = $con->insert_id;
             while($row = $query->fetch_assoc()) 
             {

                 if(in_array($row['Id'], $data) )
                 {
                     echo $row['Id'];
                     //add book to order details table
                     $detailSql= "INSERT INTO orderdetails (ExpectedShippingDate, Price, OrderId, Price) VALUES (DATE_ADD(CURDATE(), INTERVAL 2 DAY), '".$row['Price']."', '".$orderId."', '".$row['Id']."');";
                     $con->query($detailSql);
                     $updateSql = "UPDATE books SET 'Qty = Qty-1 WHERE Id='".$row['Id']."'";
                     $con->query($updateSql);
                     $data = json_decode($_COOKIE[$cookie_name]);
                    // now removing the book id from specific
                    $index = array_search($row['Id'],$data ); 
                    array_splice($data,$index,1);


                    $cookie_value = $data ;
                    setcookie($cookie_name, json_encode($cookie_value), time()+3600);

                    print_r ($data);
                     
                 }
                 else {echo "nope \n";
                       echo $row['Id'];
                       var_dump($data);
                      }
     
             }
    }

 else
  echo "Post didnot worked!";
 
 
         ?>