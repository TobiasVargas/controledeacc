@extends('layouts.base_acc')

@section('conteudo')

<!--verificar se há algo cadastrado -->

<!--se tiver cria a tabela -->
<h4 class="text-center pt-2">Tabela de Horas</h4>
<div class="pb-2">
	<a href="{{route('horas.create')}}" class="btn btn-secondary">Nova ACC</a>
</div>
@if(count($accs) > 0)
<table class="table">
	<thead>
		<tr>
			<th scope="col">Tipo de ACC</th>
			<th scope="col">Horas</th>
			<th scope="col">Situação</th>
			<th scope="col">Adicionar Horas</th>
			<th scope="col">Operações</th>
		</tr>
	</thead>
	<tbody>
		@foreach($accs as $acc)
		<tr>
			<td>{{$acc->nome}}</td>
			<td>{{$acc->horas}}</td>
			<td>
				@if ($acc->horas >= $acc->limiteHoras)
				Limite atingido
				@else
				Limite ainda não atingido
				@endif
			</td>
			<td>
				<form action="{{url('horas/add/'.$acc->id)}}" method="POST">
					@csrf
					<input type="number" name="add" class="form-control-sm">
					<input type="submit" value="OK" class="btn btn-secondary">
				</form>
			</td>
			<td>
				<form action="{{url('horas/'.$acc->id)}}" method="POST">
					<a class="btn btn-secondary" href="{{url('horas/'.$acc->id.'/edit')}}">Editar</a>
					@csrf
					<input type="hidden" name="_method" value="DELETE">
					<input type="submit" value="Excluir" class="btn btn-danger">
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@else
<div class="text-center">
	<span>Nenhuma ACC Cadastrada!</span>
</div>
@endif

@endsection