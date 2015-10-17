// JavaScript Document
var fade_in_from = 0;
var fade_out_from = 10;
function fadeIn(element){
	//this part will run over and over
	var target = document.getElementById(element);
	//make element showing
	target.style.display = "block";
	// divide by 10 because newSetting must be from 0 to 1
	var newSetting = fade_in_from / 10;
	//javascript>css because it can work regardles of browser
	target.style.opacity = newSetting;
	
	//opacity ranges from 0 to 1 (0 - .1  - .2  - .3 - .4 - etc ...)
		
	fade_in_from++;
	if (fade_in_from = 10)
	{
		target.style.opacity = 1;
		//stoping timer loop
		clearTimeout(loopTimer);
		//set fade_in_from variable back to 0 for next run 
		fade_in_from = 0;
		//make function stop running and return nothing
		return false;
	}
	//timer
	//1000 milliseconds
	var loopTimer = setTimeout('fadeIn(\''+element+'\')',1000);	
	}
	
function fadeOut(element){
	//this part will run over and over
	target.style.display = "block";
	var target = document.getElementById(element);
	// divide by 10 because newSetting must be from 0 to 1
	var newSetting = fade_out_from / 10;
	//javascript>css because it can work regardles of browser
	target.style.opacity = newSetting;
	fade_out_from--;
	//0 end of animation
	if (fade_out_from = 0)
	{
		// so it is fully invisible
		target.style.opacity = 0;
		// so element goes away
		target.style.display = "none";
		clearTimeout(loopTimer);
		fade_out_from = 10;
		return false;
	}
	var loopTimer = setTimeout('fadeOut(\''+element+'\')',1000);
}

$(document).ready(function(){
	fadeOut('div2');

});