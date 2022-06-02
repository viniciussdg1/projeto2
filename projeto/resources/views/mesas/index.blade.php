@extends('template')
	
@section('mesa', 'Mesas')



@section('conteudo_principal')


			<h1>Mesas</h1>
			
			@if(session('sucesso'))
			<p class="alert alert-success">{{session('sucesso')}}</p>
			@endif

			<table class="table table-hover">
			    <thead>
			      <tr>
			        <th>Numero da Mesa</th>
			        <th width="10%">Opções</th>
			      </tr>
			    </thead>
			    <!-- DADOS -->
			    <tbody>
					@foreach ($mesas as $mesa)
					<tr>
						<td>{{$mesa->id}}</td>
						<td>
							<a href="{{route('mesas.visualizar', ['id' => $mesa->id])}}">Visualizar</a>
							<a href="{{route('mesas.edicao', ['id' => $mesa->id])}}">Editar</a>
						</td>
					</tr>	
					@endforeach	 
			    </tbody>
			    <!-- DADOS [FIM] -->
			</table>
@endsection