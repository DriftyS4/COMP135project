/*
	Alex Flores - COMP 135
	gradecalculator.js
*/

/*
window.onload = function(){
	 //document.getElementById("calculate").disabled = true;
	//$('calculate').disabled = true;
	$('calculate').onclick = calculateClick;
	//startCalculation();
};
*/

function startCalculation(){
	document.getElementById("calculate").disabled = true;
	document.getElementById("grade").innerHTML = "Percentage % Here";
	document.getElementById("calculate").innerHTML = "Done";
}
