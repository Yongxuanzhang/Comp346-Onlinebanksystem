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

    <title>Create Employee</title>

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
        <h1>Bank System</h1>
      </div>
<?php
	require '../database.php';



if(!empty($_POST['id'])&&!empty($_POST['start_date'])&&!empty($_POST['name'])&&!empty($_POST['address'])&&!empty($_POST['email'])&&!empty($_POST['phone'])&&!empty($_POST['title'])) {
  


   $records = $db->prepare("insert into Employee values(:id, :start_date, :name, :address, :email, :phone, :title, :monthly_pay, :sick_days, :holidays, :password,
 :branch_id);");
    $records->bindParam(':id', $_POST['id']);
    $records->bindParam(':start_date', $_POST['start_date']);
    $records->bindParam(':name', $_POST['name']);
    $records->bindParam(':address', $_POST['address']);
    $records->bindParam(':email', $_POST['email']);
    $records->bindParam(':phone', $_POST['phone']);
    $records->bindParam(':title', $_POST['title']);
    $records->bindParam(':monthly_pay', $_POST['monthly_pay']);
    $records->bindParam(':sick_days', $_POST['sick_days']);
    $records->bindParam(':holidays', $_POST['holidays']);
    $records->bindParam(':password', $_POST['password']);
    $records->bindParam(':branch_id', $_POST['branch_id']);
    if($records->execute()){
      $message = 'Successfully added Employee '. $_POST['id'] . '!';
    } else {
      $message = "Sorry, failure to add employee!";
    }
	//echo $_COOKIE['mycookie1'];
	echo $message;
}
	
	?>
  
   
	  
	  <form action="create_employee_account.php"  method="post" class="fh5co-form animate-box" data-animate-effect="fadeIn">
						<h2>Create Employee</h2>
						<div class="form-group">
							<label>Employee ID</label>
							<input type="text" name="id" class="form-control" id="id" placeholder="ID" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Start Date</label>
							<input type="date" name="start_date" class="form-control" id="id" placeholder="Date" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" class="form-control" id="id" placeholder="Name" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Address</label>
							<input type="text" name="address" class="form-control" id="id" placeholder="Address" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" name="email" class="form-control" id="id" placeholder="Email" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" name="phone" class="form-control" id="id" placeholder="Phone" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="title" class="form-control" id="id" placeholder="Title" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Monthly Pay</label>
							<input type="text" name="monthly_pay" class="form-control" id="id" placeholder="Monthly Pay" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Sick Days</label>
							<input type="text" name="sick_days" class="form-control" id="id" placeholder="Sick Days" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Holidays</label>
							<input type="text" name="holidays" class="form-control" id="id" placeholder="Holidays" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="text" name="password" class="form-control" id="id" placeholder="Password" autocomplete="off">
						</div>
						<div class="form-group">
						<label>Branch</label>
							<?php
		
		require "../database.php";
	 	$conn = mysqli_connect($server,$username,$password) ;
		if(! $conn )
		{
		    die('Fail: ' . mysqli_error($conn));
		}
		

		//$employee=$_COOKIE['mycookie1'];		
		mysqli_select_db($conn,$database);
		
		$sql = "select id from Branch;";
		$result = mysqli_query($conn,$sql);
		if (!$result) {
		printf("Error: %s\n", mysqli_error($conn));
		exit();
		}

		echo "<select name='branch_id' id='branch_id'>";
		while ($row = $result->fetch_assoc()) {
		    echo "<option value='" . $row['id'] . "'>" . $row['id'] . "</option>";
		}
		echo "</select>";

		mysqli_free_result($result);
		mysqli_close($conn);

	?>
						</div>
						<div class="form-group">
							<input type="submit" value="Create" class="btn btn-primary">
						</div>
					</form>
	  
	  
	 
       <h4><a href="adminpage2.php">Back to Home</a></h4>
	  
	  
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
