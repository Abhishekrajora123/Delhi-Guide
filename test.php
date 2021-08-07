<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><?php
    if ($_GET['id'] == "5") {
      echo $_GET['id'];
      echo "Yes it is 5";
    }
    elseif ($_GET['id'] == "4")  {
    	echo $_GET['id'];
      echo "It is 4";
    }
    ?>
  </h1>
  </body>
</html>
