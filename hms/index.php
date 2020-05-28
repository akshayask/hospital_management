<!DOCTYPE html>
<html>
    
<head>
	<title>Go-Hospice</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
	#b1:hover{cursor:pointer;}

</style>
<body style="background:url(images/bg.jpg) no-repeat; background-size:cover;">
<div class="container" style="width:500px; margin-top:100px;">
<div class="card" >
  <div class="card-body">
  			<img src="images/logo.jpg" class="card-img-top" alt="..." >
			<form class="form-group" action="func.php" method="POST">
				<label for="">Username :</label>
				<input type="text" name="username" class="form-control" placeholder="enter username"><br>
				<label for="">Password :</label>
				<input type="password" name="password" class="form-control" placeholder="enter password"><br>
				<center>
				<input type="submit" name="login_submit" class="btn btn-primary" id="b1" value="Submit">
				</center>
			</form>
		</div>
    </div>
</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

