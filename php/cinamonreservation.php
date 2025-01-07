<?php
	require_once 'dbconf.php';
	function AddData($connect,$name,$connect_number,$email,$date,$wedding_plan,$food_combo,$cockt_menu,$Number_of_Guests){
		try {
           
			$sql = "INSERT INTO cinamonreservation VALUES('$name','$connect_number','$email','$date','$wedding_plan','$cockt_menu','$food_combo','$Number_of_Guests')";
			$result = mysqli_query($connect,$sql);
			if ($result) {
                                                                    
			} else {
				die("Error ".mysqli_error($connect));
			}
            header('Location: ../cinamonreservation.html');
            exit;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$name = $_POST['Name'];
		$connect_number =$_POST['Contact_Number'];
		$email = $_POST['mail'];
		$date = $_POST['Date'];
		$wedding_plan = $_POST['hall'];
		$food_combo = $_POST['food'];
		$cockt_menu = $_POST['cook'];
		$Number_of_Guests = $_POST['count'];
		AddData($connect,$name,$connect_number,$email,$date,$wedding_plan,$food_combo,$cockt_menu,$Number_of_Guests);
	}

	?>