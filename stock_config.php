<?php
session_start();
include('db.php');
$username=$_POST['username'];
 
$result  =  mysqli_query($db,"SELECT  *  FROM  member  WHERE  username='$username'");
$num_rows  =  mysqli_num_rows($result);
 
if  ($num_rows)  {
header("location:  stock.php?remarks=failed");
}
else
{
$name=$_POST['name'];
$cat=$_POST['cat'];
$by_r=$_POST['by_r'];
//$by_r2=$_POST['by_r2'];
$sel_r=$_POST['sel_r'];
$sel_name=$_POST['sel_name'];
$s_date=$_POST['s_date'];



mysqli_query($db,"INSERT  INTO  stock(pro_name,cat_name,by_rate,sel_rate,sup_name,Ex_date)VALUES('$name',  '$cat' ,'$by_r',  '$sel_r' ,'$sel_name', '$s_date')");
header("location: stock.php?remarks=success");
}

?>
