@extends('layouts.base_acc')

@section('conteudo')

<form action="{{url('horas/'.$acc->id)}}" method="POST">
	@csrf
	<input type="hidden" name="_method" value="PUT">
	<div class="form-group">
		<label for="nome">Tipo de ACC</label>
		<input type="text" class="form-control" id="nome" name="nome" value="{{$acc->nome}}">
	</div>
	<div class="form-group">
		<label for="limiteHoras">Limite Máximo de Horas</label>
		<input type="number" class="form-control" id="limiteHoras" name="limiteHoras" value="{{$acc->limiteHoras}}">
	</div>
	<div class="form-group">
		<label for="horas">Horas Certificadas</label>
		<input type="number" class="form-control" id="horas" name="horas" value="{{$acc->horas}}">
	</div>
	<input type="hidden" name="id_user" value="{{Auth::user()->id}}">
	<div class="pb-2 col-sm-12 col-md-6 offset-md-3">
		<button type="submit" class="btn btn-primary btn-block">Salvar</button>
	</div>
</form>

@if(isset($errors))
	@if($errors->any())
		@foreach($errors->all() as $error)
			<div class="row">
				<div class="col-sm-12 col-md-6 offset-md-3">
					<div class="text-center alert alert-danger pt-2" role="alert">
					  {{$error}}
					</div>
				</div>
			</div>
		@endforeach
	@endif
@endif

@endsection