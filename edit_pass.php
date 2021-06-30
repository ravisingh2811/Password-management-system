<?php // include "nav.php";
session_start();
include "fuc.php";
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
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body style = "background:url(bg.jpg)">
<style>
.nav-list li a.active{
  background:pink;
}
.nav-list li a:hover{
  background:rgb(52, 170, 224);
}
</style>

<nav class="nav_bar background h-nav-resp" style = "justify-content: flex-end;">
        <ul class="nav-list v-class-resp">
        <div class="logo" style = "padding-right: 540px;"> 
                  <p style = "margin-top: 24px; margin-left:30px" class="name">MenosPass</p>
                </div>
          
            <li><a  href="index.php">Dasboard</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href = "add_new.php">Add New Password</a></li>
            <li><a class = "active" href = "edit.php">Edit Your Password</a></li>
           
            

          
        </ul>
            <div class="burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
    </nav>


 <section class="contact-page-sec">
        <div class="container">  
            <div class="col-md-4">
                       <h3 style = "color:white">Edit Your Password</h3>
            </div>                
          
          <div class="row">
            <div class="col-md-8">
              <div class="contact-page-form" >
                
                <form action="" method="post">
                <?php
include "db_conn.php";

  $id = $_GET['id'];
  $showquery = "SELECT * FROM pass where id=$id ";
  $showdata = mysqli_query($con , $showquery);
  $arrdata = mysqli_fetch_array($showdata);
  $p = $arrdata['password'];
  $enc=decryptthis($p, $key);
  // $enc = base64_decode($arrdata['password']);


  if(isset($_POST['submit'])){

    $website= mysqli_real_escape_string($con, $_POST['website']);
    $user_name=mysqli_real_escape_string($con,$_POST['user_name']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    // $pass  = base64_encode($password);
    $pass=encryptthis($password, $key);
  

    $sql = "UPDATE pass SET `website`='$website',`user_name`='$user_name',`password`='$pass' ,`email` = '$email' WHERE `id` = '$id' ";
    $iquery = mysqli_query($con , $sql);

    if($iquery){
         
         header("location: index.php");

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
                      <input type="text" placeholder="Website Name" value="<?php echo $arrdata['website'];?>" name="website"/>
                    </div>
                  </div>  
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-input-field">
                      <input type="text" value="<?php echo $arrdata['user_name'];?>" placeholder="User Name" name="user_name" required/>
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
              <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_xf9ppc6p.json"  background="transparent"  speed="1"  style="justify-content: center;" loop  autoplay></lottie-player>
              <!-- <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_bp1bwvhv.json"  background="transparent"  speed="1"  style="justify-content: center;" loop  autoplay></lottie-player> -->
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