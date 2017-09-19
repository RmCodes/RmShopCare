<?php
session_start();
include('db.php');
$username=$_POST['username'];
 
$result  =  mysqli_query($db,"SELECT  *  FROM  member  WHERE  username='$username'");
$num_rows  =  mysqli_num_rows($result);
 
if  ($num_rows)  {
header("location:  category.php?remarks=failed");
}
else
{
$pro_name=$_POST['pro_name'];
$cat_name=$_POST['cat_name'];
$type=$_POST['type'];
$type1=$_POST['type1'];
//$email=$_POST['email'];
//$code=$_POST['code'];
//$code1=$_POST['code1'];



mysqli_query($db,"INSERT  INTO  category_master(pro_name,cat_name,type,type1)VALUES('$pro_name',  '$cat_name' ,'$type',  '$type1')");
header("location: category.php?remarks=success");
}

?>