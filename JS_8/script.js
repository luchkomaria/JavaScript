function randomblock(){
	var number = Math.floor((Math.random() * 100) + 1);
	var name = "c"+ number;
	return name;
}
function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
	return color;
}
var time = 1000;
function change(){
	var name = randomblock();
	var now = document.getElementById(name).style.backgroundColor;
	if(now == ""){
	document.getElementById(name).style.backgroundColor = "red";}
	else {
	document.getElementById(name).style.backgroundColor = getRandomColor();
		if(time>=100){
			time-=100;
		}
		else{
			time=1;
			}
	}
}
setInterval(change, time);
