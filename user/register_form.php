<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="assets/css/user.css">
   <link rel="stylesheet" href="../css/menu.css">
   <link rel="stylesheet" href="../css/style.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>
<body>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<!-- Header area starts -->
<header class="header">
  <!--navigation bar-->
  <section class="navigation">
    <div class="nav-container" id="navbar">
      <!-- logo and brand -->
      <div class="brand">
        <a href="index.html">
          <a href="">THE DOG SPOT</a>
        </a>
      </div>

      <!-- nav items -->
      <div class="nav-items">
        <nav>
          <div class="nav-mobile">
            <a id="nav-toggle" href="index.html"><span></span></a>
          </div>

          <ul class="nav-list">
            <!-- Setting the links to #! will ensure that no action takes place on click. -->
            <li><a href="index.html">HOME</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li>
              <a href="#">SERVICES</a>
              <ul class="nav-dropdown">
                <li><a href="services.html">All Services</a></li>
                <li><a href="adopt-pet.html">Adopt a Pet</a></li>
              </ul>
            </li>
            <li><a href="contact.html">CONTACT</a></li>
            <li><a href="products.html">PRODUCTS</a></li>
            <li><a href="adopt-pet.html">ADOPT PET</a></li>
            <li>
              <a href="user_page.php"
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
  <video autoplay muted loop id="catVideo">
      <source src="../images/cat-video.mp4" type="video/mp4">
  </video>
<div class="form-container">

   <form action="" method="post">
      <h3>welcome !</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Enter your name">
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="password" name="cpassword" required placeholder="Confirm your password">
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>Already have an account? <a href="login_form.php">Login now</a></p>
   </form>

</div>

</body>
</html>