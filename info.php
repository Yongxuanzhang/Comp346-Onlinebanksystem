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
        <h2>Profile</h2>

        <table width="960" border="1">
            <tr>
                <th>Client ID</th>          
                <th>Name</th>    
                <th>Address</th>       
                <th>DOB</th>
				<th>Email Address</th>       
                <th>Phone number</th>
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

		$client=$_COOKIE['mycookie1'];
		echo $account;
		
		mysqli_select_db($conn,'eec353_2');
		
		$sql = "select * from client WHERE client_id = '$client';";
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
				    echo "<td>{$row['client_id']}</td>";
				    echo "<td>{$row['name']}</td>";
				    echo "<td>{$row['address']}</td>";
				    echo "<td>{$row['date_of_birth']}</td>";
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
       <a href="./index2.php">Back to Home</a></br>
   



  </div>
</body>
</html>

