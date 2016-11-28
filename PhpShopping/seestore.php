<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start();
    if(!isset($_SESSION['userid']))
    {
        header('Location: loginerror.html');
    }
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link  rel="shortcut icon" type="image/x-icon" href="images/shop_logo1.ico">
        <title>Shopping Site</title>
        <link type='text/css' rel='stylesheet' href='css/style.css'/>
        <script type='text/javascript' src='js/jquery.js'></script>
        <script type='text/javascript' src='js/seestore.js'></script>
    </head>
	<body style="background:url('images/background3.jpg') no-repeat center center fixed;background-size: cover;">
	<a href='logout.php' id='logout'>Logout</a>
	<img id='shopimg' src='images/shopping_logo5.png'/>
      	<div>
		<h1>My Categories</h1>
		<p>Select a Category to see its items.</p>
		<form name='myform' action='showitem.php' method='get'>
		<ul id='menu'>
			<li><a href='#' class="itemtype">Mobile</a>
				<ul id='Mobile' class='menu-items'></ul>
			</li><br/>
                        
			<li><a href='#' class="itemtype">Shirt</a>
                            <ul id='Shirt' class='menu-items'></ul>
			</li><br/>
                        
			<li><a href='#' class="itemtype">Book</a>
				<ul id='Book' class='menu-items'></ul>
			</li><br/>
		</ul>
		</form>
	</div>
		
	</body>
</html>
