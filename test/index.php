<?php

session_start();
if (!isset($_SESSION['test']) and !isset($_SESSION['q'])) {
	$q = 0;
	$title = "Пройдите тест";
}else{
	//Создание сесионной переменной test,
	if ($_POST['q'] != 1)
		$_SESSION['test'][] = $_POST['answer'];
	$q = $_POST['q'];
	$test = $_POST['test'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Тест</title>
</head>
<body>

<table width="50%" border="1" align='center'>

<tr>
	<td align="center">
		<!-- Верхняя часть страницы -->
		<table width="100%">
			<tr>
				<td align="center">
					<h1>title</h1>
					<p><a href='/index.php'>Прервать тест и вернуться на сайт</a></p>
				</td>
			</tr>
		</table>
		<!-- Верхняя часть страницы -->
	</td>
</tr>

<tr>
	<td>
		<!-- Область основного контента -->
		
		<!-- Область основного контента -->
	</td>
</tr>
</table>

</body>
</html>