<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'nastya');
	$query = mysqli_query($con, "UPDATE tovari SET tov_text='".$_POST['tov_text']."' , tov_name='".$_POST['tov_name']."', price='".$_POST['price']."' WHERE id='". $_POST['id'] ."'");
	header('Location:http://aa/project/index.php?id='.$_POST['id_user']);
?>