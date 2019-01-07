<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Personal Information</title>



  </head>
<style type="text/css">
.wrapper {width: 1000px;margin: 20px auto;}
h2 {text-align: center;}
.add {margin-bottom: 20px;}
.add a {text-decoration: none;color: #fff;background-color: green;padding: 6px;border-radius: 5px;}
td {text-align: center;}
</style>
<body>
	

    <div class="wrapper">
        <h2>Work Information</h2>

        <table width="960" border="1">
            <tr>
                <th>Name</th>          
                <th>Start Date</th>    
                <th>Title</th>     
                <th>Monthly Pay</th>    
                <th>Sick Days</th>        
                <th>Holidays</th>    
                <th>Branch</th> 				
            </tr>
	<?php
		//session_start();
		//require_once 'index.php';		
		//echo $_SESSION['account_n'];
		
		require "../database.php";
	 	$conn = mysqli_connect($server,$username,$password) ;
		if(! $conn )
		{
		    die('Fail: ' . mysqli_error($conn));
		}
		//echo 'Success';

		$employee=$_COOKIE['mycookie1'];
		//echo $employee;
		
		mysqli_select_db($conn,$database);
		
		$sql = "select * from employee WHERE id = '$employee';";
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
				    echo "<td>{$row['name']}</td>";
				    echo "<td>{$row['start_date']}</td>";
				    echo "<td>{$row['title']}</td>";
					echo "<td>{$row['monthly_pay']}</td>";
				    echo "<td>{$row['sick_days']}</td>";
				    echo "<td>{$row['holidays']}</td>";
					echo "<td>{$row['branch_id']}</td>";
				    echo "</tr>";
				}
		mysqli_free_result($result);
		mysqli_close($conn);
	?>
       </table>
    </div>

    <div class="container">
	<div class="row">
		<h5>Monthly pay</h5>
      		<?php
		//session_start();
		//require_once 'index.php';		
		//echo $_SESSION['account_n'];
		
		require "../database.php";
	 	$conn = mysqli_connect($server,$username,$password) ;
		if(! $conn )
		{
		    die('Fail: ' . mysqli_error($conn));
		}
		//echo 'Success';

		$employee=$_COOKIE['mycookie1'];
		//echo $employee;
		
		mysqli_select_db($conn,$database);
		
		$sql = "select * from Employee WHERE id = '$employee';";
		//echo 'Success';
		$result = mysqli_query($conn,$sql);
		if (!$result) {
		printf("Error: %s\n", mysqli_error($conn));
		exit();
		}

		$Num=mysqli_num_rows($result);
		for($i=0; $i<$Num; $i++){
				    $row = mysqli_fetch_assoc($result);
				    echo "<div>{$row['monthly_pay']}$</div>";

				}
		mysqli_free_result($result);
		mysqli_close($conn);
	?>
	</div>
	<div class="row">
		<h5>Branch Information</h5>
	      		<?php
			//session_start();
			//require_once 'index.php';		
			//echo $_SESSION['account_n'];
		
			require "../database.php";
		 	$conn = mysqli_connect($server,$username,$password) ;
			if(! $conn )
			{
			    die('Fail: ' . mysqli_error($conn));
			}
			//echo 'Success';

			$employee=$_COOKIE['mycookie1'];
			//echo $employee;
		
			mysqli_select_db($conn,$database);
		
			$sql = "select * from Branch WHERE id = (select branch_id from Employee where id = '$employee' limit 1);";
			//echo 'Success';
			$result = mysqli_query($conn,$sql);
			if (!$result) {
			printf("Error: %s\n", mysqli_error($conn));
			exit();
			}

			$Num=mysqli_num_rows($result);
			for($i=0; $i<$Num; $i++){
				$row = mysqli_fetch_assoc($result);
				echo "<div>Location: {$row['location']}</div>";
				echo "<div>Phone: {$row['phone']}</div>";
				echo "<div>Fax: {$row['fax']}</div>";
					}
			mysqli_free_result($result);
			mysqli_close($conn);
		?><?php
			require "../database.php";
		 	$conn = mysqli_connect($server,$username,$password) ;
			if(! $conn )
			{
			    die('Fail: ' . mysqli_error($conn));
			}

			$employee=$_COOKIE['mycookie1'];
			mysqli_select_db($conn,$database);
		
			$sql = "select name from Employee WHERE id = (select manager_id from Branch where id = (select branch_id FROM Employee where id = '$employee') limit 1) limit 1;";
			//echo 'Success';
			$result = mysqli_query($conn,$sql);
			if (!$result) {
			printf("Error: %s\n", mysqli_error($conn));
			exit();
			}

			$Num=mysqli_num_rows($result);
			for($i=0; $i<$Num; $i++){
				$row = mysqli_fetch_assoc($result);
				echo "<div>Manager: {$row['name']}</div>";
					}
			mysqli_free_result($result);
			mysqli_close($conn);
		?>
		</div>	
	</div>
    </div>
	
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Changw</title>
</head>
<body>
  <div class="main">

       <a href="employeepage2.php">Back to Home</a></br>
   



  </div>
</body>
</html>

