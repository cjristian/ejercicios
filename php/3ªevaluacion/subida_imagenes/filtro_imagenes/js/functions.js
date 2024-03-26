window.onload = function() {
	let radios = document.getElementsByName("filtro");
	for(var i=0; i < radios.length; i++){
		radios[i].onclick = cambiar;
	}
}

function cambiar() {
    document.getElementById("foto").src= "imagen.php?filter=" + this.id;
}
