<?php
      include "db_conn.php";
      include "../fuc.php";
?>

<!DOCTYPE html>
<html lang="en">
  <html>
    <head>
      <title>Sign Up</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta charset="utf-8" />
      <link rel="stylesheet" type="text/css" href="../style.css" />
      <link rel="stylesheet" type="text/css" href="../main.css" />
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      />
      <link
        href="https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600"
        rel="stylesheet"
        type="text/css"
      />
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    </head>

    <body class="body">
      <?php
    
 
      
      if(isset($_POST['SUBMIT'])){
        $name= mysqli_real_escape_string($con, $_POST['name']);
        $number=mysqli_real_escape_string($con,$_POST['number']);
        $email=mysqli_real_escape_string($con,$_POST['email']);

        $password = mysqli_real_escape_string($con,$_POST['pass']);
        
        $pass=encryptthis($password, $key);
        // $decrypted=decryptthis($encrypted, $key);

        // $cryptPass = encrypt($password);
        // $pass = password_hash($cryptPass, PASSWORD_DEFAULT);
        // $pass = password_hash($password, PASSWORD_BCRYPT); 
        // $password = md5($password);    
        //  $pass = base64_encode($password);

         $emailquery = "SELECT * FROM admin_login where email = '$email'";
         $query = mysqli_query($con , $emailquery);
      
         $emailcount =mysqli_num_rows($query);
         
         
      
         if($emailcount>0){
         
             echo "alredy pressent";
          }
          else{
    
        
            $sql = "INSERT INTO `admin_login`( `name`, `email`, `phone`, `password`) VALUES ('$name','$email','$number','$pass')";
            $iquery = mysqli_query($con , $sql);

            if($iquery){
              header("location: login.php");
            }else{
              echo "ERROR: $sql <br> $con->error";
            }
            $con->close();

          } 

      }


?>
   

      <div class="login-page">
        <div class="form">
         
            <lottie-player
              src="https://assets4.lottiefiles.com/datafiles/XRVoUu3IX4sGWtiC3MPpFnJvZNq7lVWDCa8LSqgS/profile.json"
              background="transparent"
              speed="3"
              style="justify-content: center"
              loop
              autoplay
            ></lottie-player>
       <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?> ">
            <input type="text" name="name" placeholder="Full Name" />
            <input type="email" name="email" class="pname" id="email" placeholder="Email"required>
            <input type="tel" maxlength="10" name="number" placeholder="Phone Number" />
            <input type="password" id="password" name="pass" placeholder="Set Password" />
            <i class="fas fa-eye" onclick="show()"></i>
            <br>
            <br>
            <button class="btn_submit"  name = "SUBMIT"> SUBMIT</button>
          </form>
          <form class="login-form">
      <button type="button" onclick="window.location.href='login.php'">Login</button>
    </form>
        </div>
      </div>
    </body>
    <script>
      function show() {
        var password = document.getElementById("password");
        var icon = document.querySelector(".fas");

        // ========== Checking type of password ===========
        if (password.type === "password") {
          password.type = "text";
        } else {
          password.type = "password";
        }
      }
    </script>
  </html>
</html>