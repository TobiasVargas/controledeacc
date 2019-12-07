@extends('layouts.base_acc')

@section('conteudo')

<div class="pt-2 pb-2">
	<h4 class="text-center">Nova ACC</h4>
</div>

<form>
	<input type="text" name="nome">
	<input type="number" name="limite_horas">
	<input type="number" name="horas">
	<input type="hidden" name="id_user" value="{{Auth::user()->id}}">

</form>

@endsection