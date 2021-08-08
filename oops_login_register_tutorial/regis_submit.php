<?php
include "class.php";
extract($_POST);
if(isset($submit))
{
	$img=$_FILES['img']['name'];
	move_uploaded_file($_FILES['img']['tmp_name'],'image/'.$img);
	$inserts="insert into register values ('','$n','$e','$nm','$p','$img')";
    if($obj->insert($inserts))
	{
		$obj->url("index.php?msg=run");
	}
	else
	{
		echo "your registration is not successfull";
	}


}
?>