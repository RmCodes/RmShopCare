<?php
if(isset($_GET["sup_name"]))
{
$query = ("SELECT * FROM  sup_details  WHERE sup_name='".$_POST['sup_name']."'");

$address=$query->sup_address;
$contact=$query->sup_contact;
$contact1=$query->sup_contact1;

if($query!=NULL)
{

$arr = array ("address"=>"$address","contact"=>"$contact","contact1"=>"$contact1");
echo json_encode($arr);

}
else
{
$arr1 = array ("no"=>"no");
echo json_encode($arr1);
}
}
?>