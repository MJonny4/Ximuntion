<?php include ('./database/server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  
  <link rel="shortcut icon" href="https://www.onlygfx.com/wp-content/uploads/2018/07/8-grunge-x-1.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
    body{
      font-family: 'Roboto', sans-serif;
      background: rgb(229, 229, 234);
      color: black;
    }
  </style>
</head>
<body> 
<div class="container">
  <div class="row">
    <div class="col-md-6 mt-5 mx-auto">
      <div class="card">
        <div class="card-header">
          <h4>Login</h4>
          <?php echo "<h3 style = 'color:red;text-align:center'>";?>
          <?php include ('./database/errors.php'); ?>
          <?php echo "</h3>"; ?>
        </div>
        <div class="card-body">
          <form action="login.php" method="post">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <br>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <br>
            <div class="container signin">
              <button type="submit" name="login_user" class="btn btn-primary btn-block">Login</button>
              <p>Don't have an account? <a href="./register.php">Register</a>.</p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/fbccc5a75e.js" crossorigin="anonymous"></script>
</body>
</html>