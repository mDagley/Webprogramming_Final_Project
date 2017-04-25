<?php
 if(isset($_POST['book_id'])){
    $cookie_name = "book_id";
    if(isset($_COOKIE[$cookie_name]))
            { $cookie_value =  json_decode($_COOKIE[$cookie_name]);
            }
    else
        $cookie_value = array();

    array_push($cookie_value,$_POST['book_id']);
    //setcookie($cookie_name, $cookie_value[sizeof($cookie_value)-1], time() + (3600), "/");
    setcookie($cookie_name, json_encode($cookie_value), time()+3600);

   
   
        
    }

 else
  echo "Post didnot worked!";
 
 
         ?>