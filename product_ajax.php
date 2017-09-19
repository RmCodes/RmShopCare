<?php
require_once 'db.php';
if($_POST['type'] == 'country_table_1'){
	$row_num_1 = $_POST['row_num_1'];
	$name = $_POST['name_startsWith_1'];
	$query = "SELECT pro_name , cat_name , by_rate , sel_rate FROM stock where UPPER(pro_name) LIKE '".strtoupper($name)."%'";
	$result = mysqli_query($db, $query);
	$data = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$name = $row['pro_name'].'|'.$row['cat_name'].'|'.$row['by_rate'].'|'.$row['sel_rate'].'|'.$row_num;
		array_push($data, $name);	
	}	
	echo json_encode($data);
}

?>
