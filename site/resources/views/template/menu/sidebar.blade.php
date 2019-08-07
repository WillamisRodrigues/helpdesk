<div class="profile-sidebar">
				<div class="profile-userpic">
					<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
				</div>
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">{{Auth::user()->name}}</div>
					<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="divider"></div>
<ul class="nav menu">
			<li><a href="/home"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="/ticket"><em class="fa fa-plus">&nbsp;</em> Novo Chamado</a></li>
			<li><a href="/chamados"><em class="fa fa-phone">&nbsp;</em> Meus Chamados</a></li>
			<li><a href="/professor"><em class="fa fa-graduation-cap">&nbsp;</em> Professores</a></li>
			<li><a href="/aluno"><em class="fa fa-users">&nbsp;</em> Alunos</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Configurações <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="/unidades">
						<span class="fa fa-arrow-right">&nbsp;</span> Unidades
					</a></li>
					<li><a class="" href="/categorias">
						<span class="fa fa-arrow-right">&nbsp;</span> Categorias
					</a></li>
					<li><a class="" href="/arquivados">
						<span class="fa fa-arrow-right">&nbsp;</span> Chamados Arquivados
					</a></li>
					<li><a class="" href="/usuarios">
						<span class="fa fa-arrow-right">&nbsp;</span> Usuarios
					</a></li>
				</ul>
			</li>
			<li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{csrf_field()}}
            </form>
		</ul>