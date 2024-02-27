function atualizarImagemCardapio(numero){
	let img = document.getElementById("imgCardapio");
	let newImg = "imagens/"+ numero +".jpg";
	img.src = newImg;
}

function updateSelectedDishIn(id){
		let dishName = document.getElementById(id);
		dishName.style.backgroundColor = '#fff5f5';
		atualizarImagemCardapio(id);
}
function updateSelectedDishOut(id){
		let dishName = document.getElementById(id);
		dishName.style.background= 'none';
}

function defineOpeningHours(){
	var date = new Date().getDay();
	
	var className = "day"+ date;
	var today= document.getElementsByClassName(className);
	
	today[0].style.backgroundColor = "#ffa18f";
	today[0].style.color = 'white';
}
