<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

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
            <li><a href="../index.html">HOME</a></li>
            <li><a href="../index.html#about">ABOUT</a></li>
            <li>
              <a href="#">SERVICES</a>
              <ul class="nav-dropdown">
                <li><a href="../services.html">All Services</a></li>
                <li><a href="../adopt-pet.html">Adopt a Pet</a></li>
              </ul>
            </li>
            <li><a href="../contact.html">CONTACT</a></li>
            <li><a href="../products.html">PRODUCTS</a></li>
            <li><a href="../adopt-pet.html">ADOPT PET</a></li>
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



   
<div class="form-container">
   <video autoplay muted loop id="catVideo">
      <source src="../images/cat-video.mp4" type="video/mp4">
   </video>

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>Don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html>