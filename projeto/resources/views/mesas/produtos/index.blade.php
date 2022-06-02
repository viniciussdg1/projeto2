@extends('template')
	
@section('Produtos', 'Produtos')



@section('conteudo_principal')


			<h1>Produtos</h1>
			
			@if(session('sucesso'))
			<p class="alert alert-success">{{session('sucesso')}}</p>
			@endif

			<table class="table table-hover">
			    <thead>
			      <tr>
			        <th>Produtos</th>
			        <th width="10%">Opções</th>
			      </tr>
			    </thead>
			    <!-- DADOS -->
			    <tbody>
					@foreach ($produtos as $produto)
					<tr>
						<td>{{$produto->nome}}</td>
						<td>
							<a href="{{route('produto.adicionar', ['mesaID' => $mesaID, 'produtoID' => $produto->id])}}">adicionar</a>
						</td>
					</tr>	
					@endforeach	 
			    </tbody>
			    <!-- DADOS [FIM] -->
			</table>
			<a href="{{route('mesas.visualizar', ['id' => $mesaID])}}" class="btn btn-primary">Voltar mesa</a>
@endsection