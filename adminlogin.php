<?php
session_start();
include("connection.php");
extract($_REQUEST);
  if(isset($login))
  {
	$sql=mysqli_query($con,"select * from User where User_id='$User_id' && Password='$Password' ");
    if(mysqli_num_rows($sql))
	{
	 $_SESSION['admin']=$User_id;
	 
	header('location:profile.php');
    	
	}
       else
       {
       $admin_login_error="Invalid Username or Password";
       header('location:signuppage.php');	
       }
  }
   
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
    <title>Admin</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">		
		<style>
		ul li{list-style:none;}
		ul li a {color:black; text-decoration:none;}
		ul li a:hover {color:black; text-decoration:none;}
		</style>
</head>
<body>

<
		
		
     
</nav>
<br><br><br><br><br><br>
<div class="middle" style="  padding:40px; border:1px solid #ED2553; margin:0px auto; width:400px;">
       <ul class="nav nav-tabs nabbar_inverse" id="myTab" style="background:#ED2553;border-radius:10px 10px 10px 10px;" role="tablist">
          <li class="nav-item">
             <a class="nav-link active" id="home-tab" data-toggle="tab" href="#login" role="tab" aria-controls="home" aria-selected="true">Home</a>
          </li>
         
              
          
       </ul>
	   <br><br>
	   <div class="tab-content" id="myTabContent">
	   <!--login Section-- starts-->
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="home-tab">
			    <div class="footer" style="color:red;"><?php if(isset($loginmsg)){ echo $loginmsg;}?></div>
			  <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="User_id">User_Id:</label>
                      <input type="text" class="form-control" name="User_id" id="User_id" required/>
                    </div>
                   <div class="form-group">
                      <label for="Password">Password:</label>
                     <input type="password" name="Password" class="form-control" id="Password" required/>
                   </div>
 
                  <button type="submit" name="login" style="background:#ED2553; border:1px solid #ED2553;" class="btn btn-primary">Login </button>
                  <div class="footer" style="color:red;"><?php if(isset($admin_login_error)) { echo $admin_login_error; }?></div>
                
			 </form>
			</div>
			<!--login Section-- ends-->
			
			
            
      </div>
	  </div>
	   <br><br><br><br><br><br><br>
	   </body>
</html>
