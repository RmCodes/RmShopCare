                                              
<?php
session_start();
include('db.php');
$username=$_POST['username'];
 
$result  =  mysqli_query($db,"SELECT  *  FROM  member  WHERE  username='$username'");
$num_rows  =  mysqli_num_rows($result);
 
if  ($num_rows)  {
header("location:  supplier.php?remarks=failed");
}
else
{
$name=$_POST['name'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$mobile2=$_POST['mobile2'];
//$email=$_POST['email'];
//$code=$_POST['code'];
//$code1=$_POST['code1'];



mysqli_query($db,"INSERT  INTO  cust_details(sup_name,sup_address,sup_contact,sup_contact1)VALUES('$name',  '$address' ,'$mobile',  '$mobile2')");
header("location: supplier.php?remarks=success");
}

?>
