<div id="chat-list">
	<ul>
	<?php
		if(isset($_COOKIE["teacher"])){
			$chatsSql = "SELECT * FROM contacts WHERE user_status = 0";
			$chatResult = mysqli_query($connect, $chatsSql);
		}else{
			$chatsSql = "SELECT * FROM contacts WHERE user_status = 1";
			$chatResult = mysqli_query($connect, $chatsSql);
		}
		
		while($user = mysqli_fetch_assoc($chatResult)){
			?>
			<li <?php if(isset($_GET["chat_id"]) && $_GET["chat_id"] == $user["id"]){ echo "class='active-chat'"; } ?>>
				<a class="avatar" href="/pages/teacher-chat.php?user_id=<?php echo $user["id"] ?>">
					<img src="<?php if($user["image"] == ""){ echo "/images/not-find.png"; }else{ echo $user["image"]; }  ?>" alt="user">
				</a>
				<a id="infos-chat" href="/pages/teacher-chat.php?chat_id=<?php echo $user["id"]; ?>">
					<h2><?php echo $user["name"]; ?></h2>
					<p><?php echo $user["last_message"]; ?></p>
				</a>
				<div class="time">
					<?php echo $user["time"]; ?>
				</div>
			</li>
			<?php	
		}
	?>
	</ul>
</div>