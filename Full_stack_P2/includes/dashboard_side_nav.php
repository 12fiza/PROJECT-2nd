<style>
    .bs-sidenav{
        height: 100%;
        width:200px;
        position : fixed;
        z-index: -1;
        top:0;
        left:0;
        overflow: hidden;
        padding-top: 100px;
    }
    .bs-sidenav a{
        padding: 15px 20px;
        text-decoration: none;
        display: block;
    }
    .bs-sidenav a:hover{
        background-color: #ffffff;
        color:black;
    }
    .side_nav{
        position: absolute;
        height: 58px;
        left: 105px;
        top: 80px;
        font-family: Roboto;
        font-size:20px;
        line-height: 42px;
        color: #000000;
    }
</style>

<div class="bs-sidenav bg-light">
     <img src="assets\images\webimages\user.png" height="55" style=" padding-left:20px;">
     <div class=side_nav>Welcome<br>XYZ</div>
    <a href="dashboard_landing.php">Dashboard</a>
    <a href="dashboard_change_password.php">Change Password</a>
    <a href="dashboard_user_profile.php">My Profile</a>
</div>