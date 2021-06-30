<?php
   $server = "localhost";
   $username = "root";
   $password= "";
   $db = "ravi";

   $con = mysqli_connect($server,$username,$password , $db);

   if(!$con){
       die("connection to the database is failed due to ".mysqli_connect_error());

   }

?>