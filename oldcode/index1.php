<?php
session_start();
require 'database.php';
$user = null;



if(!empty($_POST['client_id'])&&!empty($_POST['password'])) {
//echo $_POST['client_id'];
  $records = $db->prepare('SELECT client_id,password,account_number FROM account WHERE client_id = :client_id;');
  $records->bindParam(':client_id', $_POST['client_id']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);
  $message = '';

  if(count($results) > 0){
    if($_POST['password'] == $results['password']){
	echo'Success';
	
	$_SESSION['account_n']=$results['password'];
	//echo $_SESSION['account_n'];

      $user = $results['client_id'];
	  //echo $results['client_id'];
    } else {
      $message = 'Password is incorrect.';
    }
  } else {
    $message = "User does not exist.";
  }
}

if( isset($_SESSION['user'])) {
  $records = $db->prepare('SELECT client_id,password,account_number FROM account WHERE client_id = :client_id');
  $records->bindParam(':client_id', $_POST['client_id']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $user = $results['user'];
}
?>

<?php
       setcookie('mycookie1',$_POST['client_id']);
	   setcookie('mycookie2',$_POST['password']);
?>

<?php
     $clientid = $_COOKIE['mycookie1'];
	 $passw=$_COOKIE['mycookie1'];
    // echo $clientid;
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Welcome</title>
</head>
<body>
  <div  class="main">
    <?php
      if(!empty($message)){
    ?> <p> <?php echo $message; ?> </p>
       <a href="./index.php">Back to Home</a>
    <?php
      }
    ?>


	
	
	
    <?php if( !empty($user) ): ?>

      <br />Welcome <?= $user; ?>
      <br /><br />You are successfully logged in!
      <br /><br />
      <a href="<?php echo"info.php?client=".$_POST['client_id']?>">View Information</a><br/>
	<a href="<?php echo"query.php?client=".$_POST['client_id']?>">Check Balances</a><br/>
	<a href="<?php echo"movemoney.php?client=".$_POST['client_id']?>">Transfer money</a><br/>
	<a href="<?php echo"paybill.php?client=".$_POST['client_id']?>">Pay a bill</a><br/>
	<a href="<?php echo"change.php?client=".$_POST['client_id']?>">Change balance</a><br/>
	
	<a href="<?php echo"etransfer.php?client=".$user?>">e-transfer</a><br/>
	
	
	<a href="logout.php">Logout?</a><br/>
    
	<?php else  : ?>

      <form action="index1.php" method="post">
        Client ID: <input type="text" name="client_id">
        Password: <input type="password" name="password">
        <input type="submit" value="Client Login">
      </form>

 	<form action="index1.php" method="post">
        Employee ID: <input type="text" name="employee_id">
        Password: <input type="password" name="password">
        <input type="submit" value="Employee Login">
      </form>

      <a href="register.php">Register</a>

    <?php endif; ?>
    
  </div>
</body>
</html>
