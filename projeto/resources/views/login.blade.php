<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema</title>
	
	<!-- JQUERY -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>	

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/custom.css">
	<script src="assets/js/bootstrap.min.js"></script>

	<style type="text/css">
		body {
			background-image: url('assets/img/background.jpg');
		}

		#login {
			color: white;
			position: absolute;
			top: 25%;
			left: 25%;
			width: 50%;
		}

	</style>
</head>
<body>

	<div id="login">
			<h1>Login</h1>


			<!-- LOGIN ou SENHA INCORRETA -->
				<div class="alert alert-danger">
					<strong>Erro!</strong> Login ou Senha Incorreta
				</div>
				<!-- FIM [LOGIN OU SENHA INCORRETA] -->

			<form action="{{url('login')}}" method="post">
				@csrf
			  	<div class="form-group">
			    	<label for="campo-email">Email:</label>
			    	<input type="email" class="form-control" name="email" id="campo-email">
			  	</div>

			  	<div class="form-group">
			    	<label for="campo-senha">Senha:</label>
			    	<input type="password" class="form-control" name="senha" id="campo-senha">
			  	</div>
  				
  				<button type="submit" class="btn btn-default">Logar	</button>
				<a href="/cadastrar">Cadastrar</a>				
			</form>
	</div>
</body>
</html>			
			</form>
	</div>
</body>
</html>