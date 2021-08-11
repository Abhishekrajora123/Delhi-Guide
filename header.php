<?php
include "config.php";
if (isset($_GET['err'])){
  $error = $_GET['err'];
}
elseif (isset($_GET['msg'])) {
  $run = $_GET['msg'];
} else {
  $error = "";
  $run = "";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <title>Guide to delhi</title>
  </head>
  <body>
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="<?php if ($_GET['msg'] == 'run'): echo "index.php?msg=run"; else: echo "index.php"; endif;?>">
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
            <?php
             if($error == 'error'): ?>
            <a class="dropdown-item fa fa-user" href="#"> Profile</a>
            <a class="dropdown-item fa fa-lock" href="login1.php"> login</a>
          <?php elseif($run == 'run'): ?>
            <a class="dropdown-item fa fa-user" href="admin.php?msg=run"> <?php echo $_SESSION['email']; ?></a>
            <a class="dropdown-item fa fa-lock" href="logout.php"> logout</a>
          <?php if (strtolower($_SESSION['email']) == 'abhishekrajora889@gmail.com'): ?>
            <a class="dropdown-item fa fa-lock" href="register.php?type=5&table=admin&msg=run"> add admin</a>
          <?php endif; ?>
          <?php else: ?>
            <a class="dropdown-item fa fa-user" href="#"> Profile</a>
            <a class="dropdown-item fa fa-lock" href="login1.php"> login</a>
          <?php endif; ?>

          </div>
        </li>
        <?php $flag = 0; if($run == 'run'){ $flag = 1; }
        ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Hotels
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="info.php?<?php if ($flag == 1) echo "msg=run&"; ?>type=hotels&id=5 Star" value = "5">5 Star</a>
            <a class="dropdown-item" href="info.php?<?php if ($flag == 1) echo "msg=run&"; ?>type=hotels&id=4 Star" value = "4">4 Star</a>
            <a class="dropdown-item" href="info.php?<?php if ($flag == 1) echo "msg=run&"; ?>type=hotels&id=3 Star" value = "3">3 Star</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Restaurants
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="info.php?<?php if ($flag == 1) echo "msg=run&"; ?>id=dhabas">Dhabas</a>
            <a class="dropdown-item" href="info.php?<?php if ($flag == 1) echo "msg=run&"; ?>id=street vendors">Street vendors</a>
            <a class="dropdown-item" href="info.php?<?php if ($flag == 1) echo "msg=run&"; ?>id=cafes">Cafes</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tourist Places
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="info.php?<?php if ($flag == 1) echo "msg=run&"; ?>id=Temples">Temples</a>
            <a class="dropdown-item" href="info.php?<?php if ($flag == 1) echo "msg=run&"; ?>id=Parks">Parks</a>
            <a class="dropdown-item" href="info.php?<?php if ($flag == 1) echo "msg=run&"; ?>id=Zoo">Zoo</a>
            <a class="dropdown-item" href="info.php?<?php if ($flag == 1) echo "msg=run&"; ?>id=Monuments">Monuments</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="info.php?<?php if ($flag == 1) echo "msg=run&"; ?>id=clubs_pubs">
            Clubs & Pubs
          </a>
        </li>
      </ul>
    </div>
  </nav>
