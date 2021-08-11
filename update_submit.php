<?php
include "config.php";
extract($_POST);
if(isset($update))
{
  $table = $_GET['table'];
  $id = $_GET['id'];
  $type = $_GET['type'];
  if ($table == 'admin'){
    $result = "update $table SET name='$n',email='$e',password='$pass' WHERE id= '$id'";
  } elseif ($table == 'clubs_pubs') {
    $result = "update $table SET name='$n',address='$ad',map_link='$ml',description='$des',image_name='$in' WHERE id= '$id'";
  }
  else{
  $result = "update $table SET name='$n',address='$ad',map_link='$ml',type='$ty',description='$des',image_name='$in' WHERE id= '$id'";
}
	if($obj->edit($result))
	{
		$obj->url("admin_data.php?type=$type&msg=run&table=$table");
	}
	else
	{
		echo "Data not updated";
	}
}

?>
