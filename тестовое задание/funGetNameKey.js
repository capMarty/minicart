
function getNameKey () {


	document.onkeydown = function (event) {

		let keyCode = event.keyCode;
		
		if (keyCode === 38)
			alert(`Была нажата клавиша: вверх`);
		if (keyCode === 40)
			alert(`Была нажата клавиша: вниз`);
		if (keyCode === 37)
			alert(`Была нажата клавиша: влево`);
		if (keyCode === 39)
			alert(`Была нажата клавиша: вправо`);
	}
}

