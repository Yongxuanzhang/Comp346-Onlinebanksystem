<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Personal Information</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="grid.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  
  
  
  
    <div class="container">

      <div class="page-header">
        <h1>Profile</h1>
      </div>
<?php
	require '../../database.php';
	$conn = mysqli_connect($server,$username,$password) ;
		if(! $conn )
		{
		    die('Fail: ' . mysqli_error($conn));
		}
		//echo 'Success';

		$employee=$_COOKIE['mycookie1'];
		//echo $employee;
		
		mysqli_select_db($conn,'eec353_2');
		
		if(!empty($_POST['address'])&&!empty($_POST['email'])&&!empty($_POST['phone'])) {
		
		$sql = "select * from employee WHERE id = '$employee';";

		$result = mysqli_query($conn,$sql);
		if (!$result) {
		printf("Error: %s\n", mysqli_error($conn));
		exit();
		}
		echo "change";
		$Num=mysqli_num_rows($result);
		$row = mysqli_fetch_assoc($result);
	
		mysqli_free_result($result);
		mysqli_close($conn);
		}
		
		/*
if(!empty($_POST['address'])&&!empty($_POST['email'])&&!empty($_POST['phone'])) {
  
echo $_POST['address'];

   $records = $db->prepare('update Employee set address = :address where id = :employee; update Employee set email = :email where id = :employee; update Employee set phone = :phone where id = :employee;');
    $records->bindParam(':employee', $_COOKIE['mycookie1']);
    $records->bindParam(':address', $_POST['address']);
    $records->bindParam(':email', $_POST['email']);
    $records->bindParam(':phone', $_POST['phone']);
    if($records->execute()){
      $message = 'Successful Change!';
    } else {
      $message = "Sorry,Failure!";
    }
	echo $_COOKIE['mycookie1'];
	echo $message;
}
	*/
	?>
	
  <?php
		//session_start();
		//require_once 'index.php';		
		//echo $_SESSION['account_n'];
		
		require "../../database.php";
	 	$conn = mysqli_connect($server,$username,$password) ;
		if(! $conn )
		{
		    die('Fail: ' . mysqli_error($conn));
		}
		

		$employee=$_COOKIE['mycookie1'];

		
		mysqli_select_db($conn,'eec352_2');
		
		$sql = "select * from Employee WHERE id = '$employee';";
		//echo 'Success';
		$result = mysqli_query($conn,$sql);
		if (!$result) {
		printf("Error: %s\n", mysqli_error($conn));
		exit();
		}

		$Num=mysqli_num_rows($result);
		$row = mysqli_fetch_assoc($result);
	
		mysqli_free_result($result);
		mysqli_close($conn);
	?>
  
   
	  
	  <form action="editinfo.php"  method="post" class="fh5co-form animate-box" data-animate-effect="fadeIn">
						<h2>Edit Profile</h2>
						<div class="form-group">
							<label">Address</label>
							<input type="text" name="address" class="form-control" id="username" placeholder="adress" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" name="email" class="form-control" id="password" placeholder="email" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" name="phone" class="form-control" id="password" placeholder="Phone Number" autocomplete="off">
						</div>
						<div class="form-group">
							<input type="submit" value="Edit" class="btn btn-primary">
						</div>
					</form>
	  
	  
	 
       <h4><a href="../employeepage2.php">Back to Home</a></h4>
	  
	  
      



    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
