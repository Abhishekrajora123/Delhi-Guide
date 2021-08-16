<?php
include "config.php";
extract($_POST);
if(isset($submit))
{
	$table = $_GET['table'];
	$type = $_GET['type'];
	$p = md5($pass);
	$inserts="insert into $table (name, email, password) values ('$n','$e','$p')";
  if($obj->insert($inserts))
	{
		$obj->url("admin_data.php?type=$type&msg=run&table=$table");
	}
	else
	{
		$obj->url("register.php?err=error");
	}


}
?>
