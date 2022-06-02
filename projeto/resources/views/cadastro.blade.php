<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
	
	<!-- JQUERY -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>	
	
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/custom.css">
	<script src="assets/js/bootstrap.min.js"></script>
</head>
<body>

	<!-- BARRA DE NAVEGAÇÃO -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
		
				<!-- SEÇÃO -->
				<li class="dropdown active">
					<a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">Mesas<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/listar">Mesas</a></li>
						<li class="active"><a href="/cadastrar">Cadastrar</a></li>
					</ul>
				</li> 
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>
			</ul>
		</div>
	</nav><br/><br/>
	<!-- FIM BARRA DE NAVEGAÇÃO -->
	
	<div class="container">
	<!-- CONTEUDO PRINCIPAL [INICIO] -->
		
		<h1>Cadastro</h1>

		<!-- ERRO NO CADASTRO -->
		<div class="alert alert-danger">
			<strong>Erro!</strong>
			<p> Preencha corretamente os dados</p>
		</div>
		<!-- [FIM] ERRO -->

		@if($errors->any())
		<!-- ERRO NO CADASTRO -->
		<div class="alert alert-danger">
			<strong>Erro!</strong>
			@foreach($errors->all() as $error)
			<p>{{$error}}</p>
			@endforeach
		</div>
		<!-- [FIM] ERRO -->
		@endif


		<form action="/logar" method="post">
			@csrf
			<div class="form-group">
				<label for="campo-isbn">Nome:</label>
				<input type="text" class="form-control" name="nome" id="nome">
			</div>
			

			<div class="form-group">
				<label for="campo-email">Email:</label>
				<input type="email" class="form-control" name="email" id="campo-email">
			</div>


			<div class="form-group">
				<label for="campo-senha">Senha:</label>
				<input type="password" class="form-control" name="senha" id="celular">
			</div>

			<!-- CATEGORIA -->
			<div class="form-group">
				<label for="campo-categoria">Cargo:</label>
				<select class="form-control" name="cargo" id="campo-cargo">
					<option value="1">Administrador</option>
					<option value="2">Funcionario</option>

				</select>
			</div>

				
			<button type="submit" class="btn btn-default">Cadastrar</button>				
		</form>
	<!-- CONTEUDO PRINCIPAL [FIM] -->
	</div>
	
	<br/>
</body>
</html>
