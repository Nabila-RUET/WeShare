<?php
session_start();
//myname a dbusername r value assign hoese
if($_SESSION['myname'])
echo "Welcome, ".$_SESSION['myname']."!<br><a href='logout.php'>Log_Out</a>";
else
	die("YOu must be logged in!!!");
?>