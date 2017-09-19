<?php

include('session.php');
include('db.php');

$sql="SELECT  *  FROM  member  where  mem_id=$loggedin_id";
$result=mysqli_query($db,$sql);

while($rows=mysqli_fetch_array($result)){
?>
<p><?php  echo  $rows['fname'];  ?>  <?php  echo  $rows['lname'];  ?></p>
													<span>Administrator</span>
												</div>
                                                   <?php
//  close  while  loop
}
?>
<?php
//$term = mysqli_real_escape_string($_REQUEST['term']);    
//$sql = "SELECT * FROM category_master WHERE cat_name LIKE '%".$term."%'";
//$r_query = mysqli_query($db,$sql);
//
//while ($row = mysqli_fetch_array($r_query)){ 
//echo 'Primary key: ' .$row['cat_id']; 
//echo '<br /> Code: ' .$row['cat_name']; 
//echo '<br /> Description: '.$row['Description']; 
//echo '<br /> Category: '.$row['Category']; 
//echo '<br /> Cut Size: '.$row['CutSize'];  
//} 
?>
<?Php
//require "config.php";
//$term = mysqli_real_escape_string($_REQUEST['term']);  
$term = $mysqli->real_escape_string($term);  
$count="SELECT * FROM category_master  WHERE cat_name LIKE '%".$term."%'";
$r_query = mysqli_query($db,$count);
while ($row = mysqli_fetch_array($r_query)){
//echo "<table>";
//echo "<tr><th>id</th><th>name</th><th>class</th><th>mark</th></tr>";
//foreach ($dbo->query($count) as $row) {
echo "<tr ><td>$row[cat_id]</td><td>$row[cat_name]</td></tr>";
}
//echo "</table>";
?>