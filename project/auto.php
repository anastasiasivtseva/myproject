<!DOCTYPE html>
<html>
<head>
	<title>Авторизация</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<meta charset="utf-8">
</head>
<body>
	<!--header-->
	<div class="container-fluid" style="height: 100px;">
		<!--navbar-->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    	<ul class="navbar-nav mr-auto">
		      		<li class="nav-item">
		        		<a class="nav-link" href="index.php">Главная</a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="reg.php">Регистрация</a>
		      		</li>
		      		<li class="nav-item active">
		        		<a class="nav-link" href="auto.php">Авторизация <span class="sr-only">(current)</span></a>
		      		</li>
		      		<li class="nav-item dropdown">
		        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          			Поиск по категориям
		        		</a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				        	<?php 
				        		$con = mysqli_connect('127.0.0.1', 'root', '', 'nastya');
				        		$query = mysqli_query($con, "SELECT * FROM cat");
				        		for ($i=0; $i < $query->num_rows; $i++) { 
									$result = $query->fetch_assoc();
				        	 ?>
				          	<a class="dropdown-item"> <?php echo $result['cat_name']; ?> </a>
				          	<input type="hidden" name="id" value=" <?php echo $result['id'] ?> ">
				          <?php } ?>
				        </div>
		      		</li>
		    	</ul>
		    	<form class="form-inline my-2 my-lg-0">
		      		<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    	</form>
		  	</div>
		</nav>
	</div>

	<div class="row">
		<div class="col-3">
			
		</div>
		<div class="col-6 border">
			<form method="POST" action="autob.php">
		  	
		  	<div class="form-group">
		    	<label for="exampleInputEmail1">Ваш номер телефона</label>
		    	<input name="number" class="form-control" placeholder="Enter your number">
		  	</div>
		  	<div class="form-group">
		    	<label for="exampleInputPassword1">Ваш пароль</label>
		    	<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  	</div>
		  	<button type="submit" class="btn btn-primary">ok</button>

			</form>
		</div>
		<div class="col-3">

		</div>
	</div>
</body>
</html>