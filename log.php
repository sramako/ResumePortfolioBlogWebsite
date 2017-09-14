<?php
session_start();
ob_start();
extract($_REQUEST);
$link=mysqli_connect("localhost","root",'');
	if(!$link)
		die(mysql_error());
	mysqli_select_db($link,"users");
	
	$sql="select password from cred where email='$email'";
	$ret=mysqli_query($link,$sql);
	if(!$ret)
		die('Could not enter data: ' . mysqli_error($link));
	else
	{
		$p=mysqli_fetch_array($ret);
		if($p[0]!=$psw){
			$_SESSION['set']=1;
			header("Location: login.php");
		}	
		else
		{	
			$_SESSION['em']=$email;
			$_SESSION['set']=0;
			header("Location: home.php");
		}
	}
	
	
?>
