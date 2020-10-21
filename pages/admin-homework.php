<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/style/style.css">
	<link rel="stylesheet" type="text/css" href="/style/chat.css">
	<link rel="stylesheet" type="text/css" href="/style/admin.css">
	<link rel="shortcut icon" type="image/x-icon" href="/images/logo1.png" />
	<title>Адміністрування</title>
</head>
<body>

	<?php
		include $_SERVER['DOCUMENT_ROOT'] . "/pice-of-site/header.php";
		if(!isset($_COOKIE["teacher"])){
			header("Location: /pages/log-in.php");
		}
	?>

	<main id="main">
		<div id="content" class="flex">
			<p class="admin-title">Оголосити про нове домашнє завдання</p>
			<form action="">
				<input type="text" placeholder="Дата перевірки">
				<input type="text" placeholder="Вправи">
				<button>Оголосити</button>
			</form>
			<table id="admin-rating">
				<tr>
					<th>№</th>
					<th>Предмет</th>
					<th>Дата перевірки</th>
					<th>Завдання</th>
				</tr>
				
				<tr>
					<td>1</td>
					<td>Алгебра</td>
					<td>2020-10-10</td>
					<td>Lorem ipsum dolor sit amet.</td>
				</tr>
			</table>
		</div>
	</main>
	
</body>
</html>