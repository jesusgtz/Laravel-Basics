<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Home</h1>

	<nav>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/about">About</a></li>
			<li><a href="/contact">Contact</a></li>
			<li><a href="/portfolio">Portfolio</a></li>
		</ul>
	</nav>

	<?php 
		echo "Hola " . ($nombre ?? "Invitado");
	?>
</body>
</html>
