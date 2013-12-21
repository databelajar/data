<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
inputkan nama
<form id="form1" name="form1" method="post" action="">
  nama
  <label for="nama"></label>
  <input type="text" name="nama" id="nama" />
  <input type="submit" name="button" id="button" value="Submit" />
</form>
<?php
if($_REQUEST['nama']=="wawan"){
	echo "cowok";
}elseif($_REQUEST['nama']=="asfi"){
	echo "cewek";
}

?>
</body>
</html>
