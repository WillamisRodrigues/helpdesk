@extends('template.layout.app-admin')
    @section('titulo','Professor')
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
				<li class="active">Professor</li>
			</ol>
		</div><!--/.row-->
		<br>
			<button class="btn btn-success pull-right">
			<i class="fa fa-graduation-cap"></i>
			Adicionar Professor</button>
			<div style="height:55px;"></div>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
						<i class="fa fa-graduation-cap"></i>
						Professores</div>
						<div class="panel-body">
						<table class="display list" style="width:100%">
							<thead>
								<tr>
									<th>Nome Usuário</th>
									<th>Email</th>
									<th>Nível</th>
                                    <th>Senha</th>
                                    <th>Status</th>
								</tr>
							</thead>
							<tbody>
                            @foreach ($professores as $professor)
								<tr>
                                <td>{{$professor->nome}}</td>
								<td>{{$professor->email}}</td>
								<td>{{$professor->nivel}}</td>
                                <td>{{$professor->senha}}</td>
                                <td>{{$professor->status}}</td>
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
