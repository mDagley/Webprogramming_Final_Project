<html lang="en">
    <head>
        <meta name="description" content="Online Book Store" />
        <meta name="keywords" content="book, store, shop, books, novels, book store" />
        <meta charset="utf-8" />
        <title>Online Book Store</title>
        <link href="index.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <script src="js/jquery-3.1.1.min.js"></script>
	    <script src="js/validate.js"></script>
    </head>
    
    <body>
        
         <?php require ('php/nav.php'); ?>
        <div id="registrationForm">
        <form id="form" method="post" >
            <input type="text" name="email" placeholder="*Email Address" autofocus="true" class="long" id="email"><br/>
            <input type="password" name="password" placeholder="*Password" class="medium-long" title="Must contain at least 8 characters A-Z|0-9|!@#$%^&*" id="password"> <input type="password" name="vpassword" placeholder="*Verify Password" class="medium-long" id="vpassword"><br/>
            <input type="text" name="fn" placeholder="*First Name" class="medium" id="fn"> <input type="text" name="mi" placeholder="Middle Initial" class="short" id="mi"> <input type="text" name="ln" placeholder="*Last Name" class="medium" id="ln"><br/>
            <input type="text" name="address" placeholder="*Address Line 1" class="long" id="address"><br/>
            <input type="text" name="address2" placeholder="Address Line 2" class="long"><br/>
            <input type="text" name="city" placeholder="*City" class="medium" id="city"> <input type="text" name="state" placeholder="*State" class="short" id="state"> <input type="text" name="zip" placeholder="*Zipcode" class="medium" id="zip"><br/>
            <input type="text" name="country" placeholder="*Country" id="country"> <input type="tel" name="phone" placeholder="*Phone" id="phone" title="Please enter a 10 digit phone number"> <label>Birthday: </label><input type="date" name="bd" id="bd" class="empty" id="bd"><br/>
           <input type="submit" name="register" value="Register" class="submit" id="register" >  <input type="button" id ="clear" name="clear" value="Clear" class="clear"> 
        
        </form>
        </div>
        
        <script type="text/javascript">
                var el = document.getElementById('bd');
                el.onchange = function() {
                    if (el.value === '') {
                        el.classList.add("empty");
                    } else {
                        el.classList.remove("empty");
                    }
                }
        </script>
    </body>
</html>