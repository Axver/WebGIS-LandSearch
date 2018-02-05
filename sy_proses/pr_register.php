<?php
	include "pr_connect.php";
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$role=$_POST['role'];
	
	echo $username;
	echo $password;
	echo $role;
	
	
	$sql = "INSERT INTO userinfo(username, password, role) VALUES ( '$username', '$password', '$role')";
	$result = pg_query($sql);
	
	if($result)
	{
		echo "Register Berhasil";
		header("../loginpage.php");
	}
	else {
		echo "Register Gagal";
		header("../registerpage.php");
	}
	
	
?>
