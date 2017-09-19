<?php
include "db.php";
$q = strtolower($_GET["q"]);
if (!$q) return;
$db->query("SELECT * FROM sup_details");
  while ($line = $db->fetchNextObject()) {
  
  	if (strpos(strtolower($line->sup_name), $q) !== false) {
		echo "$line->sup_name\n";
	
 }
 }

?>