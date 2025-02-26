<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro de ACC</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-grid.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-reboot.min.css')}}">
	<style type="text/css">
		td, th{
			text-align: center;
		}
	</style>
</head>
<body>

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="/">Controle de ACC</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link active" href="/horas">Minhas Horas</a>
					</li>
					<li class="nav-item">
						<form action="{{route('logout')}}" method="POST">
							@csrf
							<input type="submit" class="nav-link btn btn-transparent" value="Sair">
						</form>
					</li>
				</ul>
			</div>
		</nav>

		<div class="container">
		
		<!--abri o formulario de cadastro de uma acc
			
			Nome da ACC
			Limite de horas
			Horas que possui


		-->
		<div id="tabela">

			@yield('conteudo')

		</div>
	</div>

	<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>