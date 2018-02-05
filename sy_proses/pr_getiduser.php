<?php
	include "../sy_proses/pr_connect.php";
	session_start();
	
	$username=$_SESSION['username'];
	
	$query=pg_query($conn,"SELECT id FROM userinfo WHERE username='$username'");
	// echo $username;
	$val = pg_fetch_result($query,0,0);
	// echo $val;
	
	
	
?>
