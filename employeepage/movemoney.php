<?php
     $clientid = $_COOKIE['mycookie1'];
    // echo $clientid;
?>


<?php
//session_start();
require 'database.php';
//require_once 'query.php';
$message = '';
$client=$_GET['client'];
//echo $client;  

if(!empty($_POST['transfer_amount']) &&!empty($_POST['account_number1']) &&!empty($_POST['account_number2'])) {
echo 'Successfully transfer';
echo $_POST['transfer_amount'];
echo $client;  
    $records = $db->prepare('update account set balance=balance+:transfer_amount where account_number=:account_number2;update account set balance=balance-:transfer_amount where account_number=:account_number1;');
    $records->bindParam(':transfer_amount', $_POST['transfer_amount']);
    $records->bindParam(':account_number1', $_POST['account_number1']);
    $records->bindParam(':account_number2', $_POST['account_number2']);
    if($records->execute()){
      $message = 'Successful Change!';
    } else {
      $message = "Sorry,Failure!";
    }
  
}

?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Move money</title>
</head>
<body>
  <div class="main">


    <form action="movemoney.php" method="post">
 
      From account: <input type="text" name="account_number1">
      Tansfer amount: <input type="text" name="transfer_amount">
      To account: <input type="text" name="account_number2">

      <input type="submit" value="Transfer">
    </form>
<a href="<?php echo"query.php?client=".$client?>">Accounts query</a><br/>
 <a href="./clientpage.html">Back to Home</a><br/>
 
  </div>
</body>
</html>
