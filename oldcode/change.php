
<?php
//session_start();
require 'database.php';
//require_once 'index.php';
$message = '';
$client=$_GET['client'];
echo $client;  

if(!empty($_POST['transfer_amount']) &&!empty($_POST['account_number'])) {
echo $_POST['transfer_amount'];
echo $client;  
    $records = $db->prepare('update account set balance=balance+:transfer_amount where account_number=:account_number');
    $records->bindParam(':transfer_amount', $_POST['transfer_amount']);
    $records->bindParam(':account_number', $_POST['account_number']);
    if($records->execute()){
      $message = 'Successful Change!';
    } else {
      $message = "Failed to update balance.";
    }
  
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Changw</title>
</head>
<body>
  <div class="main">
    <?php
      if(!empty($message)){
    ?> <p> <?php echo $message; ?> </p>
       <a href="./index.php">Back to Home</a>
    <?php
      }
    ?>

    <form action="change.php" method="post">
      Transfer Amount: <input type="text" name="transfer_amount">
      Account Number: <input type="text" name="account_number">

      <input type="submit" value="Transfer">
    </form>
<a href="<?php echo"query.php?client=".$client?>">Accounts query</a>

  </div>
</body>
</html>
