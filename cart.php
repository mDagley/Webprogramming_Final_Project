<html lang="en">
    <head>
        <meta name="description" content="Online Book Store" />
        <meta name="keywords" content="book, store, shop, books, novels, book store" />
        <meta charset="utf-8" />
        <title>Online Book Store</title>
        <link href="index.css" rel="stylesheet" type="text/css">
        <link href="favicon.ico" rel="shortcut icon" >
    </head>
    
    <body>
         <?php require ('php/nav.php'); ?>
        
       <div id="wrapper"> 
        
        <main>
            <h2>Order Details</h2>
            <h4>10/22/2016</h4>
            
            <div class="book">
            <table class="orderDetail">
            
                <tr>
                    <td class="coverImage"><img src="img/bookcovers/theshack.jpg" class="bookCover"></td>
                    <td colspan="3" class="description">
                        <h4>The Shack: Where Tragedy Confronts Eternity</h4>
                        <h5>William Paul Young</h5>
                        </td>
                    
                </tr>
                <tr class="info">
                    
                    <td colspan="4" class="genre">Qty: 1</td>
                    
                  
                </tr>
                <tr class="buy">
                <td colspan="3" class="price"> $9.17</td>
                
                
                </tr>
                </table>
                </div>
            
            <hr>
            
            <div class="book">
            <table class="orderDetail">
            
                <tr>
                    <td class="coverImage"><img src="img/bookcovers/expectingtodie.jpg" class="bookCover"></td>
                    <td colspan="3" class="description">
                        <h4>Expecting to Die</h4>
                        <h5>Lisa Jackson</h5>
                        </td>
                    
                </tr>
                <tr class="info">
                
                    <td colspan="4" class="genre">Qty: 2</td>
                    
                  
                </tr>
                <tr class="buy">
                <td colspan="3" class="price"> $19.98</td>
                
                
                </tr>
                </table>
                </div>
            
           
            
            
               
                   
        </main>
        <aside>
            <h3 class="right">Total</h3>
            
           
            
            <p class="total">
            
            Subtotal: $29.15 <br/>
            Tax: $2.40 <br/>
            Shipping: $3.99 <br/>
            </p>
            <hr>
            <p class="total bold" >
            Total: $35.54
            </p>
            
        </aside>
        
            <input type="button" class="order btn" value="Place Order">
        
        </div>
        <?php include("php/footer.php");?>
    </body>
</html>
