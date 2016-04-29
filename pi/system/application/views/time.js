window.onload = timeFunc;

function timeFunc(){
	var now = new Date();
	
	var thisTime = hour(now.getHours())+showFull(now.getMinutes())+showFull(now.getSeconds());
	alert(thisTime);
	document.getElementById("timeShow").innerHTML = thisTime;
	setTimeout("timeFunc()",1000);
}

function showFull(time){
	if(time > 9)return ":" + time;
	else return ":0" + time;
}
function hour(theHr){
	if(theHr == 0)return 12;
	else if(theHr < 13)return theHr;
	else return theHr - 12;
}