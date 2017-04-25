<?php 
$str = '123';
//echo $str ;
// echo md5($str);
//$str2 = password_hash ($str ,PASSWORD_DEFAULT );  // 255 character.
//echo $str2 ;

$str3 = '$2y$10$yXPoxzfa4cxIalbogjl0K.T.uc8ejjh0LWdNnTPx/vV6x88d/ktJy';

if(password_verify("123", $str3))
echo "matched";

else
echo "nope!";

?>