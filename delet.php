<html>
<body>
<?php
include('session.php');
include('db.php');
if(isset($_GET['cat_id']))
{
$cat_id=$_GET['cat_id'];
$query1=mysqli_query($db,"delete from category_master where cat_id='$cat_id'");
if($query1)
{
header ("category.php");
?>
<?php echo '<script language="javascript">';
echo 'alert("Your Record Is Deleted.");';
echo 'window.location.href="category.php";';
echo '</script>';
?>
<?php
}
}
?>
</body>
</html>