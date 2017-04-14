<?php 
session_start();
?>


<header>
    <a href="index.php"><img src="../BookStore/img/banner.jpg" class="bannerimage"></a>
        </header>
        <nav>
            <ul> 
                <li><a href="index.php">Home</a></li>
                <li class="right"><a href="cart.php">Cart (2)</a></li>
                <li class="right"><a href="account.php">Account</a></li>
                <?php 
                if(isset($_SESSION['User']))
                  { echo "<li class='right'><a href='register.html'>".$_SESSION['User']."</a></li>
                         <li class='right'><a href='logout.php'>Logout</a></li>"; 
                  }
               else 
                  {  echo "<li class='right'><a href='login.html'>Login</a></li>
                          <li class='right'><a href='register.html'>Register</a></li>"; 
                  }
                   ?>
            </ul>
        </nav>
 
 
