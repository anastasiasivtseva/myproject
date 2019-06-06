<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'nastya');

	$que = mysqli_query($con, "SELECT * FROM users WHERE number = '" . $_POST['number'] . "' AND password = '" . $_POST['password'] . "' ");
	$result = $que->fetch_assoc();

	if($result['number'] == $_POST['number'] && $result['password'] == $_POST['password']){;
		header('Location:http://aa/project/index.php?id='.$result['id']);
	}else{
		header('Location:http://aa/project/auto.php?text=Неправильный логин или пароль!');
	};
?>