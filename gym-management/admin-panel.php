<!DOCTYPE html>
<?php  include("count.php");?>
<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "gym-management";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);
if(isset($_POST['login_submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from logintb where username='$username' and password='$password'";
    $result=mysqli_query($connect,$query);
	if(mysqli_num_rows($result)==1)
	{
		header("Location:admin-panel.php");
}
	else
    {
        echo "<script>alert('Invalid Login Credentials, Please Try Again')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
    }

// mysql select query




?>
<html>

<head>
    <title>Admin Panel</title>
    <
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="newstyle.css">
</head>

<?php include 'header.php';?>

<body style="background:url('images/admin.jpg'); background-size: cover;">





<div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="" class="list-group-item active "style="background-color:#0f350b; border-color:#0f350b;">Members</a>
                    <a href="member_details.php" class="list-group-item">Member details</a>
                    <a href="addmember.php" class="list-group-item">ADD new Member </a>
                    </div>
                <hr>
                <div class="list-group">
                <a href="" class="list-group-item active "style="background-color:#0f350b; border-color:#0f350b;">Pay and Packages</a>
                    <a href="package.php" class="list-group-item">Package details</a>
                    <a href="payment.php" class="list-group-item">Payments</a>
                    <a href="addpayment.php" class="list-group-item">Make Payments</a>
                    
                </div>
                <hr>
                <div class="list-group">
                <a href="" class="list-group-item active "style="background-color:#0f350b; border-color:#0f350b;">Trainers</a>
                    <a href="trainer_details.php" class="list-group-item " >Trainer details</a>
                    <a href="addtrainer.php" class="list-group-item ">Add new Trainer</a>
                </div>
                

            </div>
           
            <div class="col-md-3"style="margin-left:100px;">
            <a href="member_details.php" class="list-group-item active "style="background-color:#0f350b; border-color:#0f350b;margin-left:100px;width:300px; text-align:center;">Total members </a>
                <div class="btn btn-primary"  style="margin-left:100px;width:300px;">
                
        <a href="member_details.php" class="list-group-item" > <?php memcount();?></a>
        </div>
        <hr>
      
        <div class="col-mod-3" style="margin-left:200px; margin-left: 500px;">
        <a href="trainer_details.php" class="list-group-item active "style="background-color:#0f350b; border-color:#0f350b;margin-left:100px;width:300px; text-align:center;">Total Trainers </a>
                <div class="btn btn-primary"  style="margin-left:100px;width:300px;">
                
        <a href="trainer_details.php" class="list-group-item" > <?php $count=mysqli_fetch_array(mysqli_query($connect,"SELECT COUNT(*)FROM trainer")) ;echo $count[0];?></a>
        </div>
        </div>
        <hr>
        <div class="col-mod-3" style="">
        <a href="package.php" class="list-group-item active "style="background-color:#0f350b; border-color:#0f350b;margin-left:100px;width:300px; text-align:center;">Total Packages </a>
                <div class="btn btn-primary"  style="margin-left:100px;width:300px;">
                
        <a href="package.php" class="list-group-item" > <?php $count=mysqli_fetch_array(mysqli_query($connect,"SELECT COUNT(*)FROM package")) ;echo $count[0];?></a>
        </div>
        </div>
        </div>
        </div>
                
            
        </div>
        <div class="col-md-1"></div>
    </div>
    <
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
    </script>

</body>

</html>