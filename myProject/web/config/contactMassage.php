<?php

include('db.php');
$error = "";
if (empty($_POST['inputName'])) {
   $error = "Name is required!";
   echo $error;
   
}
else if (empty($_POST['email'])) {
   $error = "Email is required!";
   echo $error;
}


else if (empty($_POST['msg'])) {
   $error = "Please Provide your Message!";
   echo $error;
} else {
	//echo "ok";
	$name = $email= $message = ""; 
	$name = isset($_POST['inputName']) ? mysqli_real_escape_string($conn,$_POST['inputName']) : '';
	$email = isset($_POST['email']) ? mysqli_real_escape_string($conn,$_POST['email']) : '';
	
	$message = isset($_POST['msg']) ? mysqli_real_escape_string($conn,$_POST['msg']) : '';
	/* New User Creation and inserting into DB */
	$sql = "INSERT INTO `my_project`.`contact_msg`
            (`name`,`email`,`message`,
             `insert_time`) VALUES ('$name','$email',  '$message',NOW())";
	$msg = "";
	if ($conn->query($sql) === TRUE) {
		//echo "<h1>User Regindtration Successful.</h1>";
		$msg = "Message Submited Successfully. Thank you for your Interest. We will contact you shortly.";
		
	} else {
		//echo "Error: " . $sql . "<br>" . $conn->error;
		//echo "<mark>User Regindtration Failed. Please Try again!</mark>";
		$msg = "Something went wrong, Please try again later!";
	}
	echo $msg;
}
?>