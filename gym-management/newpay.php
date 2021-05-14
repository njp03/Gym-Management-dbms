<!DOCTYPE html>


<?php include("func.php");

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "gym-management";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query = "SELECT * FROM `member`";

// for method 1
$result1 = mysqli_query($connect, $query);


$result = mysqli_query($con,"SELECT * FROM payment WHERE Payment_id='" . $_GET['Payment_id'] . "'");
$row= mysqli_fetch_array($result);
$query2 = "SELECT * FROM `payment`";

$query4 = "SELECT * FROM `package`";
$result4 = mysqli_query($connect, $query4);


$result2 = mysqli_query($con, $query2);

?>
<html>








<head>
    <title>ADD payment</title>
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
                           
                            
                            <form class="form-group" action="func.php" method="post"><div class="card-body" style="background-color:#536a50;color:FFFFFF;">
                        <h3>Make new Payment</h3>
                    </div>
                
                    <form class="form-group" action="func.php" method="post">
                        <label>Payment ID</label>
                        <input type="text" name="Payment_id" class="form-control"pattern="[0-9]{4}" class="form-control"  oninvalid="this.setCustomValidity('Enter a Valid ID')" oninput="this.setCustomValidity('')" Required><br> 

                        <label>Member ID</label>
                        <input type="text" name="member_id" class="form-control"
                                    value="<?php echo $row['member_id'];?>" readonly><br>
                                   
                        <label>Package </label>
    <select class="form-control" name="package_id" >

        <?php while($row1 = mysqli_fetch_array($result4)):;?>

        <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

        <?php endwhile;?>

    </select>
    
    <br>

                        <label>Amount</label>
                        <input type="number" name="Amount" class="form-control" value="<?php echo $row['Amount'];?>"Required><br>

                        <label>Date</label>
                        <input type="date" name="Date" class="form-control" value="<?php echo date('Y/m/d');?>" Required><br>


                        <label>Payment Type</label>
                        <select id="payment_type" name="payment_type" class="form-control">
                            <option value="card">Card</option>
                            <option value="cash">Cash</option>
                        </select><br>

                        <input type="submit" class="btn btn-primary" name="pay_submit" value="PAY">
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
    
                   


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
                integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
                crossorigin="anonymous"></script>
        </div>
</body>

</html>