<?php
include "header.php";
 ?>
<?php include "data_fetch.php"; ?>
 <div class="jumbotron jumbotron-fluid">
   <h2 class="text-center display-4"><?php echo $rating; ?></h2>
   <!-- <img src="images/delhi 2.jpg" class="card-img-top" alt=""> -->
 <div class="bg-light">
   <div class="bg-image" style="
         background-image: url('images/India_Gate.jpg');
         height: 100%;

          /* Center and scale the image nicely */
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
       ">
   <hr>
 <div class="row">
   <?php if ($flag == 1): while($row = $val->fetch_assoc()){?>
 <div class="col-sm-3 d-flex align-items-stretch p-3">
 <div class="card">
   <img src="images/<?php echo $row['image_name'];?>.jpg" height= "150px" class="card-img-top" alt="">
   <div class="card-body">
     <h5 class="card-title"><?php echo $row["name"]; ?></h5>
     <p class="card-text"><?php echo $row['description']; ?></p>
     <h5 class="card-title">Address</h5>
     <p class="card-text"><?php echo $row['address']; ?></p>
     <p class="lead">
    <a class="btn btn-primary btn-sm" onclick="incrementValue('')" href="<?php echo $row['map_link']; ?>" role="button" target="_blank"><?php if ($_GET['type'] == 'hotels'): echo "Book Now"; else: echo "Direction"; endif; ?></a>
  </p>
   </div>
 </div>
 </div>
<?php } endif;?>
 </div>
 </div>
  </div>
 </div>

 <?php include "footer.php" ?>
