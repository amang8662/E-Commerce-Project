<?php
$username=$_POST["username"];
$password=$_POST["password"];
$conn=mysqli_connect("localhost","aman","myphp123","shopping");
if(mysqli_connect_error())
{
    print_r("error");
}
$query="Select * from allusers where username='$username' and password='$password'";
$result=  mysqli_query($conn, $query);
$rows= mysqli_fetch_assoc($result);  
if(mysqli_num_rows($result) > 0)
{
    session_start();
    $_SESSION['userid']=$rows['userid'];
    echo"success";
}
mysqli_close($conn);

