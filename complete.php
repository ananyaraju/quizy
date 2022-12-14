<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../index.css">

</head>
<?php
  $title = $_GET["title"];
?>
<body  onload=" preload(); ShowResult()">

<?php
	$title=$_GET['title'];
	include('connection.php');
	mysqli_query($con,"delete from `quizzes` where title='$title'");
  mysqli_query($con,"delete from `questions` where title='$title'");
	header('location:complete.php');
?>
  <!-- Just an image -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.html">
    <img src="../logo.png" width="" height="45" alt="50">
  </a>
</nav>
<div class="success-loader overlay" id="preload" style="text-align: center">
  <img src="../200.gif" alt="">
</div>
  <div class="container" id="lol">
    <div class="row">
      <div class="justify-content-left  row col-md-6">
        <div id="result-box">
        
            <div style="display: flex; justify-content: center; align-items:center">
              <div class="row" id="completerow">
                <img src="../trophy.png" style="margin-top:30px; margin-left:25px" height="120px" alt="">
                <h2>Quiz Completed!</h2>
                <br>
                <br>
                <div style="color: black; margin-left: 1px; font-size:30px" id="finalresult"></div>
                <div class="text-center" style="padding-top: 10px;">
                <button class="btn btn-danger" onclick="window.location.href='index.html'">Back to Home</button>
                </div>
              </div>
             
            </div>
        </div>
      </div>
    
      <div class="align-center col-md-6">
          <img  style="margin-top:150px; margin-left:80px" src="../Saly-22.png" width="500">

      </div>
    </div>
  </div>
  
</body>
<script>
function preload(){
  x = document.querySelectorAll("#lol")[0]
  y = document.getElementById("preload")
setTimeout(()=>{
  //x.classList.remove("display-content")
  y.classList.add("display-content")
},2000)
}

function ShowResult() {
  if ("<?php echo $title?>" === "Microprocessors")
    document.getElementById("finalresult").innerHTML = "1 POINTS";
  else if ("<?php echo $title?>" === "demo" || "<?php echo $title?>" === "Software Engineering")
    document.getElementById("finalresult").innerHTML = "2 POINTS";
  else
    document.getElementById("finalresult").innerHTML = "NULL POINTS";
}
</script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<script src="script.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>