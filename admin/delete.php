<?php
 include "db_conn.php";

 $id = $_GET['id'];
 $deletequery = "DELETE  from user where id ='$id'";

 $query = mysqli_query($con , $deletequery);
 if($con->query($deletequery) == true){
    ?>
    <script>
    alert ('Successfully Deleted');
  </script>
  <?php

   header("location: admin.php");
 }else{
     ?>
     <script>
     alert ('Error occured');
   </script>
   <?php
 }
?>