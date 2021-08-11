<?php
include "config.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $email = $_POST["email"];
  $select="select email,password from admin where email='$email'";
	if($obj->select($select))
	{
  $val = $obj->select($select);
 $to = $_POST["email"];
 $subject = "Password reset (Guide to delhi)";
 $numbers = rand(00000, 99999);
 $message = "<h4>Your password reset code is .</h4>";
 $message .= "$numbers";
 $header = "From:rathi160294@gmail.com \r\n";
 $header .= "MIME-Version: 1.0\r\n";
 $header .= "Content-type: text/html\r\n";

 $retval = mail($to,$subject,$message,$header);

 if($retval == true) {
   if ($val->num_rows > 0) {
   while($row = $val->fetch_assoc()){
    $id = $row['id'];
   $result = "update admin SET password='$numbers' WHERE id= '$id' AND email = '$email'";
 	if($obj->edit($result))
 	{
    echo "<script LANGUAGE='JavaScript'>
      window.alert('Password is sent to $email');
      </script>";
     echo "<script>redirect('login1.php'); </script>";
 	}
 	else
 	{
    echo "<script LANGUAGE='JavaScript'>
      window.alert('Please enter Registered email');
      </script>";
    echo "<script>redirect('forgot_pass.php'); </script>";
 	}
}
}
}
}
else {
  echo "<script LANGUAGE='JavaScript'>
    window.alert('Please enter Registered email');
    </script>";
  echo "<script>redirect('forgot_pass.php'); </script>";
}
}
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Forgot password</title>
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
					<h2 class="heading-section">Forgot Password</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<h3 class="text-center mb-4">Please Enter email</h3>
						<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="login-form">
		      		<div class="form-group">
		      			<input type="text" name="email" class="form-control rounded-left" placeholder="Email" required>
		      		</div>
              <div class="form-group d-md-flex">
               <div class="w-100 text-lg-left">
                 <a href="login1.php">Login</a>
               </div>
             </div>
	            <div class="form-group">
	            	<input type="submit" name="login" value="Send" class="btn btn-primary rounded submit p-3 px-5"/>
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
