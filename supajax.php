<?php

require_once 'db.php';
if($_POST['type'] == 'country_table'){
	$row_num = $_POST['row_num'];
	$sup_name = $_POST['name_startsWith'];
	$query = "SELECT sup_name, sup_address, sup_contact, sup_contact1 FROM sup_details where UPPER(sup_name) LIKE '".strtoupper($sup_name)."%'";
	$result = mysqli_query($db, $query);
	$data = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$sup_name = $row['sup_name'].'|'.$row['sup_address'].'|'.$row['sup_contact'].'|'.$row['sup_contact1'].'|'.$row_num;
		array_push($data, $sup_name);	
	}	
	echo json_encode($data);
}


