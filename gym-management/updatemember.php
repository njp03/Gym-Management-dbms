









<!DOCTYPE html>
<?php
include_once 'func.php';
if(count($_POST)>0) {
mysqli_query($con,"UPDATE member set fname='" . $_POST['Fname'] . "', lname='" . $_POST['Lname'] . "', contact='" . $_POST['phone'] . "' , trainer_id='" . $_POST['trainer_id'] . "',Gender='" . $_POST['Gender']  . "' WHERE member_id='" . $_POST['Member_id'] . "'");
echo "<script>alert('Updated sucessfully.')</script>";
echo "<script>window.open('member_details.php','_self')</script>";
}

$result = mysqli_query($con,"SELECT * FROM member WHERE member_id='" . $_GET['Member_id'] . "'");
$row= mysqli_fetch_array($result);
$query1 = "SELECT * FROM `Trainer`";

// for method 1

$result1 = mysqli_query($con, $query1);
?>
<html>

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
                            <h3>Update Member</h3>
                            <div class="card-body"></div>
                            <form name="frmUser" method="post" action="">
                                <label>Member ID</label>
                                <input type="text" name="Member_id" class="form-control"
                                    value="<?php echo $row['member_id'];?>" readonly><br>
                                <label>First Name</label>
                                <input type="text" name="Fname" class="form-control"style="text-transform:capitalize;" pattern="[A-Za-z]+" oninvalid="this.setCustomValidity('Enter a valid  Name')" oninput="this.setCustomValidity('')"
                                    value="<?php echo $row['fname'];?>" Required><br>
                                <label>Last Name</label>
                                <input type="text" name="Lname" class="form-control"style="text-transform:capitalize;" pattern="[A-Za-z]+" oninvalid="this.setCustomValidity('Enter a valid  Name')" oninput="this.setCustomValidity('')"
                                    value="<?php echo $row['lname'];?>"Required><br>
                                <label>Phone</label>
                                <input  name="phone" class="form-control" pattern="^[6-9]{1}[0-9]{9}$"  oninvalid="this.setCustomValidity('Enter a Valid Number')" oninput="this.setCustomValidity('')"
                                    value="<?php echo $row['contact'];?>"Required><br>
                                    

                                    <label>Trainer </label>
    <select class="form-control" name="trainer_id" >

        <?php while($row1 = mysqli_fetch_array($result1)):;?>

        <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

        <?php endwhile;?>

    </select>
    <br>
         

                                    <label>Gender</label>
                                <select id="Gender" name="Gender" class="form-control"  value="<?php echo $row['Gender'];?>">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                            </select><br>







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