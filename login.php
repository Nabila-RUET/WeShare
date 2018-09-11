<?php
session_start();
$username= $_POST['username'];
$password = $_POST['password'];

if($username && $password)
{
	 
$connect = mysql_connect("localhost","root","") or die("couldn't connect!!"); 	
mysql_select_db("phplogin") or die("couldn't find db");

 $query = mysql_query("SELECT * FROM user WHERE Email='$username'");//1 ta row match korse.
 $numrow = mysql_num_rows($query);
 if($numrow!=0)
 {
	 while($row=mysql_fetch_assoc($query))
	 {
		$dbusername= $row['Email'];//match with column name as Email.
		$dbpassword= $row['password'];
	 }
	 //check to see if they match
	 if($username==$dbusername && $password==$dbpassword)
	 {
		echo "You are in!!! <a href='member.php'> Click</a> here to enter the member page";
       $_SESSION['myname']=$dbusername;		
	 } 
	 else
		 echo "Incorrect password";
 
 }
 else
	 die("That user does not exist!!!!");
 
}
else
die("please Enter Email and password!");

?>