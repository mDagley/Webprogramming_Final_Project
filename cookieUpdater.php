<?php
 if(isset($_POST['book_id'])){
    $cookie_name = "book_id";

    $data = json_decode($_COOKIE[$cookie_name]);
    // now removing the book id from specific
    $index = array_search($_POST['book_id'],$data ); 
    array_splice($data,$index,1);
    
   
    $cookie_value = $data ;
    setcookie($cookie_name, json_encode($cookie_value), time()+3600);

    print_r ($data);
    }

 else
  echo "Post didnot worked!";
 
 
         ?>