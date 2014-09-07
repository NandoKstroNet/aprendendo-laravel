<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href={{ asset('assets/css/bootstrap.css') }}>
	<link rel="stylesheet" href={{ asset('assets/css/mycss.css') }}>
</head>
<body>
	<!-- header estatico-->
	<header>
		<h1>Criado por Caio Cutrim</h1>
	</header>
	<!--content  conteudo dinamico-->
	<section class="container" id="section-container">
		@yield('content')
	</section>
	<!-- footer estatico-->
	<footer>
		<p>CRIADO POR CAIO CUTRIM</p>
	</footer>
	<!-- scripts -->
	<script src={{ asset('assets/jquery/jquery.min.js') }}></script>
	<script src={{ asset('assets/js/bootstrap.min.js') }}></script>
</body>
</html>
