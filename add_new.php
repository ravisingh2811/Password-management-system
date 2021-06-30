<?php
session_start();
include "fuc.php";

include "db_conn.php";



if(!isset($_SESSION['email'])){
  header("location: login.php");
}


if(isset($_POST['submit'])){

    $website= mysqli_real_escape_string($con, $_POST['website']);
    $name=mysqli_real_escape_string($con,$_POST['user_name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']); 
    // $pass  = base64_encode($password);
    $pass=encryptthis($password, $key);
    
    $decr_pw = hash("sha512", $password);

    $sql = "INSERT INTO `pass`( `email`, `website`, `user_name`, `password` , `512_encrypt`) VALUES ('$email','$website','$name','$pass' , '$decr_pw')";
    $iquery = mysqli_query($con , $sql);

    if($iquery){
      header("location: index.php");
    }else{
      echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
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
            <li><a class = "active" href = "add_new.php">Add New Password</a></li>
            <li><a href = "edit.php">Edit Your Password</a></li>
            

          
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
                       <h3 style = "color:white">Add New Password</h3>
            </div>                
          
          <div class="row">
            <div class="col-md-8">
              <div class="contact-page-form" >
                
                <form action="" method="post">

                  <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-input-field">
                      <input type="text" placeholder="Website Name"  name="website"/>
                    </div>
                  </div>  
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-input-field">
                      <input type="text" placeholder="User Name" name="user_name" required/>
                    </div>
                  </div>                              
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-input-field">
                     
                      <input type="Password" id = "password"  placeholder="Password" name="password"/>
                      
                    </div>
                    
                  </div>  
                  <i class="fas fa-eye" style = "margin: 20px; color: white" onclick="show()"></i> 
                  <input type="hidden" name="email" value="<?php echo $_SESSION['email'];?>"/>     
                                                               
                                           
                 </div>
                 <div class="single-input-fieldsbtn">
                    <input type="submit" name= "submit" value="Add New"/>
                  </div>
                </form>   
              </div>      
            </div>
            <div class="col-md-4">        
              <div class="contact-page-map">
              <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_sSF6EG.json"  background="transparent"  speed="1"  style="justify-content: center;" loop  autoplay></lottie-player>
                <!-- <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_6gqtyxsc.json"  bbackground="transparent"  speed="0.3"  style="justify-content: center;" loop  autoplay></lottie-player> -->
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




