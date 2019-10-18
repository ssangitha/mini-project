<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php session_start();
$now= time();
if ($now > $_SESSION['expire']) {
            session_destroy();
?>
<div class="alert alert-danger">
   <h4> <strong>session expired login again!!</strong></h4>
  </div>
<?php 
include "../view/login.php";
        }
else
{
?>
<style> 
body{margin-top:20px;
margin-left:20px;
margin-right:20px;}
.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 2;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #3399FF;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #3399FF;
  cursor: pointer;
}

</style>
<div id="user-profile-2" class="user-profile">
<div class="tabbable">
<ul class="nav nav-tabs padding-18">
<li class="active">
<a data-toggle="tab" href="#home">
<i class="glyphicon glyphicon-user""></i>
Profile
</a>
</li>
<li>
<a data-toggle="tab" href="#search">
<i class="glyphicon glyphicon-search"></i>
search jobs
</a>
</li>

<li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-cog"></i> setting</a>
      <ul class="dropdown-menu">
        <li><a href="#"><p class="text-info">privacy</p></a></li><hr>
        <li><a href="#"><p class="text-info">help</p></a></li><hr>
        <li><a href="../view/index.php"><p class="text-info">logout</p></a></li>                        
      </ul>
    </li>
</ul>
<div class="tab-content no-border padding-24">
<div id="home" class="tab-pane fade in active">
<div class="row">
<div class="col-md-3 center">
<br>
<br> <h3> <p class="text-primary">Hello <?php echo $_SESSION["name"]; ?> </p> </h3>
<hr><br>
<span class="profile-picture">
<img class="editable img-responsive img-circle" alt=" Avatar"src="../view/<?php echo $_SESSION['profile'];?> " >
</span>
</div>
<div class="col-md-2">
</div>
<div class="col-md-4 center"><br><br><br>
<div class="panel-group ">
    <div class="panel panel-default ">
      <div class="panel-heading">
        <h4 class="panel-title bg-info">
          <a data-toggle="collapse" href="#collapse1">About me</a>
        </h4>
      </div>
  <div id="collapse1" class="panel-collapse collapse">
<ul class="list-group"><h4><b>
  <li class="list-group-item text-muted">Email<span class="pull-right"><?php echo $_SESSION["email"]; ?></span></li>
  <li class="list-group-item text-info">Designation<span class="pull-right"><?php echo $_SESSION["desg"]; ?></span></li>
  <li class="list-group-item text-muted">Phone number<span class="pull-right"><?php echo $_SESSION["phno"]; ?></span></li>
  <li class="list-group-item text-info">College/university<span class="pull-right"><?php echo $_SESSION["insti"]; ?></span></li>
  <li class="list-group-item text-muted">City<span class="pull-right"><?php echo $_SESSION["city"]; ?></span></li>
  <li class="list-group-item text-info">Experience<span class="pull-right"><?php echo $_SESSION["expe"]; ?></span></li>
  <li class="list-group-item text-muted">Qualification<span class="pull-right"><?php echo $_SESSION["quali"]; ?></span></li>
  <li class="list-group-item text-info">Year of passed out<span class="pull-right"><?php echo $_SESSION["ypo"]; ?></span></li>
</b></h4>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="search" class="tab-pane fade">
<br>
<br><br><br>
<div class="container"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="job.jpeg" alt="job" style="width:100%;">
      </div>

      <div class="item">
        <img src="fj22.jpeg" alt="job" style="width:100%;">
      </div>

      <div class="item">
        <img src="fj3.jpeg" alt="job" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="row">
<div class="col-md-5"><br><br>
<h4 class="bg-info"><strong><center><i>Choose your filter</i></center></strong></h4><br>
<form method="post" action="..//controller/jobfetchcontro.php">
<div class="form-group">
<label for="sa" class="text-muted"><b>Salary (lpa) :<b></label><br>
<div class="slidecontainer">
  <input type="range" name="sa" min="1" max="10" value="1" class="slider" id="myRange">
<br>
  <p class="text-muted">salary : <span id="demo"></span></p>
</div>
<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

</div>
<br>
<div class="form-group">
<label for="desg"class="text-muted"><b>Designation &nbsp;</b></label>
<select name = "desg">
            <option value = "developer" selected>developer</option>
            <option value = "testing">testing</option>
	    <option value = "system analyst">system analyst</option>
  	    <option value = "project manager">project manager</option>
	    <option value = "software engineer">software engineer</option>
	    <option value = "web developer">web developer</option>
         </select>
</div><br>

<div class="form-group">
<label for="skil"class="text-muted"><b>Skills &nbsp;</b></label>
<select name = "skil">
            <option value = "c++" selected>c++</option>
            <option value = "java">java</option>
	    <option value = "python">python</option>
  	    <option value = "php">php</option>
	    <option value = "ruby">ruby</option>
	    <option value = "javascript">javascript</option>
         </select>
</div><br>

<input type="submit" data-inline="true" value="Submit">
</form>
</div>
<div class="col-md-6">
</div>
</div>
</div>
<?php
}
?>
</body>
</html>
