

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>MenosPass</title>
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
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
                <div class="logo" style = "padding-right: 650px;"> 
                  <p class="name">MenosPass</p>
                </div>
                    <li><a class = "active" href="home.php">Home</a></li>
                    <li><a  href="#feature">Feature</a></li>
                    <li><a  href="signup.php">SignUp </a></li>
                    <li><a  href="login.php">Login</a></li> 
                    <li><a  href="contact.php">Contact Us</a></li> 
                </ul>
                    <div class="burger">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
            </nav>

  <section class="background firstSection" style = "background: url(bg.jpg)"  >
  <!-- <video autoplay loop muted>
    
    <source src="cy.mp4" type="video/mp4">
  </video> -->
        <div class="box-main" id="home">
            <div class="firstHalf">
                <h1 class="text-big">A Secure Manager For Your Every Password</h1>
                <p class="text-small"> Because you get to set your own schedule and study only when you have time,
                    eLearning makes learning not something you have to get over with,
                    but something you look forward to! From experience, you learn more when you enjoy the process
                   </p>
        

            </div>   
        </div>
    </section>

    <div class="services" id="feature">
           <h4> Benifits OF Menospass</h4>
             <div class="cen">
                 <div class="service">
                   <img src="logo_easy.png" alt="" class="src" style="
                   height: 100px;">
                    <h1 style="margin: 5px;">Easy To Use</h1>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies</p>
                </div>
                <div class="service">
                    <img src="logo_secure.png" alt="" class="src" style="
                    height: 100px;">
                   <h1 style="margin: 5px;">Secure</h1>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies</p>
                </div>
                <div class="service">
                    <img src="logo_free.png" alt="" class="src" style="
                   height: 100px;">
                   <h1 style="margin: 5px;">Free..$</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies</p>
                </div>  
              </div>
        </div>

    <footer>
        <p class="text-footer">
            Copyright &copy; 2021 -MenosPass- All rights reserved|
        </p>
    </footer>
    <script src="js/resp.js"> </script>
  </body>
</html>
