<!DOCTYPE html>
<?php
include_once 'func.php';
if(count($_POST)>0) {
mysqli_query($con,"UPDATE Package set package_id='" . $_POST['package_id'] . "', package_name='" . $_POST['package_name'] . "', amount='" . $_POST['amount']  . "' WHERE package_id='" . $_POST['package_id'] . "'");
echo "<script>alert('Updated sucessfully.')</script>";
echo "<script>window.open('package.php','_self')</script>";

}
$result = mysqli_query($con,"SELECT * FROM package WHERE package_id='" . $_GET['package_id'] . "'");
$row= mysqli_fetch_array($result);
?><html>

<head>
    <title>Update details</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<?php include 'header.php';?>

<body  style="background:url('images/modify.jpg'); background-size: cover;">

    <div class="container">
        <div class="card">
            <div class="card-body" style="background-color:#536a50;color:#ffffff;">
                <div class="row">
                    <div class="col-md-1">
                        <a href="admin-panel.php" class="btn btn-light ">Go Back</a>
                    </div>

                    <div class="col-md-11">
                        <div class="card-body" style="background-color:#536a50;color:FFFFFF;">
                            <h3>Update Package</h3>
                            <div class="card-body"></div>
                            <form name="frmUser" method="post" action="">
                                <label>Package ID</label>
                                <input type="text" name="package_id" class="form-control" 
                                    value="<?php echo $row['package_id'];?>" readonly><br>
                                <label>Package Name</label>
                                <input type="text" name="package_name" class="form-control" style="text-transform:capitalize;"
                                    value="<?php echo $row['package_name'];?>"Required><br>
                                <label>Amount/m</label>
                                <input type="number" name="amount" class="form-control"
                                    value="<?php echo $row['amount'];?>"Required><br>

                                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                        </div>
                    </div>
                </div>
            </div>


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
                integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
                crossorigin="anonymous"></script>
        </div>
</body>

</html>