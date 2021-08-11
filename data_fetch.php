<?php
if ($_GET['msg'] == 'run')
{include "admin_header.php";}
else {
  include "header.php";
}
$flag = 0;
if (isset($_GET['id'])){
  $rating = $_GET['id'];
  if ($rating == '5 Star' || $rating == '4 Star' || $rating == '3 Star'){
    $result = "SELECT * from hotels where type = '$rating'";
  }
  elseif ($rating == 'dhabas' || $rating == 'street vendors' || $rating == 'cafes') {
    $result = "SELECT * from restaurants where type = '$rating'";
  }
  elseif ($rating == 'Temples' || $rating == 'Parks' || $rating == 'Zoo' ||  $rating == 'Monuments') {
    $result = "SELECT * from tourist_places where type = '$rating'";
  }
  elseif ($rating == 'clubs_pubs') {
    $result = "SELECT * from clubs_pubs";
  }
  else {
    echo "0 re";
  }
  if ($obj->select($result)){
    $val = $obj->select($result);
  if ($val->num_rows > 0) {
    $flag = 1;
  }
}
}
elseif (isset($_GET['type'])){
  if ($_GET['type'] == '1'){
    $table = 'hotels';
    $result = "SELECT * from hotels order by type";
  }
  elseif ($_GET['type'] == '2') {
    $table = 'restaurants';
    $result = "SELECT * from restaurants order by type";
  }
  elseif ($_GET['type'] == '3') {
    $table = 'tourist_places';
    $result = "SELECT * from tourist_places order by type";
  }
  elseif ($_GET['type'] == '4') {
    $table = 'clubs_pubs';
    $result = "SELECT * from clubs_pubs";
  }
  elseif ($_GET['type'] == '5') {
    $table = 'admin';
    $result = "SELECT * from admin";
  }
  else {
    echo "No data";
  }
    if ($obj->select($result)){
     $val = $obj->select($result);
   if ($val->num_rows > 0) {
     $table;
     $flag = 1;
   }
 }

}

 ?>
