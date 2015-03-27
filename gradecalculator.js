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

function add() {
	var br = document.createElement("hr");
	var br2 = document.createElement("hr");
	var br3 = document.createElement("hr");
	var br4 = document.createElement("hr");
    for (i=1; i<=3; i++)
      {
        //Create an input type dynamically.
        var element = document.createElement("input");
		var weight = document.createElement("select");
		var quack = document.createElement("option");
		var meep = document.createElement("option");
		var bleeh = document.createElement("option");
		
		//Data for the amount of items that exist (starts from 5 since there are 5 by default) Use this for calculation Joseph
		var itemCounter = document.getElementById("addButton");
		var thing = itemCounter.getAttribute("value");
		
		//Weights
		quack.appendChild(document.createTextNode('Homework'));
		quack.value='homework';
		weight.appendChild(quack);
		meep.appendChild(document.createTextNode('Quiz'));
		meep.value='quiz';
		weight.appendChild(meep);
		bleeh.appendChild(document.createTextNode('test'));
		bleeh.value='test';
		weight.appendChild(bleeh);
		
		//Sets weight id
		weight.setAttribute("style", "height: 20px");
		weight.setAttribute("id", thing);
		
		thing++;
		itemCounter.setAttribute("value",thing);
		
		//Assign different attributes to the element.
		//Sets the id of new entries
		element.setAttribute("id", thing);
        element.setAttribute("type", "text");
        element.setAttribute("name", thing);
		
		//Uncomment if you wish to see the ids of the fill boxes//
		//element.setAttribute("value", thing);
		
		element.setAttribute("style", "width: 80px");
     
        var foo = document.getElementById("fooBar");
		var foo2 = document.getElementById("fooBar2");
		var foo3 = document.getElementById("fooBar3");
		var foo4 = document.getElementById("fooBar4");
		
		
		if(i==1)
		{
			foo.appendChild(br);
			foo.appendChild(weight);
			
			foo2.appendChild(br2);
			foo2.appendChild(element);
		}
		else if(i==2)
		{
			//Append the element in page (in span).
			foo3.appendChild(br3);
			foo3.appendChild(element);
		}
		else
		{
			//Append the element in page (in span).
			element.setAttribute("disabled", true);
			foo4.appendChild(br4);
			foo4.appendChild(element);
			thing++;
			itemCounter.setAttribute("value",thing);
		}
      }
}

function calculateGrade(){
	var pg = 1;
	var count = 1, avg=0, avgSum=0, avgSum2 = 0;
	var i = 2, j = 0, k = 0;
	var pp = 1, gd;
	var pointsGainedSum = 0, pointsPossibleSum = 0;
	// gets total points gained
	while(pg){
		j = i+1;
		//k = i+2;
		//parse to a string
		i.toString();
		j.toString();
		//k.toString();
		
		//set the value found to the number
		pg = Number(document.getElementById(i).value);
		pp = Number(document.getElementById(j).value);
		//gd = Number(document.getElementById(k).value);
		
		//calculate sum
		pointsGainedSum = pointsGainedSum + pg;
		pointsPossibleSum = pointsPossibleSum + pp;
		
		/*
		avg = (pg / pp)*100;
		avgSum = (avgSum + avg);
		avgSum2 = avgSum /count;
		*/
		//set values
		document.getElementById("totalPossible").value = pointsPossibleSum;
		document.getElementById("totalGained").value = pointsGainedSum;
		//document.getElementById("fooBar4").value = gd;
		//document.getElementById("averageGrade").value = avgSum2;
		
		//parse back to number and iterate.
		i = Number(i);
		i+=4;
		count++;
		
		
	}
	
	
}

/*
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
*/