<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ximuntion</title>
  
  <link rel="shortcut icon" href="https://www.onlygfx.com/wp-content/uploads/2018/07/8-grunge-x-1.png" type="image/x-icon">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="./styles/style.css">

  <script src="https://kit.fontawesome.com/fbccc5a75e.js" crossorigin="anonymous"></script>
  <script src="https://www.w3schools.com/lib/w3.js"></script>
  <?php include ('./database/session.php'); ?>
</head>
<body> 
  <?php 
    if (isset($_SESSION['success'])){
      include ('./templates/on_navbar.php');
    } else {
      include ('./templates/off_navbar.php');
    } 
  ?>
  <?php include './templates/body.php'; ?>
</body>
</html>