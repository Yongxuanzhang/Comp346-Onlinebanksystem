<?php
require 'database3.php';
$message = '';

if(!empty($_POST['company_name'])&&!empty($_POST['phone_number'])) {
   
    $records = $db->prepare("INSERT into  pharmaceutical_company(company_name,phone_number) VALUES (:company_name, :phone_number)");
    $records->bindParam(':company_name', $_POST['company_name']);
    $records->bindParam(':phone_number', $_POST['phone_number']);
    if($records->execute()){
      $message = 'Successful Change!';
    } else {
      $message = "Sorry, Register Failure!";
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
      company_name: <input type="text" name="company_name">
      phone_number: <input type="phone_number" name="phone_number">
      <input type="submit" name="Change">
    </form>
  </div>
</body>
</html>