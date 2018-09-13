var selectTeams = document.getElementById('select-teams');
selectTeams.addEventListener('change', function(){displayTeamMembers(selectTeams)} );

function deletePost(el){
	if(!confirm("Wollen Sie diesen Beitrag wirklich löschen?"))
		return;
	el = el.parentNode;
	let id = el.id;
	 var xhttp = new XMLHttpRequest();
 	xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
    		location.reload();
  
    	}
  	};
 	 xhttp.open("POST", "php/scripts.php", true);
 	 xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	 xhttp.send(`deletePost=${id}`);
}

function deleteMember(el){
	if(!confirm("Wollen Sie dieses Mitglied wirklich löschen?"))
		return;
	el = el.parentNode.parentNode;
	let id = el.id;
	 var xhttp = new XMLHttpRequest();
 	xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
    		location.reload();
  
    	}
  	};
 	 xhttp.open("POST", "../php/scripts.php", true);
 	 xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	 xhttp.send(`deleteMember=${id}`);
}

function displayTeamMembers(el){
	let id = el.options[el.selectedIndex].id;
	 var xhttp = new XMLHttpRequest();
 	xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
    		document.getElementById('displayTeamMembers').innerHTML = this.responseText;
    	}
  	};
 	 xhttp.open("POST", "../php/scripts.php", true);
 	 xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	 xhttp.send(`displayTeamMembers=${id}`);
}