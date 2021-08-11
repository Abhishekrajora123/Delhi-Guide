<?php include "config.php";
  $rating = $_GET['id'];
  $table = $_GET['table'];
  $result = "select * from $table where id = '$rating'";
  if ($obj->select($result)){
    $val = $obj->select($result);
  if ($val->num_rows > 0) {
    $flag = 1;
  }
}
else {
  echo "not found";
}
?>

<div>
  <br>
  <br>
  <center>
  <form method="POST"  enctype="multipart/form-data", action="update_submit.php?type=<?php echo $_GET['type']; ?>&table=<?php echo $_GET['table']; ?>&id=<?php echo $_GET['id']; ?>">
    <h2>Update</h2>
    <?php if ($flag == 1 && $_GET['table'] != 'admin'): while($row = $val->fetch_assoc()){?>
    <br>
    <br>
    <input type="text"  name="n", value="<?php  echo $row['name'];?>", placeholder="Enter Your name"/><br><br>
    <input type="text"  name="ad", value="<?php  echo $row['address'];?>", placeholder="Enter Your Address"/><br><br>
    <input type="text"  name="ml", value="<?php  echo $row['map_link'];?>", placeholder="Enter Your Map link"/><br><br>
    <input type="text"  name="ty", value="<?php  echo $row['type'];?>", placeholder="Enter Your type"/><br><br>
    <input type="text"  name="des", value="<?php  echo $row['description'];?>", placeholder="Enter Your description"/><br><br>
    <input type="text"  name="in", value="<?php  echo $row['image_name'];?>", placeholder="Enter your Image name"/><br><br>
    <input type="submit"  name="update" value="Update"/>
  <?php } ?>
  <?php elseif ($flag == 1 && $_GET['table'] == 'admin'): while($row = $val->fetch_assoc()){ ?>
    <br>
    <br>
    <input type="text"  name="n", value="<?php  echo $row['name'];?>", placeholder="Enter Your name"/><br><br>
    <input type="email"  name="e", value="<?php  echo $row['email'];?>", placeholder="Enter Your email"/><br><br>
    <input type="password"  name="pass", value="<?php  echo $row['password'];?>", placeholder="Enter Your Password"/><br><br>
    <input type="submit"  name="update" value="Update"/>
  <?php } endif; ?>
  </form>
  </center>
  <br>
  <br>
</div>
