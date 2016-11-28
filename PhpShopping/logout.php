<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link  rel="shortcut icon" type="image/x-icon" href="images/shop_logo1.ico">
        <title>Log out</title>
    </head>
    <body style="background:url('images/background3.jpg') no-repeat center center fixed;background-size: cover;font-style:italic;">
        <?php
            if(isset($_SESSION['userid']))
            {
                session_unset(); 
                session_destroy();
            }
        ?>
        <center>
            <h3 style="font:Comic Sans MS italic;">You have Successfully Logged out.<a href="login.html">Login</a></h3>
        </center>
       
    </body>
</html>
