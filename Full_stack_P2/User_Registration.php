<?php

session_start();
if(isset($_SESSION['loggedin'])&& $_SESSION["loggedin"]===true){
    header("location:dashboard_landing.php");
    exit;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <title>Register Page</title>
        <?php include "includes\header.php"; ?> 
        <style>  
            .about-content{
                position:absolute;
                width:100%;
                height:100%;
                background: #C0C0C0;
            }
            h2{
                padding-top:30px;
            }
        </style>
     </head>
        <body>
            <div class="about-content" >
                  <center>
                     <h2>User Registration </h2>
             <div class="container content" style="width: 450px;top:60px; padding-top:50px!important;">     
           
                <form method="post" action="server.php">
                    <input type="hidden" name="operation_type" value="register">
                    <div class="form-group top-spacing">
                        <input class="form-control" type="text" name="name"id="user_name" placeholder="Name">
                    </div>
                    <div class="form-group top-spacing">
                        <input class="form-control" type="text" name="email" id="user_email" placeholder=" Email Id">
                    </div>
                    <div class="form-group top-spacing">
                        <input  class="form-control"style =" background color: #000000;" type="password" name="password" id="user_password" placeholder="Password">
                    </div>
                     <div class="form-group top-spacing">
                        <input  class="form-control" type="password" name="Re-password" id="user_password_confirmation" placeholder="Re-Password">
                    </div>
                    <div class="form-group top-spacing">
                        <input class="form-control" type="text" name="contact_no" id="user_contact_no" placeholder="Contact No">
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" class="btn btn-info btn-block" style="background-color:rgba(38, 59, 246, 0.71);border-radius: 10px;width: 298px; !important;" value="Submit">
                    </div>
                    <p>Already have an account? <a href="User_Login.php">Login instead</a></p>
                 </form>
              </div>
             </div>
          <center>
       <?php include "includes\\footer.php"; ?>
    </body>
</html>
   