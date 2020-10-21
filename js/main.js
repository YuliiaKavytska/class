let baground = document.querySelector(".baground");

// ===============================================

baground.onclick = function(){
	if(document.location.href != "index.php"){
		document.location.href = "/pages/child-chat.php";
	}
	baground.style.display = "none";
}
