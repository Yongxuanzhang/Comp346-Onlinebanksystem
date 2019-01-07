
<!doctype html> 
<html> 
<head> 
<meta charset="UTF-8"> 
  <title>注册用户</title> 
</head> 
<body> 
  <?php 
   // session_start(); 
    $username=$_REQUEST["username"]; 
    $password=$_REQUEST["password"]; 
  
    $con=mysqli_connect("localhost","root","123456"); 
    if (!$con) { 
      die('数据库连接失败'.$mysqli_error()); 
    } 
    mysqli_select_db("user_info",$con); 
    $dbusername=null; 
    $dbpassword=null; 
    $result=mysqli_query("select * from user_info where username ='{$username}' and isdelete =0;"); 
    while ($row=mysqli_fetch_array($result)) { 
      $dbusername=$row["username"]; 
      $dbpassword=$row["password"]; 
    } 
    if(!is_null($dbusername)){ 
  ?> 
  <script type="text/javascript"> 
    alert("用户已存在"); 
    window.location.href="register.html"; 
  </script>  
  <?php 
    } 
    mysqli_query("insert into user_info (username,password) values('{$username}','{$password}')") or die("存入数据库失败".mysqli_error()) ; 
    mysqli_close($con); 
  ?> 
  <script type="text/javascript"> 
    alert("注册成功"); 
    window.location.href="index.html"; 
  </script> 
    
    
        
      
      
</body> 
</html> 