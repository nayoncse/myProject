<?php
session_start();
include('../../config/db.php');


$sql = "SELECT * FROM contact_msg";
$result = mysqli_query($conn, $sql);


while($row = $result->fetch_array(MYSQLI_ASSOC)){
	$data[] = $row;
}
if(empty($data)){
	$data['id'] = 'No Data Found';
}

$results = ["sEcho" => 1,
        	"iTotalRecords" => count($data),
        	"iTotalDisplayRecords" => count($data),
        	"aaData" => $data ];


echo json_encode($results);