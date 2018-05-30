


<?php
session_start();
if ($_FILES['file']['error'])
{
echo "error: ".$_FILES['file']['error'];
}
else
{
file_get_contents($_FILES['file']['tmp_name']);
$pictur=$_FILES['file']['type'];
$picture=$_FILES['file']['name'];
$temp=$_FILES['file']['tmp_name'];
$ext=pathinfo($picture,PATHINFO_EXTENSION);
$location=move_uploaded_file($temp,'pictures\ '.$picture);
}
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
if(isset($_POST["submit"]))
{
$LNAME=$_REQUEST["lname"];
$FIRST_NAME=$_REQUEST["fname"];
$REGNO=$_REQUEST["regno"];
$EMAIL=$_REQUEST["email"];
$YEAR=$_REQUEST["year"];
$SEMESTER=$_REQUEST["semester"];
$PHOTOFILE=$picture;
$PHONE=$_REQUEST["phone_number"];
$PASSWORD=$_REQUEST["password"];
$query="INSERT INTO student SET regno='$REGNO',email='$EMAIL', 
fname='$FIRST_NAME',
sname='$LNAME',
year='$YEAR',
semester='$SEMESTER',
picture='$PHOTOFILE',
password='$PASSWORD',
phone='$PHONE'";
$result=mysql_query($query);
}

?>
<?php if($result)
{
?>

<script language="javascript">

window.confirm("Data has been submitted successfully");
onconfirm=window.open("login.php", "_self");
</script>

<?php 
}
 ?>


