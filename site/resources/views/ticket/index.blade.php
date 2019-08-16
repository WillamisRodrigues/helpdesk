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
							<form class="form-horizontal row-border" action="#">
								<div class="form-group">
									<label class="col-md-2 control-label">Titulo do Chamado:</label>
									<div class="col-md-6">
										<input type="text" name="regular" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Escola Parceira:</label>
									<div class="col-md-6">
										<select class="form-control">
											<option>-- Selecione --</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Categoria:</label>
									<div class="col-md-6">
										<select class="form-control">
											<option>-- Selecione --</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Observação:</label>
									<div class="col-md-6">
										<textarea class="form-control"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label"></label>
									<div class="col-md-6">
										<button class="btn btn-success">Lançar Chamado </button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div><!--/.row-->
				
    </div><!--/.main-->
@endsection