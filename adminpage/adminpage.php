<?php
session_start();
require '../database.php';
$user = null;

if(!empty($_POST['email'])&&!empty($_POST['password'])) {
//echo $_POST['employee_id'];
$records = $db->prepare('SELECT id,email,password FROM Admin WHERE email = :email;');
  
  $records->bindParam(':email', $_POST['email']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);
  $message = '';

  if(count($results) > 0){
    if($_POST['password'] == $results['password']){
	//echo'Success';
	
	$_SESSION['account_n']=$results['password'];
	//echo $_SESSION['account_n'];

      $user = $results['id'];
	  $userna= $results['email'];
	  //echo $userna;
	  //echo $results['employee_id'];
    } else {
      $message = 'Password is incorrect.';
    }
  } else {
    $message = "User does not exist.";
  }
}

if( isset($_SESSION['user'])) {
  $records = $db->prepare('SELECT id,email,password FROM Admin WHERE email = :email;');
  $records->bindParam(':email', $_POST['email']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $user = $results['id'];
}
?>
<?php
       setcookie('mycookie1',$_POST['email']);
	   setcookie('mycookie2',$_POST['password']);
	   
?>

<?php
     $employeeid = $_COOKIE['mycookie1'];
	 $passw=$_COOKIE['mycookie2'];
     	 //echo 'emply';
	 //echo $_COOKIE['mycookie1'];
	 
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
								<a href="employee/employee.php">Employees Information</a>
							</li>
							<li>
								<img src="img/portfolio-icon.png">
								<a href="create_employee_account.php">Create Employee account</a>
							<!-- <li>
								<img src="img/portfolio-icon.png">
								<a href="delete_employee_account.php">Delete client account</a>
							</li> -->
						
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
					<span class="name">Hi Admin <?= $user; ?></span>
				</div>
				<div class="desciption home">
					<p>The word “Bank” is of Italian origin. Word banco (translated from Italian bench, table) in the XV-XVI centuries in the Venetian Republic was called the benches on which the money-changers and usurers were put coins and business papers. If the Jew was bankrupt and could not pay money for its payment obligations, then this bench was broken on his head. </p>

<p>
In medieval Europe, the Roman Popes were strictly forbidden to lend money at interest to cash in on the financial difficulties of faith was considered a terrible sin. Therefore, in 1179, Pope Alexander III declared moneylenders hardened sinners and was forbidden to admit them to communion. In addition, the so-called “bankers” were not allowed to be buried on consecrated ground, so they, like suicide, was buried outside the fence of the cemetery.  </p>
				</div>	
</div>

   
   <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script src="js/jqbar.js" type="text/javascript"></script>
	
	<script type="text/javascript">
	 $(document).ready(function () {			
		
            $('#bar-1').jqbar({ label: 'HTML5', value: 80, barColor: '#21ba82' });

            $('#bar-2').jqbar({ label: 'CSS', value: 99, barColor: '#21ba82' });

            $('#bar-3').jqbar({ label: 'JavaScript', value: 85, barColor: '#21ba82' });

            $('#bar-4').jqbar({ label: 'WordPress', value: 75, barColor: '#21ba82' });

          
			
			$('#bars-content .content').css({'opacity':'0',display:'none'});
			$('#bars-content .content:eq(0)').css('display','block').animate({opacity:1},1000);
			$('.jqbar:first').addClass('active');
			$('.jqbar').hover(function(){ $(this).addClass('hover');},function(){ $(this).removeClass('hover');});
			$('.jqbar').click(function(){
				$('.jqbar').removeClass('active');
				var id = $(this).addClass('active').attr('id').replace('bar','content');				
				$('#bars-content .content').css({'opacity':'0',display:'none'});
				$('#' + id).css('display','block').animate({opacity:1},1000);
				
			});		
			
			/* $(".rotate").textrotator({
				animation: "spin",
				separator: ",",
				speed: 2000
			  });
			*/
			
        });
		
    </script>
    <script type="text/javascript" src="js/jquery.simple-text-rotator.min.js"></script>
  			
</body>
</html>	
