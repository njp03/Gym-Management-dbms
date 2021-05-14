





<!DOCTYPE html>
<?php include("func.php");

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "gym-management";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);


$query = "SELECT * FROM `Trainer`";

// for method 1

$result1 = mysqli_query($connect, $query);

$query1 = "SELECT * FROM `package`";
$result2 = mysqli_query($connect, $query1);





?>
<html>


<head>
    <title>Add Member</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<?php include 'header.php';?>
<body style="background:url('images/4.jpg'); background-size: cover;">

    <div class="container">
        <div class="card"   style="border-color:#0f350b;" >

<div class="card-body" style="background-color:#0f350b;color:FFFFFF;">
<div class="col-md-1">
                        <a href="admin-panel.php" class="btn btn-light ">Go Back</a>
                    </div>
    <h3 style="color:white; padding-top:20px;">Register new members</h3>
</div>







<div class="card-body"></div>
<form class="form-group" action="func.php" method="post" style="padding:10px 30px;">
    <label>Member ID</label>
    <input name="member_id" class="form-control" pattern="[0-9]{3}" class="form-control"  oninvalid="this.setCustomValidity('Enter a Valid ID')" oninput="this.setCustomValidity('')" Required><br>
    <label>First name</label>
    <input name="fname" class="form-control"  style="text-transform:capitalize;"pattern="[A-Za-z]+" oninvalid="this.setCustomValidity('Enter a valid  Name')" oninput="this.setCustomValidity('')" Required ><br>
    <label>Last name</label>
    <input  name="lname" class="form-control" style="text-transform:capitalize;" pattern="[A-Za-z]+" oninvalid="this.setCustomValidity('Enter a  valid Name')" oninput="this.setCustomValidity('')" Required><br>

    <label>Gender</label>
            <select id="gender" name="gender" class="form-control">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
        

   </select><br>


    </select><br>
    <label>Contact</label>
    <input  name="contact" pattern="^[6-9]{1}[0-9]{9}$" class="form-control" oninvalid="this.setCustomValidity('Enter a Valid Number')" oninput="this.setCustomValidity('')" Required><br> 
    
    
    
    


    <label>Trainer </label>
    <select class="form-control" name="trainer_id" >

        <?php while($row1 = mysqli_fetch_array($result1)):;?>

        <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

        <?php endwhile;?>

    </select>
    <br>
    
    

<input type="submit" class="btn btn-primary" name="pat_submit" value="Register">


</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
                integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
                crossorigin="anonymous"></script>
        </div>
</body>

</html>