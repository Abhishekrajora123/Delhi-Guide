<?php
include "config.php";
extract($_POST);
if(isset($login))
{
	$select="select email,password from admin where email='$e' and password='$p'";
	if($obj->login($select))
	{
		$_SESSION['email']=$e;
		$obj->url("admin.php?msg=run");
	}
	else
	{
		$obj->url("index.php?err=error");
	}
}

?>
