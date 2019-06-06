<?php
	$con = mysqli_connect('127.0.0.1', 'root', '', 'nastya');
	$query = mysqli_query($con, "INSERT INTO users ( name, city, number, password) VALUES ('".$_POST['name']."', '".$_POST['city']."', '".$_POST['number']."' , '".$_POST['password']."') ");
	header('Location:http://aa/project/index.php');
?>
