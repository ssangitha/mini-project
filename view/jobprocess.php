<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style> 
body{margin-top:50px;
}
</style>
<body>
<?php session_start();
$now= time();
if ($now > $_SESSION['expire']) {
            session_destroy();
?>
<div class="alert alert-danger">
   <h5> <strong>session expired login again!!</strong></h5>
  </div>
<?php include"../view/login.php";
}
else
{
?>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 center">
<?php
while($row = $result->fetch_assoc()) 
{
?>
<div class="view overlay zoom">
<div class="container">
<div class="card bg-dark text-white" style="width:300px;height:470px">
    <img class="card-img-top" src="card.jpeg" alt="Card image" style="width:100%">
    <div class="card-body"><center>
      <h4 class="card-title text-info"><?php echo $row['compny'] ?></center></h4>
<p class="card-text ">
<b>designation :<b><span class="float-right"><?php echo $row['desgnation'] ?></span></p>
<b>salary(lpa) : <b><span class="float-right"><?php echo $row['salary'] ?></span></p>
<b>city :<b><span class="float-right"><?php echo $row['city'] ?></span></p>
<b>skills required :<b><span class="float-right"><?php echo $row['skil'] ?></span><br></p></p><center>
   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
 Apply
</button></center><br>
</div>
  </div>
</div>
</div>
<div class="modal fade " id="myModal">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-body">
Applied successfully!!
</div>
<div class="modal-footer">
<button type="button" class="btn btn-success" data-dismiss="modal">Done</button>
</div>
</div>
</div>
</div>
<br>
<br>
<?php 
}
}?>
</div>
</div>
</body>
</html>
