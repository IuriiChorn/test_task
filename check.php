<?php 
	require_once "config.php";

	$errors	= array();
	$userData = array();
	$data	= array();
	
	$id = 0;
	
	if(isset($_POST['name'], $_POST['pass'])) {
		$name = $_POST['name'];
		$pass = null;

		$dbcon = new PDO($db_connection, $user_connection, $pass_connection);

		foreach($dbcon->query("SELECT * from user WHERE name = '$name'") as $row) {
				$pass = $row['pass'];
				$id = $row['user_id'];
       	}

       	if($pass != null){

       		if ($pass == $_POST['pass']) {
       			$i = 0;
       			foreach ($dbcon->query("SELECT * from user_data WHERE user_id = '$id'") as $row) {
       				$userData[$i] = $row['data_value'];
       				$i++;
       			}

			}

			else {
				$errors['pass'] = 'Wrong password for ' . $name;
			}

       	}

		else {
			$errors['name'] = 'Not user whith name '.$name;			
		}
	}

	if (empty($_POST['name']))
		$errors['name'] = 'Enter some name.';

	if (empty($_POST['pass']))
		$errors['pass'] = 'Password is missed.';

	if (!empty($errors)) {
		$data['result'] = false;
		$data['errors'] = $errors;
	}
	else {
		$data['result'] = true;
		$data['message'] = 'Data received';
		$data['user_data'] = $userData;
		
	}

	echo json_encode($data);

?>