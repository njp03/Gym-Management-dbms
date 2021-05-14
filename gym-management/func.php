<?php
$con=mysqli_connect("localhost","root","","gym-management");
if(isset($_POST['login_submit'])){
    die();
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from logintb where username='$username' and password='$password'";
    $result=mysqli_query($con,$query);
    print_r($result);die();
	if(mysqli_num_rows($result)==1)
	{
		header("Location:admin-panel.php");
}
	else
    {
        echo "<script>alert('error login')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
    }
if(isset($_POST['pat_submit']))
{
    $fname=ucwords($_POST['fname']);
    $lname=ucwords($_POST['lname']);
    #$email=$_POST['email'];
    $contact=$_POST['contact'];
    
    $gender=$_POST['gender'];
    $member_id=$_POST['member_id']; 
    $trainer_id=$_POST['trainer_id']; 
    #$package=$_POST['package']; 
    $query="insert into member(member_id,fname,lname,contact,Gender,trainer_id)values('$member_id','$fname','$lname','$contact','$gender','$trainer_id')";
     $result=mysqli_query($con,$query);

        if($result)
        {
        echo "<script>alert('Member added.')</script>";
          echo "<script>window.open('member_details.php','_self')</script>";
        }
        else
        {
          echo "<script>alert('Member $member_id already exists.')</script>";
          echo "<script>window.open('admin-panel.php','_self')</script>";
        }
    
}
    if(isset($_POST['tra_submit']))
    {
        $Trainer_id=$_POST['Trainer_id'];
        $Name=ucwords($_POST['Name']);
        //$phone=$_POST['phone'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $query="insert into Trainer(Trainer_id,Name,Gender,Email)values('$Trainer_id','$Name','$gender','$email')";
         $result=mysqli_query($con,$query);
         if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<script>alert('enter valid email.')</script>";
echo "<script>window.open('addtrainer.php','_self')</script>";
  exit();
}
        if($result)
        {
          echo "<script>alert('Trainer added.')</script>";
            echo "<script>window.open('trainer_details.php','_self')</script>";
        }
        else
        {
            echo "<script>alert('Trainer $Trainer_id already exists.')</script>";
            echo "<script>window.open('addtrainer.php','_self')</script>";
        }
        } 
        if(isset($_POST['package_submit']))
    {
        $package_id=$_POST['package_id'];
        $package_name=ucwords($_POST['package_name']);
        $amount=$_POST['amount'];
        
        $query="insert into package(package_id,package_name,amount)values('$package_id','$package_name','$amount')";
         $result=mysqli_query($con,$query);
        if($result)
        {
          echo "<script>alert('Package added.')</script>";
            echo "<script>window.open('package.php','_self')</script>";
        }
        else
        {
            echo "<script>alert('Package $package_id already exists.')</script>";
            echo "<script>window.open('package.php','_self')</script>";
        }
        } 
        if(isset($_POST['pay_submit']))
        {
            $Payment_id=$_POST['Payment_id'];
            $package_id=$_POST['package_id'];
            $Amount=$_POST['Amount'];
            
            $payment_type=$_POST['payment_type'];
            $member_id=$_POST['member_id'];
            $Date=$_POST['Date'];
            
            $exdate=date('Y/m/d',strtotime($Date.'+1 month'));
       
 
            $query="insert into Payment(Payment_id,package_id,Amount,payment_type,member_id,Date,exdate)values('$Payment_id','$package_id','$Amount','$payment_type','$member_id','$Date','$exdate')";
             $result=mysqli_query($con,$query);
            if($result)
            {
              echo "<script>alert('Payment sucessfull.')</script>";
                echo "<script>window.open('payment.php','_self')</script>";
            }
            else
            {
                echo "<script>alert('Payment Id $Payment_id already exists.')</script>";
                echo "<script>window.open('payment.php','_self')</script>";
            }
            } 
             
            
     

