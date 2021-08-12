<?php
if ($_GET['msg'] == 'run')
{include "admin_header.php";}
else {
  include "header.php";
}
extract($_POST);
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
  $value = $_GET['val'];
  if ($_GET['type'] == '1'){
    $table = 'hotels';
    if (isset($value)){
      $result = "SELECT * from hotels where name like '%$n%' order by type";
    }else {
      $result = "SELECT * from hotels order by type";
    }
  }
  elseif ($_GET['type'] == '2') {
    $table = 'restaurants';
    if (isset($value)){
      $result = "SELECT * from restaurants where name like '%$n%' order by type";
    }else {
      $result = "SELECT * from restaurants order by type";
    }
  }
  elseif ($_GET['type'] == '3') {
    $table = 'tourist_places';
    if (isset($value)){
      $result = "SELECT * from tourist_places where name like '%$n%' order by type";
    }else {
      $result = "SELECT * from tourist_places order by type";
    }
  }
  elseif ($_GET['type'] == '4') {
    $table = 'clubs_pubs';
    if (isset($value)){
      $result = "SELECT * from clubs_pubs where name like '%$n%'";
    }else {
      $result = "SELECT * from clubs_pubs";
    }
  }
  elseif ($_GET['type'] == '5') {
    $table = 'admin';
    if (isset($value)){
      $result = "SELECT * from admin where name like '%$n%'";
    }else {
      $result = "SELECT * from admin";
    }
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
