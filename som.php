<!DOCTYPE html>
<html lang="en">
<head>
<script>
var ones = 00;
var twos = 00;
//
var sec =0;
var mint = 0;


</script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Soccer Scoreboard</title>
<style>
body {
font-family: Arial, sans-serif;
/*background-color: #1414f4;*/
background-color: green;
text-align: center;
}
.scoreboard {
display: flex;
justify-content: center;
align-items: center;
background: linear-gradient(45deg, #d32121, #8f6100);
/* this dose not work \/, but this dose /\ - Ihsan
background: linear-gradient(to right, #d32121, #if6100);
width: 70%;
max-width: 800px;
margin: 50px auto; */
padding: 15px;
border-radius: 10px;
box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
color: white;
font-size: 24px;
    backface-visibility: hidden;
	min-height: 50px;
}
.team {
flex: 1;
font-weight: bold;
    backface-visibility: hidden;
}
.score {
font-size: 28px;
font-weight: bold;
padding: 0 15px;
    backface-visibility: hidden;
}
.time {
background: black;
padding: 5px 15px;
border-radius: 5px;
font-size: 20px;
margin-right: 15px;
    backface-visibility: hidden;
	    width: 100px;
}
.h1 {
	display: contents;
	font-size: unset;
}
.ok {
	    width: 70%;
    max-width: 800px;
    margin: 50px auto;
}
.back {
	/* old back
	    position: absolute;
    width: 100%;
    /* max-width: 800px; /
    top: 0px;
    transform: rotateX(180deg);
    backface-visibility: hidden;
	    border-radius: 1450px;
		*/
		border-radius: 20px;
    border-style: double;
    overflow: hidden;
    position: absolute;
    width: 100%;
    /* max-width: 800px; */
    top: 0px;
    transform: rotateX(180deg);
    backface-visibility: hidden;
    height: 50px;
    padding-block: 13.5px;
    display: flex;
}

* {
	    transform-style: preserve-3d;
		perspective: 30vw;
    transition-duration: 3s;
    transition-timing-function: ease-in-out;
}

.ok:hover .scoreboard {
    transform: rotateX(180deg);
}
.ok:hover .back {
    transform: rotateX(360deg);
}
.button{
    position: relative;
    top: -14px;
    width: 25%;
    margin: 0px;
    border-width: 10px;
    padding: 0px;
    height: 160%;
    border-style: solid;
}
</style>
</head>
<body>
<div class="scoreboard" id="table">
<!-- <span class="time" contenteditable="true"><h2 id="hello"></h2></span> -->
<span class="time" contenteditable="true" id="hello" ></span>
<div class="team" contenteditable="true">Team A</div>
<div class="score" contenteditable="true"><h1 id="one" class="h1" >0</h1> - <h1 id="two" class="h1">0</h1></div>
<div class="team" contenteditable="true">Team B</div>
</div>


<script>
//not importent \/
var one = document.getElementById("one");
var two = document.getElementById("two");

    one.innerHTML = "0"+ones;
    two.innerHTML = "0"+twos;
	
//this is the time in seconds \/
var times = (mint * 60)+sec;

end = false;
pus = false;
end2 = false;

//i know i can be more effeshint on the code but this works good 
function mone(){
		if(end == false){
	    ones += 1;
		let scoreB = ones.toString().padStart(2, '0');
    one.innerHTML = scoreB;
			console.log(ones);
		}
}
function mtwo(){
	if(end == false)
	    twos += 1;
		let scoreA = twos.toString().padStart(2, '0');
    two.innerHTML = scoreA;
		console.log(twos);
}
//if it is not brocken don't fixt
function lone(){
		if(ones > 0  && end == false){
	    ones -= 1;
		let scoreB = ones.toString().padStart(2, '0');
    one.innerHTML = scoreB;
		console.log(ones);
		}
}
function ltwo(){
		if(twos > 0  && end == false){
	    twos -= 1;
		let scoreA = twos.toString().padStart(2, '0');
    two.innerHTML = scoreA;
	console.log(twos);
		}
}
 
var timeleft = document.getElementById("hello");
 
// Updates every 1000 ms aka 1 second \/
setInterval(() => {
if(end == false){
sec += 01;



if(sec >= 60){
	mint += 1;
	sec -=60 ;
	}
if(mint == 5){
	say = "Time is up";
	timeleft.innerHTML = say;
}
console.log(sec);
let mints = mint.toString().padStart(2, '0');
let secs = sec.toString().padStart(2, '0');
say = mints + ":" + secs;
timeleft.innerHTML = say;
}
}, 1000); //<- here
</script>
    <script>
        document.addEventListener("keydown", function(event) {
            const output = document.getElementById("output");
            if (event.key === "ArrowUp") {
                mone()
            } else if (event.key === "ArrowDown") {
lone()
            } else if (event.key === "ArrowLeft") {
ltwo()
            } else if (event.key === "ArrowRight") {
mtwo()
            }
        });
        document.addEventListener("keydown", function(event) {
if (event.key === " ") {
	let mints = mint.toString().padStart(2, '0');
    let secs = sec.toString().padStart(2, '0');
	timeleft.innerHTML = "last mint";
	end = true;
	setTimeout(() => {end = false;}, 3000);
	end2 = true;
}
		});
	setInterval(() => {
		if(end2 == true){
	if(sec == 0){
	end = true;
	say = "Time is up";
	timeleft.innerHTML = say;
    setTimeout(() => { say = mints + ":" + secs; timeleft.innerHTML = say;}, 3000);
	// 3000 milliseconds equals 3 seconds
		}
		}
	}, 6000);
	
	document.addEventListener("keydown", function(event) {
	if (event.key === "x") {
	let mints = mint.toString().padStart(2, '0');
    let secs = sec.toString().padStart(2, '0');
	timeleft.innerHTML = "The Game is done";
	end = true;
	setInterval(() => {
	say = "Time is up";
	timeleft.innerHTML = say;
    setTimeout(() => { say = mints + ":" + secs; timeleft.innerHTML = say;}, 3000);
	// 3000 milliseconds equals 3 seconds
	}, 6000);
}
	});
	
		document.addEventListener("keydown", function(event) {
	if (event.key === "p" && pus == false) {
	let mints = mint.toString().padStart(2, '0');
    let secs = sec.toString().padStart(2, '0');
	timeleft.innerHTML = "The Game is paused";
	end = true;
	pus = true;
	setInterval(() => {
	say = "wait..";
	timeleft.innerHTML = say;
    setTimeout(() => { say = mints + ":" + secs; timeleft.innerHTML = say;}, 3000);
	// 3000 milliseconds equals 3 seconds
	}, 6000);
}else if(event.key === "p" && pus == true){
	timeleft.innerHTML = "The Game is resumed";
    end = false;
	pus = false;
}
	});
    </script>
<!--	<script src="http://192.168.1.109/1/whammy-master/whammy.js"></script> -->

</body>
</html>