


<?php


require '../database.php';



if(!empty($_POST['from'])&&!empty($_POST['to'])&&!empty($_POST['amount'])) {
  
//update account inner join(select balance,account_number from account,client where (client.email='emal' or phone='asd') and account.client_id=client.client_id limit 1)b on account.account_number=b.account_number set account.balance=10000; 
$records = $db->prepare('insert into Bill values(:account_number1,:to,:transfer_amount,1);');
   
   //$records = $db->prepare('update account set balance=balance+:transfer_amount where account_number=:account_number2;update account set balance=balance-:transfer_amount where account_number=:account_number1;');
    //$records = $db->prepare('select * from client where id=11111111;');
	$records->bindParam(':transfer_amount', $_POST['amount']);
    $records->bindParam(':account_number1', $_POST['from']);
    $records->bindParam(':to', $_POST['to']);
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

    <title>Pay a bill</title>

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

	  
	  
	 <form action="setbill.html"  method="post" class="fh5co-form animate-box" data-animate-effect="fadeIn">
	 <h2>Pay a bill</h2>
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
		mysqli_select_db($conn,$database);
		
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
			<label>To(Payee)</label>
			<input type="text" name="to" class="form-control" id="Amount" placeholder=Name autocomplete="off">
	</div>
  
  
  	<div class="form-group">
			<label>Amount</label>
			<input type="text" name="amount" class="form-control" id="Amount" placeholder="0" autocomplete="off">
	</div>
  
  
    <div class="form-group">
		<input type="submit" onclick="display_alert()" value="Pay Monthly" class="btn btn-primary">
	</div>
	
  
</form> 
			
			
			
		
  
  
  
		<h4><a href="query.html">Check Banlance</a></br></h4>
       <h4><a href="clientpage2.html">Back to Home</a></h4>


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


  <Script Language="JavaScript"> 
    function setbill() 
    { 
	document.form1.action="setbill.php";
	document.form1.method="get";
	document.form1.action=(submit);
    } 
     
  
    </Script> 
