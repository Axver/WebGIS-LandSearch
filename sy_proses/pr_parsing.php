<?php
	$url=file_get_contents("http://localhost/magang_1/sy_proses/pr_getdata.php");
	# url yang ada di dalam ("") itu link address dari halaman GeoJSON.. jangan lupa hapus bagian &maxFeatures=50
	echo($url);
?>
