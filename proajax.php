<?php

require_once 'db.php';
if($_POST['type'] == 'product_table'){
	$row_num = $_POST['row_num'];
	$pro_name = $_POST['name_startsWith'];
	$query = "SELECT  pro_name  by_rate , sel_rate ,stock FROM stock where UPPER(pro_name) LIKE '".strtoupper($pro_name)."%'";
	$result = mysqli_query($db, $query);
	$data = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$sup_name = $row['pro_name'].'|'.$row['by_rate'].'|'.$row['sel_rate'].'|'.$row['stock'].'|'.$row_num;
		array_push($data, $sup_name);	
	}	
	echo json_encode($data);
}


