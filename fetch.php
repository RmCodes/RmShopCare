<?php
//fetch.php
include('db.php');
$query="SELECT * FROM supplier_details  WHERE supplier_name='".$_POST['stock_name1']."'");
$address=$line->supplier_address;
$contact1=$line->supplier_contact1;
$contact2=$line->supplier_contact2;
if($line!=NULL)
{
$arr = array ("address"=>"$address","contact1"=>"$contact1","contact2"=>"$contact2");
echo json_encode($arr);
}
else
{
$arr1 = array ("no"=>"no");
echo json_encode($arr1);
}
//$output = '';
//if(isset($_POST["query"]))
//{
// $search = mysqli_real_escape_string($db, $_POST["query"]);
// $query = "
//  SELECT * FROM sup_details 
//  WHERE sup_name LIKE '%".$search."%'
//  
//LIMIT 2" ;
//}
//else
//{
// $query = "
//  SELECT * FROM sup_details ORDER BY sup_name LIMIT 0 ";
//}
//$result = mysqli_query($db, $query);
//if(mysqli_num_rows($result) > 0)
//{
// $output .= '
//  <div class="table-responsive">
//   <table class="table table bordered">
//    <tr>
//     <th>Customer Name</th>
//     <th>Address</th>
//     <th>City</th>
//     <th>Postal Code</th>
//     <th>Country</th>
//    </tr>
// ';
// while($row = mysqli_fetch_array($result))
// {
//  $output .= '
//   <tr>
//    <td>'.$row["sup_name"].'</td>
//    <td>'.$row["sup_address"].'</td>
//    <td>'.$row["sup_contact"].'</td>
//    <td>'.$row["sup_contact1"].'</td>
//   
//   </tr>
//  ';
// }
// echo $output;
//}
//else
//{
// echo 'Data Not Found';
//}

?>