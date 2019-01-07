<?php
echo "<script type='text/javascript'>display_alert();</script> ";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<script type="text/javascript">
function display_alert()
  {
  alert("Successfully Edited!");
  }
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Edit Employee</title>

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
	require 'database.php';



if(!empty($_POST['address'])&&!empty($_POST['email'])&&!empty($_POST['phone'])) {
  


   $records = $db->prepare('update Employee set title = :title where id = :employee; update Employee set email = :email where id = :employee; update Employee set phone = :phone where id = :employee;update Employee set name = :name where id = :employee;update Employee set start_date = :start_date where id = :employee;update Employee set sick_days = :sick_days where id = :employee;update Employee set holidays = :holidays where id = :employee;update Employee set monthly_pay = :monthly_pay where id = :employee;update Employee set branch_id = :branch_id where id = :employee;');
    $records->bindParam(':employee', $_GET['id']);
$records->bindParam(':name', $_POST['name']);
$records->bindParam(':start_date', $_POST['start_date']);
    $records->bindParam(':email', $_POST['email']);
    $records->bindParam(':sick_days', $_POST['sick_days']);
    $records->bindParam(':phone', $_POST['phone']);
$records->bindParam(':holidays', $_POST['holidays']);
$records->bindParam(':monthly_pay', $_POST['monthly_pay']);
$records->bindParam(':branch_id', $_POST['branch_id']);
$records->bindParam(':title', $_POST['title']);
    if($records->execute()){
      $message = 'Successful Change!';
    } else {
      $message = "Sorry,Failure!";
    }
	//echo $_COOKIE['mycookie1'];
	//echo $message;
}
	
	?>
  
   
	  
	  <form action="editemployee.php?id=<?php echo $_GET['id'] ?>"  method="post" class="fh5co-form animate-box" data-animate-effect="fadeIn">
						<h2>Employee Info</h2>

	 <?php
		
		require "database.php";
	 	$conn = mysqli_connect($server,$username,$password) ;
		if(! $conn )
		{
		    die('Fail: ' . mysqli_error($conn));
		}
		

		$employee=$_GET['id'];

		
		mysqli_select_db($conn,'eec353_2');
		
		$sql = "select * from Employee WHERE id = '$employee';";
		//echo 'Success';
		$result = mysqli_query($conn,$sql);
		if (!$result) {
		printf("Error: %s\n", mysqli_error($conn));
		exit();
		}

		$Num=mysqli_num_rows($result);
		$row = mysqli_fetch_assoc($result);
	
		echo '<div class="form-group">';
		echo '<label>Title</label>';
		echo "<input type='text' name='title' class='form-control' id='title' placeholder='title' autocomplete='off' value='{$row['title']}' />";
		echo "</div>";	
		echo '<div class="form-group">';
		echo '<label>Name</label>';
		echo "<input type='text' name='name' class='form-control' id='name' placeholder='Name' autocomplete='off' value='{$row['name']}' />";
		echo "</div>";
		echo '<div class="form-group">';
		echo '<label>Start Date</label>';
		echo "<input type='date' name='start_date' class='form-control' id='start_date' placeholder='Start Date' autocomplete='off' value='{$row['start_date']}' />";
		echo "</div>";	
		echo '<div class="form-group">';
		echo '<label>Email</label>';
		echo "<input type='text' name='email' class='form-control' id='email' placeholder='Email' autocomplete='off' value='{$row['email']}' />";
		echo "</div>";	
		echo '<div class="form-group">';
		echo '<label>Phone</label>';
		echo "<input type='text' name='phone' class='form-control' id='phone' placeholder='Phone' autocomplete='off' value='{$row['phone']}' />";
		echo "</div>";
		echo '<div class="form-group">';
		echo '<label>Address</label>';
		echo "<input type='text' name='address' class='form-control' id='address' placeholder='Address' autocomplete='off' value='{$row['address']}' />";
		echo "</div>";
		echo '<div class="form-group">';
		echo '<label>Sick Days</label>';
		echo "<input type='text' name='sick_days' class='form-control' id='sick_days' placeholder='Sick Days' autocomplete='off' value='{$row['sick_days']}' />";
		echo "</div>";
		echo '<div class="form-group">';
		echo '<label>Holidays</label>';
		echo "<input type='text' name='holidays' class='form-control' id='holidays' placeholder='Holidays' autocomplete='off' value='{$row['holidays']}' />";
		echo "</div>";
		echo '<div class="form-group">';
		echo '<label>Monthly Pay</label>';
		echo "<input type='text' name='monthly_pay' class='form-control' id='monthly_pay' placeholder='Monthly Pay' autocomplete='off' value='{$row['monthly_pay']}' />";
		echo "</div>";
		echo '<div class="form-group">';
		echo '<label>Branch ID</label>';
		echo "<input type='text' name='branch_id' class='form-control' id='branch_id' placeholder='Branch ID' autocomplete='off' value='{$row['name']}' />";
		echo "</div>";

		mysqli_free_result($result);
		mysqli_close($conn);
	?>
						
						<div class="form-group">
							<input type="submit" onclick="display_alert()" value="Edit" class="btn btn-primary">
						</div>
					</form>
	  
	  
	<h4><a href="employee.php">Back to Employees</a></h4>	 
        <h4><a href="../adminpage2.php">Back to Home</a></h4>
	 

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
