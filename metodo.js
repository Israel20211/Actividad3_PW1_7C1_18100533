function hover(img){
	var name = "img"+img;
	var imgHov = document.getElementsByClassName(name);
	imgHov[1].style.display="block";
}
function out(img){
	var name = "img"+img;
	var imgHov = document.getElementsByClassName(name);
	imgHov[1].style.display="none";
	imgHov[1].style.position="absolute";
}

