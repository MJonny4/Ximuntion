<?php 
  //SEND CONTACT SECTION TO DATABASE
  $username = "";
  $email = "";
  $errors = array();
  
  $db = mysqli_connect('localhost', 'root', '', 'db');
  
  if (isset($_POST['contact_user'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $message = mysqli_real_escape_string($db, $_POST['message']);

    if (empty($name)) {
      array_push($errors, "Name is required");
    }

    if (empty($email)) {
      array_push($errors, "Email is required");
    }

    if (empty($message)) {
      array_push($errors, "Message is required");
    }

    if (count($errors) == 0) {
      $query = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
      mysqli_query($db, $query);
      $_SESSION['success'] = "You have successfully sent a message";
      header ('Refresh: 0; URL=../index.php');
    }
  }
?>