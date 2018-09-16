<?php
require_once './inc/headers.inc.php';
require_once './inc/cookie.inc.php';
//deay; умри
//exeption();
//throw ();
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title?></title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="inc/style.css" />
	</head>
	<body>

		<div id="header">
			<!-- Верхняя часть страницы -->
			<img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
			<span class="slogan">обо всём сразу</span>
			<!-- Верхняя часть страницы -->
		</div>

		<div id="content">

			<!-- Заголовок -->
			<?php
				if (isset($visitCounter)) {
					if (1 === $visitCounter)
						echo 'Первый визит';
				}else{
					echo 'переменная $visitCounter не подципилась!!!'.'<br>';
				}

				if (isset($lastVisit)){
					echo 'Визит № ' . $lastVisit ;
				}else{
					echo 'переменная  $lastVisit не подципилась!!!';
				}
				echo ( $visitCounter == 1) ? 'Первый визит' :  'Визит №' . $lastVisit;
			?>
			<h1><?php echo "Добро пожаловать на наш сайт!"?></h1>
			<!-- Заголовок -->
			<!-- Область основного контента -->
			<?php
            //include realpath(dirname(__FILE__)).'inc/routing.inc.php';
				include './inc/routing.inc.php';
			?>	
			<!-- Область основного контента -->
		</div>
		<div id="nav">
			<!-- Навигация -->
			<h2>Навигация по сайту</h2>
			<ul>
				<li><a href='index.php'>Домой</a></li>
				<li><a href='index.php?id=contact'>Контакты</a></li>
				<li><a href='index.php?id=about'>О нас</a></li>
				<li><a href='index.php?id=info'>Информация</a></li>
				<li><a href='test/index.php'>Он-лайн тест</a></li>
				<li><a href='index.php?id=gbook'>Гостевая книга</a></li>
				<li><a href='eshop/catalog.php'>Магазин</a></li>
			</ul>
			<!-- Навигация -->
		</div>
		<div id="footer">
			<!-- Нижняя часть страницы -->
			&copy; Супер-мега сайт, 2000 &ndash; <?= date('Y')?>
			<!-- Нижняя часть страницы -->
		</div>
	</body>
</html>