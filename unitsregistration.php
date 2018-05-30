


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
	#form{
	background-color:#999999;
	width:50%;
	height:100%;
	-moz-border-radius:25px;
    -webkit-border-radius:25px;
    border-radius:25px;
    overflow:hidden;
	margin-left:30%;
	}
	#picture{
	-moz-border-radius:50px;
    -webkit-border-radius:50px;
    border-radius:50px;
    overflow:hidden;
	width:10%;
	height:18%;
	
	}
	#banner{
	background-color:#00CCFF;}
	#wrapper{
	background-color:#00CCFF;
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
			 $reg=$_SESSION['regnu'];
			 
			 echo ("<img src='pictures/%20$pic' width='60px' height='60px' id='picture'>");
			 echo $first;
			 echo "&nbsp;&nbsp;";
			 echo $last;
			 
			 ?>
                
              </div>
            <div id="navigation" align="justify">

                <ul id="nav">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="signup.php">Signup</a></li>
                    <li><a href="login.php">login</a></li>
                    <li><a href="unitsregistration.php">units registration</a></li>
					   <li><a href="units.php">registered units</a></li>
	
					     
                </ul>
            </div>
            <div id="content">
<div align="center" id="form">
                 
			<form action="units2.php" method="post">
			
			
			<table><TR><TD>
			<input type="checkbox" name="chk1[]" value="CIT401 DATA DRIVEN WEBSITES"></TD><TD>CIT 401 DATA DRIVEN WEBSITES</TD></TR>
            <TR><TD><input type="checkbox" name="chk1[]" value="CIT 402 E-COMMERCE"></TD><TD>CIT 402 E-COMMERCE</TD></TR>
			<TR><TD><input type="checkbox" name="chk1[]" value="CIT 403 IT PROJECT1"></TD><TD>CIT 403 IT PROJECT1</TD></TR>
			<TR><TD><input type="checkbox" name="chk1[]" value="CIT 404 MANAGEMENT INFORMATIOM SYSTEMS"></TD><TD>CIT 404 MANAGEMENT INFORMATIOM SYSTEMS</TD></TR>
			<TR><TD><input type="checkbox" name="chk1[]" value="PHP 112 PROGRAMMING JAVA"></TD><TD>PHP 112 PROGRAMMING JAVA</TD></TR>
			<TR><TD><input type="checkbox" name="chk1[]" value="CCS 401 DISTRIBUTED SYSTEM"></TD><TD>CCS 401 DISTRIBUTED SYSTEM</TD></TR>
			<TR><TD><input type="checkbox" name="chk1[]" value="CCS 301 HUMAN COMPUTER INTERACTION"></TD><TD>CCS 301 HUMAN COMPUTER INTERACTION</TD></TR>
			<TR><TD><input type="checkbox" name="chk1[]" value="CIT 412 SYSTEM ANALYSIS AND DESIGN"></TD><TD>CIT 412 SYSTEM ANALYSIS AND DESIGN</TD></TR>
			<TR><TD><input type="checkbox" name="chk1[]" value="CIT 423 NETWORK ADMINISTRATION"></TD><TD>CIT 423 NETWORK ADMINISTRATION</TD></TR>
			<TR><TD>
			<INPUT TYPE="submit" name="submit" VALUE="submit"></TD></TR></table>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			</form>
			
				 </div>
				 
				 
				 
				 

            </div>
        </div>
    </div>
   
</body>
</html>
