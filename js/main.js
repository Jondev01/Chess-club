function deletePost(el){
	if(!confirm("Wollen Sie wirklich diesen Beitrag löschen?"))
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
	 xhttp.send(`q=${id}`);
}