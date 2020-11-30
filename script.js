var slide = 1;
carrousel(slide);
function carrousel(n){
	var i;
	var index = document.getElementsByClassName("slide");
	if(n > slide.length){
		slide = 1;
	}
	if(n < 1){
		slide = index.length;
	}
	for(i = 0; i < slide.length; i++){
		slide[i].style.display = "none";
	}
	  slide[index-1].style.display = "block"; 
	
}