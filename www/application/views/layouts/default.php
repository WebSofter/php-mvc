<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<script src="/public/scripts/jquery.js"></script>
	<script src="/public/scripts/bootstrap.min.js"></script>
	<!--<script src="/public/scripts/form.js"></script>-->
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
			<?php if(isset($_SESSION['login'])): ?>
				<a class="nav-link text-success" href="/account/logout">Выход</a>
			<?php else: ?>
				<a class="nav-link text-success" href="/account/login">Вход</a>
			<?php endif; ?>
		</li>
		<li class="nav-item">
			<?php if(!isset($_SESSION['login'])): ?>
				<a class="nav-link text-warning" href="/account/register">Регистрация</a>
			<?php endif; ?>
		</li>
	</ul>
	<div class="container">
		<?php echo $content; ?>		
	</div>
</body>
</html>