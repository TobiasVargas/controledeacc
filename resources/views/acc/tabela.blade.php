@extends('layouts.base_acc')

@section('conteudo')

<!--verificar se há algo cadastrado -->

<!--se tiver cria a tabela -->
	<h4 class="text-center pt-2">Tabela de Horas</h4>
	<div class="pb-2">
				<a href="/horas/new" class="btn btn-secondary">Nova ACC</a>
			</div>

		<table class="table">
				<thead>
					<tr>
						<th scope="col">Tipo de ACC</th>
						<th scope="col">Horas</th>
						<th scope="col">Situação</th>
						<th scope="col">Operações</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Projetos de Pesquisa</td>
						<td></td>
						<td></td>
						<td>
							<button class="btn btn-secondary">Editar</button>
							<button class="btn btn-danger">Excluir</button>
						</td>
					</tr>
				</tbody>
			</table>

@endsection