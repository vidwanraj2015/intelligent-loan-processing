<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Parallax Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
 <nav class="teal lighten-2">
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="#!" class="breadcrumb">First</a>
        <a href="#!" class="breadcrumb">Second</a>
        <a href="#!" class="breadcrumb">Third</a>
      </div>
    </div>
  </nav>
  
   
<div class=" container" >
<form action="collect-aadhar.php" method="post"  enctype="multipart/form-data">
   <div class="file-field input-field  ">
      <div class="btn">
        <span>Aadhar</span>
		<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
        <input type="file" name="myfile" id="myfile">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate " placeholder="upload the file" type="text">
      </div>
    </div>
	  <button class="btn waves-effect waves-light" type="submit" name="submit" id="submit">upload!</button> 
	</form>   
<form action="collect-income.php" method="post"  enctype="multipart/form-data">
	<div class="file-field input-field  ">
      <div class="btn">
        <span>Income</span>
		<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
        <input type="file" name="myfile1" id="myfile1">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate " placeholder="upload the file" type="text">
      </div>
    </div>
	  <button class="btn waves-effect waves-light" type="submit" name="submit" id="submit">upload!</button> 
</form>    
	   

	   <form action="#" method="post"  enctype="multipart/form-data">
	<div class="file-field input-field  ">
	<div class="btn">
        <span>voter id</span>
		<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
        <input type="file" name="myfile2" id="myfile2">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate " placeholder="upload the file" type="text">
      </div>
    </div>
	 <button class="btn waves-effect waves-light" type="submit" name="submit" id="submit">upload!</button>
	</div>
	
  </form>
  <div>
  <div>
  
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  <?php


session_start();
include('db.php');
echo "username-".$_SESSION['sid'];
?>
  

</body>
</html> 
 