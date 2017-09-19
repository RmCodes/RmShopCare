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
<title>shop Manager</title>
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

<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<!-- //tables -->
<!--<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>-->
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>
<script type="text/javascript" src="js/jquery.autocomplete.js"></script>
<script type="text/javascript" src="js/jquery.autocomplete.pack.js"></script>
<script type="text/javascript" src="sup_li_det/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="sup_li_det/pjs/jquery-ui.min.js"></script>
<!--product details rewiew script end -->   
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<?php include "header.php"; ?>
                <?php
//  close  while  loop
}
?>
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Tabels</li>
            </ol>
			<p align="center"> Add New Stock</p>
<div class="validation-system">
 		<div class="validation-form">
 <form>
        <div class="vali-form">
            <div class="col-md-2 form-group1">
             <?php
         $query = mysqli_query($db,"SELECT MAX(st_id) as max FROM stock"); 
           $row = mysqli_fetch_array($query);
              $highest_id = $row['max']+1;
             $mon =$highest_id;
?>
              <label class="control-label">Stock ID</label>
              <input type="text" name="id" value=SI"<?php echo  $mon ?>" readonly>
            </div>
         
            <div class="col-md-2 form-group1 form-last">
              <label class="control-label">Date</label>
              <input type="text" name="date" value="<?php echo date('d-m-Y');?>" readonly>
            </div>
            
             <div class="col-md-3 form-group1 form-last">
              <label class="control-label">Bill No</label>
              <input type="text" name="billnumber"placeholder="Enter Bill No" required="">
            </div>
             <div class="clearfix"> </div>
            <div class="col-md-4 form-group1">
              <label class="control-label">Suplier Name</label>
              <input type='text'  id='countryname_1' name='countryname[]'/>
            </div>
             <div class="clearfix"> </div>
             <div class="vali-form">
            <div class="col-md-2 form-group1 form-last">
              <label class="control-label">Address</label>
              <input type='text'  id='country_no_1' name='country_no[]'/>
            </div>
            <div class="col-md-2 form-group1 form-last">
              <label class="control-label">Contact No </label>
              <input type='text' id='phone_code_1' name='phone_code[]'/>
            </div>
            <div class="col-md-2 form-group1 form-last">
              <label class="control-label">Contact No</label>
              <input type='text' id='country_code_1' name='country_code[]'/>
            </div>
            <div class="clearfix"> </div>
           </div></div>
           <div class="validation-system">
            <div class="col-md-4 form-group1">
              <label class="control-label">Product Name</label>
              <input type='text'  id='pro_name_1' name='pro_name[]'/>
            </div>
             <div class="clearfix"> </div>
             <div class="vali-form">
            <div class="col-md-2 form-group1 form-last">
              <label class="control-label">Qty</label>
              <input type='text'  id='qty_1' name='qty_1[]'/>
            </div>
            <div class="col-md-2 form-group1 form-last">
              <label class="control-label">Buy Rate </label>
              <input type='text' id='by_rate_1' name='by_rate[]'/>
            </div>
            <div class="col-md-2 form-group1 form-last">
              <label class="control-label">Seles Rate</label>
              <input type='text' id='sel_rate_1' name='sel_rate[]'/>
            </div>
            <div class="col-md-2 form-group1 form-last">
              <label class="control-label">Available Stock</label>
              <input type="text"  id="stock_1"  name="stock[]">
            </div>
            <div class="col-md-2 form-group1 form-last">
              <label class="control-label">Total </label>
              <input type="text" id="total_1"  name="total_1[]">
            </div>
           
            <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 form-group1 group-mail">
              <label class="control-label">Payment</label>
              <input type="text" placeholder="Payment" required="">
            </div>
             <div class="col-md-6 form-group1 ">
              <label class="control-label">Description</label>
              <textarea name="desc" placeholder="Fill Payment Description " required=""></textarea>
            </div>
             <div class="clearfix"> </div>
            <div class="col-md-6 form-group1 group-mail">
              <label class="control-label">Subtotal</label>
              <input type="text" placeholder="Subtotal" required="">
            </div>
            <div class="col-md-6 form-group1 group-mail">
              <label class="control-label">Balance</label>
              <input type="text" placeholder="Balance" required="">
            </div>
             <div class="clearfix"> </div>
              <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Payment Mode</label>
            <select>
               <option value="" selected>Select</option>
            	<option value="">Online</option>
            	<option value="">NEFT</option>
            	<option value="">Cheque</option>
            	<option value="">Creadit</option>
            	<option value="">Card</option>
            </select>
            </div>
             <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>
        </div>
        </div>
        </div>  
        <script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<?php include "sidebar.php"; ?>
<!--js -->
<script src="sup_li_det/pjs/auto_pro.js"></script>
 <script src="sup_li_det/js/auto.js"></script>
 <!--<script src="sup_li_det/pjs/auto_pro.js"></script>-->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script> 
   <!-- /Bootstrap Core JavaScript -->	   
</body>
</html>