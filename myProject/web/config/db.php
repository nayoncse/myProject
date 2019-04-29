<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "my_project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


/* if ($conn->query($sql) === TRUE) {
    echo "Successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 
$sql = "SELECT * FROM `users`";
$res = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($res)){
	echo "<pre>";
	//print_r($row);
	echo $row['name'];
}

$conn->close();*/



