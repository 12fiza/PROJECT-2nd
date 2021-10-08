<!--<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <title>Change Password</title>
        <?php include "includes\header.php"; ?> 
        <style>
           .change{
               width:50%;
               margin-left:25%;
               margin-right:25%;
               padding-top:30px;
               padding-left:40px;

           } 
        </style>
    </head>
    <body>
        <header>
        <?php include "includes\dashboard_top_nav.php"; ?>
            <?php include "includes\dashboard_side_nav.php"; ?>
        </header>
        <main class="alignment">
            <div class="container"> 
        <center>
        <div class="container content" style="width: 450px;top:50px">
            <div class="container">
                
                <h2>Change Password</h2>
                <form>
                 <input type="hidden" name="operation_type" value="Clear">
                    <input type="hidden" name="user_id" value="Change">
                    <div class="form-group top-spacing" style="padding-top:20px;padding-left:5px">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label for="Current_Password"style="padding-right:100px">Current_Password</label>
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12">
                               <input class="form-control" type="text" name="Current Password" id="user_current_password" placeholder="Current password" value="<?php echo isset($name)?$name:''?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group top-spacing"style="padding-top:0px">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label for="New Password" >New Password</label>
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12">
                                <input class="form-control" type="text" name="New Password" id="user_new_password" placeholder="New Password" value="<?php echo isset($phone)?$phone:''?>">
                            </div>
                        </div>
                        
                    </div>
                    <div class="form-group top-spacing"style="padding-top:0px;padding-left:5px">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label for="Confirm Password">Confirm_Password</label>
                            </div>
                            
                            <div class="col-md-8 col-lg-8 col-sm-12">
                                <input class="form-control" type="text" name="Confirm_Password" id="user_confirm_password" placeholder="Confirm Password" value="<?php echo isset($email)?$email:''?>">
                            </div>
                        </div>
                  
                 <div class= "change">
                    <div class="form-group" >
                        <input type="submit" class="btn btn-info btn-block" style="background-color:rgba(38, 56, 246, 0.69);border-radius: 10px;width: 104px; !important;" value="Clear">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-info btn-block" style="background-color:rgba(38, 56, 246, 0.69);border-radius: 10px;width: 104px;!important;" value="Change">
                    </div>
                    <br>
                </form>
            </div>
       </main>
       <?php include "includes\\footer.php"; ?>
       <script>
            $(document).ready(function(){
                setTimeout(function(){
                    $("#session-alert").alert("close")
                },5000);
            });
       </script>
    </body>
</html>-->







<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <title>Change Password</title>
        <?php include "includes\header.php"; ?> 
        <style>
            
        </style>
    </head>
    <body>
        <header>
        <?php include "includes\dashboard_top_nav.php"; ?>
            <?php include "includes\dashboard_side_nav.php"; ?>
        </header>
        <main class="alignment">
            <div class="container"> 
        <center>
        <div class="container content" style="width: 450px;top:50px">
            <div class="container">
                
                <h2>Change Password</h2>
                <form>
                 <input type="hidden" name="operation_type" value="Clear">
                    <input type="hidden" name="user_id" value="Change">
                    <div class="form-group top-spacing" style="padding-top:20px;padding-left:5px">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label for="Current_Password"style="padding-right:100px">Current_Password</label>
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12">
                               <input class="form-control" type="text" name="Current Password" id="user_current_password" placeholder="Current password" value="<?php echo isset($name)?$name:''?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group top-spacing"style="padding-top:0px">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label for="New Password" >New Password</label>
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12">
                                <input class="form-control" type="text" name="New Password" id="user_new_password" placeholder="New Password" value="<?php echo isset($phone)?$phone:''?>">
                            </div>
                        </div>
                        
                    </div>
                    <div class="form-group top-spacing"style="padding-top:0px;padding-left:5px">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label for="Confirm Password">Confirm_Password</label>
                            </div>
                            
                            <div class="col-md-8 col-lg-8 col-sm-12">
                                <input class="form-control" type="text" name="Confirm_Password" id="user_confirm_password" placeholder="Confirm Password" value="<?php echo isset($email)?$email:''?>">
                            </div>
                        </div>
                     <div class="row" style="padding-top:20px;padding-left:170px;"
                    <div>
                       <div class="col-md-4 col-lg-8 col-sm-12"style="position:relative-center;">
                            <div class="form-group";>
                                <input type="submit" class="btn btn-info" style="background-color: rgba(38, 56, 246, 0.69);border-radius: 10px;width:100px;!important;" value="Clear">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-8  col-sm-12"style="position:relative-center;">
                            <div class="form-group">
                             <input type="submit" class="btn btn-info" style="background-color: rgba(38, 56, 246, 0.69);border-radius: 10px;width:100px;!important;" value="Cancel">
                            </div>
                        </div>
                    </div>
                    <br>
                </form>
            </div>
       </main>
       <?php include "includes\\footer.php"; ?>
       <script>
            $(document).ready(function(){
                setTimeout(function(){
                    $("#session-alert").alert("close")
                },5000);
            });
       </script>
    </body>
</html>
                   
              

