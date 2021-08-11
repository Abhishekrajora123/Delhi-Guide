<?php
include "config.php";
extract($_POST);
if(isset($submit))
{
  $table = $_GET['id'];
  $type = $_GET['type'];
  if ($table == 'clubs_pubs'){
    $inserts="insert into $table (name, address, map_link, image_name, description) values ('$n','$a', '$ml', '$img_n', '$des')";
  }
  else
  {
    $inserts="insert into $table (name, address, map_link, image_name, description, type) values ('$n','$a', '$ml', '$img_n', '$des', '$ty')";
  }
    if($obj->insert($inserts))
  	{
  		$obj->url("admin_data.php?type=$type&msg=run&table=$table");
  	}
  	else
  	{
  		echo "your registration is not successfull";
  	}

}
?>
