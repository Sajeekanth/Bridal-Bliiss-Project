<?php
	require_once 'dbconf.php';
	function AddData($connect,$name,$connect_number,$email,$date,$wedding_plan,$food_combo,$Number_of_Guests){
		try {
           
			$sql = "INSERT INTO user VALUES('$name','$connect_number','$email','$date','$wedding_plan','$food_combo','$Number_of_Guests')";
			$result = mysqli_query($connect,$sql);
			if ($result) {
				
			} else {
				die("Error ".mysqli_error($connect));
			}
            header('Location: ../samudrareservation.html');
            exit;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$name = $_POST['name'];
		$connect_number =$_POST['connect_number'];
		$email = $_POST['email'];
		$date = $_POST['date'];
		$wedding_plan = $_POST['wedding_	plan'];
		$food_combo = $_POST['food_combo'];
		$cockt_menu = $_POST['cockt_menu'];
		$Number_of_Guests = $_POST['Number_of_Guests'];
		AddData($connect,$name,$connect_number,$email,$date,$wedding_plan,$food_combo,$Number_of_Guests);
	}

	?>