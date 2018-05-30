<?php 
include("connect.php");
$checkbox1 = $_POST['chk1'];
$regno=$_SESSION['regnu'];
if($_POST["submit"]=="submit")
{
for ($i=0;$i<sizeof($checkbox1);$i++){
$query="INSERT INTO myunits (units,regno) VALUES('".$checkbox1[$i]."','$regno')";
mysql_query($query) or die(mysql_error());
}
?>
<script language="javascript">

window.confirm("units registered successfully, you can now view them");
onconfirm=window.open("units.php", "_self");
</script>
<?php
}

?>