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
        <script>
          
        $(document).ready(function() {
            $("#email").focusout(function(){
                does_email_exit_already();
                 
                                    }) });
          function does_email_exit_already()
            {
                   $("#email").val();
               
               var _email_ = $("#email").val();
          
                $.ajax({ type:'post' ,
                         url: 'php/emailCheck.php',
                         data: { email : _email_  } ,
                         success : populateTable 
                       }) ;
            }
            function populateTable(response)
            {
                   // $("#results").html (response);
                    console.log(response);
             
                     
            }
            </script>
    </head>
    
    <body>
        
         <?php require ('php/nav.php'); ?>
        <div id="wrapper">
        <div id="registrationForm">
        <form id="form" method="post" >
            <input type="text"      name="email"        placeholder="*Email Address"        class="long"            id="email"      autofocus="true"><br/>
            <input type="password"  name="password"     placeholder="*Password"             class="medium-long"     id="password"   title="Must contain at least 8 characters A-Z|0-9|!@#$%^&*" > 
            <input type="password"  name="vpassword"    placeholder="*Verify Password"      class="medium-long"     id="vpassword"><br/>
            <input type="text"      name="fn"           placeholder="*First Name"           class="medium"          id="fn"> 
            <input type="text"      name="mi"           placeholder="Middle Initial"        class="short"           id="mi"> 
            <input type="text"      name="ln"           placeholder="*Last Name"            class="medium"          id="ln"><br/>
            <input type="text"      name="address"      placeholder="*Address Line 1"       class="long"            id="address"><br/>
            <input type="text"      name="address2"     placeholder="Address Line 2"        class="long"            id="address2"><br/>
            <input type="text"      name="city"         placeholder="*City"                 class="medium"          id="city"> 
            <input type="text"      name="state"        placeholder="*State"                class="short"           id="state"> 
            <input type="text"      name="zip"          placeholder="*Zipcode"              class="medium"          id="zip"><br/>
            <input type="text"      name="country"      placeholder="*Country"                                      id="country"> 
            <input type="tel"       name="phone"        placeholder="*Phone"                                        id="phone" title="Please enter a 10 digit phone number"> 
            <label>Birthday: </label>
            <input type="date"      name="bd"                                               class="empty"           id="bd"><br/>
            <input type="submit"    name="register" value="Register"                        class="submit"          id="register" >  
            <input type="button"    name="clear"    value="Clear"                           class="clear"           id ="clear" > 
        
        </form>
        </div>
        </div>
        <?php include("php/footer.php");?>
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