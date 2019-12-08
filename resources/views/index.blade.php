@extends('layouts.base')

@section('content')

<div class="text-center pb-3">
	<h3 class="text-center">
		Bem vindo ao sistema de controle de ACC
	</h3>
</div>
<div class="text-center pb-3">
	<h5>
		Efetue efetue login para utilizar o sistema
	</h5>
	<h5>Não possui conta? <a href="/register">Cadastre-se</a></h5>
</div>
<div class="text-center">
	<img src="img/home.svg" style="height: 300px; width: 300px;">
	<p>
		Neste sistema é possível gerenciar suas horas de Atividades Complementares de Curso
	</p>
</div>

@endsection