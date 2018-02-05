<?php
	include "pr_connect.php";
	
	// $query = pg_query("select t_asuransi_jiwa_syar.nama_prop,
	// t_asuransi_jiwa_syar.klaim_bruto, t_asuransi_jiwa_syar.kontribusi_bruto,
	// ST_AsGeoJSON(propinsi_2014.geom,4326)
	// from propinsi_2014
	// join t_asuransi_jiwa_syar
	// on t_asuransi_jiwa_syar.kode_prop = propinsi_2014.kode_prop");
	
	//Ini Penting
	// $query = pg_query("SELECT ST_AsGeoJSON(geom) FROM indo_desa_region");
	//
	//
	// while($data = pg_fetch_row($query)) {
	//   foreach ($data as $i => $attr){
	//     // echo $attr.", ";
	//   }
	//   // echo ";";
	// }
	// echo $attr;
	
	$sql = "select ST_asgeojson(geom) AS geometry, gid,nama_kab FROM indonesia_kab";
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
		'gid' => $isinya['gid'],
		'nama_kab' => $isinya['nama_kab'],
		
		)
	);
	array_push($hasil['features'], $features);
	}
	// $data= json_encode($hasil);
	
	?>
		