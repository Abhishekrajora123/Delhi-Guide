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
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
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
