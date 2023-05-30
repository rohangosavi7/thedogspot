<?php>
@include 'upload.php';
session_start();

?>


<!DOCTYPE html>
<html>
  <head>
    <title>Pet Adoption Portal - Pet Added</title>
    
  </head>
  <body>
    <h1>Pet Added Successfully</h1>
    <p>Thank you for adding a new pet to the Pet Adoption Portal. Here are the details:</p>
    <ul>
      <li>Name: <?php echo $petName; ?></li>
      <li>Height: <?php echo $petHeight; ?></li>
      <li>Color: <?php echo $petColor; ?></li>
      <li>Description: <?php echo $petDescription; ?></li>
      <li>Image: <img src="uploads/<?php echo $imageFilename; ?>" alt="<?php echo $petName; ?>"></li>
    </ul>
  </body>
</html>
