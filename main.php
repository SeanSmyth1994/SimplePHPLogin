<?php
session_start();
?>

<head>


   <center>
      <p> Logged in as <?php echo $_SESSION["user"]; ?><a href = "/"> Log Out</a></p>

   </center>
<br>
</head>

<body>

   <center>
      <h3>Main Page</h3>
   </center>
</body>
