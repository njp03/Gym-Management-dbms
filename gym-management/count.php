

<?php  

// php select option value from database

$con=mysqli_connect("localhost","root","","gym-management");



function memcount()
{
    global $con;
   

$sql="SELECT * FROM member ";
$result=mysqli_query($con,$sql);
if ($result)
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  if($rowcount)
  {

 echo $rowcount ; 
  }
  // Free result set
  
  mysqli_free_result($result);
  }

mysqli_close($con);

}

?>



