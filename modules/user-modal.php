<?php
	$sqlModal = "SELECT * FROM contacts WHERE id=" . $_GET["user_id"];
	$resultModal = mysqli_query($connect, $sqlModal);
	$userModal = mysqli_fetch_assoc($resultModal);
?>

<div class="baground" style="display:block;">	</div>
<div class="user-modal" style="display:block;">
	<div class="close"><a href="/pages/child-chat.php">X</a></div>
	<div class="inner-userid">
		<div class="header-user">
			<img src="<?php if($userModal["image"] == ""){ echo "/images/not-find.png"; }else{ echo $userModal["image"]; } ?>" alt="avatar">
			<div>
				<!-- Создаем имя и достаем его из персоны -->
				<h3><?php echo $userModal["name"]; ?></h3> 
				<p>Був(ла): нещодавно</p>
			</div>
		</div>
		<ul class="main-info">
			<li>
				<p>Мобільний телефон:</p>
				<!-- Добстаем из нашего массива персоны все контактные данные -->
				<p><a href="tel: <?php echo $userModal["phone"]; ?> "><?php echo $userModal["phone"] ?></a></p>
			</li>
			<li>
				<p>Почта:</p>
				<p>@<?php echo $userModal["login"]; ?></p>
			</li>
			<li>
				<p>Про себе:</p>
				<p><?php echo $userModal["about"]; ?></p>
			</li>
		</ul>
	</div>
</div>