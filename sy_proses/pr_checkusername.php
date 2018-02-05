<?php
	
	
	include "pr_connect.php";
	$sql = "select username FROM userinfo";
	$result = pg_query($sql);
	$arr = pg_fetch_all($result);
	// print_r($arr);
	
	$arrayuser=array();
	$i=0;
	foreach($arr as $item)
	{
		$arrayuser[$i]=$item['username'];
		$i++;
		
	}
	
	// for ($i=0; $i <count($arrayuser) ; $i++) {
	//   echo $arrayuser[$i];
	//
	// }
	
	
	
?>
