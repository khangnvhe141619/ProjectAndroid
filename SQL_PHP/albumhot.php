<?php 
	require "connect.php";
	$query = "SELECT DISTINCT * FROM album ORDER BY rand(" . date("ymd") . ") LIMIT 4";
	$dataablum = mysqli_query($con,$query);

	class Album{
		function Album($idalbum,$tenalbum,$tencasialbum,$hinhalbum){
			$this->IdAlbum = $idalbum;
			$this->TenAlbum = $tenalbum;
			$this->TencasiAlbum = $tencasialbum;
			$this->hinhAlbum = $hinhalbum;
		}
	}
	$arrayalbum = array();
	$data = mysqli_query($con, $query);
	while ($row = mysqli_fetch_assoc($dataablum)) {
		array_push($arrayalbum, new Album($row['IdAlbum']
															,$row['TenAlbum']
															,$row['TenCaSiAlbum']
															,$row['hinhAlbum']));
	}
	echo json_encode($arrayalbum);
?>