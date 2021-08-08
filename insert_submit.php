<?php
include "config.php";
extract($_POST);
if(isset($submit))
{
  if ($_GET['id'] == '1'){
  	$inserts="insert into HOTELS (name, address, map_link, rating, image_name, description) values ('$n','$a', '$ml', '$rat', '$img_n', '$des')";
      if($obj->insert($inserts))
  	{
  		$obj->url("admin.php?msg=run");
  	}
  	else
  	{
  		echo "your registration is not successfull";
  	}
}

}
?>
