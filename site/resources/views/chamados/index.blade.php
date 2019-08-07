@extends('template.layout.app-admin')
    @section('titulo','Meus Chamados')
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
				<li class="active">Meus Chamados</li>
			</ol>
		</div><!--/.row-->
		<br>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
						<i class="fa fa-book	"></i>	
						Meus Chamados</div>
						<div class="panel-body">
						<table class="display list" style="width:100%">
							<thead>
								<tr>
									<th>Titulo</th>
									<th>Escola Parceira</th>
									<th>Categoria</th>
									<th>Observação</th>
									<th>Prioridade</th>
									<th>Status</th>
									<th>Ação</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Tiger Nixon</td>
									<td>System Architect</td>
									<td>Edinburgh</td>
									<td>61</td>
									<td>2011/04/25</td>
									<td>$320,800</td>
									<td><a href="" class="btn btn-primary"> <i class="fa fa-pencil"></i> Editar</a>
									<a href="" class="btn btn-danger"> <i class="fa fa-archive"></i> Arquivar</a>
									</td>
								</tr>
							</tbody>
						</table>
						</div>
					</div>
				</div>
			</div><!--/.row-->
				
    </div><!--/.main-->
@endsection