
<div id="register_container">
  <br>
  <br>
  <center>
  <?php if ($_GET['id'] == '4' ||$_GET['msg'] == 'run'): ?>
    <form method="post"  enctype="multipart/form-data" action="insert_submit.php?id=<?php echo $_GET['id']; ?>">
      <h2>Insert Clubs And Pubs</h2>
      <?php if(isset($_GET['msg']))
      {
        echo "<p>Hotel added successfully</>";
      }
      ?>
      <br>
      <br>
      <input type="text"  name="n" placeholder="Enter name"/><br><br>
      <input type="text"  name="a" placeholder="Enter address"/><br><br>
      <input type="text"  name="ml" placeholder="Enter map link"/><br><br>
      <input type="text"  name="img_n" placeholder="Enter image name"/><br><br>
      <input type="text"  name="des" placeholder="Enter description here"/><br><br>
      <input type="submit"  name="submit" value="Submit"/>
    </form>
  <?php else: ?>
    <form method="post"  enctype="multipart/form-data" action="insert_submit.php?id=<?php echo $_GET['id']; ?>">
      <h2>Insert <?php if ($_GET['id'] == '1'): echo "Hotels"; elseif ($_GET['id'] == '2'):
        echo "Restaurants";
      else:
        echo "Tourist Places";
      endif;?></h2>
      <?php if(isset($_GET['msg']))
      {
        echo "<p>Your registration is  successfully done</>";
      }
      ?>
      <br>
      <br>
      <input type="text"  name="n" placeholder="Enter name"/><br><br>
      <input type="text"  name="a" placeholder="Enter address"/><br><br>
      <input type="text"  name="ml" placeholder="Enter map link"/><br><br>
      <input type="float"  name="ty" placeholder="Enter type"/><br><br>
      <input type="text"  name="img_n" placeholder="Enter image name"/><br><br>
      <input type="text"  name="des" placeholder="Enter description here"/><br><br>
      <input type="submit"  name="submit" value="Submit"/>
    </form>
  <?php endif; ?>
  </center>
  <br>
  <br>
</div>
