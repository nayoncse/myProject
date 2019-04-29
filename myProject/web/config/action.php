<?php
session_start(); 
include('db.php');

if(isset($_POST['request'])){
	
	$error = "";
	$inputName = $inputEmail = $inputPass =$confromPass =$inputPassword =  "";
	if($_POST['request'] == 'reg'){
		/* Data receive from registration from and checking */
		//var_dump($_POST);
		/* echo $_POST['request'];
		echo $_POST['inputName'];
		echo $_POST['email'];
		echo $_POST['inputPass'];
		echo $_POST['confromPass']; */
		if (empty($_POST['Name'])) {
		   $error = "Name is required!";
		   echo $error;
		   //echo '<script type="text/javascript">alert("' .$nameErr . '")</script>';
		   
		}
		else if (empty($_POST['Email'])) {
		   $error = "Email is required";
		   echo $error;
		   //echo '<script type="text/javascript">alert("' .$emailErr . '")</script>';
		}
		else if (empty($_POST['Address'])) {
		   $error = "Address is required";
		   echo $error;
		   //echo '<script type="text/javascript">alert("' .$emailErr . '")</script>';
		}
		else if (empty($_POST['password1'])) {
		   $error = "password is required";
		   echo $error;
		   //echo '<script type="text/javascript">alert("' .$passErr . '")</script>';
		}
		else if (empty($_POST['password2'])) {
		   $error = "confrom password is required";
		   //echo '<script type="text/javascript">alert("' .$confromPassErr . '")</script>';
		}
		else if ($_POST['password2'] != $_POST['password2'] ) { 
		   $error = "your pasword do not much";
		   echo $error;
		   //echo '<script type="text/javascript">alert("' .$confromPassErr . '")</script>';
		} 
		else{
			//echo "Found OK";
			$name = isset($_POST['Name']) ? mysqli_real_escape_string($conn,$_POST['Name']) : '';
			$email = isset($_POST['Email']) ? mysqli_real_escape_string($conn,$_POST['Email']) : '';
			$adress = isset($_POST['Address']) ? mysqli_real_escape_string($conn,$_POST['Address']) : '';
			$pass = isset($_POST['password1']) ? mysqli_real_escape_string($conn,$_POST['password1']) : '';
			/* Password encription */
			/* $salt = mcrypt_create_iv(22, MCRYPT_DEV_URANDOM); */
			$salt = base64_encode('zfe4asff#ffu81!!');
			$salt = str_replace('+', '.', $salt);
			$hash = crypt($pass, '$2y$10$'.$salt.'$'); 
			
			$sql = "SELECT * FROM `users` WHERE email='$email'";
	
			$res = mysqli_query($conn, $sql);
			if($row = mysqli_fetch_array($res)){
				echo "email Already Taken, Please try again.";
			}else{
			/* New User Creation and inserting into DB */
			$sql = "INSERT INTO `my_project`.`users`(`full_name`,`email`,`password`,`address`,`status`,`type`) VALUES ('$name','$email','$hash','$adress','1','2')";
			$msg = "";
			if ($conn->query($sql) === TRUE) {
				//echo "<h1>User Regindtration Successful.</h1>";
				$msg = "User Registration Successful.";
				
			} else {
				//echo "Error: " . $sql . "<br>" . $conn->error;
				//echo "<mark>User Regindtration Failed. Please Try again!</mark>";
				$msg = "User Registration Failed. Please Try again!";
			}
			echo $msg;
			//echo '<script type="text/javascript">alert("' . $msg . '")</script>';

		}} 
	
	}
	else if($_POST['request'] == 'login'){
		
		 if (empty($_POST["email2"])) {
               $error = "Email is required";
			    echo $error;
			   //echo '<script type="text/javascript">alert("' .$emailErr . '")</script>';
            }
		else if (empty($_POST["inputPassword"])) {
               $$error = "password is required";
			    echo $error;
			   //echo '<script type="text/javascript">alert("' .$PasswordErr . '")</script>';
            }
		else{
			$email = isset($_POST['email2']) ? mysqli_real_escape_string($conn,$_POST['email2']) : '';
			$pass = isset($_POST['inputPassword']) ? mysqli_real_escape_string($conn,$_POST['inputPassword']) : '';
			
			/* User Login Query */
			 $sql = "SELECT * FROM `my_project`.`users` WHERE status=1 and email='$email'";
			//die();
			$msg = "";
			
			$res = mysqli_query($conn, $sql);
			$num = mysqli_num_rows($res);
			if($num){
				$row = mysqli_fetch_array($res);
				/* echo $row['password'];
				echo $pass;
				die(); */
				if (password_verify($pass , trim($row['password'])) and ($row['type']==1)) {
					$msg = 'SUCCESS';
					$_SESSION['username'] = $row['full_name'];
					$_SESSION['id'] = $row['id'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['address'] = $row['address'];
					$_SESSION['isLogin'] = 1;
				}
			else if(password_verify($pass , trim($row['password'])) and ($row['type']==2)){
					$msg = 'SUCCESS2';
					$_SESSION['username'] = $row['full_name'];
					$_SESSION['id'] = $row['id'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['address'] = $row['address'];
				} else {
					$msg = 'Invalid password.';
				}
			} else {
				$msg = 'Invalid User Email.';
			}
			//$msg = "User Regindtration Successful.";
				echo $msg;
			
			//echo '<script type="text/javascript">alert("' . $msg . '")</script>';
		} 
	}else {
		
	}
	/* echo('nmgmhfh');
	header("Location: http://localhost:8080/all-file/p1/login.php");
	exit(); */
	
	
	
	
	if($_POST['request'] == 'cont_info'){
		/* Data receive from registration from and checking */
		//var_dump($_POST);
		/* echo $_POST['request'];
		echo $_POST['inputName'];
		echo $_POST['email'];
		echo $_POST['inputPass'];
		echo $_POST['confromPass']; */
		if (empty($_POST['inputName'])) {
		   $error = "Name is required!";
		   echo $error;
		   //echo '<script type="text/javascript">alert("' .$nameErr . '")</script>';
		   
		}
		else if (empty($_POST['email'])) {
		   $error = "Email is required";
		   echo $error;
		   //echo '<script type="text/javascript">alert("' .$emailErr . '")</script>';
		}
		else if (empty($_POST['inputNumber'])) {
		   $error = "password is required";
		   echo $error;
		   //echo '<script type="text/javascript">alert("' .$passErr . '")</script>';
		}
		else if (empty($_POST['inputMessage'])) {
		   $error = "confrom password is required";
		   //echo '<script type="text/javascript">alert("' .$confromPassErr . '")</script>';
		}
		 
		else{
			//echo "Found OK";
			$name = isset($_POST['inputName']) ? mysqli_real_escape_string($conn,$_POST['inputName']) : '';
			$email = isset($_POST['email']) ? mysqli_real_escape_string($conn,$_POST['email']) : '';
			$number = isset($_POST['inputNumber']) ? mysqli_real_escape_string($conn,$_POST['inputNumber']) : '';
			$message = isset($_POST['inputMessage']) ? mysqli_real_escape_string($conn,$_POST['inputMessage']) : '';
			
			/* New User Creation and inserting into DB */
			$sql = "INSERT INTO `proj_db`.`contact_info`(`name`,`email`,`phone_num`,`massage`) VALUES ('$name','$email','$number','$message')";
			$msg = "";
			if ($conn->query($sql) === TRUE) {
				//echo "<h1>User Regindtration Successful.</h1>";
				$msg = "your Message send  Successful.";
				
			} else {
				//echo "Error: " . $sql . "<br>" . $conn->error;
				//echo "<mark>User Regindtration Failed. Please Try again!</mark>";
				$msg = "your Message send Failed. Please Try again!";
			}
			echo $msg;
			//echo '<script type="text/javascript">alert("' . $msg . '")</script>';

		} 
	
	}
	
	
	
	
	
}




?>