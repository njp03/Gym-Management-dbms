<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Package details</title>
    
    <link rel="stylesheet" href="bootstrap.min.css">
    
       
</head>
<?php include 'header.php';?>




<body style="background:url('images/4.jpg'); background-size: cover;">
<div class="main-wrapper">
 <div class="container"  >
<div class="card" style="border-color: #354f38;">
     <div class="card-body" style="background-color:#536a50;color:#ffffff;">
         <div class="row">
             <div class="col-md-1">
    <a href="admin-panel.php" class="btn btn-light "style="margin-bottom: 30px;">Go Back</a>
             </div>
</div>
             <h3    
    style="padding: 10px;">PACKAGE DETAILS</h3>
             <div class="col-md-8">
         <form class="form-group" action="patient_search.php" method="post">
          <div class="row">
              
                 </form></div></div></div>
     <div class="card-body" style="background-color:#536a50;color:#ffffff;">
         
    <table class="table table-hover">
        <thead>
     <tr>
            <th>Package ID </th>
            <th>Package Name</th>
            <th>Amount/m</th>
            <th style="padding-left:70px">Modify</th>
         
        </tr>   
        </thead>
        <tbody>
          <?php get_package(); ?>
        </tbody>
    </table>
    <div class="card-body" style="color:FFFFFF; padding: 5px;
    margin-top: 50px;">
                <h3 
    ">ADD NEW PACKAGE</h3>
                </div> 
                <div class="card-body"></div>
                <form class="form-group" action="func.php" method="post">
                <label>Package ID</label>
<input type="text" name="package_id" class="form-control" pattern="[0-9]{2}" class="form-control"  oninvalid="this.setCustomValidity('Enter a Valid ID')" oninput="this.setCustomValidity('')" Required><br>
 
                   
                    
                    <label>Package Name</label>
                    <input type="text" name="package_name" class="form-control" style="text-transform:capitalize;" Required><br>
                    <label>Amount</label>
                    <input type="number" name="amount" class="form-control"><br>
                    
                    <input type="submit" class="btn btn-primary" name="package_submit" value="ADD">
       

</div>
     </div>
    </div>
    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>