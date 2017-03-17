function displayContent(mysection) {
		//if content is not displayed
	if (mysection.getElementsByTagName('p')[0].style.opacity != "1") {
		//get rid of picture
		mysection.getElementsByTagName('p')[0].style.display = "initial";
		mysection.getElementsByTagName('img')[0].style.opacity = "0";

		//display the content
		mysection.getElementsByTagName('p')[0].style.opacity = "1";
		mysection.getElementsByTagName('img')[0].style.display = "none";
	}

	//content is displayed
	else {
		//get rid of content
		mysection.getElementsByTagName('p')[0].style.opacity = "0";
		mysection.getElementsByTagName('img')[0].style.display = "initial";

		//display the picture
		mysection.getElementsByTagName('p')[0].style.display = "none";
		console.log(mysection.getElementsByTagName('img')[0]);
		mysection.getElementsByTagName('img')[0].style.opacity = "1";
	}
}

function hover(mysection) {
	mysection.style.border = "2px solid black";
}

function normal(mysection) {
	mysection.style.border = "2px solid white";
}