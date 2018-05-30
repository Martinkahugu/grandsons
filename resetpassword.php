<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
</head>

<body>



<html>
<head>
<title></title></head><body>
<?php
session_start();

$test1=$_REQUEST['pas1'];
$test2=$_REQUEST['pas2'];
$reg=$_REQUEST['regno'];
$connect=mysql_connect("localhost:3306","root","");
if(!$connect)
{
die('no connection established'.mysql_error());
}
mysql_select_db("datadriven",$connect);
if($test1==$test2)
{
$sql = "UPDATE student SET password='$test1' WHERE regno='$reg'";
$result=mysql_query($sql,$connect)or die('query failed');
if ($result) {
   ?>
<script language="javascript">

window.confirm("password changed successfully, you can now login");
onconfirm=window.open("login.php", "_self");
</script>

<?php

}

 else {
    echo "Error updating record: " . $connect->error;
}
}
else
{
?>
<script language="javascript">

window.confirm("password mismatch");
onconfirm=window.open("admings.php", "_self");
</script>

<?php
}

?>




</body></html>


</body>
</html>
