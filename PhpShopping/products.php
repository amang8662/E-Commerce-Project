<?php
$itemtype=$_GET['itemtype'];
include 'var.php';
$conn=mysqli_connect($host,$dbuser,$dbpassword,$database);
$query="Select * from shopping_list where item_type='$itemtype'";
$result= mysqli_query($conn, $query);
if (mysqli_num_rows($result))
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo"<li><a href='showitem.php?item_id=".$row['item_id']."' >".$row['item_name']."</a>(Rs".$row['item_price'].")</li>";
    }
}
mysqli_close($conn);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

