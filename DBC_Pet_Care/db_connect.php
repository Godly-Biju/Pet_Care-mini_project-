<?php
//DATABASE Name will come here
$database = "dbc_pet_care"; /* Database name */
$host = "localhost";    /* Host name */
$user = "root";         /* User */
$password = "";         /* Password */


$connection=mysql_connect($host,$user,$password);
$db=mysql_select_db($database,$connection);
if (!$db) {
	die("Database connection failed ! >> ".mysqli_connect_error());
}else
{
	session_start();
	//echo "Success";
}
?>