<!DOCTYPE html>
<body>
<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "gym-management";
$connect = mysqli_connect($hostname, $username, $password, $databaseName);

$sql="SELECT memeber_id FROM members ORDER BY member_id";

if ($result=mysqli_query($connect,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  ?>

  <h1> <?php echo "number of rows: ",$rowcount; ?> </h1>
  // Free result set
  <?php
  mysqli_free_result($result);
  }

mysqli_close($connect);



?>
</body>
</html>


