<html>
<head>




<script language="javascript">
function back(i)
{
if(i.value=="")
{
i.value=i.defaultValue;
i.style.color="#888888";
}
}
</script>
<script language="javascript">
function erase(i)
{
if(i.value==i.defaultValue)
{
i.value="";
i.style.color="#000000";
}
}
</script>

<style type="text/css">

table.content3{border:2px solid #ff00cc;background-color:#99FFCC;border-top-left-radius:4px;padding:4px;
border-bottom-right-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;
-moz-border-top-left-radius:4px;-moz-border-top-right-radius:4px;-moz-border-bottom-left-radius:4px;
-moz-border-bottom-right-radius:4px;-webkit-border-top-left-radius:4px;-webkit-border-top-right-radius:4px;-webkit-border-bottom-left-radius:4px;
-webkit-border-bottom-right-radius:4px;}

#nav1
{
margin-top:15px;
}

#nav1 ul
{
list-style:none;
float:left;
margin:0;
padding:0;
width:100%;
position:relative;
}

#nav1 ul a
{
display:block;
font-weight:bold;
padding:5px;
color:#333;
font-weight:700;
line-height:32px;
text-decoration:none;
}

#nav1 ul li
{
position:relative;
float:left;
margin-bottom:0;
margin-left:100;
padding:0;
}

#nav1 ul li.drop
{
background:#ddd;
}

#nav1 ul li:hover
{
background:#f6f6f6;
}

#nav1 ul ul
{
display:none;
position:absolute;
padding:0;
top:100%;
right:132%;
color:#fff;
}

#navi ul ul li
{
	float:none;
	width:50px;

}

#nav1 ul ul a
{
	line-height:120%;
	padding:10px 15px
}

#nav1 ul ul ul
{
	top:0;
	left:100%
}

#nav1 ul li:hover > ul
{
	display:block
}
</style>
<link rel="stylesheet" href="styles/style1.css" type="text/css" />
<title>
uss home</title>

<style>


a:link {
color:#FFFFFF;
}
a:visited {
color:#00FF00;}
a:active {
font-size:16px;}
A:hover {color:#9900FF;font-size:16px}


#body{
margin-left:5%;
width:85%;
height:125%;
background-color:#33CCFF;
box-shadow:4px 4px 4px  #000000;
float:center;
}
#logopic{
width:100%;
height:25%;
}

</style>

</head>


<body>
<div id="wrapper">
<img src="pictures/barner.jpg" width="100%" height="2%">
 <div id="navigation" align="justify">

                <ul id="nav">
                    <li><a href="home.php">Home</a></li>
                   
					     
                </ul>
            </div>

<div>

<table align="center" valign="top" cellspacing="0" width=85% style="margin-right:10px;margin-top:15px;">
<tr>
<td>

</td>
</tr>

<form name="registration" method="post" action="register.php" enctype="multipart/form-data">

<table class="content3" cellspacing="0" cellpadding="3" width="75%" height="500">
<tr>
<td align="center"><b><u>SEMESTER REGISTRATION</td></b></u>
</td>
<tr><td>FIRST NAME</td>
<td align="left"><label class="fields" for="fname"></label><input type="text" name="fname"  onFocus="erase(this)" onBlur="back(this)" size="30" style="color:#888;height:30px;font-size:16pt;" required>
</td>
</tr>
<tr><td>SECOND NAME</td>
<td><label class="fields" for="lname"></label><input type="text" onFocus="erase(this)" onBlur="back(this)" name="lname" size="30" style="color:#888;height:30px;font-size:16pt;" required>
</td>
</tr>
<tr><td>REGISTRATION NUMBER</td>
<td><label class="fields" for="email"></label><input type="text" onFocus="erase(this)" onBlur="back(this)" name="regno" size="30" style="color:#888;height:30px;font-size:16pt;" required>e.g CI/00045/012
</td>
</tr>
<tr><td>ENTER PHONE NUMBER</td>
<td><label class="fields" for="pnumber"></label><input type="text"  onFocus="erase(this)" onBlur="back(this)" name="phone_number" size="30" style="color:#888;height:30px;font-size:16pt;" required>
</td>
</tr>
<tr><td>ENTER YOUR EMAIL</td>
<td align="left"><b><br><input type="text" name="email" id="username" value="  enter you email" onFocus="erase(this);empty2()" onBlur="back(this);check()" size="30" style="color:#888;height:30px;font-size:16pt;" required></b>
</td>
</tr>

<tr>
<td>CHOOSE YOUR YEAR OF STUDY<select name="year">
<option value="year one">YEAR ONE</option>
<option value="year two">YEAR TWO</option>
<option value="year three">YEAR THREE</option>
<option value="year four">YEAR FOUR</option>
</select>
</td>
</tr><tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;YOUR CURRENT SEMESTER<select name="semester">
<option value="semester one">SEM ONE</option>
<option value="semester two">SEM TWO</option>
</select>
</td>
</tr>




<tr>
<td align="center">
<font color="red"><div id="main" ></div></font>
</td>
</tr>
<tr>
<td><label class="fields" for="pass">SET A PASSWORD</label><input type="password" onFocus="erase(this)" onBlur="back(this)" name="password" size="30" style="color:#888;height:30px;font-size:16pt;" required>
</td>
</tr>

<tr>
<td align="center"><b>Set a profile picture<br><input type="file" name="file" id="file" required></b>
</td>
</tr>
<tr>
<td align="center" rowspan="2"><input type="submit" name="submit" value="SIGN UP">
</td>
</tr>
</form>
</table>
</td>
</tr>
</table>

</div>
</div>

</body>
</html>