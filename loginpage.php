<!DOCTYPE html>
<html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<!-- Latest compiled JavaScript -->
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script>
			
			function redirectdaftar()
			{
				window.location.href = "../magang_1/registerpage.php";
			}
			
		</script>
		<meta charset="utf-8">
		<title>Login</title>
		<style media="screen">
			
		</style>
	</head>
	
	<body style="background-color: #ffffb3; margin-top: 100px" >
		
		<div class="container" align="center" >
			
			<div class="row" style="position: center">
				<div class="col-sm-3">
					
				</div>
				<div class="col-sm-3" >
				<div id="login"  class="panel panel-info" style=" margin-left:90px; width:400px;">
                <div class="panel-head" style="background-color: #cc9900; ">
				<h1 style="text-align:center; color:white; font-family: 'Freestyle Script'; font-size: 60px;"><b>  Andaland </b> </h1>
                </div>
				
                <div style="background-color: lightyellow ; height: 280px;" class="panel-body">
				
				<form action="sy_proses/pr_login.php" method="post">
				<div class="form-group">
				<label for="email"></label>
				<input type="text" class="form-control" name="username" id="email" placeholder="Username">
				</div>
				<div class="form-group">
				<label for="pwd"></label>
				<input type="password" name="password"class="form-control" id="pwd" placeholder="Password">
				</div>
				<div class="checkbox" align="left">
				<label ><input type="checkbox"> Remember me</label>
				</div>
				<button type="submit" class="btn btn-default" style="background-color: #cc9900;">Submit</button>
				</form>
				<br>
				<p class="text--center" align="left">Don't have an account? <a onclick="redirectdaftar()" href="#">Sign up now</a></p>
                </div>
				
				
				
				</div>
				</div>
				<div class="col-sm-3">
				
				</div>
				</div>
				
				
				</div>
				
				</body>
				</html>
								