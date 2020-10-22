<?php
	if(isset($_POST["find"])){
		$chat =  $_POST["find_user"];
		$nameChat = $_POST["chat"];
		include "modules/chats-block.php";
	}
	
?>