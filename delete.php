<?php
include "config.php";

if (isset($_GET['msg'])){
$table = $_GET['table'];
$id = $_GET['id'];
$type = $_GET['type'];
$result = "delete from $table where id = '$id'";
if($obj->edit($result))
{
    $obj->url("admin_data.php?type=$type&msg=run&table=$table");
}
else
{
	echo "Data not updated";
}
}
else {
  echo '<script>alert("Not allowed to update")</script>';
}

?>
