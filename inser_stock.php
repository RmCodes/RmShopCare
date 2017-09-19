<?php
include('session.php');
include('db.php');
$sql="SELECT  *  FROM  member  where  mem_id=$loggedin_id";
$result=mysqli_query($db,$sql);

while($rows=mysqli_fetch_array($result)){
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Add New Categories</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<div class="user-name">
													<p><?php  echo  $rows['fname'];  ?>  <?php  echo  $rows['lname'];  ?></p>
													<span>Administrator</span>
												</div>
                                                   <?php
//  close  while  loop
}
?>
<div class="hight-chat">
					<div class="col-md-6 w3ls-high">
						<div class="hightchat-grid">
<div class="sin-w3-agile" id="example-1">
<p> Add New Stock</p>
<form  name="reg"  action="stock_config.php"  onsubmit="return  validateForm()"  method="post"  id="reg">
			<div class="username">
				<input type="text" name="name" class="name" id="tb-box"placeholder="Product Name" required>
				<div class="clearfix"></div>
			</div>
            <div class="username">
				<input type="text" name="cat" class="name" id="tb-box" placeholder="Category Name" required>
				<div class="clearfix"></div>
			</div>
			<div class="username">
				<input type="text" name="by_r" class="name" id="tb-box" maxlength="10" placeholder="Buying Rate" required>
				<div class="clearfix"></div>
			</div>
			<div class="password-agileits">
				<input type="text" name="sel_r" class="name" id="tb-box" maxlength="10" placeholder="Selling Rate" required>
				<div class="clearfix"></div>
			</div>
            <div class="password-agileits">
				<input type="text" name="sel_name" class="name" id="tb-box" maxlength="80" placeholder="Supllier Name" required>
				<div class="clearfix"></div>
			</div>
            <div class="password-agileits">
				<input type="date" name="s_date" class="name" id="tb-box"  required>
				<div class="clearfix"></div>
			</div>
			<div class="login-w3">
					<input type="submit" class="login" value="Insert">
			</div>
			<div class="clearfix"></div>
		</form>
        <a href="custumer.php"><input type="submit"  value="Cancel"></a>
        </div>
        </div>
        </div>