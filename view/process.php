<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link rel="stylesheet" href=//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css
</head>
<body> <br><br><br>
<div class="container">

  <form class="well form-horizontal" id="fm1" method="post" action="../controller/detail.php">
<fieldset>

<legend><center><h2><b>Enter your details</b></h2></center></legend><br>


<div class="form-group">
  <label class="col-md-4 control-label">Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input type="text" class="form-control" id="uname" placeholder="username" name="name" required>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Phone number</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input type="int" class="form-control" id="phno" placeholder="mobile number" name="phn" required>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Email</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" >Designation</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
  <input type="text" class="form-control" id="desg" placeholder="Enter designation" name="desg" required>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >City</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
   <input type="text" class="form-control" id="cy" placeholder="Enter city" name="city" required>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Skills</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
   <input type="text" class="form-control" id="sk" placeholder="Enter skills" name="skill" required>
    </div>
  </div>
</div>

  <div class="form-group"> 
  <label class="col-md-4 control-label">Experience</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
    <select name="exp" class="form-control selectpicker">
      <option value = "0" selected>0 year</option>
            <option value = "1">1 year</option>
	    <option value = "2">2 year</option>
  	    <option value = "more">more</option>
    </select>
  </div>
</div>
</div>
  
<div class="form-group"> 
  <label class="col-md-4 control-label">Qualification</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
    <select name="qp" class="form-control selectpicker">
      <option value = "BE" selected>B.E</option>
            <option value = "ME">M.E</option>
	    <option value = "BTECH">B.TECH</option>
  	    <option value = "BSC">BSC</option>
	    <option value = "MSC">MSC</option>
	    <option value = "other">other</option>
    </select>
  </div>
</div>
</div>
  
<div class="form-group"> 
  <label class="col-md-4 control-label">Passed out year</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
    <select name="yp" class="form-control selectpicker">
      <option value = "2017" selected>2017</option>
            <option value = "2018">2018</option>
	    <option value = "2019">2019</option>
  	    <option value = "2020">2020</option>
	    <option value = "before">before</option>
	    <option value = "other">other</option>
    </select>
  </div>
</div>
</div>

<div class="form-group"> 
  <label class="col-md-4 control-label">CGPA</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-flash"></i></span>
    <select name="cgpa" class="form-control selectpicker">
      <option value = "above9" selected>9-10</option>
            <option value = "above8">8-9</option>
	    <option value = "above7">7-8</option>
  	    <option value = "above6">6-7</option>
	    <option value = "below6">below 6</option>
    </select>
  </div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Institution</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
      <input type="text" class="form-control" id="cl" placeholder="college/university" name="clg" required>    </div>
  </div>
</div>

      
<div class="form-group">
  <label class="col-md-4 control-label">Upload resume</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
  <input type="file" name="upload" id="file-select">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">profile image</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-camera"></i></span>
  <input type="file" name="profile" id="prf">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br><center>
    <button type="submit" class="btn btn-success" >Submit<span class="glyphicon glyphicon-send"></span></button>
  </center></div>
</div>

</fieldset>
</form>
</div>
    </div>
</body>
</html>
