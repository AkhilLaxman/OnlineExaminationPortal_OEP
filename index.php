<!DOCTYPE html>
<html lang="en">
<head>
  <title>Examination Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
  <style>
	body{
		background-color:black;
	}
	.intro {
    display: table;
    width: 100%;
    padding: 0;
	background-image:url(heading.jpg);
    background-color: #e5e5e5;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
    background-attachment: fixed;
}
.intro .overlay {
    background: rgba(0,0,0,0.4);
}
.intro h1 {
    font-family: 'Montserrat',sans-serif;
    color: green;
	background-color:white;
	opacity:0.8;
	border-radius:20px;
	height:100px;
    font-size: 6em;
    font-weight: 400;
    margin-top: 110px;
}
.intro span {
    color: #a7c44c;
    font-weight: 600;
}
.intro p {
    color: #fff;
    font-size: 24px;
    font-weight: 400;
    margin-top: 150px;
}
header .intro-text {
    padding-top: 200px;
    padding-bottom: 50px;
    text-align: center;
}
.navbut1{
	background-color:transparent;
	opacity:0.8;
	border:5px ridge #fff;
	width:auto;
	height:60px;
	position: absolute;
	top: 10%;
	left: 70%;
	color:white;
	font-size:20px;
}
.navbut2{
	background-color:transparent;
	opacity:0.8;
	border:5px ridge #fff;
	width:auto;
	height:60px;
	position: absolute;
	top: 10%;
	left: 85%;
	color:white;
	font-size:20px;
}
input:hover{
  background:white;
  color:black;
  cursor:pointer;
  opacity:0.5;
}
  </style>
</head>
<body>
<header id="header">
		<div class="intro">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="intro-text">
							<form>
							<input type="button" class="navbut1" value="Candidate Login" onclick="window.location.href = 'newlogin.php'" formtarget="_blank">
							<input type="button" class="navbut2" value="Candidate Signup" onclick="window.location.href = 'newsignin.php'" formtarget="_blank">
              <input type="button" class="navbut1" style="left:4%;" value="Exam Admin Login" onclick="window.location.href = 'admin/index.php'" formtarget="_blank">
							</form>
							<h1><span>O</span>nline <span>E</span>xamination <span>P</span>ortal</h1>
							<p><br><br><br></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	  </header>
</body>
</html>
