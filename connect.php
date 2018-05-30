<?php 
session_start();

$connection=@mysql_connect("localhost","root","");
if (!$connection)
{
echo ("The database was not able to connect at the moment");
exit();
}
mysql_select_db("datadriven");
if(!@mysql_select_db("datadriven"))
{
die("The selection of your database had a problem");
}
?>