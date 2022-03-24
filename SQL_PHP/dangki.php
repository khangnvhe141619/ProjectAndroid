<?php
	require "connect.php";
	class Account{
		function Account($idaccount, $username, $password){
			$this->IdAccount = $idaccount;
			$this->Username = $username;
			$this->Password = $password;
	}
}
		$mangaccount = array();
		if(isset($_POST['taikhoan']) && isset($_POST['matkhau'])){
		$taikhoan = $_POST['taikhoan'];
		$matkhau = $_POST['matkhau'];
		$query = "INSERT INTO account (IdAccount, Username, Password) VALUES (NULL, '$taikhoan', '$matkhau');";	

		$data = mysqli_query($con,$query);
		while ($row = mysqli_fetch_assoc($data)) {
		array_push($mangaccount, new Account($row['IdAccount']
												   ,$row['Username']
													,$row['Password']));
	}	
	echo json_encode($mangaccount);
}?>