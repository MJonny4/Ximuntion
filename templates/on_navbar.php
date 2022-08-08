<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<nav id="navbar-example2" class="navbar navbar-expand-md sticky-top navbar-dark bg-dark" style="background: rgb(229, 229, 234); padding-right: 10px;padding-left: 10px;">
  <a class="navbar-brand" href="#">Ximuntion</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav me-auto">
      <li class="nav-item">
        <a class="nav-link" href="#home2">Home</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item ">
          <a class="nav-link" href="#features">Features</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
        </li>
    </ul>
      <ul class="navbar-nav ms-auto">
      <li class="nav-item">
              <a class="nav-link d-flex" href=""><strong class="" style="margin-right: 10px; font-size: 16px;"><?php echo $_SESSION['username']; ?></strong></a>
          </li>
          <li class="nav-item">
            <form action="./database/logout.php" method="post">
              <button type="submit" name="logout" class="btn btn-outline-danger">Logout</button>
            </form>
          </li>
      </ul>
    </div>
</nav>
