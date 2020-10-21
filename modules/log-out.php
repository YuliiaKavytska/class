<?php
	if(isset($_COOKIE["teacher"])){
		setcookie("teacher", "", 0);
	}elseif(isset($_COOKIE["teacher"])){
		setcookie("student", "", 0);
	}
	header("Location: /");
?>