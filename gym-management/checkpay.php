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
$Payment_id=$row['Payment_id'];
$Date=$row['Date'];
 $expi=$row['exdate'];
$today=date("Y/m/d");
$ex=date("Y/m/d",strtotime($Date.'+1 month'));

 if($today < $ex)
 { 
  echo "<script>alert('Package is not expired')</script>";
  echo "<script>window.open('payment.php','_self')</script>";
 }
 else
 {  
   header("Location: newpay.php?Payment_id=$Payment_id" );
 }
 ?>
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