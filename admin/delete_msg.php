<?php
 include "db_conn.php";

 $id = $_GET['id'];
 $deletequery = "DELETE  from mess where id ='$id'";

 $query = mysqli_query($con , $deletequery);
 if($con->query($deletequery) == true){
    ?>
    <script>
    alert ('Successfully Deleted');
  </script>
  <?php

   header("location: show_mess.php");
 }else{
     ?>
     <script>
     alert ('Error occured');
   </script>
   <?php
 }
?>