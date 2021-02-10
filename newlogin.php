<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
	<style>
		.container{
			margin-left:400px;
		}
	</style>
</head>
<body>
 <div class="header">
    <h1> <span>L</span>ogin <span>P</span>age</h1>
 </div>
 
<div class="container">
    <div class="row">
        <div class="col-sm-6  ">
            <div class="panel panel-danger login">
                <div class="panel-heading login-heading">Login</div>
                    <div class="panel-body">
                        <?php
                            if(isset($_GET['run']) && $_GET['run']=="failed")
                            {
                                echo '<p style="color:crimson">Your email or password does not match</p>';
                            }
                        ?>
                        <!-- <form role="form" method="post" enctype="multipart/form-data"> -->
                            <form name="login" onsubmit="return checkLogin()" action="signin_sub.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="email"><p class="line0" ></p>Enter Email</label>
                                <input type="email" class="form-control" id="email0" name="e" placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <label for="pwd"><p class="line0"></p>Enter Password</label>
                                <input type="password" class="form-control" id="pwd0" name="p" placeholder="Enter password" required>
                            </div>
                            <button type="submit" class="btn btn-default" onclick="checkLogin()">Submit</button>
                        </form>
                    </div>
            </div>
        </div>
	</div>
	<a href="newsignin.php" style="color:white;text-decoration:none;font-size:20px;font-family:'Times New Roman';text-align:center;">Signup?</a>
</div>
<script src="script.js"></script>
</body>
</html>
