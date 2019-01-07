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
                <th>Monday</th>          
                <th>Tuesday</th>    
                <th>Wednesday</th>
		<th>Thursday</th>
		<th>Friday</th>
		<th>Saturday</th>
		<th>Sunday</th>       
            </tr>
	<?php
		//session_start();
		//require_once 'index.php';		
		//echo $_SESSION['account_n'];
		
		require "database.php";
	 	$conn = mysqli_connect($server,$username,$password) ;
		if(! $conn )
		{
		    die('Fail: ' . mysqli_error($conn));
		}
		//echo 'Success';

		$employee=$_COOKIE['mycookie1'];
		//echo $employee;
		
		mysqli_select_db($conn,'eec353_2');
		
		$sql = "select * from Schedule WHERE employee_id = '$employee';";
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
				    if ($row['monday']) {
					echo "<td>9 to 5</td>";
				    }
				    else {
					echo "<td>-</td>";
				    }    
				    if ($row['tuesday']) {
					echo "<td>9 to 5</td>";
				    }
				    else {
					echo "<td>-</td>";
				    }  
				    if ($row['wednesday']) {
					echo "<td>9 to 5</td>";
				    }
				    else {
					echo "<td>-</td>";
				    }  
				    if ($row['thursday']) {
					echo "<td>9 to 5</td>";
				    }
				    else {
					echo "<td>-</td>";
				    }  
				    if ($row['friday']) {
					echo "<td>9 to 5</td>";
				    }
				    else {
					echo "<td>-</td>";
				    }
				    if ($row['saturday']) {
					echo "<td>9 to 5</td>";
				    }
				    else {
					echo "<td>-</td>";
				    } 
				    if ($row['sunday']) {
					echo "<td>9 to 5</td>";
				    }
				    else {
					echo "<td>-</td>";
				    }     
				    echo "</tr>";
				}
		mysqli_free_result($result);
		mysqli_close($conn);
	?>
       </table>
    </div>

    <div class="container">
	<div class="row">
		<h5>Important Information</h5>
      		<?php

		require "database.php";
	 	$conn = mysqli_connect($server,$username,$password) ;
		if(! $conn )
		{
		    die('Fail: ' . mysqli_error($conn));
		}

		$employee=$_COOKIE['mycookie1'];
		mysqli_select_db($conn,'eec353_2');
		
		$sql = "select * from Employee WHERE id = '$employee';";
		$result = mysqli_query($conn,$sql);
		if (!$result) {
		printf("Error: %s\n", mysqli_error($conn));
		exit();
		}

		$Num=mysqli_num_rows($result);
		for($i=0; $i<$Num; $i++){
				    $row = mysqli_fetch_assoc($result);
				    echo "<div>Monthly pay: {$row['monthly_pay']}$</div>";
				    echo "<div>Sick days taken: {$row['sick_days']} days</div>";
				    echo "<div>Holidays taken: {$row['holidays']} days</div>";

				}
		mysqli_free_result($result);
		mysqli_close($conn);
	?>
	</div>
	<div class="row">
		<h5>Branch Information</h5>
	      		<?php
		
			require "database.php";
		 	$conn = mysqli_connect($server,$username,$password) ;
			if(! $conn )
			{
			    die('Fail: ' . mysqli_error($conn));
			}

			$employee=$_COOKIE['mycookie1'];
			//echo $employee;
		
			mysqli_select_db($conn,'eec353_2');
		
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
			require "database.php";
		 	$conn = mysqli_connect($server,$username,$password) ;
			if(! $conn )
			{
			    die('Fail: ' . mysqli_error($conn));
			}

			$employee=$_COOKIE['mycookie1'];
			mysqli_select_db($conn,'eec353_2');
		
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
  <title>Change</title>
</head>
<body>
  <div class="main">
	<div class="container">
		<div class="row">
			</br>
			</br>
       			<a href="employeepage2.php">Back to Home</a>
		</div>
	</div>
   



  </div>
</body>
</html>

