<?php
	require_once 'dbconf.php';
	function AddData($connect,$username,$password,$email){
		try {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
			$sql = "INSERT INTO user VALUES('$username','$hashed_password','$email')";
			$result = mysqli_query($connect,$sql);
			if ($result) {
				
			} else {
				die("Error ".mysqli_error($connect));
			}
            header('Location: ../index.html');
            exit;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		AddData($connect,$username,$password,$email);
	}

	?>