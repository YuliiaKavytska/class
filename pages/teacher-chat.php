<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
?>

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
		if(isset($_GET["user_id"])){
			include $_SERVER['DOCUMENT_ROOT'] . "/modules/user-modal.php";
		}
		if(!isset($_COOKIE["student"]) && !isset($_COOKIE["teacher"])){
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

				<?php include $_SERVER['DOCUMENT_ROOT'] . "/modules/teacher-chat-block.php" ?>
			</aside>

			<section id="message-story">
				<?php 
				include $_SERVER['DOCUMENT_ROOT'] . "/modules/message-block.php";
				if(isset($_GET["chat_id"])){
					$recipiendSql = "SELECT * FROM contacts WHERE id=" . $_GET["chat_id"];
					$recipientResult = $connect -> query($recipiendSql);
					$recipient = mysqli_fetch_assoc($recipientResult);
					if(isset($_COOKIE["student"])){
						$findUserSql = "SELECT * FROM contacts WHERE id=" . $_COOKIE["student"];
					}else{
						$findUserSql = "SELECT * FROM contacts WHERE id=" . $_COOKIE["teacher"];
					}
					$findResult = $connect -> query($findUserSql);
					$user = mysqli_fetch_assoc($findResult);
					?>
					<form id="send-form" method="POST">
						<div class="avatar">
							<img src="<?php if($user["image"] == ""){ echo "/images/not-find.png"; }else{ echo $user["image"]; } ?>" alt="user">
						</div>
						<div class="main-form">
							<textarea name="message" id="text-message" placeholder="Ваше повідомлення..."></textarea>
							<button type="send"> <img src="/images/send.png" alt="">Надіслати</button>
						</div>
						<div class="avatar">
							<img src="<?php if($recipient["image"] == ""){ echo "/images/not-find.png"; }else{ echo $recipient["image"]; } ?>" alt="user">
						</div>
					</form>
					<?php
				}
				?>
				
			</section>
			
		</div>
	</main>

	<div class="baground">	</div>
	<script src="/js/main.js"></script>
</body>
</html>