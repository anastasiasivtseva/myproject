<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'nastya');
	$query = mysqli_query($con,"DELETE FROM tovari WHERE id ='" . $_POST['id'] . "'");
	header('Location:http:///aa/project/index.php?id='.$_POST['id_user']);
 ?>