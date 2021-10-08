<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <title>Home Page</title>
        <?php include "includes\header.php";?> 
    </head>
    <style>
   
nav {
    list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #C0C0C0;
  position: absolute;
  left: 0px;
  height: 104px;
  top: 0px;

}
.homepage-section-logo{
    padding-top: 0px !important;
    padding-bottom:0px !important;
    position: absolute;
    width: 105px;
    height: 104px;
    left: 0px;
    top: 0px;   
}
.h1{
 position: relative;
 justify-content: center;
text-align:center;
top:90px;
font-family: Roboto;
font-style: normal;
font-weight: bold;
font-size: 64px;
line-height: 35px;

color: #000000;
}
.about-content{
    position: absolute;
    width: 100%;
    height:78%;
    -webkit-background-size:cover;
    left: 0px;

    background: #85FFFF;
}
 footer{
position:absolute;
width: 100%;
height:104px;
left: 0px;
bottom:0px;
overflow:hidden;
background: #C0C0C0;
}
#container{
    text-align:center;
}
</style>
     <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light sticky-top" >
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="assets\images\logo\Headerlogo.jpeg" width="55px" class="homepage-section-logo" >
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                     
                    <div class="collapse navbar-collapse" id="navbar" style="display: block !important;">
                        
                        <ul class="navbar-nav" style="float: right;">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" style="font-size: 20px !important">REGISTER</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="font-size: 20px !important">LOGIN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="font-size: 20px !important;">CONTACT US</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
         </header>
        <main>
            <div class="about-content" >
                <div class="container  text-center">
                    <div class =h1>WELCOME</h1></div>
                </div>
                 <form method="post" action="server.php"></form>
                 <center>
               <input type="hidden" name="operation_type" value="REGISTER NOW">
               <div class="form-group">
                        <input type="REGISTER NOW" class="btn btn-info btn-block" style="background-color: rgba(38, 59, 247, 0.64);position: absolute;;height: 67.41px;
                         width:50%; margin-left:25%;margin-right:25%; top: 223px;border-radius: 150px; !important;" value="REGISTER NOW">
              <!--<input type="Button" class="btn btn-info btn-block" style="background-color: rgba(38, 59, 247, 0.64);position:absolute;height: 67.41px;
                 text-align:center;justify-content:center; top: 223px;border-radius: 150px;!important;" value="REGISTER NOW">-->
                </div>
                </div>
                <br>
              </center>
            <p>REGISTER NOW? <a href="User_Registration.php">register now</a></p>
        </main>
      <footer>
         <div class="container-fluid text-center">
           <p style="font-family: Roboto;font-style: normal;font-weight: bold; font-size: 24px;
           line-height:98PX;color: #000000;!important;" class="footer-text">All rights Reserved &copy; 2021 Example.com</p>
        </div>  
    </footer>
                <?php include "includes\\footer.php"; ?>
     </body>
</html>

