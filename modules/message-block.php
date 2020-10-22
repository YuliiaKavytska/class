<div id="messages">
	<ul>
		<li>
			<a class="avatar" href="<?php echo "/pages/child-chat.php?user_id=" . $ПЕРЕМЕННАЯ_ПОЛЬЗОВАТЕЛЯ["id"] ?>">
				<img src="<?php if($ПЕРЕМЕННАЯ_ПОЛЬЗОВАТЕЛЯ["image"] == ""){ echo "/images/not-find.png"; }else{ echo $ПЕРЕМЕННАЯ_ПОЛЬЗОВАТЕЛЯ["image"]; }  ?>" alt="user">
			</a>
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