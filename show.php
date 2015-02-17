<html>
<head>
    <title>
    showpage</title>
    </head>
    <body>
        <?php
session_start();
$host="localhost"; // Host name 
$username1="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="blog"; // Database name 
$tbl_name="articles"; // Table name 
$qwerty=$_SESSION['varname'];
// Connect to server and select databse.
$con=mysql_connect("$host", "$username1", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$myarticle=$_POST['ta'];
$title=$_POST['title'];
$sql="INSERT INTO $tbl_name VALUES('$qwerty','$myarticle','$title')";
if (!mysql_query($sql, $con))
{
    die('Error: ' . mysql_error());
}
else
    header("location:index (2).php");

mysql_close($con)
?>
</body>
</html>