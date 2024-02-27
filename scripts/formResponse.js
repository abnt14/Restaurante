function verifyInputsLogin(){
	var nameInput = document.getElementsByName('usrName')[0];
	var passInput = document.getElementsByName('usrPass')[0];
	
	if(nameInput.value != '' && passInput.value != ''){
			return true;
	}
	else{
		alert('Preencha todos os campos!');
		return false;
	}
}

function verifyInputAdd(){
	var nameInput = document.getElementsByName('dishAddName')[0];
	var descriptionInput = document.getElementsByName('dishAddDescription')[0];
	var priceInput = document.getElementsByName('dishAddPrice')[0];
	var weekDayInput = document.getElementsByName('dishAddWeekDay')[0];
	
	if(nameInput.value != '' && descriptionInput.value != '' && priceInput.value != '' && weekDayInput.value != ''){
		return true;
	}
	else{
		alert('Preencha todos os campos!');
		return false;
	}
}
function verifyInputUpdate(){
	var nameInput = document.getElementsByName('dishAddName');
	
	if(nameInput.value == ''){
		return false;
	}
	else{
		alert('Preencha todos os campos!');
		return false;
	}
}
function verifyInputRemove(){
	var nameInput = document.getElementsByName('dishAddName');
	
	if(nameInput.value == ''){
		return false;
	}
	else{
		alert('Preencha todos os campos!');
		return false;
	}
}
