<?php

    require_once "config.php";

    if(isset($_POST['operation_type']) && $_POST['operation_type']=='register'){

        $sql = "INSERT INTO users(name,email,password,contact_no) VALUES (?,?,?,?)";
        if($statement=mysqli_prepare($connection,$sql)){
            mysqli_stmt_bind_param($statement,"ssss",$username,$emailid,$password,$contact_no);

            $username=$_POST['name'];
            $emailid=$_POST['email'];
            $password= password_hash($_POST['password'],PASSWORD_DEFAULT);
            $contact_no = $_POST['contact_no'];
         }
        if(mysqli_stmt_execute($statement)){
            header("location:User_Login.php");
        }else{
            echo "Oops SOmething went wrong";
        }
        mysqli_stmt_close($statement);

    }else if(isset($_POST['operation_type']) && $_POST['operation_type']=='login'){

        $sql = "SELECT id, email, password FROM users WHERE email=?";
        if ($statement=mysqli_prepare($connection, $sql)) {
            mysqli_stmt_bind_param($statement, "s", $email);

            $email=$_POST['email'];

            if (mysqli_stmt_execute($statement)) {
                mysqli_stmt_store_result($statement);
                
                if (mysqli_stmt_num_rows($statement)==1) {
                    mysqli_stmt_bind_result($statement, $id, $email, $password);
                    
                    if (mysqli_stmt_fetch($statement)) {
                        
                        if (password_verify($_POST['password'], $password)) {
                            
                            session_start();
                            $_SESSION["loggedin"]=true;
                            $_SESSION["id"]=$id;
                            $_SESSION['email']=$email;
                            $_SESSION['name']=$name;
                            header("location:dashboard_landing.php");
                        } else {
                            echo  "Invalid username or password";
                        }
                    }
                }
            } else {
                echo "soemthing went wrong";
            }
        }
    }else if(isset($_POST['operation_type']) && $_POST['operation_type']=="update_profile"){
        session_start();
        if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['contact_no']) && !empty($_POST['contact_no']) ){
            $sql = "UPDATE users SET name= ?, email=? , contact_no=? WHERE id = ?";
            if($statement=mysqli_prepare($connection,$sql)){
                mysqli_stmt_bind_param($statement,'sssi',$name,$email,$phoneno,$id);
                $name=$_POST['name'];
                $email=$_POST['email'];
                $phoneno=$_POST['contact_no'];
                $id=$_POST['id'];

                if(mysqli_stmt_execute($statement)){
                    unset($_SESSION["success_status"]);
                    $_SESSION["success_status"]=true;
                    header("location:My_profile_dashboard.php");
                    
                    exit();
                }else{
                    unset($_SESSION["success_status"]);
                    $_SESSION["success_status"]=false;
                    header("location:My_profile_dashboard.php");
                    exit();
                }
                mysqli_stmt_close($statement);
            }
            mysqli_close($connection);
            echo 1;
        }else{
            //0 when 0 is encountered we will get a alert telling nothing to update
            header("location:My_profile_dashboard.php");
            unset($_SESSION["success_status"]);
            $_SESSION["success_status"]=false;
            unset($_SESSION["update_status"]);
            $_SESSION['update_status']=0;
            echo 2;
        }

    }else if(isset($_GET['operation_type']) && $_GET['operation_type']=="logout"){
        session_start();
        $_SESSION=array();
        session_destroy();
        header("location:User_Login.php");
        exit;
    }
    else if(isset($_GET['operation_type']) && $_GET['operation_type']=="Chatbot"){
        session_start();
        $_SESSION=array();
        session_destroy();
        header("location:User_Login.php");
        exit;
    }
      
?>}
