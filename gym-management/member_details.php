<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Members details</title>
	 <link rel="stylesheet" href="bootstrap.min.css">
</head>
<?php include 'header.php';?>
<body style="background:url('images/4.jpg'); background-size: cover;">

 <div class="container">
<div class="card" style="border-color: #354f38;">
     <div class="card-body"style="background-color:#536a50;color:#ffffff;">
         <div class="row">
             <div class="col-md-1">
    <a href="admin-panel.php" class="btn btn-light ">Go Back</a>
             </div>
</div>
             
             <div ><h3   style="  
    padding: 10px;    margin-top: 15px;"> Member Information</h3></div>
             <div class="col-md-5">
         <form class="form-group" action="patient_search.php" method="post">
          <div class="row">
 
                 </form></div></div></div>
     <div class="card-body" style="background-color:#536a50;color:#ffffff;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr >
            <th>Member ID</th>
            <th>First Name</th>
         <th>Last Name</th>
         <th>Phone</th>
         
         <th>Gender</th>
        
         <th >Trainer</th>
         <th style="text-align:center;"  >Modify</th>
         
        </tr>   
        </thead>
        <tbody>
          <?php get_member(); ?>
        </tbody>
    </table>
     </div>
    </div>
    </div>
    </div>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    
    </body>
</html>