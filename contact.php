
<?php

include "db_conn.php";

if(isset($_POST['submit'])){
  $name= mysqli_real_escape_string($con, $_POST['name']);
  $number=mysqli_real_escape_string($con,$_POST['number']);
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $subject=mysqli_real_escape_string($con,$_POST['subject']);
  $message=mysqli_real_escape_string($con,$_POST['message']);


  $sql = "INSERT INTO `mess`( `name`, `email`, `number`, `subject` , `message`) VALUES ('$name','$email','$number','$subject' , '$message')";
  $iquery = mysqli_query($con , $sql);

  if($iquery){

    echo '<script type="text/javascript">alert("Message Send Successfully");';
		echo 'window.location.href = "index.php";';
		echo '</script>';
   
  }else{
    echo "ERROR: $sql <br> $con->error";
  }

 
  
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
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
          
                <li><a  href="home.php">Home</a></li>
                    <li><a  href="signup.php">SignUp </a></li>
                    <li><a  href="login.php">Login</a></li> 

            <li><a class = "active" href="contact.php">Contact Us</a></li>
            

          
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
                       <h3 style = "    color: white;
    margin-bottom: 35px;">Contact Us</h3>
            </div>  
          <div class="row">
            <div class="col-md-4">
              <div class="contact-info">
                <div class="contact-info-item">
                  <div class="contact-info-icon">
                  <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_CEyvj2.json"  background="transparent"  speed="1"  style="justify-content: center; height: 52px;" loop  autoplay></lottie-player>

                  </div>
                  <div class="contact-info-text">
                    <h2>address</h2>
                    <span>1215 Lorem Ipsum, Ch 176080 </span> 
                    <span>Bihar , INDIA</span> 
                  </div>
                </div>            
              </div>          
            </div>          
            <div class="col-md-4">
              <div class="contact-info">
                <div class="contact-info-item">
                  <div class="contact-info-icon">
                  <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_8SdEu9.json"  background="transparent"  speed="1"  style="justify-content: center; height: 52px;" loop  autoplay></lottie-player>

                  </div>
                  <div class="contact-info-text">
                    <h2>E-mail</h2>
                    <span>info@LoremIpsum.com</span> 
                    <span>yourmail@gmail.com</span>
                  </div>
                </div>            
              </div>                
            </div>                
            <div class="col-md-4">
              <div class="contact-info">
                <div class="contact-info-item">
                  <div class="contact-info-icon">
                  <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_nv5aXa.json"  background="transparent"  speed="1"  style="justify-content: center; height: 52px;" loop  autoplay></lottie-player>

                  </div>
                  <div class="contact-info-text">
                    <h2>office time</h2>
                    <span>Mon - Thu  9:00 am - 4.00 pm</span>
                    <span>Thu - Mon  10.00 pm - 5.00 pm</span>
                  </div>
                </div>            
              </div>          
            </div>          
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="contact-page-form" method="post">
                <h2 style = "color:white">Get in Touch</h2> 
                <form action="" method="post">
                  <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-input-field">
                      <input type="text" placeholder="Your Name" name="name"/>
                    </div>
                  </div>  
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-input-field">
                      <input type="email" placeholder="E-mail" name="email" required/>
                    </div>
                  </div>                              
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-input-field">
                      <input type="text" placeholder="Phone Number" name="number"/>
                    </div>
                  </div>  
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-input-field">
                      <input type="text" placeholder="Subject" name="subject"/>
                    </div>
                  </div>                
                  <div class="col-md-12 message-input">
                    <div class="single-input-field">
                      <textarea  placeholder="Write Your Message" name="message"></textarea>
                    </div>
                  </div>                                                
                  <div class="single-input-fieldsbtn">
                    <input type="submit" name = "submit" value="Send Now"/>
                  </div>                          
                </div>
                </form>   
              </div>      
            </div>
            <div class="col-md-4">        
              <div class="contact-page-map">
            
                <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_6gqtyxsc.json"  background="transparent"  speed="0.3"  style="justify-content: center;" loop  autoplay></lottie-player>
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675621.300149096!2d83.55830840388356!3d25.886786466031666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed5844f0bb6903%3A0x57ad3fed1bbae325!2sBihar!5e0!3m2!1sen!2sin!4v1624247064290!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
              </div>          
            </div>        
          </div>
        </div>
      </section>

      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>   

</body>

</html>