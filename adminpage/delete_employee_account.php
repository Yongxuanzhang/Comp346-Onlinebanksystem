<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Bank</title>
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
        <h2>Delete Client Accounts</h2>

        <table width="960" border="1">
            <tr>
                <th>Client</th>          
                <th>Account Number</th>    
                <th>Type</th>       
                <th>Level</th>
		<th>Balance</th>
		<th>Option</th>       
                <th>Interest Rate</th>
            </tr>
	<?php
		require "../database.php";
	 	$conn = mysqli_connect($server,$username,$password) ;
		if(! $conn )
		{
		    die('Fail: ' . mysqli_error($conn));
		}

		$employee=$_COOKIE['mycookie1'];
		echo $employee;
		
		mysqli_select_db($conn,$database);
		
		$sql = "select * from Account";
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
				    echo "<td>{$row['employee_id']}</td>";
				    echo "<td>{$row['name']}</td>";
				    echo "<td>{$row['address']}</td>";
				    echo "<td>{$row['title']}</td>";
					echo "<td>{$row['salary']}</td>";
				    echo "<td>{$row['email_address']}</td>";
					echo "<td>{$row['phone_number']}</td>";
				    echo "</tr>";
				}
		mysqli_free_result($result);
		mysqli_close($conn);
	?>
       </table>
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
       <a href="./movemoney.php">Move money</a></br>
       <a href="./employeepage2.html">Back to Home</a></br>
   



  </div>
</body>
</html>

