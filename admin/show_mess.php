<?php
session_start();
include "db_conn.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="../main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
  
    
</head>

<body >
<style>
.nav-list li a.active{
  background:pink;
}
.nav-list li a:hover{
  background:rgb(52, 170, 224);
}
.nav-list li a{
  background:none;
}
</style>

<nav class="nav_bar background h-nav-resp" style = "justify-content: flex-end;">

        <ul class="nav-list v-class-resp">
        <div class="logo"> 
          <p class="name" style = "margin-top: 30px;">MenosPass</p>
        </div>
            <li><a  href="admin.php">Dasboard</a></li>
            <li><a class = "active" href="show_mess.php">Message</a></li>
     
        </ul>
           
    </nav>

<?php
if (!isset($_SESSION['email'])) {
  header('Location: login.php');
}

?>

<style>
.nav-list li a.active{
  background:pink;
}
.nav-list li a:hover{
  background:rgb(52, 170, 224);
}
</style>


  
           <div class="table-responsive" style="border-collapse: collapse;
                                             background-color: rgb(255, 255, 255);
                                             box-shadow: 0 10px 20px 0 rgba(0, 0,0, .03);
                                             border-radius: 10px;
                                             background:url(bg.jpg);
                                             margin: auto;">

           <table >
              <thead>
               <tr>
               <th>id</th>
               <th>Name</th>
               <th>Email</th>
               <th>Phone number</th>
               <th>subject</th>
               <th>message</th>

               <th colspan="1">Operations</th>
               </tr>

              </thead>
                 <tbody>
                       <?php
                        //   $email = $_SESSION['email'];
                          
                          $sql = "SELECT * FROM mess";

                          $query = mysqli_query($con , $sql);
                   
                          $email_count = mysqli_num_rows($query);

                          while ($res = mysqli_fetch_array($query)){

                            // $decrypt = $res['password'];
                            // $a = $res['password'];
                            // $enc=decryptthis($a, $key);
                            // $enc = base64_decode();
                        ?>
                            <tr style = "background:#f1c5c5;" >
                            <td><?php echo $res['id'];?></td>
                       
                            <td><?php echo $res['name'];?></td>
                          
                            <td><?php echo $res['email'];?></td>
                            <td><?php echo $res['number'];?></td>
                            <td><?php echo $res['subject'];?></td>
                            <td><?php echo $res['message'];?></td>
                            
                            <!-- <td><input type = "password" style = "border:none; background:#f1c5c5;" readonly  value = "<?php echo $enc?>" name ="viewPass"></td> -->

                            
                            <!-- <td><button type="button" id=""  class="btn btn-default" name="dynamic"><span class="fas fa-eye" aria-hidden="true"></span></button> </td> -->
                            <!-- <button type="button" id="" class="btn btn-default" name="dynamic"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></button> -->
                             <!-- <td> <a href="edit.php?id=<?php // echo $res['id'];?>" data-toggle="tooltip" data-placement="top" title="UPDATE"><i class = "fa fa-edit" aria-hidden = "true"></i></a> 
                            </td> -->
                            
                            <td><a  class = "delete" href="delete_msg.php?id=<?php echo $res['id'];?>" data-toggle="tooltip" data-placement="top" title="DELETE"> <i class = "fa fa-trash" aria-hidden = "true"></i>
                            </a></td>
      
      
                        </tr>
                    <?php   
                      }

                       ?>

                  
              
                </tbody>
           </table>
      
            </div>
      
      </div>
    
    
    
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>

$(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('Are you sure?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
     $(document).ready(function(){
     $('[data-toggle="tooltip"]').tooltip();
       });

       function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}



// $(document).on('click' , 'ul li' , function(){
//   $(this).addClass('active')
// })
</script>

<script>

var myButton = document.getElementsByName('dynamic');
var myInput = document.getElementsByName('viewPass');
myButton.forEach(function(element, index){
  element.onclick = function(){
     'use strict';

      if (myInput[index].type == 'password') {
          myInput[index].setAttribute('type', 'text');
          element.firstChild.textContent = 'Hide';
          element.firstChild.className = "";

      } else {
           myInput[index].setAttribute('type', 'password');
           element.firstChild.textContent = '';
            element.firstChild.className = "fas fa-eye";
      }
  }
})


  </script>
    <script src="js/resp.js"></script>


</body>
</html>

