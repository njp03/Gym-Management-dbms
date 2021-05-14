<!DOCTYPE html>
<?php
include_once 'func.php';
if(count($_POST)>0) {
mysqli_query($con,"UPDATE trainer set Name='" . $_POST['Name'] . "', Gender='" . $_POST['Gender'] . "' ,Email='" . $_POST['Email'] . "' WHERE Trainer_id='" . $_POST['Trainer_id'] . "'");
echo "<script>alert('Updated sucessfully.')</script>";
echo "<script>window.open('trainer_details.php','_self')</script>";
}
$result = mysqli_query($con,"SELECT * FROM trainer WHERE Trainer_id='" . $_GET['Trainer_id'] . "'");
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
                            <h3>Update Trainer</h3>
                            <div class="card-body"></div>
                            <form name="frmUser" method="post" action="">
                                <label>Trainer ID</label>
                                <input type="text" name="Trainer_id" class="form-control"
                                    value="<?php echo $row['Trainer_id'];?>" readonly><br>
                                <label>Name</label>
                                <input type="text" name="Name" class="form-control" style="text-transform:capitalize;" pattern="[A-Za-z\sA-Za-z]+" oninvalid="this.setCustomValidity('Enter a  valid Name')" oninput="this.setCustomValidity('')"
                                    value="<?php echo $row['Name'];?>" Required><br>

                                <label>Gender</label>
                                <select id="Gender" name="Gender" class="form-control"  value="<?php echo $row['Gender'];?>">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                            </select><br>
                                
                                <label>Email</label>
                                <input type="email" name="Email" class="form-control"
                                    value="<?php echo $row['Email'];?>"Required><br>
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