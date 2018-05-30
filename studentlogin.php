
<?php
session_start();
if(isset($_REQUEST["submit"]))
{
$conn=@mysql_connect('localhost','root','');
if(!$conn) 
{
die('Database connection was not possible!');
}
$select=@mysql_select_db('datadriven');
if(!$select)
{
die('The selection was not possible!');
}
$data=@mysql_query("SELECT * FROM student");
if(!$data)
{
die("Selection from your table has failed!!!!!!!!");
}
$count=@mysql_numrows($data);
}
?>
<?php while($values=mysql_fetch_array($data))
{
 if($values['regno']==$_REQUEST['user'] and $values['password']==$_REQUEST['pass'] or $values['email']==$_REQUEST['user'] )
{
$_SESSION['fname']=$values['fname'];



$_SESSION['sname']=$values['sname'];
$_SESSION['pick']=$values['picture'];
$_SESSION['regnu']=$values['regno'];
$_SESSION['year']=$values['year'];
$_SESSION['semester']=$values['semester'];

?>
<script language="javascript">
window.open("homepage.php", "_self");
</script>

<?php }


else
{ ?>
<script language="javascript">
window.open("homepage.php", "_self");
</script>

<?php
}
?>
<?php } ?>