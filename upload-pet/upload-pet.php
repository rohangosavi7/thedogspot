<?php>
@include 'upload.php';

session_start();

?>


<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Request a Pet Upload</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- css files -->
    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <link rel="stylesheet" type="text/css" href="../css/menu.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />

    <!-- font awesome -->
    <script
      src="https://kit.fontawesome.com/a6da537345.js"
      crossorigin="anonymous"
    ></script>

    <!-- Js files -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"
    ></script>
  </head>
  <body>
    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.6.min.js"></script>

    <!-- Header area starts -->
    <header class="header">
      <!--navigation bar-->
      <section class="navigation">
        <div class="nav-container" id="navbar">
          <!-- logo and brand -->
          <div class="brand">
            <a href="index.html">
              <a href="../index.html">THE DOG SPOT</a>
            </a>
          </div>

          <!-- nav items -->
          <div class="nav-items">
            <nav>
              <div class="nav-mobile">
                <a id="nav-toggle" href="../index.html"><span></span></a>
              </div>

              <ul class="nav-list">
                <!-- Setting the links to #! will ensure that no action takes place on click. -->
                <li><a href="../index.html">HOME</a></li>
                <li><a href="../index.html">ABOUT</a></li>
                <li>
                  <a href="#">SERVICES</a>
                  <ul class="nav-dropdown">
                    <li><a href="../services.html">Services</a></li>
                    <li><a href="../adopt-pet.html">Adopt a Pet</a></li>
                  </ul>
                </li>
                <li><a href="../contact.html">CONTACT</a></li>
                <li><a href="products.html">PRODUCTS</a></li>
                <li><a href="../adopt-pet.html">ADOPT PET</a></li>
                <li>
                  <a href="../user/user_page.php"
                    ><img class="user-img" src="../images/user.png" alt=""
                  /></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </section>
      <!-- navigation -->
    </header>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="pet-name">Pet Name:</label>
        <input type="text" id="pet-name" name="pet-name"><br><br>
        
        <label for="pet-height">Pet Height:</label>
        <input type="text" id="pet-height" name="pet-height"><br><br>
        
        <label for="pet-color">Pet Color:</label>
        <input type="text" id="pet-color" name="pet-color"><br><br>
        
        <label for="pet-description">Pet Description:</label>
        <textarea id="pet-description" name="pet-description"></textarea><br><br>
        
        <label for="pet-image">Pet Image:</label>
        <input type="file" id="pet-image" name="pet-image"><br><br>
        
        <input type="submit" value="Submit">
    </form>
      

    <script src="script.js" type="text/javascript"></script>

    <!-- Footer -->
    <footer class="footer-distributed">
      <div class="footer-left">
        <h2 class="footer-header"><span>The</span>DogSpot</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus
          eius expedita quo itaque at illum, temporibus, error incidunt iure,
          rerum libero. Voluptas nostrum accusantium ex quia? Architecto minima
          officiis dolore!
        </p>
      </div>

      <div class="footer-centre">
        <h2 class="footer-header">Get In Touch</h2>
        <div>
          <i class="fa fa-phone"></i>
          <p>+1.555.555.5555</p>
        </div>

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>The Dog Spot</span>Near JSPM college, Hadapsar</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p>
            <a href="mailto:support@thedogspot.com">support@thedogspot.com</a>
          </p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:help@thedogspot.com">help@thedogspot.com</a></p>
        </div>
      </div>

      <div class="footer-right">
        <div class="footer-nav">
          <h2 class="footer-header">Popular links</h2>
          <ul class="footer-nav-list">
            <!-- Setting the links to #! will ensure that no action takes place on click. -->
            <li><a href="index.html">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="products.html">Products</a></li>
            <li><a href="adopt-pet.html">Adopt a Pet</a></li>
          </ul>
        </div>
      </div>
    </footer>

  </body>
</html>
