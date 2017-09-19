<?php
    //database configuration
    include('db.php');
    
    //get search term
    $searchTerm = $_GET['term'];
    
    //get matched data from skills table
    $query = $db->query("SELECT * FROM stock WHERE pro_name LIKE '%".$searchTerm."%' ORDER BY pro_name ASC");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['pro_name'];
    }
    
    //return json data
    echo json_encode($data);
?>