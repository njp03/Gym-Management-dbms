



















<!DOCTYPE html>
<?php include("func.php");?>
<html>

<head>
    <title>Add Trainer</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<?php include 'header.php';?>
<body style="background:url('images/4.jpg'); background-size: cover;">

    <div class="container">
        <div class="card">
            <div class="card-body" style="background-color:#536a50;color:#ffffff;">
                <div class="row">
                    <div class="col-md-1">
                        <a href="admin-panel.php" class="btn btn-light ">Go Back</a>
                    </div>
</div>
                    <div class="col-md-11">
                        <div class="card-body" style="background-color:#536a50;color:FFFFFF;">
                            <h3 style="padding: 10px;padding-top: 30px;padding-left: 10px;">Register new Trainer</h3>
                            
                            <div class="card-body"></div>
                            <form class="form-group" action="func.php" method="post">
                                <label>Trainer ID</label>
                                <input name="Trainer_id" class="form-control" pattern="[0-9]{3}" class="form-control"  oninvalid="this.setCustomValidity('Enter a Valid ID')" oninput="this.setCustomValidity('')" Required><br>
    <label>Trainer name</label>
                                <input type="text" name="Name" class="form-control" style="text-transform:capitalize;" pattern="[A-Za-z\sA-Za-z]+" oninvalid="this.setCustomValidity('Enter a  valid Name')" oninput="this.setCustomValidity('')" Required><br>

                                <label>Gender</label>
                                <select id="gender" name="gender" class="form-control" >
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                            </select><br>
                                
                                <label>Email</label>
                                <input type="email" name="email" class="form-control"Required><br>
                                <input type="submit" class="btn btn-primary" name="tra_submit" value="Register">
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