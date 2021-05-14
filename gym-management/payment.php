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
?>
<html>

<head>
    <title>Payment details</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<?php include 'header.php';?>

<body style="background:url('images/4.jpg'); background-size: cover;">

    <div class="container">


        <div class="card">
            <div class="card-body" style="background-color:#536a50;color:#ffffff;">
                <div class="row">
                    <div class="col-md-1">
                        <a href="admin-panel.php" class="btn btn-light " style="padding-right:10px ">Go Back</a>
                    </div>
</div>
                        <h3 style="padding-top: 20px; padding-left: 20px;">Payment Details </h3>
                    
                    <div class="col-md-9">
                        <form class="form-group" action="patient_search.php" method="post">
                            <div class="row">

                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body" style="background-color:#536a50;color:#ffffff;">
                <div class="card-body">
                
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Payment ID </th>
                                <th>Member ID </th>
                                <th>Package</th>
                                <th>Amount</th>
                                <th>PAY type</th>
                                <th>EX-Date</th>
                                <th>New pay</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php get_payment(); ?>
                        </tbody>
                    </table>
                   
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
    </script>
    </div>
</body>

</html>