<?php
session_start();
$valid = true;
$lines = file('/path/to/file') or die("File does not exist!");
$file = fopen('/path/to/file','w');
foreach($lines as $line){
   fwrite($file,$line);
}
if(isset($_POST['submit'])){
   $_SESSION['user'] = $_POST['user'];
   $_SESSION['password'] = $_POST['password'];
   $result = "\n".$_SESSION['user']." ".$_SESSION['password'];
   if(empty($_SESSION['user'])){
   $valid = false;

   }
   elseif(empty($_SESSION['password'])){
   $valid = false;

   }
   if($valid){
      echo "IS VALID";
      fwrite($file,$result);
      fclose($file);
      ?>
      <script type="text/javascript">
      window.location = "/";
      </script>
      <?php
      return;
   }else{

      echo "User name or password cannot be empty";
   }
}


?>


<!DOCTYPE HTML>
<html>

<head>

</head>

<body>



   <center>
      <h3>Register</h3>
      <form action="" method = "post">
         User Name:
         <input type="text" name="user">
         <br>
         Password:
         <input type="text" name="password">
         <br><br>
         <input type="submit" name = 'submit' value="Register">
      </form>
   </center>
</body>
</html>
