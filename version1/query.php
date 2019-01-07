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
        <h2>Bank System</h2>

        <table width="960" border="1">
            <tr>
                <th>cpmpany_name</th>          
                <th>Phone</th>
            </tr>
	<?php
		require "database2.php";
	 	$conn = mysqli_connect(HOST,USER,PASS) ;
		if(! $conn )
		{
		    die('Fail: ' . mysqli_error($conn));
		}
		echo 'Success';


		mysqli_select_db($conn,'asg1');
		
		$sql = "select * from pharmaceutical_company;";
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
				    echo "<td>{$row['company_name']}</td>";
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
