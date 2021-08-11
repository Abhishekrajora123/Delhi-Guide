
<?php include "admin_header.php";
  $rating = $_GET['id'];
  $table = $_GET['table'];
  $type = $_GET['type'];
  $msg = $_GET['msg'];
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
<div class="jumbotron">
  <div class="bg-light p-2">
    <h2 class="text-center display-4"><?php echo $_GET['table']; ?></h2>
    <hr>
  <div>
<form method="POST" enctype="multipart/form-data" action="update_submit.php?<?php echo "type=$type&msg=$$msg&table=$table&id=$rating" ?>">
  <?php if ($flag == 1 && $_GET['table'] == 'clubs_pubs'): while($row = $val->fetch_assoc()){?>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" value="<?php  echo $row['name'];?>" name="n" class="form-control" id="name" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" value="<?php  echo $row['address'];?>" name="ad" class="form-control" id="address" placeholder="Address">
  </div>
  <div class="form-group">
    <label for="map">Map Link</label>
    <input type="text" value="<?php  echo $row['map_link'];?>" name="ml" class="form-control" id="map" placeholder="map_link">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" value="<?php  echo $row['description'];?> class="form-control" name="des" id="description" placeholder="Description">
  </div>
  <div class="form-group">
    <label for="image">Image Name</label>
    <input type="text" value="<?php  echo $row['image_name'];?> class="form-control" name="in" id="image" placeholder="Image Name">
  </div>
  <?php } ?>
<?php elseif ($flag == 1 && $_GET['table'] == 'admin'): while($row = $val->fetch_assoc()){?>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" value="<?php  echo $row['name'];?>" name="n" class="form-control" id="name" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" id="email" value="<?php  echo $row['email'];?>" name="e" class="form-control" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="pass">Password</label>
    <input type="text" id="pass" value="<?php  echo $row['password'];?>" name="pass" class="form-control" placeholder="Password">
  </div>
  <?php } ?>
<?php elseif ($flag == 1): while($row = $val->fetch_assoc()){ $type = $row['type']?>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" value="<?php  echo $row['name'];?>" name="n" class="form-control" id="name" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" value="<?php  echo $row['address'];?>" name="ad" class="form-control" id="address" placeholder="Address">
  </div>
  <div class="form-group">
    <label for="map">Map Link</label>
    <input type="text" value="<?php  echo $row['map_link'];?>" name="ml" class="form-control" id="map" placeholder="map_link">
  </div>
  <div class="form-group">
      <label for="inputState">Type</label>
      <select id="inputState" class="form-control" name="ty">
        <option>Choose Type</option>
        <?php if ($_GET['type'] == '1'): ?>
        <option value="5 star"
        <?php if ($type == '5 Star'){
          echo "selected";
        } ?>
        >5 Star</option>
        <option <?php if ($type == '4 Star'){
          echo "selected";
        } ?>
        >4 Star</option>
        <option <?php if ($type == '3 Star'){
          echo "selected";
        } ?>
        >3 Star</option>
      <?php elseif ($_GET['type'] == '2'): ?>
        <option value="Dhabas" <?php if ($type == 'Dhabas'){
          echo "selected";
        } ?>
        >Dhabas</option>
        <option <?php if ($type == 'Street Vendors'){
          echo "selected";
        } ?>
        >Street Vendors</option>
        <option <?php if ($type == 'Cafes'){
          echo "selected";
        } ?>
        >Cafes</option>
      <?php elseif ($_GET['type'] == '3'): ?>
        <option value="Temples" <?php if ($type == 'Temples'){
          echo "selected";
        } ?>
        >Temples</option>
        <option <?php if ($type == 'Parks'){
          echo "selected";
        } ?>
        >Parks</option>
        <option <?php if ($type == 'Zoo'){
          echo "selected";
        } ?>
        >Zoo</option>
        <option <?php if ($type == 'Monuments'){
          echo "selected";
        } ?>
        >Monuments</option>
      <?php endif; ?>
      </select>
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" value="<?php  echo $row['description'];?>" class="form-control" name="des" id="description" placeholder="Description">
  </div>
  <div class="form-group">
    <label for="image">image_name</label>
    <input type="text" value="<?php  echo $row['image_name'];?>" class="form-control" name="in" id="image" placeholder="Image Name">
  </div>
  <?php } endif; ?>
  <input class="btn btn-primary btn-lg" name="update" type="submit" value="Update" />

</form>
</div>

<?php include "footer.php"; ?>
