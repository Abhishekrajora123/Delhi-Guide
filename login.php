

<center><h1>Admin Login</u></h1></center>
		<div id="login_container">
			<br>

			<center>
			<form  method="post" action="login_submit.php">
				<h2>Login Form</h2>
				<?php
				if(isset($_GET['err']))
				{
					echo "<p>Your email or password may be wrong</p>";
				}

				?>
				<br>
				<br>
				<input type="email"  name="e" placeholder="Enter Your email"/><br><br>
				<input type="password"  name="p" placeholder="Enter Your Password" /><br><br><br>
				<input type="submit"  name="login" value="Submit"/>
			</form>
			</center>
			<br>
			<br>
			<br>
		</div>
<?php include("footer.php"); ?>
