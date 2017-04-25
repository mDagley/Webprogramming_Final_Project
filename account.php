
<html lang="en">
    
    <head>
        <meta name="description" content="Online Book Store" />
        <meta name="keywords" content="book, store, shop, books, novels, book store" />
        <meta charset="utf-8" />
        <title>Online Book Store</title>
        <link href="index.css" rel="stylesheet" type="text/css">
        <link href="favicon.ico" rel="shortcut icon" >
        <script src="js/jquery-3.1.1.min.js"></script>
        <script>
        function orderFilter(){
        var user = $('#user').val();
        var id = $('#order').val();
        $.ajax({
            type: 'POST',
            url: 'php/detail.php',
            data: 'user='+user+'&id='+id,
            
            success: function (html) {
                $('#main').html(html);
                
            }
        });
    }
        </script>

    </head>
    
    <body>
         <?php require ('php/nav.php'); 
        echo "<div id='wrapper'>
        <aside>
            <h3>Orders</h3>
            
            <select id='order' name='order' class='filter' id='order' onchange='orderFilter()'>
                <option value=''>Orders</option>";
            
                $getUser = "SELECT Email, UserId FROM users WHERE Email='".$_SESSION['User']."'";
                $result = mysqli_query($con, $getUser);
                 while($r = $result->fetch_assoc()){
                     $user = $r['UserId'];
                     
                 }
                $sql='SELECT * FROM orders WHERE UserId = "'.$user.'" ORDER BY DateCreated';
                $result = $con->query($sql);
                while($rows = $result->fetch_assoc() ){
                    echo "<option value='".$rows['OrderId']."' id='id'>".$rows['DateCreated']."</option>";
                    
                    
                }
          echo" </select>";
            echo"<input type='hidden' value='".$user."' id='user' name='user'>";
            
        echo"</aside>
        
        <main>
            <h2>Order Details</h2>
            <h4>4/25/2017</h4>
            <p>
                Status: Processing <br/>
                Shipping Date: Not Yet Shipped <br/>
                Delivery Date: Not Yet Shipped
            </p>
            
            
            <hr>
            
            <p class='total'>
            
            Subtotal: $29.15 <br/>
            Tax: $2.40 <br/>
            Shipping: $3.99 <br/>
            
            </p>
            <p class='total bold'>
            Total: $35.54
            </p>
            
               
                   
        </main>
        
        </div>";
        include("php/footer.php");?>
    </body>
</html>
