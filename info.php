<?php
include "header.php";
 ?>

<?php
$flag = 0;
if (isset($_GET['type'])){
  $rating = $_GET['type'];
  $title = 'Hotels';
  $result = "SELECT * from HOTELS where type = '$rating'";
  if ($obj->select($result)){
    $val = $obj->select($result);
  if ($val->num_rows > 0) {
    $flag = 1;
} else {
  echo "0 results";
}
}
}

 ?>

 <div class="jumbotron jumbotron-fluid">
 <div class="bg-light p-2">
   <h2 class="text-center display-4"><?php echo $rating . " Star " . $title; ?></h2>
   <hr>
 <div class="row">
   <?php if ($flag == 1): while($row = $val->fetch_assoc()){?>
 <div class="col-sm-2">
 <div class="card">
   <img src="images/<?php echo $row['image_name'];?>.jpg" height= "100px" class="card-img-top" alt="">
   <div class="card-body">
     <h5 class="card-title"><?php echo $row["name"]; ?></h5>
     <p class="card-text"><?php echo $row['description']; ?></p>
     <p class="lead">
    <a class="btn btn-primary btn-sm" href="<?php echo $row['map_link']; ?>" role="button">Direction</a>
  </p>
   </div>
 </div>
 </div>
<?php } endif;?>

 <!-- <div class="col-sm-2">
 <div class="card">
   <img src="images/LOTUS.jpg" height= "100px" class="card-img-top" alt="...">
   <div class="card-body">
     <h5 class="card-title">LOTUS TEMPLE</h5>
     <p class="card-text">The Lotus Temple, located in Delhi, India, is a Baháʼí House of Worship that was dedicated in December 1986. Notable for its flowerlike shape, it has become a prominent attraction in the city.</p>
   </div>
 </div>
 </div>
 <div class="col-sm-2">
 <div class="card">
   <img src="images/red fort.jpg" height= "100px" class="card-img-top" alt="...">
   <div class="card-body">
     <h5 class="card-title">RED FORT</h5>
     <p class="card-text">The Red Fort is a historic fort in the city of Delhi (in Old Delhi) in India that served as the main residence of the Mughal Emperors.Emperor Shah Jahan commissioned construction of the Red Fort on 12 May 1638, when he decided to shift his capital from Agra to Delhi.</p>
   </div>
 </div>
 </div>
 <div class="col-sm-2">
 <div class="card">
   <img src="images/qutub.jpg" height= "100px" class="card-img-top" alt="...">
   <div class="card-body" height= "200px">
     <h5 class="card-title">QUTUB MINAR</h5>
     <p class="card-text">Qutub Minar in Delhi is world heritage site. The tall minaret was constructed in 1192 by Qutab-ud-din Aibak, and later completed by his successor Iltutmish.Qutub Minar Height : 72.5 meteres or 237.8 feet</p>
   </div>
 </div>
 </div>
 <div class="col-sm-2">
 <div class="card">
   <img src="images/ZOO.jpg" height= "100px" class="card-img-top" alt="...">
   <div class="card-body">
     <h5 class="card-title">ZOO</h5>
     <p class="card-text">National Zoological Park is home to a large number of species of birds, reptiles and mammals which live in an environment that in many ways resemble their natural habitat. </p>
   </div>
 </div>
 </div>
 <div class="col-sm-2">
 <div class="card">
   <img src="images/jama.jpg" height= "100px" class="card-img-top" alt="...">
   <div class="card-body">
     <h5 class="card-title">JAMA MASJID</h5>
     <p class="card-text">The Masjid-i Jehan-Numa (lit. 'World-reflecting Mosque'), commonly known as the Jama Masjid of Delhi, is one of the largest mosques in India. It was built by the Mughal Emperor Shah Jahan between 1650 and 1656, and inaugurated by its first Imam, Syed Abdul Ghafoor Shah Bukhari.</p>
   </div>
 </div>
 </div> -->
 </div>
 </div>
 </div>

 <?php include "footer.php" ?>
