<?php // include "nav.php";
session_start();
include "../fuc.php";
if(!isset($_SESSION['email'])){
  header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" type="text/css" href="../main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body style = "background:url(../bg.jpg)">
<style>
.nav-list li a.active{
  background:pink;
}
.nav-list li a:hover{
  background:rgb(52, 170, 224);
}
</style>

 <section class="contact-page-sec">
        <div class="container">  
            <div class="col-md-4">
                       <h3 style = "color:white">Edit Password</h3>
            </div>                
          
          <div class="row">
            <div class="col-md-8">
              <div class="contact-page-form" >
                
                <form action="" method="post">
                <?php
   include "db_conn.php";

  $id = $_GET['id'];
  $showquery = "SELECT * FROM user where id=$id ";
  $showdata = mysqli_query($con , $showquery);
  $arrdata = mysqli_fetch_array($showdata);
  $p = $arrdata['password'];
  $enc=decryptthis($p, $key);
  // $enc = base64_decode($arrdata['password']);


  if(isset($_POST['submit'])){

    $name= mysqli_real_escape_string($con, $_POST['name']);
    $phone=mysqli_real_escape_string($con,$_POST['phone']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    // $pass  = base64_encode($password);
    $pass=encryptthis($password, $key);
  

    $sql = "UPDATE user SET `name`='$name',`phone`='$phone',`password`='$pass' ,`email` = '$email' WHERE `id` = '$id' ";
    $iquery = mysqli_query($con , $sql);

    if($iquery){
         
         header("location: admin.php");

          }
       else{
           echo "ERROR: $sql <br> $con->error";
         }
         $con->close();
    
  }


?>


                  <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-input-field">
                      <input type="text" placeholder="Website Name" value="<?php echo $arrdata['name'];?>" name="name"/>
                    </div>
                  </div>  
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-input-field">
                      <input type="text" value="<?php echo $arrdata['phone'];?>" placeholder="User Name" name="phone" required/>
                    </div>
                  </div>       
                                         
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-input-field">
                     
                      <input type="Password" id = "password" value = "<?php echo $enc ?>" placeholder="Password" name="password"/>
                      
                    </div>
                    
                  </div>  
                  <i class="fas fa-eye" style = "margin: 20px; color: white;" onclick="show()"></i> 
                  <input type="hidden" name="email" value="<?php echo $_SESSION['email'];?>"/>     
                                                               
                                           
                 </div>
                 <div class="single-input-fieldsbtn">
                    <input type="submit" name= "submit" value="Update"/>
                  </div>
                </form>   
              </div>      
            </div>
            <div class="col-md-4">        
              <div class="contact-page-map">
              <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_bp1bwvhv.json"  background="transparent"  speed="1"  style="justify-content: center;" loop  autoplay></lottie-player>
                <!-- <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_6gqtyxsc.json"  background="transparent"  speed="0.3"  style="justify-content: center;" loop  autoplay></lottie-player> -->
              </div>          
            </div>        
          </div>
        </div>
      </section>

      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script> 

        <script>
    function show(){
      var password = document.getElementById("password");
      var icon = document.querySelector(".fas")

      // ========== Checking type of password ===========
      if(password.type === "password"){
        password.type = "text";
      }
      else {
        password.type = "password";
      }
    };
  </script>  
</body>
</html>