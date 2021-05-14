<!DOCTYPE html>

<?php
include_once 'func.php';
$query = "delete FROM package WHERE package_id='" . $_GET['package_id'] . "'";
$result = mysqli_query($con,$query);
if($result) {
    echo "<script>alert('Deleted sucessfully.')</script>";
    echo "<script>window.open('package.php','_self')</script>";
}


?>

</html>