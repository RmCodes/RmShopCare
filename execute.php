<?php
session_start();
include('db.php');
$username=$_POST['username'];
 
$result  =  mysqli_query($db,"SELECT  *  FROM  member  WHERE  username='$username'");
$num_rows  =  mysqli_num_rows($result);
 
if  ($num_rows)  {
header("location:  index.php?remarks=failed");
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
//$code=$_POST['code'];
//$code1=$_POST['code1'];



mysqli_query($db,"INSERT  INTO  member(username,  password ,fname,  lname,  email)VALUES('$username',  '$password' ,'$fname',  '$lname','$email')");
header("location: signin.php?remarks=success");
}

?>