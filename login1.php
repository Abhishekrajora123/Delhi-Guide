<!doctype html>
<html lang="en">
  <head>
  	<title>Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style1.css">

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
	<section>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-2">
					<h2 class="heading-section">Admin Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center text-primary mb-4">Have an account?</h3>
            <p class="text-center text-danger"><?php if (isset($_GET['err'])){
              echo "Email or password is not correct.";
            } ?></p>
						<form method="post" action="login_submit.php" class="login-form">
		      		<div class="form-group">
		      			<input type="text" name="e" class="form-control rounded-left" placeholder="Email" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" name="p" class="form-control rounded-left" placeholder="Password" required>
	            </div>
              <div class="form-group d-md-flex">
								<!-- <div class="w-100 text-md-left">
									<a href="forgot_pass.php">Forgot Password</a>
								</div> -->
                <div class="w-100 text-md-right">
									<a class="text-primary" href="mailto: abhishekrajora899@gmail.com">Don't have account.</a>
								</div>
	            </div>
	            <div class="form-group">
	            	<input type="submit" name="login" value="Submit" class="btn btn-primary rounded-pill submit p-3 px-5"/>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

</body>
</html>
