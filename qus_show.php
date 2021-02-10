<?php

include("class/users.php");
$qus = new users;
$cat = $_POST['cat'];
$qus->qus_show($cat);
$_SESSION['cat'] = $cat;
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style4.css">
  <script>

      function timeout()
            {
                var hours = Math.floor(timeLeft/3600);
                var minute = Math.floor((timeLeft-(hours*60*60))/60);
                var second = timeLeft%60;
                var hrs = checktime(hours);
                var mint = checktime(minute);
                var sec = checktime(second);
                if(timeLeft<=0)
                {
                    clearTimeout(tm);
		    //webcam.stop();
                    document.getElementById("form1").submit();
                }
                else
                {
                    document.getElementById("time").innerHTML= hrs+":"+mint+":"+sec;
                }
                timeLeft--;
                var tm = setTimeout(function(){timeout()},1000)
            }
            function checktime(msg)
            {
                if(msg<10)
                {
                    msg = "0"+msg;
                }
                return msg;
            }

  </script>
</head>
<body onload="timeout()">
<body>
<p><span id="errorMsg"></span></p>
    
<div class="video-wrap" style="width:'100%';text-align:center;">
    <video id="video" playsinline autoplay></video>
</div>
<div class="content-wrap">
<div class="header">
    <h1> <span>O</span>nline <span>E</span>xamination <span>P</span>ortal</h1>
 </div>
<script>      'use strict';

const video = document.getElementById('video');
const errorMsgElement = document.querySelector('span#errorMsg');

const constraints = {
    video: {
        width: 320, height: 240
    }
};

// Access webcam
async function init() {
    try {
        const stream = await navigator.mediaDevices.getUserMedia(constraints);
        handleSuccess(stream);
    } catch (e) {
        errorMsgElement.innerHTML = `navigator.getUserMedia error:${e.toString()}`;
    }
}

// Success
function handleSuccess(stream) {
    window.stream = stream;
    video.srcObject = stream;
}

// Load init
init();

// Draw image
var context = canvas.getContext('2d');
snap.addEventListener("click", function() {
    context.drawImage(video, 0, 0, 640, 480);
});</script>
<div class="container">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
    <p class="line"></p>
  <h2><span>Y</span>our <span>e</span>xam <span>h</span>as <span>s</span>tarted 
  <script type="text/javascript">
    var timeLeft=2*60;
  </script>
  
  <div id="time" style="float:right;">timeout</div></h2> 
  <form id="form1" action="ans.php" method="post"> 
  <?php 
  $i = 1;
  foreach($qus->question as $qstn) {?>                
  <table class="table table-bordered">
    <thead>
      <tr class="danger">
        <th><pre> <?php echo  "<span>$i</span>"; ?><span>.&emsp;</span>
        <?php echo $qstn["question"]; ?></pre></th>
      </tr>
    </thead>
    <tbody>
      
    

        <?php if(isset($qstn['ans1'])) {?>
      <tr class="info">
        <td><span>&nbsp;i&emsp;</span> <input type="radio" value="0" name="<?php echo $qstn['id']; ?>"></in><?php echo $qstn['ans1']; ?></td>
      </tr>
        <?php } ?>


      <?php if(isset($qstn['ans2'])) {?>
      <tr class="info">
        <td><span>&nbsp;ii&emsp;</span> <input type="radio" value="1" name="<?php echo $qstn['id']; ?>"></in><?php echo $qstn['ans2'] ?></td>
      </tr>
      <?php } ?>


      <?php if(isset($qstn['ans3'])) {?>
      <tr class="info">
        <td><span>&nbsp;iii&emsp;</span> <input type="radio" value="2" name="<?php echo $qstn['id']; ?>"></in><?php echo $qstn['ans3'] ?></td>
      </tr>
      <?php } ?>


      <?php if(isset($qstn['ans4'])) {?>
      <tr class="info">
        <td><span>&nbsp;iv&emsp;</span>  <input type="radio" value="3" name="<?php echo $qstn['id']; ?>"></in><?php echo $qstn['ans4'] ?></td>
      </tr>
      <?php } ?>

      <tr class="info">
        <td><input type="radio" checked="checked" style="display:none !important;" value="no_attempt" name="<?php echo $qstn['id']; ?>"></td>
      </tr>


    </tbody>
  </table>
  <?php $i++; } ?>
  <center><input type="submit" value="Submit" class="btn btn-success submit-btn"></center>
  
  </form>
  </div>
  <div class="col-sm-2"></div>

</div>
</div>
</body>
</html>



