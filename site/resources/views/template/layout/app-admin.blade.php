<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('titulo')</title>
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/datepicker3.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="{{asset('assets/js/chart-data.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('vendors/Chart.js/dist/Chart.min.js')}}"></script>
</head>
<body>
    @yield('conteudo')
	<script src="{{asset('assets/js/jquery-1.11.1.min.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

	<script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('assets/js/custom.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>
	<script>
        $(document).ready(function(){
          $('.telefone').mask('(00) 00000-0000');
        });
    </script>
	<script>
		$(document).ready(function() {
    		$('.list').DataTable({
				"oLanguage":{
					"sUrl" : "../br/br.txt"
				}
			});
		});
	</script>
</body>
</html>
