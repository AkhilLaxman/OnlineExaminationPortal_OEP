<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="signinstyle.css">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
	<style>
		.container{
			margin-left:380px;
			width:80%;

		}
	</style>
</head>
<body>
 <div class="header">
    <h1> <span>F</span>ill <span>D</span>etails <span>T</span>o <span>S</span>ignup</h1>
 </div>
 
<div class="container">
    <div class="row" >
		<div class="col-sm-6  ">
			<div class="col-sm-6">
            <div class="panel panel-danger signup">
                <div class="panel-heading signup-heading"></div>
                    <div class="panel-body">
                            <?php if(isset($_GET['run']) && $_GET['run']=="success") 
                            {
                                echo '<p style="color:green">User registration successful!</p>';
                            }
                            elseif(isset($_GET['message']) && $_GET['message']=="alreadyexists")
                            {
                                echo "Email id already exists!";
                            }
                            ?>
                        <!-- <form role="form" method="post" action="signup_sub.php" enctype="multipart/form-data"> -->
                            <form name="form2" onsubmit="return checkSignup()" method="post" action="signup_sub.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name"><p class="line0"></p>Name:</label>
                                <input type="text" class="form-control" name="n" id="name" placeholder="Enter full name">
                            </div>
                            <div class="form-group">
                                <label for="email"><p class="line0"></p>Email:</label>
                                <input type="email" class="form-control" name="e" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="pwd"><p class="line0"></p>Password:</label>
                                <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
                            </div>
                            <div class="form-group">
                                <label for="pwd"><p class="line0"></p>Confirm Password:</label>
                                <input type="password" class="form-control" id="confirmPwd" placeholder="Enter password">
                            </div>
                            <div class="form-group">
                                <label for="file"><p class="line0"></p>Upload your image:</label>
                                <input type="file" class="form-control" name="img" id="file" style="padding: 3px;">
                            </div>
                            <button type="submit" class="btn btn-default" onclick="checkSignup()">Submit</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
	<a href="index.php" style="text-decoration:none;color:white;font-size:30px;">Login?</a>
</div>
<script src="script.js"></script>
</body>
</html>
