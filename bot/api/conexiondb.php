<?php
//try{
 $host="localhost"; 
 $username="apache";
 $password="miclavesupersecreta";
 $database="basedatosbot";
 $port=3306;
 
 $connectmysqli = new mysqli($host, $username, $password, $database, $port);
 
  if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
      echo 'no se encuentra el driver connectmysqli :(';
 } else {
//      echo 'se consiguio la conexión';
 }
 
 	 
//}catch (Exception $e) {
//  echo $e->errorMessage();
//} 

 
?>