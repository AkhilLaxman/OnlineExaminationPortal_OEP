<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
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
    font-family: 'Times New Roman';
    color: green;
	background-color:black;
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
	width:120px;
	height:60px;
	position: absolute;
	top: 10%;
	left: 80%;
	color:white;
	font-size:20px;
}
.navbut2{
	background-color:transparent;
	opacity:0.8;
	border:5px ridge #fff;
	width:120px;
	height:60px;
	position: absolute;
	top: 10%;
	left: 90%;
	color:white;
	font-size:20px;
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
							<input type="button" class="navbut1" value="Login" onclick="window.location.href = 'newlogin.php'" formtarget="_blank"">
							<input type="button" class="navbut2" value="Signup?" onclick="window.location.href = 'newsignin.php'" formtarget="_blank">
							</form>
							<h1>Online Examination Portal</h1>
							<p><br><br><br></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	  </header> 
</body>
</html>