<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
?>

<!DOCTYPE html>
<html lang="en" style="height:inherit;">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/style/style.css">
	<link rel="stylesheet" type="text/css" href="/style/log.css">
	<link rel="shortcut icon" type="image/x-icon" href="/images/logo1.png" />
	<title>Зареєструватися</title>
</head>
<body>
	<?php
		include $_SERVER['DOCUMENT_ROOT'] . "/pice-of-site/header.php";
	?>
	<div class="modal" id="sign-up-modal" style="display:block;">
		<p>Реєстрація</p>
		<form id="sign-up-form" action="registration.php" method="POST">
			<label for="name-user">ПІБ: *</label>
			<input id="name-user" type="text" placeholder="Іван Іванов Іванович" name="name" required>
			<label for="exampleFormControlSelect1">Ваш статус: *</label>
			<select name="category" class="form-control" id="exampleFormControlSelect1">
				<option value="0">Не вибрано</option>
				<option value="1">Вчитель</option>
				<option value="2">Учень</option>
			</select>
			<label for="subject">Якщо ви вчитель, вкажіть предмет:</label>
			<input id="subject" type="text" placeholder="Алгебра" name="subject">
			<label for="email">Ваша поштова скринька: *</label>
			<input id="email" type="email" placeholder="aaa@gmail.com" name="email" required>
			<label for="mob">Номер телефону: *</label>
			<input id="mob" type="tel" placeholder="0999999999" name="phone" required>
			<label for="about">Про себе: *</label>
			<input id="about" type="text" placeholder="Я..." name="about" required>
			<label for="password-up-1">Ваш пароль: *</label>
			<input id="password-up-1" type="password" placeholder="fIm62WF92z" name="password" required>
			<label for="password-up-2">Повторіть пароль: *</label>
			<input id="password-up-2" type="password" placeholder="fIm62WF92z" required>
			<p id="passwords-match">Ваші паролі не співпадають!</p>
			<a id="go-to-log-in" href="/pages/log-in.php">Я вже зареєстрований!</a>
			<button id="sign-up">Зареєструватися</button>
		</form>
	</div>
	<script src="/js/sign-login.js"></script>
</body>
</html>