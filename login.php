<?php 
include("connection.php");
session_start();
    if(isset($_POST['submit'])){
      echo $sql = "select * from login where username ='".$_POST['username']."' and password = '".$_POST['password']."'";
      $result = $conn->query($sql);
      if($result->num_rows > 0 ){
         $_SESSION['username'] = $_POST['username'];
        //echo "user login";
        header('location:dashboard.php');
      }
      else{
         $err = "Invalid Login!";
      }
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>

	<div class="col-sm-4">
		<form method="POST" action="">
<div class="form-group">
    <label class="control-label col-sm-2" for="amount">Username:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="username" placeholder="Username" value="">
    </div>
  </div>
     <div class="form-group">
    <label class="control-label col-sm-2" for="currency">Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" placeholder="*****" value="">
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-10">
  <button type="submit" name="submit" id="submit" class="btn btn-info">Submit</button>
    </div>
  </div>

  
</form>
	</div>





</body>
</html>