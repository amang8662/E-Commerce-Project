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
        <title>Show Items</title>
		<link type="text/css" rel='stylesheet' href='css/style.css'>
    </head>
    <body style="background:url('images/background3.jpg') no-repeat center center fixed;background-size: cover;font-size:20px;">
    <?php
        $item_id=$_GET['item_id'];
        $conn=mysqli_connect("localhost","aman","myphp123","shopping");
        if(mysqli_connect_error())
        {
            print_r("error");
        }
        $query="Select * from shopping_list where item_id='$item_id'";
        $result=  mysqli_query($conn, $query);
        $item= mysqli_fetch_assoc($result);  
        if(mysqli_num_rows($result)==0)
            echo 'Item Not Present!!';
        mysqli_close($conn);
    ?>
        <img id='shopimg' src='images/shopping_logo5.png' alt='Shopping Logo'>
        <a href='logout.php' id='logout'>Logout</a>
<pre>
<span style="font-weight:bold;font-size:30px;">My Store - Item Detail</span><br/>
<span style="font-style: italic;">You are viewing:</span>
<b><span  style='color:blue'><?php echo $item['item_type'];?> &gt;</span> <?php echo $item['item_name'];?></b>
</pre>
<img src="images/<?php echo $item['image_name'];?>" class="wrap align-left" alt="product"><br/>
<pre>
<b>Description:</b>
<?php echo $item['description'];?><br/> 	
<b>Price:</b>Rs <?php echo $item['item_price'];?>
</pre>
</body>
</html>
