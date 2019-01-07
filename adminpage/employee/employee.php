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

    <title>Employee Info</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <title>Employees</title>

  </head>
  <body>
  
  
    <div class="container">


        <h1>Employees</h1>

	<table class="table table-md table-bordered">
            <tr>
                <th scope="col">Employee ID</th>
		<th scope="col">Title</th>          
                <th scope="col">Name</th>    
                <th scope="col">Start Date</th>
		<th scope="col">Email</th>
		<th scope="col">Phone</th>
		<th scope="col">Address</th>
		<th scope="col"># of Sick Days</th>
		<th scope="col"># of Holidays</th>
		<th scope="col">Monthly pay</th>
		<th scope="col">Branch</th>		       
            </tr>
  	
  <?php	
		require "../../database.php";
	 	$conn = mysqli_connect($server,$username,$password) ;
		if(! $conn )
		{
		    die('Fail: ' . mysqli_error($conn));
		}

		mysqli_select_db($conn,$database);
		
		$sql = "select * from Employee;";
		//echo 'Success';
		$result = mysqli_query($conn,$sql);
		if (!$result) {
		printf("Error: %s\n", mysqli_error($conn));
		exit();
		}

		$Num=mysqli_num_rows($result);

		for($i=0; $i<$Num; $i++){
			$row = mysqli_fetch_assoc($result);
			echo "<tr>";
			echo "<td scope='row'>{$row['id']}</td>";
			echo "<td>{$row['title']}</td>";
			echo "<td>{$row['name']}</td>";
			echo "<td>{$row['start_date']}</td>";
			echo "<td>{$row['email']}</td>";
			echo "<td>{$row['phone']}</td>";
			echo "<td>{$row['address']}</td>";
			echo "<td>{$row['sick_days']}</td>";
			echo "<td>{$row['holidays']}</td>";
			echo "<td>{$row['monthly_pay']}$</td>";
			echo "<td>{$row['branch_id']}</td>";
			echo "<td><a href='editemployee.php?id={$row['id']}' type='submit' value='Edit' class='btn btn-primary'>Edit</a></td>";
			echo "</tr>";
				}
	
		mysqli_free_result($result);
		mysqli_close($conn);
	?>
	  </table>
      
	  
	  
      

<h4><a href="../adminpage2.php">Back to Home</a></h4>

    </div> <!-- /container -->


        
	
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
