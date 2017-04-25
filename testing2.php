<?php
$cookie_name = "book_id";
$data = json_decode($_COOKIE[$cookie_name]);
// $data[0];
$data2 = $data ;

$data2 = (18 ,12, 26);
 $index = array_search( 18,$data2 ); 
    array_splice($data,$index,1,18);
print_r($data2) ;
print_r (size_of)






?>