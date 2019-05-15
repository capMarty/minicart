function getNameKey () {
	

	document.onkeydown = function (event) {

		let codeKey = event.key;
		
		if (codeKey == 'ArrowUp') 
			alert(`Была нажата клавиша: вверх (${codeKey})`);
		if (codeKey == 'ArrowDown') 
			alert(`Была нажата клавиша: вниз (${codeKey})`);
		if (codeKey == 'ArrowLeft') 
			alert(`Была нажата клавиша: влево (${codeKey})`);
		if (codeKey == 'ArrowRight') 
			alert(`Была нажата клавиша: вправо (${codeKey})`);
	} 
}

