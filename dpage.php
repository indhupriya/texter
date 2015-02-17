<html>
<body>
<?php
session_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="blog"; // Database name 
$tbl_name="articles"; // Table name 
$qwerty=$_SESSION['varname'];
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
while($row = mysql_fetch_array($result)) {
echo "<html>";
    echo "<fieldset>";
    echo "<legend><h2>";
    echo $row['user'];
    echo "</h2></legend>";
    echo " ";
     // echo "says:";
    //echo "<h2>";
    
   echo $row['articles'];
    echo "</fieldset>";
   //echo "<hr>";
  echo "<br>";
    echo "</html>";
}
?>
</body>
    </html>