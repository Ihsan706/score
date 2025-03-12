<!DOCTYPE html>
<html lang="en">
<head>
<script>
var ones = 0;
var twos = 0;
//
var sec =0;
var mint =15;
</script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Soccer Scoreboard</title>
<style>
body {
font-family: Arial, sans-serif;
background-color: #1414f4;
text-align: center;
}
.scoreboard {
display: flex;
justify-content: center;
align-items: center;
background: linear-gradient(45deg, #d32121, #8f6100);
/* this dose not work \/, but this dose /\ - Ihsan
background: linear-gradient(to right, #d32121, #if6100);
*/
width: 70%;
max-width: 800px;
margin: 50px auto;
padding: 15px;
border-radius: 10px;
box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
color: white;
font-size: 24px;
.team {
flex: 1;
font-weight: bold;
}
.score {
font-size: 28px;
font-weight: bold;
padding: 0 15px;
}
.time {
background: black;
padding: 5px 15px;
border-radius: 5px;
font-size: 20px;
margin-right: 15px;
}
.h1{
	display: contents;
	font-size: unset;
}
</style>
</head>
<body>
<div class="scoreboard">
<!-- <span class="time" contenteditable="true"><h2 id="hello"></h2></span> -->
<span class="time" contenteditable="true" id="hello" ></span>
<div class="team" contenteditable="true">Team A</div>
<div class="score" contenteditable="true"><h1 id="one" class="h1" >0</h1> - <h1 id="two" class="h1">0</h1></div>
<div class="team" contenteditable="true">Team B</div>
<input type="button" onclick="mone()" value="+">
<input type="button" onclick="mtwo()" value="+">
<input type="button" onclick="lone()" value="-">
<input type="button" onclick="ltwo()" value="-">
</div>
<script>
//i know i can be more effeshint on the code but this works good 
var one = document.getElementById("one");
var two = document.getElementById("two");
function mone(){
		if(sec + mint > 0){
	    ones += 1;
    one.innerHTML = ones;
			console.log(ones);
		}
}
function mtwo(){
		if(sec + mint > 0){
	    twos += 1;
    two.innerHTML = twos;
		console.log(twos);
		}
}
//if it is not brocken don't fixt
function lone(){
		if(sec + mint > 0){
	    ones -= 1;
    one.innerHTML = ones;
		console.log(ones);
		}
}
function ltwo(){
		if(sec + mint > 0){
	    twos -= 1;
    two.innerHTML = twos;
	console.log(twos);
		}
}


 
var timeleft = document.getElementById("hello");
 
// Updates every 1000 ms aka 1 second \/
setInterval(() => {
	if(sec + mint > 0){
if(sec >= 0){
sec -= 1;
}


if(sec < 0 && mint > 0){
	mint -= 1;
	sec +=60 ;
}
console.log(sec);
say = mint + ":" + sec;
timeleft.innerHTML = say;


	}else{
	say = "Time is up";
	timeleft.innerHTML = say;
}
}, 1000); //<- here


</script>

</body>
</html>