<?php
     $clientid = $_COOKIE['mycookie1'];
	 $passw=$_COOKIE['mycookie2'];
	 //echo $_COOKIE['mycookie1'];
	//echo $_COOKIE['mycookie2'];
?>



<?php

require '../database.php';
$conn = mysqli_connect($server,$username,$password) ;
		if(! $conn )
		{
		    die('Fail: ' . mysqli_error($conn));
		}

		 $client=$_COOKIE['mycookie1'];

		mysqli_select_db($conn,'eec352_2');
		
		$sql = "select name from client WHERE id = '$client';";

		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);		
		 $uname=$row['name'];
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Online Bank</title>
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
								<a href="info/info.html">About Me</a>
							</li>
							<li>
								<img src="img/portfolio-icon.png">
								<a href="query.html">Check Balance</a>
							</li>
							<li>
								<img src="img/portfolio-icon.png">
								<a href="movemoney.php">Transfer Between My Accounts</a>
							</li>
							<li>
								<img src="img/followme-icon.png">
								<a href="paybill.html">Pay a bill</a>
							</li>
							<li>
								<img src="img/contact-icon.png">
								<a href="etransfer.html">e-transfer</a>
							</li>
							<li>
								<img src="img/contact-icon.png">
								<a href="tranhistory.html">Transaction History</a>
							</li>
							<li>
								<img src="img/contact-icon.png">
								<a href="logout.php">Log Out</a>
							</li>
						</ul>
					</div>
				</div> 			
			</div>
            

			<div class="span7 homeabout">
				<div class="person">
					<span class="name">Welcome <?= $uname; ?></span>
					
				</div>
				<div class="desciption home">
					<p>In Canada, the bank's personal and commercial banking operations are branded as 353 Royal Bank in English and 353 Banque Royale in French and serves approximately ten million clients through its network of 1,209 branches. 353 Bank is the U.S. banking subsidiary which formerly operated 439 branches across six states in the Southeastern United States, but now only offers cross-border banking services to Canadian travellers and expats. 353 also has 127 branches across seventeen countries in the Caribbean, which serve more than 16 million clients. 353 Capital Markets is 353's worldwide investment and corporate banking subsidiary, while the investment brokerage firm is known as 353 Dominion Securities. Investment banking services are also provided through 353 Bank and the focus is on middle market clients. </a></p>
				</div>	
				<div class="row">
					<div class="span12">					
						<!--Google Ad here-->
						<div id="horizontal-ad" >
							<script type="text/javascript"><!--
							google_ad_client = "ca-pub-6472538845369616";
							/* On Demos 2 */
							google_ad_slot = "6440596675";
							google_ad_width = 408;
							google_ad_height = 150;
							//-->
							</script>
							<script type="text/javascript"
							src="//pagead2.googlesyndication.com/pagead/show_ads.js">
							</script>
						</div>					
						<div id="box-ad">
							<script type="text/javascript"><!--
							google_ad_client = "ca-pub-6472538845369616";
							/* GoogleSuggestedForDemo */
							google_ad_slot = "5067431585";
							google_ad_width = 300;
							google_ad_height = 200;
							//-->
							</script>
							<script type="text/javascript"
							src="//pagead2.googlesyndication.com/pagead/show_ads.js">
							</script>
						</div>
						<!--Google ad ends here-->    
					</div>
				</div>
				
				
			</div>

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