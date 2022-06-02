@extends('template')
	
@section('mesa', 'Visualizar - ' . $mesa['id'])

@push('css')
	<style>
		#informacoes {
			display: flex;
			flex-direction: row;
			justify-content: space-between;
		}
	</style>
@endpush

@section('conteudo_principal')
	<div class="jumbotron">

		<!-- TITULO -->
		<div id="informacoes-mesa" class="page-header">
			<div>
				<h1>Mesa: {{$mesa['id']}}</h1>
			</div>
		</div>
		@if ($mesa->status === 1)
			<p>Status: Ocupado</p>
		@elseif ($mesa->status ===0)
			<p>Status: Aberta</p>
		@endif
		<!-- DESCRICAO -->
		<div id="resumo-livro">
			<p>Total a pagar: R$ {{$mesa['total']}}</p>
		</div>
		<table class="table table-hover">
			<thead>
			    <tr>
			    <th>Produtos</th>
				<th>Preço</th>
			    <th width="10%">Opções</th>
			    </tr>
			</thead>
			    <!-- DADOS -->
			<tbody>
				@foreach ($mesa->produtos as $itens)
				<tr>
					<td>{{$itens->nome}}</td>
					<td>R${{$itens->preco}}</td>
					<td><a href="{{route('produto.excluir', ['produtoID' => $itens->id, 'mesaID' => $mesa->id])}}">Remover</a></td>
				</tr>	
				@endforeach	 
			</tbody>
		</table>
		<a href="{{route('produto.index', ['mesaID' => $mesa['id']])}}" class="btn btn-primary">Adicionar produto</a>
		<a href="{{route('mesas.finalizar', ['id' => $mesa['id']])}}" class="btn btn-primary">Finalizar</a>
	</div>
@endsection
