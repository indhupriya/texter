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
$title=$_POST['delbtn'];

// Connect to server and select databse.
$con=mysql_connect("$host", "$username1", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
    $title=explode(" ",$title);
    $title[0]="";
    $title=implode(" ",$title);
$title=trim($title);
    //echo "$title";
$sql = "DELETE from $tbl_name ".
       "WHERE title = '$title'" ;
    mysql_query($sql,$con);
 header('location: index (2).php');
mysql_close($con);
?>
</body>
</html>
