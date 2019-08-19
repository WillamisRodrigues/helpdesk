    @extends('template.layout.app-admin')
	@section('titulo','Novo Chamado')
	@section('ticket','active')
    @section('conteudo')
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
				<li class="active">Novo Chamado</li>
			</ol>
		</div><!--/.row-->
		<br>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
						<i class="fa fa-book	"></i>
						Abertura de Chamado</div>
						<div class="panel-body">
                        <form class="form-horizontal row-border" action="{{route('chamados.store')}}" method="POST">
                            {{ csrf_field() }}
								<div class="form-group">
									<label class="col-md-2 control-label">Titulo do Chamado:</label>
									<div class="col-md-6">
										<input type="text" name="titulo_chamado" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Unidade:</label>
									<div class="col-md-6">
										<select class="form-control" name="id_escola">
											@foreach($unidades as $unidade)
												<option value="{{$unidade->idUnidade}}">{{$unidade->unidade}}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Categoria:</label>
									<div class="col-md-6">
										<select class="form-control" name="id_categoria">
										@foreach ($categorias as $categoria)
											<option value="{{$categoria->id_categoria}}">
												{{$categoria->nome_categoria}}
											</option>
										@endforeach
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Observação:</label>
									<div class="col-md-6">
										<textarea class="form-control" name="observacao"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label"></label>
									<div class="col-md-6">
										<button type="submit" class="btn btn-success">Lançar Chamado </button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div><!--/.row-->

    </div><!--/.main-->
@endsection
