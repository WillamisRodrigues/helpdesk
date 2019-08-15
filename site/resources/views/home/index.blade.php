	@extends('template.layout.app-admin')
	@section('titulo','Home')
	@section('home','active')
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
					<li class="active">Dashboard</li>
				</ol>
			</div><!--/.row-->
			
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Dashboard</h1>
				</div>
			</div><!--/.row-->
		</div>	<!--/.main-->
	@endsection	