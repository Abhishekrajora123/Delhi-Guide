<?php
include "config.php";
extract($_POST);
if(isset($login))
{
	$pass = md5($p);
	$select="select email,password from admin where email='$e' and password='$pass'";
	if($obj->login($select))
	{
		$_SESSION['email']=$e;
		$obj->url("admin.php?msg=run");
	}
	else
	{
		$obj->url("login1.php?err=error");
	}
}

?>
