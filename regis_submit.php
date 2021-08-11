<?php
include "config.php";
extract($_POST);
if(isset($submit))
{
	$table = $_GET['table'];
	$type = $_GET['type'];
	$inserts="insert into $table (name, email, password) values ('$n','$e','$pass')";
  if($obj->insert($inserts))
	{
		$obj->url("admin_data.php?type=$type&msg=run&table=$table");
	}
	else
	{
		echo "Admin not created or already exists";
	}


}
?>
