<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $petName = $_POST['pet-name'];
  $petHeight = $_POST['pet-height'];
  $petColor = $_POST['pet-color'];
  $petDescription = $_POST['pet-description'];
  $petImage = $_FILES['pet-image'];

  // sanitize user input
  $petName = filter_var($petName, FILTER_SANITIZE_STRING);
  $petHeight = filter_var($petHeight, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
  $petColor = filter_var($petColor, FILTER_SANITIZE_STRING);
  $petDescription = filter_var($petDescription, FILTER_SANITIZE_STRING);

  // generate a unique filename for the image
  $imageFilename = uniqid() . '_' . $petImage['name'];

  // move the uploaded image to a permanent location on the server
  move_uploaded_file($petImage['tmp_name'], 'uploads/' . $imageFilename);

  // insert the pet data into the database

  $conn = new mysqli('localhost','root','','pet_adoption_portal');

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO pets (name, height, color, description, image) VALUES ('$petName', '$petHeight', '$petColor', '$petDescription', '$imageFilename')";

  if ($conn->query($sql) === TRUE) {
    echo "Pet added successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}


header('Location: confirmation.php');
exit();