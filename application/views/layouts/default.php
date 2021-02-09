<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<script src="/public/scripts/jquery.js"></script>
	<script src="/public/scripts/boootstrap.min.js"></script>
	<script src="/public/scripts/form.js"></script>
	<link href="/public/styles/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="/public/styles/styles.css" rel="stylesheet">
</head>
<body>
	<ul class="nav justify-content-center">
		<li class="nav-item">
			<a class="nav-link" href="/">Главная</a>
		</li>
		<li class="nav-item">
			<a class="nav-link text-success" href="/account/login">Вход</a>
		</li>
		<li class="nav-item">
			<a class="nav-link text-warning" href="/account/register">Регистрация</a>
		</li>
	</ul>
	<div class="container">
		<?php echo $content; ?>		
	</div>
</body>
</html>