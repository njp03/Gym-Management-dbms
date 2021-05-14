<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Trainer details</title>
	 <link rel="stylesheet" href="bootstrap.min.css">
</head>
<?php include 'header.php';?>

<body style="background:url('images/last.jpg'); background-size: cover;">

 <div class="container">
<div class="card">
     <div class="card-body" style="background-color:#536a50;color:#ffffff;">
         <div class="row">
             <div class="col-md-1">
    <a href="admin-panel.php" class="btn btn-light ">Go Back</a>
             </div>
             </div>
             <div class="col-md-1"></div>
           <h3 style="padding: 10px;padding-top: 30px;padding-left: 30px;"> Trainer Information</h3>
             <div class="col-md-5">
         <form class="form-group" action="patient_search.php" method="post">
          <div class="row">
   
                         
                 </form></div></div></div>
     <div class="card-body" style="background-color:#536a50;color:#ffffff;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>
            <th>Trainer ID</th>
            <th>Name</th>
         
         <th style="padding-left:70px">Mail</th>
         <th>Gender</th>
         
         <th style="padding-left:70px;"> Modify</th>
         
        </tr>   
        </thead>
        <tbody>
          <?php get_trainer(); ?>
        </tbody>
    </table>
     </div>
    </div>
    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>