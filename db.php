<?php
//include("db_class.php");
$mysqli_hostname  =  "localhost"; // host name
$mysqli_user  =  "root"; // username
$mysqli_password  =  "monu1991"; // password
$mysqli_database  =  "shapcare"; //database name
$db  =  mysqli_connect($mysqli_hostname,$mysqli_user,$mysqli_password,$mysqli_database);
if($db){
}else{
	echo mysqli_error($db);
}

//define('DB_HOST', 'localhost');
//define('DB_NAME', 'shapcare');
//define('DB_USERNAME','root');
//define('DB_PASSWORD','monu1991');
//
//
//$db = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
//if( mysqli_connect_error()) echo "Failed to connect to MySQL: " . mysqli_connect_error();

?>


