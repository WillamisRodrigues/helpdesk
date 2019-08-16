@extends('template.layout.app-admin')
	@section('titulo','Alunos')
	@section('aluno','active')
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
				<li class="active">Alunos</li>
			</ol>
		</div><!--/.row-->
		<br>
			<button class="btn btn-success pull-right">
			<i class="fa fa-graduation-cap"></i>
			Adicionar Alunos</button>
			<div style="height:55px;"></div>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
						<i class="fa fa-graduation-cap"></i>
						Alunos</div>
						<div class="panel-body">
						<table class="display list" style="width:100%">
							<thead>
								<tr>
									<th>Matricula</th>
									<th>Nome Usuário</th>
									<th>Email</th>
									<th>Nível</th>
                                    <th>Status</th>
									<th>Ação</th>
								</tr>
							</thead>
							<tbody>
							@foreach ($alunos as $aluno)
								<tr>
								<td>{{$aluno->matricula}}</td>
                                <td>{{$aluno->nome}}</td>
								<td>{{$aluno->email}}</td>
								@if($aluno->nivel == 0)
									<td>Open Class</td>
								@else
									<td>Design Standard </td>
                                @endif

                                @if($aluno->status == 0)
                                <td>Ativo</td>
                                @else
                                <td>Inativo</td>
                                @endif
								<td><a href="{{ route('aluno.edit',[$aluno->id_cliente]) }}" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a></td>
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
