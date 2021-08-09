<?php
include "config.php";
extract($_POST);
if(isset($submit))
{
  if ($_GET['id'] == '1'){
    $inserts="insert into hotels (name, address, map_link, image_name, description, type) values ('$n','$a', '$ml', '$img_n', '$des', '$ty')";
  }
  elseif ($_GET['id'] == '2') {
    $inserts="insert into RESTAURANTS (name, address, map_link, image_name, description, type) values ('$n','$a', '$ml', '$img_n', '$des', '$ty')";

    }
  elseif ($_GET['id'] == '3') {
    $inserts="insert into tourist_places (name, address, map_link, image_name, description, type) values ('$n','$a', '$ml', '$img_n', '$des', '$ty')";

  }
  else {
    $inserts="insert into clubs_pubs (name, address, map_link, image_name, description) values ('$n','$a', '$ml', '$img_n', '$des')";

  }

    if($obj->insert($inserts))
  	{
  		$obj->url("admin.php?msg=run");
  	}
  	else
  	{
  		echo "your registration is not successfull";
  	}

}
?>
