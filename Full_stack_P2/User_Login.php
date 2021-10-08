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
        <title>Login Page</title>
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
       <h2>User Login</h2>
        <div class="container content" style="width: 450px;top:60px; padding-top:50px!important;">
                           
            <form method="post" action="server.php">
                <input type="hidden" name="operation_type" value="login">
                    <div class="form-group top-spacing">
                        <input class="form-control" type="text" name="email" id="user_email" placeholder=" Email Id">
                    </div>
                    <div class="form-group top-spacing">
                        <input  class="form-control" type="password" name="password" id="user_password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-info btn-block" style="background-color:rgba(38, 56, 246, 0.69);border-radius: 10px;width: 298px; !important;" value="Login">
                    </div>
                    <br>
                    <p>Forgot Password? <a href="Forgot_Password.php">Click Here</a></p>
            </form>
            </div>
        </div>
        <center>
       <?php include "includes\\footer.php"; ?>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $("#user_email").on('keyup',function(){
                if($("#user_email").val()==''){
                    $("#email-err").text('Email is Required');
                }else{
                    $("#email-err").text('');
                }
            });
        </script>
    </body>
</html>