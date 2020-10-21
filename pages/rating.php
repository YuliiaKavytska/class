<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/style/style.css">
	<link rel="stylesheet" type="text/css" href="/style/chat.css">
	<link rel="shortcut icon" type="image/x-icon" href="/images/logo1.png" />
	<title>Оцінки</title>
</head>
<body>

	<?php
		include $_SERVER['DOCUMENT_ROOT'] . "/pice-of-site/header.php";
		if(!isset($_COOKIE["student"])){
			header("Location: /pages/log-in.php");
		}
	?>

	<main>
		<div id="content" class="flex">
			<p class="admin-title">Мої оцінки</p>
			<table>
				<tr>
					<th>№</th>
					<th>Учень</th>
					<th>Предмет</th>
					<th>Дата</th>
					<th>Оцінка</th>
				</tr>
				<tr>
					<td>1</td>
					<td>А А</td>
					<td>Алгебра</td>
					<td>2020-10-10</td>
					<td>10</td>
				</tr>
				<tr>
					<td>1</td>
					<td>А А</td>
					<td>Алгебра</td>
					<td>2020-10-10</td>
					<td>10</td>
				</tr>
			</table>
		</div>
	</main>
	
</body>
</html>