<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/style/style.css">
	<link rel="stylesheet" type="text/css" href="/style/chat.css">
	<link rel="shortcut icon" type="image/x-icon" href="/images/logo1.png" />
	<title>Чат</title>
</head>
<body>

	<?php
		include $_SERVER['DOCUMENT_ROOT'] . "/pice-of-site/header.php";
		if(!isset($_COOKIE["student"])){
			header("Location: /pages/log-in.php");
		}
	?>

	<main>
		<div id="content">
			<aside id="users">

				<div id="search">
					<input type="text" name="find-user" placeholder="Search...">
					<button>
						<img src="/images/search.png" alt="search">
					</button>
				</div>

				<div id="chat-list">
					<ul>
						<li class="active-chat">
							<div class="avatar">
								<img src="/images/02.png" alt="user">
							</div>
							<div id="infos-chat">
							<h2>Misha Yaremenko</h2>
							<p>Доброе утро! Доброе утро! Доброе утро!</p>
							</div>
							<div class="time">
								9:10
							</div>
						</li>
						<li>
							<div class="avatar">
									<img src="/images/01.png" alt="user">
								</div>
								<div id="infos-chat">
								<h2>Boris Climov</h2>
								<p>Мне нужна твоя помощь</p>
								</div>
								<div class="time">
									9:10
								</div>
						</li>
					</ul>
				</div>
			</aside>
			<section id="message-story">
				<div id="messages">
					<ul>
						<li>
							<div class="avatar">
								<img src="/images/02.png" alt="user">
							</div>
							<div id="infos-chat">
							<h2>Misha Yaremenko</h2>
							<p>Доброе утро! Доброе утро! Доброе утро!</p>
							</div>
							<div class="time">
								9:10
							</div>
						</li>
						<li>
							<div class="avatar">
								<img src="/images/02.png" alt="user">
							</div>
							<div id="infos-chat">
							<h2>Misha Yaremenko</h2>
							<p>Доброе утро! Доброе утро! Доброе утро!</p>
							</div>
							<div class="time">
								9:10
							</div>
						</li>
					</ul>
				</div>

				<div id="send-form">
					<div class="avatar">
						<img src="/images/04.png" alt="user">
					</div>
					<div class="main-form">
						<textarea name="" id="text-message" placeholder="Ваше повідомлення..."></textarea>
						<button> <img src="/images/send.png" alt="">Надіслати</button>
					</div>
					<div class="avatar">
						<img src="/images/02.png" alt="user">
					</div>
				</div>

			</section>
			<section class="actions">
				<div class="actions__info">
					<p>Корисна інформація:</p>
					<a href="/pages/lessons.php" target="_blank">Розклад дзвінків</a>
					<a href="/pages/rating.php" target="_blank">Переглянути оцінки</a>
					<a href="/pages/contacts.php" target="_blank">Контакти вчителів</a>
				</div>
				<div class="homework-block">
					<p>Останні 10 дамашніх завдань</p>
					<a href="/pages/homework.php" target="_blank">Переглянути всі домашні завдання</a>
					<ul class="homework">
						<li class="home__item">
							<p>Виконати на <span>Понеділок:</span></p>
							<p>Геометрія:</p>
							<p>Вивчити теореми. №112-115</p>
						</li>
						<li class="home__item">
							<p>Виконати на <span>Понеділок:</span></p>
							<p>Геометрія:</p>
							<p>Вивчити теореми. №112-115</p>
						</li>
					</ul>
				</div>
			</section>
		</div>
	</main>

	<div class="baground">	</div>
	
</body>
</html>