<!DOCTYPE html>
<?php
$con=mysqli_connect("localhost","root","","gym-management");
include_once 'func.php';
$result = "delete FROM trainer WHERE Trainer_id='" . $_GET['Trainer_id'] . "'";
$result1= mysqli_query($con,$result);
if($result1) 
{
    echo "<script>alert('Deleted sucessfully.')</script>";
    echo "<script>window.open('trainer_details.php','_self')</script>";
}
else{
    echo "<script>alert(' Cannot Delete')</script>";
    echo "<script>window.open('trainer_details.php','_self')</script>";
}
?>