<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'nastya');
	$query = mysqli_query($con, "INSERT INTO tovari(tov_name, cat, tov_text, img, price, id_user) VALUES ('". $_POST['tov_name'] . "','". $_POST['cat'] . "','". $_POST['tov_text'] . "', 'img/". $_FILES['img']['name'] ."' ,'". $_POST['price'] . "', '". $_POST['id_user'] ."') ");
	move_uploaded_file($_FILES['img']['tmp_name'], 'img/' . $_FILES['img']['name']);
	header('Location:http://aa/project/index.php?id='.$_POST['id_user']);
 ?>