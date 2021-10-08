<?php 

    define('DB_SERVER','localhost');
    define('DB_USER','root');
    define('DB_PASSWORD','');
    define('DB_DATABASE','internship');
    
    $connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);

    if($connection===false){
        die("Error : Could not connect <br> Error Stack Trace :<br>".mysqli_connect_error());
    }

    ?>

