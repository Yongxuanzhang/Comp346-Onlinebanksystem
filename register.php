<?php
require 'database.php';
$message = '';

if(!empty($_POST['user'])&&!empty($_POST['password'])) {
  if($_POST['password'] != $_POST['confirm']) {
    $message = "Password confirmation error";
  } else {
    $records = $db->prepare("INSERT into  users(user,password) VALUES (:user, :password)");
    $records->bindParam(':user', $_POST['user']);
    $records->bindParam(':password', $_POST['password']);
    if($records->execute()){
      $message = "Successful Registration";
    } else {
      $message = "Registration unsuccessful";
    }
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Register</title>
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
    <form action="register.php" method="post">
      User: <input type="text" name="user">
      Password: <input type="password" name="password">
      Confirm Password: <input type="password" name="confirm">
      <input type="submit" name="Register">
    </form>
  </div>
</body>
</html>