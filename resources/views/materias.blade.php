@extends('master')

@section('titulo')
	<h2>Lista de materias de {{$mat[0]->nombre_carrera}} </h2>
	<hr>
@stop
@section('contenido')
<table class="table table-active">
	<tr class="bg-success">
		<th>Clave</th>
		<th>Nombre </th>
		<th> Temario </th>
	</tr>
	@foreach($mat as $m)
			<tr>
				<td>{{$m->id_materia}}</td>
				<td>{{$m->nombre_mat}}</td>
				<td><a href="{{url('/alumnosPDF')}}">
		<span class="glyphicon glyphicon-file" aria-hidden="true"></span>
	</a></td>
			</tr>
	@endforeach
</table>
@stop