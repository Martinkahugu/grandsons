


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
                    <li><a href="signup.php">Signup</a></li>
                    <li><a href="login.php">login</a></li>
                    <li><a href="unitsregistration.php">units registration</a></li>
					   <li><a href="units.php">registered units</a></li>
	
					     
                </ul>
            </div>
            <div id="content">

                 
				<img src="pictures/house.jpg" width="100%"/>
				 
				 
				 
				 
				 

            </div>
        </div>
    </div>
   
</body>
</html>