function get_package(){
    global $con;
    $query="select * from Package";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $package_id=$row ['package_id'];
        $package_name=ucwords($row['package_name']);
        $amount=$row['amount'];
        echo"<tr>
        <td>$package_id</td>
        <td>$package_name</td>
            <td>$amount</td>
            <td ><button ><a href='updatepackage.php?package_id=$package_id'  style='color:#000000; margin-right: 5px; padding: 5px;text-decoration:none; '>Update</a></button>
            <button><a href='deletepackage.php?package_id=$package_id ' style='color:#000000;margin-right: 5px; padding: 5px; text-decoration:none;'>Delete</a></button</td>   
        
        </tr>";

    }
}
function get_trainer(){
    global $con;
    $query="select * from Trainer";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Trainer_id=$row ['Trainer_id'];
        $Name=ucwords($row['Name']);
        //$phone=$row['phone'];
        $email=$row['Email'];
        $gender=$row['Gender'];

        echo"<tr>
        <td>$Trainer_id</td>
        <td>$Name</td>
           
            <td>$email</td>
            <td>$gender</td>
            

            <td><button><a href='updatetrainer.php?Trainer_id=$Trainer_id'style='color:#000000; margin-right: 5px; padding: 5px;text-decoration:none; '>Update</a></button>
            <button><a href='deletetrainer.php?Trainer_id=$Trainer_id' style='color:#000000; margin-right: 5px; padding: 5px;text-decoration:none;'>Delete</a></button></td>
            
            
        </tr>";

    }
}
function get_member(){
    global $con;
    $query="select * from member";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Member_id=$row ['member_id'];
        $FName=ucwords($row['fname']);
        $LName=ucwords($row['lname']);
        $phone=$row['contact'];
       
        $gender=$row['Gender'];
        #$package_name=$row['package_name'];
        $trainer_id=$row['trainer_id'];

        #$packagequery = "SELECT Package_name FROM package where Package_id = $package_name";
        #$packageresult = mysqli_query($con, $packagequery);
        #while($row1 = mysqli_fetch_array($packageresult)):;
        #$package_name_result = $row1[0];
    #endwhile;




        $trainerquery = "SELECT Name FROM trainer where Trainer_id = $trainer_id";
        $trainerresult = mysqli_query($con, $trainerquery);
        while($row1 = mysqli_fetch_array($trainerresult)):
        $trainer_name_result = $row1[0];
        endwhile;

        echo"<tr>
        <td>$Member_id</td>
        <td>$FName</td>
        <td>$LName</td>
            <td>$phone</td>
            
            <td>$gender</td>
            
            <td>$trainer_name_result</td>
            
            <td><button><a href='updatemember.php?Member_id=$Member_id' style='color:#000000; margin-right: 5px; padding: 5px;text-decoration:none; '>Update</a></button>
           <button><a href='deletemember.php?Member_id=$Member_id'style='color:#000000; margin-right: 5px; padding: 5px; text-decoration:none;'>Delete</a></button</td>
           
            
        </tr>";

    }
}
function get_payment(){
    global $con;
    $query="select * from Payment";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Payment_id=$row ['Payment_id'];
        $member_id=$row ['member_id'];
        $package_id=$row['package_id'];
        $Amount=$row['Amount'];
        $payment_type=$row['payment_type'];
         $Date=$row['Date'];
         $exdate=date('Y/m/d',strtotime($Date. '+1 months'));

         $packagequery = "SELECT package_name FROM package where Package_id = $package_id";
         $packageresult = mysqli_query($con, $packagequery);
         while($row1 = mysqli_fetch_array($packageresult)):
         $package_name_result = $row1[0];
         endwhile;
        echo"<tr>
        <td>$Payment_id</td>
        <td>$member_id</td>
        <td>$package_name_result</td>
        <td>$Amount</td>
        <td>$payment_type</td>
        <td>$exdate</td>

        
        <td><button><a href='checkpay.php?Payment_id=$Payment_id' style='color:#000000; margin-right: 5px; padding: 5px;text-decoration:none; '>ADD</a></button></td>
    
        
            </tr>";

    }
}



 
?>