<!DOCTYPE html>

<?php
include_once 'func.php';
$query = "delete FROM member WHERE member_id='" . $_GET['Member_id'] . "'";
$result = mysqli_query($con,$query);
if($result) {
    echo "<script>alert('Deleted sucessfully.')</script>";
    echo "<script>window.open('member_details.php','_self')</script>";
}
?>