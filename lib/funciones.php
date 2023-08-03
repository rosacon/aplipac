<?php

function get_param($var){
   if(!isset($_POST[$var]) || ($_POST[$var]=="")){
      return strip_tags($_GET[$var]);
   } else {
      return strip_tags($_POST[$var]);    
   }
}

function debug($var){
  echo "<pre>";
  print_r($var);
  echo "</pre>";
}

function execute_sql($sql){
   global $link;
   return mysql_query($sql, $link);
}

function closed_rs(){
   global $link;
   mysql_close($link);
}

function get_result_array($rs){
  return mysql_fetch_array($rs);
}

function count_records($rs){
  return mysql_num_rows($rs);
}

function crypt_blowfish_bycarluys($password, $digito = 7) {  
    $set_salt = './1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';  
    $salt = sprintf('$2a$%02d$', $digito);  
    for($i = 0; $i < 22; $i++)  
    {  
     $salt .= $set_salt[mt_rand(0, 63)];  
    }  
    return crypt($password, $salt);  
    }  

?>
