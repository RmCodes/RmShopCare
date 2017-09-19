<?php
  $userAnswer = $_POST['data']; 
  $sql="SELECT * FROM sup_details where sup_name='".$userAnswer."'" ;
  $result=mysqli_query($sql);
  $row=mysqli_fetch_array($result);
  // for first row only and suppose table having data
  echo json_encode($row);  // pass array in json_encode  
  while($row = mysqli_fetch_assoc($result)){
  $name = $row['sup_name'].$row_num;
  array_push($data, $name);	
	}	
	echo json_encode($data);
?>