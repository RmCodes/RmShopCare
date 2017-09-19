<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>ravi Admin Panel </title>
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
<link rel="stylesheet" href="css/jquery-ui.css"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<script >
function validation()
{
{
	if(document.carform.fname.value=="")
	{
		alert ("please enter the name");
		document.carform.fname.focus();
		return false;
	}
}
{
	if(document.carform.lname.value=="")
	{
		alert("Please Enter Your Location Here");
		document.carform.lname.focus();
		return false;
	}
}
	//{
//		 if(document.carform.mob_no.value.length!=10)
//		 {
//			 alert("Please Enter The valid No.");
//			 document.carform.mob_no.focus();
//			 return false;
//		 }
//	}

	{
	    var email = document.getElementById('txtEmail');
	    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	    if (!filter.test(email.value))
	    {
	    	alert('Please provide a valid email address');
	    	address.focus;
	    	return false;
	    }
 	}

	{
 	if(document.carform.password.value.length<"8")
 	{
 		alert("Password length greater than 8 digit.");
 		document.carform.password.focus();
 		return false;
 	}
	}
	{
 	if(document.carform.cpassword.value.length<"8")
 	{
 		alert("Password length greater than 8 digit.");
 		document.carform.cpassword.focus();
 		return false;
 	}
	}

	{
 	if((document.carform.password.value) != (document.cpassword.conpass.value))
 	{
 		alert("Both Password Are Not Equal");
 		document.carform.cpassword.focus();
 		return false;
 	}
	}

	/*{
	if(document.carform.basicedu.value=="-1")
	{
		alert("Please Select Your Basic Education");
		document.carform.basicedu.focus();
		return false;
	}
	}*/

/*
	{
	if(document.carform.code1.value=="")
	{
		alert("Please Enter This Code");
		document.carform.code1.focus();
		return false;
	}
	}    */
	//var fup = document.getElementById('resume');
	//var fileName = fup.value;
	//var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
	//if(ext == "DOC" || ext == "pdf" || ext == "PDF" || ext == "doc"||ext == "docx")
	//{
	//	return true;
	//}
	//else
	//{
	//	alert("Upload doc & pdf files only");
	//	fup.focus();
	//	return false;
	//}


}
</script>
<body>
	<div class="main-wthree">
	<div class="container">
    <?php  
     $remarks  =  isset($_GET['remarks'])  ?  $_GET['remarks']  :  '';
     if  ($remarks==null  and  $remarks=="")
{
   //echo  '<div  id="reg-head"  class="headrg">Register  Here</div>';
       }
     if  ($remarks=='success')
{
   echo  '<div  id="reg-head"  class="headrg">Registration  Success</div>';
       }
     if  ($remarks=='failed')
{
   echo  '<div  id="reg-head-fail"  class="headrg">Registration  Failed!,  Username  exists</div>';
       }
?>
	<div class="sin-w3-agile">
		<h2>Sign Up</h2>
		<form  name="reg"  action="execute.php"  onsubmit="return  validateForm()"  method="post"  id="reg">
			<div class="username">
				<span class="username">First Name:</span>
				<input type="text" name="fname" class="name" id="tb-box"placeholder="" required="">
				<div class="clearfix"></div>
			</div>
            <div class="username">
				<span class="username">Last Name:</span>
				<input type="text" name="lname" class="name" id="tb-box" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="username">
				<span class="username">Email:</span>
				<input type="email" name="email" class="name" id="txtEmail" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="password-agileits">
				<span class="username">Username:</span>
				<input type="text" name="username" class="name" id="tb-box" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="password-agileits">
				<span class="username">Password:</span>
				<input type="password" name="password" class="password" id="tb-box" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
            <div class="password-agileits">
				<span class="username">Conform Password:</span>
				<input type="password" name="cpassword" class="password" id="tb-box" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
            <input type="text" name="code" placeholder="write the code" maxlength="4"></td>
			<td>
          	<?php
					$str="RK0123456789";
						$b="";
						for($i=0;$i<4;$i++)
												{
													$a=$str{rand()%12};
													$c=$a.".jpg";
													echo"<img src='images/phpimages/$c'>";
													$b=$b.$a;

						}
				echo"<input type=hidden value=$b name='code1'>";
				?>
		       </td>
			<div class="login-w3">
					<input type="submit" class="login" value="SignUp">
			</div>
			<div class="clearfix"></div>
		</form>
		<div class="back">
						<a href="index.html">Back to home</a>
				</div>
				<div class="footer">
					<p>&copy; 2018 RM . All Rights Reserved | Design by <a href="#">Rm</a></p>
				</div>
	</div>
	</div>
	</div>
</body>
</html>
