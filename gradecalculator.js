/*
	Alex Flores, Joseph Andaya, Daniel Urabe, Ryan Cabrera - COMP 135
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
	var g1, g2, g3, g4;
	var p1, p2, p3, p4;
	var pointsPossible;
	var gradePoints;
	var result1, result2, result3, result4;
	g1 = Number(document.getElementById("grade1").value);
	g2 = Number(document.getElementById("grade2").value);
	g3 = Number(document.getElementById("grade3").value);
	g4 = Number(document.getElementById("grade4").value);
	p1 = Number(document.getElementById("possible1").value);
	p2 = Number(document.getElementById("possible2").value);
	p3 = Number(document.getElementById("possible3").value);
	p4 = Number(document.getElementById("possible4").value);
	
	result1 = doCalculation(g1,p1);
	result2 = doCalculation(g2,p2);
	result3 = doCalculation(g3,p3);
	result4 = doCalculation(g4,p4);
	
	document.getElementById("percent1").value = result1 + "%";
	document.getElementById("percent2").value = result2 + "%";
	document.getElementById("percent3").value = result3 + "%";
	document.getElementById("percent4").value = result4 + "%";
	gradePoints = totalGradePoints(g1,g2,g3,g4);
	pointsPossible = totalPointsPossible(p1,p2,p3,p4);
	
	calculateAverage(gradePoints, pointsPossible);
	
	//document.getElementById("calculate").disabled = true;
	//document.getElementById("calculate").innerHTML = "Done";
}

function doCalculation(x, y){
	return (x/y)*100;
}

function totalGradePoints(g1,g2,g3,g4){
	var gp = g1+g2+g3+g4;
	document.getElementById("totalGained").value = gp;
	return gp;
}

function totalPointsPossible(p1,p2,p3,p4){
	var pp = p1+p2+p3+p4;
	document.getElementById("totalPossible").value = pp;
	return pp;
}

function calculateAverage(gp, pp)
{
	total = (gp/pp)*100; 
	document.getElementById("averageGrade").value = total + "%";
}
