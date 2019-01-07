
<?php
echo "<script type='text/javascript'>display_alert();</script> ";
?>

<?php

require '../database.php';



if(!empty($_POST['from'])&&!empty($_POST['to'])&&!empty($_POST['amount'])) {
  echo  $_POST['from'];
	echo  $_POST['to'];
	echo  $_POST['amount'];
   $records = $db->prepare('update account set balance=balance+:transfer_amount where id=:account_number2;update account set balance=balance-:transfer_amount where id=:account_number1;');
    $records->bindParam(':transfer_amount', $_POST['amount']);
    $records->bindParam(':account_number1', $_POST['from']);
    $records->bindParam(':account_number2', $_POST['to']);
    if($records->execute()){
      $message = 'Successful Change!';
    } else {
      $message = "Sorry,Failure!";
    }


}



?>



<!DOCTYPE html>
<html lang="en">
  <head>
	<script type="text/javascript">
function display_alert()
  {
  alert("Successfully Transfer");
  }
</script>
  
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Move Money</title>

    <!-- Bootstrap core CSS -->
    <link href="info/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="info/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

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

  


    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->

	  
	  
	 <form action="movemoney.php"  method="post" class="fh5co-form animate-box" data-animate-effect="fadeIn">
	 <h2>Move money</h2>
		<div class="form-group">
		<label>From</label>
		<select class="form-control" name="from">
			<?php
	
		require "../database.php";
	 	$conn = mysqli_connect($server,$username,$password) ;
		if(! $conn )
		{
		    die('Fail: ' . mysqli_error($conn));
		}
		echo 'Success';

		$client=$_COOKIE['mycookie1'];
		echo $client;
		$tt='ss';
		mysqli_select_db($conn,'eec352_2');
		
		$sql = "select * from account WHERE client_id = '$client';";
		//echo 'Success';
		$result = mysqli_query($conn,$sql);
		if (!$result) {
		printf("Error: %s\n", mysqli_error($conn));
		exit();
		}
		echo 'Success';
		$Num=mysqli_num_rows($result);
		
		for($i=0; $i<$Num; $i++){
				    $row = mysqli_fetch_assoc($result);
				 echo "<option>{$row['id']}</option>";
				}

		mysqli_free_result($result);
		mysqli_close($conn);
	?>

    </select>  
  </div>
  

						
  		<div class="form-group">
		<label>To</label>
			<select class="form-control" name="to">
			<?php
	
		require "../database.php";
	 	$conn = mysqli_connect($server,$username,$password) ;
		if(! $conn )
		{
		    die('Fail: ' . mysqli_error($conn));
		}
		echo 'Success';

		$client=$_COOKIE['mycookie1'];
		echo $client;
		
		mysqli_select_db($conn,'eec352_2');
		
		$sql = "select * from account WHERE client_id = '$client';";
		//echo 'Success';
		$result = mysqli_query($conn,$sql);
		if (!$result) {
		printf("Error: %s\n", mysqli_error($conn));
		exit();
		}
		echo 'Success';
		$Num=mysqli_num_rows($result);
		
		for($i=0; $i<$Num; $i++){
				    $row = mysqli_fetch_assoc($result);
				 echo "<option>{$row['id']}</option>";
				}

		mysqli_free_result($result);
		mysqli_close($conn);
	?>

    </select>  
  </div>
  
  	<div class="form-group">
			<label>Amount</label>
			<input type="text" name="amount" class="form-control" id="Amount" placeholder="0" autocomplete="off">
	</div>
  
  
    <div class="form-group">
		<input type="submit" onclick="display_alert()" value="Transfer" class="btn btn-primary">
	</div>
  
  
</form> 

		<h4><a href="query.html">Check Banlance</a></br></h4>
       <h4><a href="clientpage2.php">Back to Home</a></h4>


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
