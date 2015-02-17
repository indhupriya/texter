<html>
<body>
<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="blog"; // Database name 
$tbl_name="users"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];
$sql="INSERT INTO users values('$myusername','$mypassword')";
if(mysql_query($sql)){
header("location:successfulup.php");
}
else {
    header("location:unsuccessfulup.php");
}
?>
</body>
</html>