<?php
session_start();
include('../../config/db.php');


$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);


while($row = $result->fetch_array(MYSQLI_ASSOC)){
	$row['img'] = '<img src="../'.$row['img'].'" alt="Smiley face" height="42" width="42">';
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