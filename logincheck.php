<div id="code">
<div id="code-st"><?php
include("db.php");
session_start();
if($_SERVER["REQUEST_METHOD"]  ==  "POST")
{
$username=mysqli_real_escape_string($db,$_POST['username']);
$password=mysqli_real_escape_string($db,$_POST['password']);
$result  =  mysqli_query($db,"SELECT  *  FROM  member");
$c_rows  =  mysqli_num_rows($result);
if  ($c_rows!=$username)  {
header("location: index.php?remark_login=failed");
}
$sql="SELECT  *  FROM  member  WHERE  username='$username'  and  password='$password'";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$active=$row['active'];
$count=mysqli_num_rows($result);
if($count==1 && $row['roll'] == 'admn')
{
$_SESSION['login_user']=$username;
header("location:index2.php");
}
elseif($count==1 && $row['roll'] == 'user')
{
$_SESSION['login_user']=$username;
header("location:user.php");
}
}
?>