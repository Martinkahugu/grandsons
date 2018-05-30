<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<font size="+2" color="#FF0000"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOGIN PANEL</font>
<head>




<style>
body{
background-color:#333333;}




#wrapper{
margin:15%;
    -moz-border-radius:25px;
    -webkit-border-radius:25px;
    border-radius:25px;
    overflow:hidden;
	background-color:#CCCCCC;
	width:40%;
	height:40%;
     
}
#form,#paswd{
margin:2%;}
input#tb2{
background:#999999;
width:100%;
height:30px;
-moz-border-radius:15px;
    -webkit-border-radius:15px;
    border-radius:15px;
    overflow:hidden;


}
input#submit2{
background:#999999;
-moz-border-radius:25px;
    -webkit-border-radius:25px;
    border-radius:25px;
    overflow:hidden;
	width:70%;
}
#paswd a{
text-decoration:none;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> admins page</title>


</head>

<body>




<div id="panel">
</div>

<div id="wrapper">

<div id="form">


<form action="studentlogin.php" method="post" enctype="multipart/form-data">
<table>
<tr><td>Username</td><td><input id="tb2" type="text" name="user"/></td><font color="#FF0000">if your username is not working ,use your email.</font></tr>
<tr></tr>
<tr><td>Password</td><td><input  id="tb2"type="password" name="pass" /></td></tr>
<tr></tr>
<tr> <td></td><td><input id="submit2" type="submit"name="submit" value="LOGIN"/></td></tr>

</table>
</form></div>
<div id="paswd" align="right"> <a href="testpas.php">Forgot Password?</div>
</div>
</body>
</html>
