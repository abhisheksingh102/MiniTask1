//This is the signup page new user can login using this page

<?php
session_start();
include("connection.php");
extract($_REQUEST);
    if(isset($_SESSION['id']))
{
	//header("location:adminlogin.php");
}

if(isset($register))
{
$sql=mysqli_query($con,"select * from User where Email='$Email'");
if(mysqli_num_rows($sql))
{
 $email_error="This Email Id is laready registered with us";
}
else
{
    $sql=mysqli_query($con,"insert into User 
    (User_id	,Password,User_name,Email)
           values('$User_id','$Password','$User_name','$Email')");


$_SESSION['id']=$Email;

header("location:adminlogin.php");

}
}
	
 
   
  
  ?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
    <title> Registration Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		
		<style>
		ul li{list-style:none;}
		ul li a {color:black;text-decoration:none; }
		ul li a:hover {color:black; text-decoration:none;}
		</style>
</head>
<body>


<br><br><br>
<div class="middle" style="margin:0px auto; border:1px solid #F8F9FA;  width:800px;">
       <ul class="nav nav-tabs nabbar_inverse" id="myTab" style="background:#ED2553;border-radius:10px 10px 10px 10px;" role="tablist">
          <li class="nav-item">
             <a class="nav-link active" style="color:#BDDEFD;" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="true">Register</a>
          </li>
		  <li class="nav-item">
             <a class="nav-link " id="login-tab" style="color:#BDDEFD;" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Log In</a>
          </li>
       </ul>
	   <br><br>
	   <!--tab 1 starsts-->
	   <div class="tab-content" id="myTabContent">
	       <div class="tab-pane fade show active" id="register" role="tabpanel" aria-labelledby="home-tab">
			    <div class="footer" style="color:red;"><?php if(isset($loginmsg)){ echo $loginmsg;}?></div>
			    <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                          <label for="name">User_id:</label>
                          <input type="text" class="form-control" id="User_id" value="<?php if(isset($User_id)) { echo $User_id;}?>" placeholder="Enter User_id" name="User_id" required/>
                      </div>
                      <div class="form-group">
                         <label for="Password">Password:</label>
                         <input type="password" class="form-control" id="Password" value="<?php if(isset($Password)) { echo $Password;}?>" name="Password" placeholder="Enter Password"required/>
                     </div>
                      <div class="form-group">
                          <label for="name">Name:</label>
                          <input type="text" class="form-control" id="User_name" value="<?php if(isset($User_name)) { echo $User_name;}?>" placeholder="Enter User Name" name="User_name" required/>
                      </div>
	                  <div class="form-group">
                          <label for="name">Email Id:</label>
                          <input type="email" class="form-control" id="Email" value="<?php if(isset($Email)) { echo $Email;}?>" placeholder="Enter Email" name="Email" required/>
                          <span style="color:red;"><?php if(isset($email_error)){ echo $email_error;} ?></span>
	                  </div>
	                 
                     
	                
                     <button type="submit" id="register" name="register" class="btn btn-outline-primary">Register</button>
                     
                </form>
				<br>
			</div>
			<div class="tab-pane fade show" id="login" role="tabpanel" aria-labelledby="home-tab">
			   <a href="adminlogin.php"><button type="button" style="padding:10px;  width:200px; margin-top:30%; margin-left:40%; margin:0px auto;" class="btn btn-outline-primary" name="login" value="Log In">Log In</button></a>
			   <br><br><br> <br><br><br> <br><br><br><br><br><br> <br><br><br> <br><br><br>
			</div>
	   </div>
	</div>
	<br>
	
	 
	   
</body>
</html>