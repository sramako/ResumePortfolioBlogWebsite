<?php
session_start();
ob_start();
extract($_REQUEST);
$link=mysqli_connect("localhost","root","");
	if(!$link)
		die(mysql_error());
	mysqli_select_db($link,"users");
	
	$sql="insert into cred(email,password) values ('$email','$psw')";
	$ret=mysqli_query($link,$sql);
	if(! $ret )
{
  die('Could not enter data: ' . mysqli_error($link));
}
$_SESSION['set']=2;
echo "\nRegistered successfully\n.Login to continue\n";	
header("Location: login.php");
mysqli_close($link);
?>
