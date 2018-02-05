<?php
	
	include "pr_getiduser.php";
	$query1=pg_query($conn,"SELECT pesan FROM chat WHERE id_pengirim='$val' OR id_penerima='$val'");
	$arr = pg_fetch_all($query1);
	
	
	// echo $arr['pesan'];
	//
	// print_r($arr);
	// foreach($arr as $item)
	// {
	//             echo "user".$item['pesan'];
	//
	// }
	
	
	
?>
