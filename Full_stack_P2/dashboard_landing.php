<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION["loggedin"]!==true){
    header("location:User_Login.php");
    exit;
}


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <title>Dashboard Page</title>
        <?php include "includes\header.php"; ?> 
        <style>
            .login-section-logo{
                padding-top: 20px !important;
                padding-bottom: 20px !important;
            }

            .top-spacing{
                padding-top: 10px !important;
            }

            .navbar-nav {
                flex-direction: row;
            }
            main{
                left: 0;
                display: block !important;
                right: 0;
                margin-left: 250px;
                margin-top: 50px;
            }
        </style>
    </head>
    <body>
        <header>
            <?php include "includes\dashboard_top_nav.php"; ?>
            <?php include "includes\dashboard_side_nav.php"; ?>
        </header>
       <main class="alignment">
           <h5>Welcome <?php echo $_SESSION['email']; ?></h5>
       </main>
       <?php include "includes\\footer.php"; ?>
    </body>
</html>