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
        <h1>Bank System</h1>
      </div>
<?php
	require '../database.php';



if(!empty($_POST['account_id'])&&!empty($_POST['client_id'])) {
  
//echo 'suchee';

   $records = $db->prepare("delete from Account where id=:id and client_id=:client_id;");
    $records->bindParam(':id', $_POST['account_id']);
    $records->bindParam(':client_id', $_POST['client_id']);
	$records->execute();
   $results = $records->fetch(PDO::FETCH_ASSOC);
   echo false;
   
   
   
    if(count($results) > 0){
    
	//echo'Success';
	
	
    } else {
     echo "Sorry,Failure!";
  }
}
   
   

	
	?>
  
   
	  
	    <form action="delete_client_account.php"  method="post" class="fh5co-form animate-box" data-animate-effect="fadeIn">
						<h2>Delete Client Account</h2>
						<div class="form-group">
						<label>Account ID</label>
							<?php
		
		require "../database.php";
	 	$conn = mysqli_connect($server,$username,$password) ;
		if(! $conn )
		{
		    die('Fail: ' . mysqli_error($conn));
		}
		

		//$employee=$_COOKIE['mycookie1'];		
		mysqli_select_db($conn,$database);
		
		$sql = "select id from account;";
		$result = mysqli_query($conn,$sql);
		if (!$result) {
		printf("Error: %s\n", mysqli_error($conn));
		exit();
		}

		echo "<select name='account_id' id='client_id'>";
		while ($row = $result->fetch_assoc()) {
		    echo "<option value='" . $row['id'] . "'>" . $row['id'] . "</option>";
		}
		echo "</select>";

		mysqli_free_result($result);
		mysqli_close($conn);

	?>
				</div>
						
						
						
			<div class="form-group">
				<label>Client</label>
							<?php
		
		require "../database.php";
	 	$conn = mysqli_connect($server,$username,$password) ;
		if(! $conn )
		{
		    die('Fail: ' . mysqli_error($conn));
		}
		

		//$employee=$_COOKIE['mycookie1'];		
		mysqli_select_db($conn,$database);
		
		$sql = "select id, name from client;";
		$result = mysqli_query($conn,$sql);
		if (!$result) {
		printf("Error: %s\n", mysqli_error($conn));
		exit();
		}
	echo "<select name='client_id' id='client_id'>";
		while ($row = $result->fetch_assoc()) {
		    echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
		}
		echo "</select>";

		mysqli_free_result($result);
		mysqli_close($conn);


	?>
						</div>
						
						
						
						
		
						<div class="form-group">
							<input type="submit" value="Delete" class="btn btn-primary">
						</div>
					</form>
	  
	  
	 
       <h4><a href="employeepage2.php">Back to Home</a></h4>
	  
	  
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>













