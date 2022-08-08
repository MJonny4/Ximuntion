<?php 
  session_start();

  $username = "";
  $email = "";
  $errors = array();

  $db = mysqli_connect('localhost', 'root', '', 'db');

  // REGISTER USER
  if (isset($_POST['reg_user'])){ //name of the form button
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $password_repeat = mysqli_real_escape_string($db, $_POST['password_repeat']);

    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }
    if ($password != $password_repeat) {
      array_push($errors, "The two passwords do not match");
    }

    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
      if ($user['username'] === $username) {
        array_push($errors, "Username already exists");
      }

      if ($user['email'] === $email) {
        array_push($errors, "email already exists");
      }
    }

    if (count($errors) == 0) {
      $password = md5($password);//encrypt the password before saving in the database
      $query = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')";
      mysqli_query($db, $query);
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      // close session and redirect to home page
      session_unset();
      echo "<h1 style='text-align:center; padding-top:250px;'>YOU HAVE BEEN REGISTERED SUCCESSFULLY" . "</h1>";
      echo "<h2 style='text-align:center; padding-top:20px;'>Redirecting..." . "</h2>";
      echo "<style>#reg2 { display:none }" . "</style>";
      header('Refresh: 2; URL=index.php');
    }
  }

  // LOGIN USER
  if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
      array_push($errors, "Username is required");
    }

    if (empty($password)) {
      array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
      $password = md5($password);
      $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
      $results = mysqli_query($db, $query);

      if (mysqli_num_rows($results) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
        
      }else {
        array_push($errors, "Wrong username/password combination");
      }
    }
  } 
?>