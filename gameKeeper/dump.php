<?php 
 session_start(); 
 var_dump ($_SESSION);
 var_dump ($_SERVER);
 $arr = $_SESSION;
 foreach ($arr as $key => $value) {
    echo "Key: $key; Value: $value<br />\n";
}
?> 