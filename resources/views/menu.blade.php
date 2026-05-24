
<!DOCTYPE html>


<html lang="pt-br">


<head>

	
	<meta charset="utf-8">

	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	 @vite(['resources/css/app.css', 'resources/js/app.js'])

	<title>Layout</title>
</head>


<body>

	
	<header>
		<a href="./layout.html" id="logo">Logo</a>

		<button id="openMenu">&#9776;</button>
	</header>

	
	<nav id="menu">

		<button id="closeMenu">X</button>

		<a href="#">Home</a>
		<a href="#">About</a>
		<a href="#">Products</a>
		<a href="">Contact</a>
	</nav>


	<main>Main</main>

	<!-- Agrupa informações e links relacionado ao conteúdo principal. -->
	<aside>Aside</aside>

	
	<footer>Footer</footer>


	<script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
</body>