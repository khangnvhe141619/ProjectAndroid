<?php
	require "connect.php";
	class BaiHat{
		function Baihat($idbaihat, $tenabihat, $hinhbaihat, $casi, $linkbaihat, $luotthich){
			$this->Idbaihat = $idbaihat;
			$this->Tenbaihat = $tenabihat;
			$this->Hinhbaihat = $hinhbaihat;
			$this->Casi = $casi;
			$this->Linkbaihat = $linkbaihat;
			$this->Luotthich = $luotthich;
	}
}
	$arraycasi = array();
	$query = "SELECT * FROM baihat ORDER BY Luotthich DESC LIMIT 5";	 
	$data = mysqli_query($con,$query);	
	while ($row = mysqli_fetch_assoc($data)) {
		array_push($arraycasi, new BaiHat($row['IdBaiHat']
												   ,$row['TenBaiHat']
													,$row['HinhBaiHat']
													,$row['CaSi']
													,$row['LinkBaiHat']
													,$row['LuotThich']));
	}
	echo json_encode($arraycasi);

?>