<?php
     $employeeid = $_COOKIE['mycookie1'];
	 $passw=$_COOKIE['mycookie2'];	 
?>
<?php
require '../database.php';
$conn = mysqli_connect($server,$username,$password) ;
		if(! $conn )
		{
		    die('Fail: ' . mysqli_error($conn));
		}

		$employee=$_COOKIE['mycookie1'];
		
		mysqli_select_db($conn,'eec352_2');
		
		$sql = "select name from Employee WHERE employee_id = '$employee';";

		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);		
		$uname=$row['name'];
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Responsive 'Flat Profile' HTML Portfolio Template</title>
	<link href="css/demo.css" rel="stylesheet" type="text/css">
	 <link rel="stylesheet" href="css/jqbar.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/simpletextrotator.css" />
    
    <!--[if lt IE 9]> 
			<style>
				.rw-wrapper{ display: none; } 
				.rw-sentence-IE{ display: block;  }
			</style>
	<![endif]-->
</head>
<body >
 
  
	<div class="container topbottom">
		<div class="row-fluid">

			<div class="span5">
				<img src="img/avatar.jpg" alt="Profile Avatar" class="avatar">

				<div class="navigation">
					<div>
						<ul>
							<li>
								<img src="img/about-icon.png">
								<a href="info/info.php">Personal Information</a>
							</li>
							<li>
								<img src="img/portfolio-icon.png">
								<a href="work.php">Work Information</a>
							</li>
							<li>
								<img src="img/portfolio-icon.png">
								<a href="create_client_account.php">Create client account</a>
							</li>
							<li>
								<img src="img/portfolio-icon.png">
								<a href="delete_client_account.php">Delete client account</a>
							</li>						
							<li>
								<img src="img/contact-icon.png">
								<a href="../index.html">Log Out</a>
							</li>
						</ul>
					</div>
				</div> 			
			</div>
            

			<div class="span7 homeabout">
				<div class="person">
					<span class="name">Hi <?= $uname; ?></span>
				</div>
				<div class="desciption home">
					<p>The word “Bank” is of Italian origin. Word banco (translated from Italian bench, table) in the XV-XVI centuries in the Venetian Republic was called the benches on which the money-changers and usurers were put coins and business papers. If the Jew was bankrupt and could not pay money for its payment obligations, then this bench was broken on his head. </p>

<p>
In medieval Europe, the Roman Popes were strictly forbidden to lend money at interest to cash in on the financial difficulties of faith was considered a terrible sin. Therefore, in 1179, Pope Alexander III declared moneylenders hardened sinners and was forbidden to admit them to communion. In addition, the so-called “bankers” were not allowed to be buried on consecrated ground, so they, like suicide, was buried outside the fence of the cemetery.  </p>
				</div>	


   
   <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.simple-text-rotator.min.js"></script>
  			
</body>
</html>	
