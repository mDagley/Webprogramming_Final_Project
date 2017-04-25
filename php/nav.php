<?php 
session_start();

 $cookie_name = "book_id";
 $data = json_decode($_COOKIE[$cookie_name]);
 $no_of_items = sizeof( $data);

?>


<header>
    <a href="index.php"><img src="img/banner.jpg" class="bannerimage"></a>
        </header>
        <nav>
            <ul> 

              <li><a href="index.php" class="navLink">Home</a></li>
   <?php echo '<li class="right"><a href="cart.php" class="navLink">Cart ('.$no_of_items.')</a></li>' ; ?>   

                <?php if($admin=='true'){
                            echo "<li><a href='index.php' class='navLink'>Home [Admin]</a></li>";
}
                else{
                    echo "<li><a href='index.php' class='navLink'>Home</a></li>";
                }
               ?>
                <li class="right"><a href="cart.php" class="navLink">Cart (2)</a></li>
                <li class="right"><a href="account.php" class="navLink">Account</a></li>
                <?php 
                if(isset($_SESSION['User']))
                  { echo "<li class='right'><a href='account.php' class='navLink'>".$_SESSION['User']."</a></li>
                         <li class='right'><a href='php/logout.php' class='navLink'>Logout</a></li>"; 
                  }
               else 
                  {  echo "<li class='right'><a href='signin.php' class='navLink'>Login</a></li>
                          <li class='right'><a href='new.php' class='navLink'>Register</a></li>"; 
                  }
                   ?>
            </ul>
        </nav>
 
 
