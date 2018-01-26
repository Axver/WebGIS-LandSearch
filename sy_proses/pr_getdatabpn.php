<?php
include "pr_connect.php";

$sql = "select ST_asgeojson(geom) AS geometry, sertipikat,ketinggian FROM digitasi_lahan";
$result = pg_query($sql);
$hasil = array(
	'type'	=> 'FeatureCollection',
	'features' => array()
	);

while ($isinya = pg_fetch_assoc($result)) {
	$features = array(
		'type' => 'Feature',
		'geometry' => json_decode($isinya['geometry']),
		'properties' => array(
			'sertipikat' => $isinya['sertipikat'],
			'ketinggian' => $isinya['ketinggian'],


			)
		);
	array_push($hasil['features'], $features);
}
// $data= json_encode($hasil);
// echo $data;

?>
