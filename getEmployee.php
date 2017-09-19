<?php
include_once("db.php");
if($_REQUEST['mid']) {
	$sql = "SELECT id, sup_name, sup_address,sup_contact,sup_contact1 FROM sup_details WHERE id='".$_REQUEST['mid']."'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	
	$data = array();
	while( $rows = mysqli_fetch_assoc($resultset) ) {
		$data = $rows;
	}
	echo json_encode($data);
} else {
	echo 0;	
}
?>
