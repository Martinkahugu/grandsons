




<html>
<head>
    <title>maseno kushpedia </title>
    <link rel="stylesheet" href="styles/style1.css" type="text/css" />
    <style>
	#me{
	-moz-border-radius:50px;
    -webkit-border-radius:50px;
    border-radius:50px;
    overflow:hidden;
	width:9%;
	height:20%;}
	
	#picture{
	-moz-border-radius:50px;
    -webkit-border-radius:50px;
    border-radius:50px;
    overflow:hidden;
	width:10%;
	height:18%;
	
	}
	#table{
	margin-left:20%;
	}
	</style>
    </head>
<body>

    <div>
        <div id="wrapper">


              <div id="banner">
			 <?php
			 session_start();
			 $first=$_SESSION['fname'];
			 $last=$_SESSION['sname'];
			 $pic=$_SESSION['pick'];
			 
			 echo ("<img src='pictures/%20$pic' width='60px' height='60px' id='picture'>");
			 echo $first;
			 echo "&nbsp;&nbsp;";
			 echo $last;
			 
			 
			 
			 ?>
                
              </div>
            <div id="navigation" align="justify">

                <ul id="nav">
                    <li><a href="home.php">Home</a></li>
                  
	
					     
                </ul>
            </div>
			<?php
if(isset($_REQUEST['remove2']))
{
$erasor=$_REQUEST['id'];
$connect=mysql_connect('localhost','root','');
if(!$connect) 
{
die('Database connection was not possible!');
}
$select=mysql_select_db('datadriven');
if(!$select)
{
die('Selection of the database was not possible!');}
else
{
$data=mysql_query("DELETE FROM myunits WHERE id=$erasor");}

if(!$data)
{
echo($delete2);
}
}
?>
            <div id="content">

                 
			
				 
				 


<?php

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
<font color="#000099" size="+2"><em><i><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;registered units</b></i></em></font>
<table><tr align="left"><td><table id="table" border="">

<?php
$regno=$_SESSION['regnu'];
$data=mysql_query("SELECT * FROM myunits WHERE regno='$regno'");
if(!$data)
{
die("Selection from your table has failed!!!!!!!!");
}
$count=@mysql_numrows($data);
 while($values=mysql_fetch_array($data))
 {
 ?>
 <tr><td>
 <?php
 $units=$values['units'];
 $reg=$values['regno'];
 echo $units;
 $id=$values['id'];
 ?>
 </td><td>
 <form method="post" action="units.php?id=<?php echo($id); ?>" enctype="multipart/form-data">
<input type="submit" value="REMOVE" name="remove2" ></form>
 
 
 </td></tr><?php
}

?>
</table>		</td><td>      
<?php
$data=mysql_query("SELECT * FROM student WHERE regno='$reg'");
if(!$data)
{
die("Selection from your table has failed!!!!!!!!");
}
$count=@mysql_numrows($data);
 while($values=mysql_fetch_array($data))
 {
 ?>
 
 <?php
 $regno=$values['regno'];
 $fname=$values['fname'];
 $sname=$values['sname'];
 $phone=$values['phone'];
 $email=$values['email'];
 $year=$values['year'];
 $semester=$values['semester'];
 echo "<font color='#000099' size='+2'><em><i><b>PERSONAL DETAILS</b></i></em></font>";
 
 echo "<table id='' border=''><tr><td>FULL NAME</td><td><font color='#000099'><b>";
 echo $fname;
echo "&nbsp;&nbsp;&nbsp;&nbsp;";
 echo $sname;
  echo "</b></font></td></tr>";
 
  
  echo "<tr><td>REGISTRATION NO.</td><td><font color='#000099'><b>";
  echo $regno;
 echo "</td></tr>";
  echo "<tr><td>PHONE NO.</td><td><font color='#000099'><b>";
   echo $phone;
   echo "</b></font></td></tr>";
   echo "<tr><td>EMAIL</td><td><font color='#000099'><b>";
    echo $email;
	echo "</b></font></td></tr>";
	echo "<tr><td>YEAR OF STUDY</td><td><font color='#000099'><b>";
	 echo $year;
	 echo "</b></font></td></tr>";
	 echo "<tr><td>CURRENT SEMESTER</td><td><font color='#000099'><b>";
	  echo $semester;
echo "</b></font></td></tr></table>";
 
}

?>		 
		</td></tr></table>		 
				 

            </div>
			
        </div>
    </div>
   
</body>
</html>



















