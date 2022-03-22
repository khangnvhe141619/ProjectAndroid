<?php 
	require "connect.php";
	class TheLoai{
		function TheLoai($idtheloai,$idkeychude,$tentheloai,$hinhtheloai){
			$this->IdTheLoai = $idtheloai;
			$this->IdKeychuDe = $idkeychude;
			$this->tenTheLoai = $tentheloai;
			$this->HinhTheLoai = $hinhtheloai;
		}
	}

	$arraytheloai = array();

	$idchude = $_POST['idchude'];
	$querytheloai = "SELECT * FROM theloai WHERE IdChuDe = '$idchude'";
	$datatheloai = mysqli_query($con,$querytheloai);
	while ($row = mysqli_fetch_assoc($datatheloai)) {
		array_push($arraytheloai, new TheLoai($row['IdTheLoai']
											,$row['IdChuDe']
											,$row['TenTheLoai']
											,$row['HinhTheLoai']));
	}

	echo json_encode($arraytheloai);
?>