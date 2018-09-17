
/*selectTeams.addEventListener('change', function(){displayTeamMembers()} );*/
let selectTeams = document.getElementById('select-teams');
if(selectTeams !== null){
	selectTeams.addEventListener("load", displayTeamMembers() );
	selectTeams.addEventListener("change", ()=>displayTeamMembers() );
}

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

function deleteTeamMember(el){
	el = el.parentNode.parentNode;
	let id = el.id;
	 var xhttp = new XMLHttpRequest();
 	xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
    		displayTeamMembers();
  
    	}
  	};
 	 xhttp.open("POST", "../php/scripts.php", true);
 	 xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	 xhttp.send(`deleteTeamMember=${id}`);
}

function displayTeamMembers(){
	let selectTeams = document.getElementById('select-teams');
	let id = selectTeams.options[selectTeams.selectedIndex].id;
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

function addTeamMember(){
	let selectTeams = document.getElementById('select-teams');
	let teamId = selectTeams.options[selectTeams.selectedIndex].id;
	let selectMember = document.getElementById('select-member');
	let selectBoard = document.getElementById('select-board');
	let memberId = selectMember.options[selectMember.selectedIndex].id;
	let board = selectBoard.options[selectBoard.selectedIndex].value;
	var xhttp = new XMLHttpRequest();
 	xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
    		displayTeamMembers();
    	}
  	};
 	 xhttp.open("POST", "../php/scripts.php", true);
 	 xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	 xhttp.send(`teamId=${teamId}&memberId=${memberId}&board=${board}`);
}

function isAdmin(isAdmin){
	let elements = document.getElementsByClassName('admin');
	//elements = [...elements].concat([...document.getElementsByClassName('member')]);
	for(let el of elements){
		el.hidden = !isAdmin;
	}


}