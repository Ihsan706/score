<! DOCTYPE html>
<html lang="en">
<head>
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
background: linear-gradient(to right, #d32121, #if6100);
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
.time (
background: black;
padding: 5px 15px;
border-radius: 5px;
font-size: 20px;
margin-right: 15px;
}
</style>
</head>
<body>
<div class="scoreboard">
<span class="time" contenteditable="true">00:00</span>
<div class="team" contenteditable="true">Team A</div>
<div class="score" contenteditable="true">0 - 0</div>
<div class="team" contenteditable="true">Team B</div>
</div>
</body>
</html>