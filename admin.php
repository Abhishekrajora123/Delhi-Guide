<?php include("config.php");
if ($obj-> loggedin() == ""){
  $obj-> url("index.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <title>Guide to delhi</title>
  </head>
  <body>
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">
            <div class="d-flex flex-row bd-highlight mb-3 align-items-center">
              <img src="images/delhi 2.jpg" width="80" height="80" class="d-inline-block align-top mr-5 rounded-circle" alt="" loading="lazy">
              <h2><b>GUIDE TO DELHI</b></h2>
            </div>
          </a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
  <ul class="navbar-nav">
    <li class="nav-item dropdown">
      <a class="nav-link fa fa-user dropdown-toggle"  href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <?php if($_GET['err'] == 'error'): ?>
        <a class="dropdown-item fa fa-user" href="#"> Profile</a>
        <a class="dropdown-item fa fa-lock" href="login.php"> login</a>
      <?php elseif($_GET['msg'] == 'run'): ?>
        <a class="dropdown-item fa fa-user" href="#"> Profile</a>
        <a class="dropdown-item fa fa-lock" href="logout.php"> logout</a>
        <a class="dropdown-item fa fa-lock" href="register.php"> add admin</a>
      <?php else: ?>
        <a class="dropdown-item fa fa-user" href="#"> Profile</a>
        <a class="dropdown-item fa fa-lock" href="login.php"> login</a>
      <?php endif; ?>

      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Hotels
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="insert.php?id=1" value = "1">Add</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Restaurants
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="insert.php?id=2" value = "2">Add</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Tourist Places
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="insert.php?id=3" value = "3">Add</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Clubs & pubs
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="insert.php?id=4" value = "4">Add</a>
      </div>
    </li>
  </ul>
</div>
</nav>
</div>
<a href='logout.php' style='float:right'>Logout</a>

<?php include("footer.php")
?>
