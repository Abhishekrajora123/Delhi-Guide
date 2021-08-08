<div id="register_container">

  <br>
  <br>
  <center>
  <form method="post"  enctype="multipart/form-data" action="regis_submit.php">
    <h2>Registration Form</h2>
    <?php if(isset($_GET['msg']))
    {
      echo "<p>Your registration is  successfully done</>";
    }
    ?>
    <br>

    <br>
    <input type="text"  name="n" placeholder="Enter Your name"/><br><br>
    <input type="email"  name="e" placeholder="Enter Your email"/><br><br>
    <input type="password"  name="nm" placeholder="Enter your password"/><br><br>
    <input type="submit"  name="submit" value="Submit"/>
  </form>
  </center>
  <br>
  <br>
</div>
