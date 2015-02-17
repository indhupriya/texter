<!DOCTYPE html>
<html>
<body>

<div id="container" style="width:1349px" height="667px">

<div id="header" style="background-color:#FFA500;">
<h1 style="margin-bottom:0;">Login</h1></div>

<div id="menu" style="background-color:#FFD700;height:550px;width:250px;float:left;">
</div>

<div id="content" style="background-color:#EEEEEE;height:550px;width:1099px;float:left;">
<div id="header2" style="background-color:#FFA500;float:top;text-align:center">
<h2 style="margin-bottom:0;">Already a User?</h2>
<h3 style="margin-bottom:0;">Sign IN</h3>
</div>
<div id="SignIndata" style="height:140px">
<div id="Text" style="background-color:#EEEEEE;width:100px;height:100px;float:left;text-align:center;">
<br><br>
<b>Username:<b><br>
<b>Password:<b>
</div>
<div id="Boxes" style="width:600px;height:100px;float:left ">
<form method="post" action="checklogin.php">
<br><br>
<input type="text" name="myusername" id="myusername"><br>
<input type="password" name="mypassword" id="mypassword"><br>
<input type="submit" value="Login">
</form>
</div>
</div>
<div id="header3" style="background-color:#FFA500;float:top;text-align:center">
<h2 style="margin-bottom:0;">New User?</h2>
<h3 style="margin-bottom:0;">Sign UP</h3>
</div>
<div style="Height:230px;">
<div id="Text" style="background-color:#EEEEEE;width:100px;height:100px;float:left;text-align:center;">
<br><br>
<b>Name:</b><br>
<b>Username:<b><br>
<b>Email-ID:</b>
<b>Password:<b><br>
<b>Confirm Password:</b>
</div>
<div id="Boxes" style="width:600px;height:100px;float:left ">
<form>
<br><br>
<input type="text" id="name"><br>
<input type="text" id="uname"><br>
<input type="text" id="email"><br>
<input type="password" id="pass"><br>
<input type="password" id="cpass"><br>
<input type="submit" value="Sign UP!">
</form>
</div>
</div>
</div>
<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
Copyright © KINS
</div>
</body>
</html>