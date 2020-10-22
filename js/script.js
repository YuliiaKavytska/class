var search = document.querySelector("#search");

search.onsubmit = function(e){
	e.preventDefault();
	var searchPhrase = search.querySelector("input[name='find-user']");
	var chat = search.querySelector("input[name='chat']");
	var data = "find=1&find_user=" + searchPhrase.value + "&chat=" + chat.value;
	var query = new XMLHttpRequest();
		query.open("POST", search.action, false);
		query.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		query.send(data);

	var replace = document.querySelector("#chat-list");
		replace.innerHTML = query.response;
}