<!DOCTYPE html>
<html>
<head>
	<title>Project</title>
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
		      		<li class="nav-item active">
		        		<a class="nav-link" href="index.php">Главная <span class="sr-only">(current)</span></a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="reg.php">Регистрация</a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="auto.php">Авторизация</a>
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
		    	<?php 
		    	$que = mysqli_query($con,"SELECT * FROM users WHERE id = '" . $_GET['id'] . "' ");
				$xx = $que->fetch_assoc();
				echo $xx['name'];
		    	?>
				
		    	<form class="form-inline ml-4 my-2 my-lg-0">
		      		<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    	</form>
		  	</div>
		</nav>
	</div>

	<div class="row">
		<div class="col-3">
			
		</div>
		<div class="col-6">
			<!-- обьявления-->

			<?php 
			$posts = mysqli_query($con, "SELECT * FROM tovari ORDER BY id DESC");

			for($i=0; $i<$posts->num_rows; $i++) {
				$qq = $posts->fetch_assoc();?>
				<div class="card">
    					<?php 
    					if($qq['id_user']==$_GET['id']) { ?>
    					<form action="update.php" method="POST">

    						<img src="<?php echo $qq['img'] ?>" class="card-img-top" alt="...">

    					 	<input type="hidden" name="id" value="<?php echo $qq['id']; ?>">
    					 	<input type="hidden" name="id_user" value="<?php echo $qq['id_user']; ?>">

    					 	<div class="form-group">
		    					<input name="tov_name" class="form-control" value="<?php echo $qq['tov_name']; ?>">
		  					</div>
		  					<div class="form-group">
			    				<input name="tov_text" class="form-control" value="<?php echo $qq['tov_text']; ?>">
							</div>
		  					<div class="form-group">
		    					<input name="price" class="form-control" value="<?php echo $qq['price']; ?>">
		  					</div>
		  					<button type="submit" class="btn btn-primary">change</button>
		  				
    					 </form>
    					 <form action="delete.php" method="POST">
    					 	<input type="hidden" name="id" value="<?php echo $qq['id']; ?>">
    					 	<input type="hidden" name="id_user" value="<?php echo $qq['id_user']; ?>">
    					 	<button type="submit" class="btn btn-primary">delete</button>
    					 </form>

    					<?php }  else {?>
    						<img src="<?php echo $qq['img'] ?>" class="card-img-top" alt="...">
  							<div class="card-body">
    							<h5 class="card-title"><?php echo $qq['tov_name'] ?></h5>
    							<p class="card-text"><?php echo $qq['tov_text'] ?></p>
    							<p class="card-text"><?php echo $qq['price'] ?></p>
    						</div>
    					<?php } ?>
  					
				</div>
			<?php } ?>


		</div>
		<div class="col-3">
			<?php 
			if($_GET['id']==null) { ?>
				<div class="card" style="width: 18rem;">
					<div class="card-body">
				    	<h5 class="card-title">Добавьте ваше обьявление</h5>
				    	<p class="card-text">
				    		Вы можете добавить обьявление только после авторизации, если вы еще не зарегистрированы, можете это сделать перейдя по ссылке ниже.
				    	</p>
				    	<a href="reg.php" class="card-link">Зарегистрироваться</a>
				    	<a href="auto.php" class="card-link">Авторизироваться</a>
					</div>
				</div>
			<?php } else { ?>
				<form method="POST" action="insert.php" enctype="multipart/form-data">
					<div class="card" style="width: 18rem;">
						<div class="card-body">
				    		<h5 class="card-title">Добавьте ваше обьявление</h5>
				    		<div class="form-group">
		    					<label for="exampleInputEmail1">Название</label>
		    					<input name="tov_name" class="form-control" placeholder="name">
		  					</div>
		  					<div class="form-group">
		  						<label for="exampleFormControlSelect1">Категории</label>
			    				<select name="сat" class="form-control" id="exampleFormControlSelect1">
			    					<?php 
				    					$cat = mysqli_query($con,"SELECT * FROM cat"); 
				    					
				    					for ($i=0; $i < $cat->num_rows; $i++) { 
				    						$zz = $cat->fetch_assoc();
				    						echo '<option>'.$zz['cat_name'].'</option>';
				    					}
				    				 ?>
			    				</select>
		  					</div>
		  					<div class="form-group">
		    					<label for="exampleInputEmail1">Описание</label>
		    					<input name="tov_text" class="form-control" placeholder="text">
		  					</div>
		  					<div class="form-group">
		    					<label for="exampleInputEmail1">Картинка</label>
		    					<input name="img" type="file" class="form-control" placeholder="image">
		  					</div>
		  					<div class="form-group">
		    					<label for="exampleInputEmail1">Цена</label>
		    					<input name="price" class="form-control" placeholder="price">
		  					</div>
		  					<div class="form-group">
		    					<input name="id_user" class="form-control" type="hidden" value="<?php echo $xx['id'] ?>">
		  					</div>

		  					<button type="submit" class="btn btn-primary">ok</button>
						</div>

					</div>
				</form>
		<?php } ?>
			
		</div>
	</div>
</body>
</html>