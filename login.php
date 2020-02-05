<?php
session_start();
$valid = false;
$myfile = file('file');
if(isset($_POST['submit'])){
  $_SESSION['user'] = $_POST["user"];
  $_SESSION['password'] = $_POST["password"];
  $_SESSION['result'] = $_SESSION['user']." ".$_SESSION['password'];

if(empty($_SESSION['user'])){
   $valid = false;

}
elseif(empty($_SESSION['password'])){
   $valid = false;

}

foreach($myfile as $line){
   $data = trim($line);
   if($_SESSION['result'] == $data) {
         $valid = true;
   }
}
if($valid == true){
   header('Location: /main.html');
   return;
} else{
   echo "User name or password is invalid";
}
}
?>
<html>
<head>

</head>

<body>

   <center>
      <h3>Login</h3>
      <form action= "" method = "post">
         User Name:<input type="text" name="user">
        <br>
        Password:<input type="text" name="password">
        <br>
        <br>
      <input type="submit" name = "submit" value="Login">

      <a = href = "register.html">Register</a>
      </form>


   </center>
</body>
</html>
