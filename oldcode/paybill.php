
<?php
//session_start();
require 'database.php';
//require_once 'query.php';
$message = '';
$client=$_GET['client'];
 

if(!empty($_POST['transfer_amount']) &&!empty($_POST['account_number1']) &&!empty($_POST['client2'])) {
echo 'Successfully transfer:';
echo $_POST['transfer_amount'];
echo 'to'; 
echo $_POST['client2'];
echo $client;  
    $records = $db->prepare('update account set balance=balance-:transfer_amount where account_number=:account_number1;');
    $records->bindParam(':transfer_amount', $_POST['transfer_amount']);
    $records->bindParam(':account_number1', $_POST['account_number1']);
    //$records->bindParam(':client', $_POST['client2']);
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
  <title>Paybill</title>
</head>
<body>
  <div class="main">


    <form action="paybill.php" method="post">
 
      From account: <input type="text" name="account_number1">
      Tansfer amount: <input type="text" name="transfer_amount">
      To: <input type="text" name="client2">

      <input type="submit" value="Transfer">
    </form>
<a href="<?php echo"query.php?client=".$client?>">Accounts query</a><br/>
 <a href="./index2.php">Back to Home</a><br/>
 
  </div>
</body>
</html>
