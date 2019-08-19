@extends('template.layout.app-admin')
    @section('titulo','Unidades')
	@section('conteudo')
	@section('configuracao','active')
    @include('template.layout.header')
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		@include('template.menu.sidebar')
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Unidades</li>
			</ol>
		</div><!--/.row-->
		<br>
			<button class="btn btn-success pull-right">
			<i class="fa fa-home"></i>
			Adicionar Unidade</button>
			<div style="height:55px;"></div>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
						<i class="fa fa-home"></i>
						Unidades</div>
						<div class="panel-body">
						<table class="display list" style="width:100%">
							<thead>
								<tr>
									<th>Nome da Unidade</th>
									<th>Escola Parceira</th>
								</tr>
							</thead>
							<tbody>
								@foreach($unidades as $unidade)
								<tr>
									<td>{{$unidade->unidade}}</td>
									<td>{{$unidade->tipo}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						</div>
					</div>
				</div>
			</div><!--/.row-->

    </div><!--/.main-->
@endsection
