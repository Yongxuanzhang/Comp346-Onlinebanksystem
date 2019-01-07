

	<?php
	
	require 'database.php';
	$conn = mysqli_connect($server,$username,$password) ;
		if(! $conn )
		{
		    die('Fail: ' . mysqli_error($conn));
		}
		
		echo 'asd';
		?>
		
