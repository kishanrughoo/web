<?php 
session_start(); 
include "../../database.php";

if (isset($_POST['fullname']) && isset($_POST['password'])
    && isset($_POST['email'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$fullname = validate($_POST['fullname']);
	$pass = validate($_POST['password']);
	$email = validate($_POST['email']);

	$user_data = 'fullname='. $fullname. '&email='. $email;


	if (empty($fullname)) {
		header("Location: ../../frontend/homepage/homepage.php?error=Full Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: ../../frontend/homepage/homepage.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($email)){
        header("Location: ../../frontend/homepage/homepage.php?error=Email is required&$user_data");
	    exit();
	}

	else{

		// hashing the password
        

	    $sql = "SELECT * FROM user WHERE user_name='$fullname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: ../../frontend/homepage/homepage.php?error=The fullname is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO user(user_name, password, email) VALUES('$fullname', '$pass', '$email')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
				$sql3 = "SELECT * FROM user WHERE email='$email' AND password='$pass'";
				$result3 = mysqli_query($conn, $sql3);
				$row = mysqli_fetch_assoc($result3);
				$_SESSION['email'] = $row['email'];
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['user_id'] = $row['user_id'];
           	 	header("Location: ../../frontend/homepage/homepage.php?success=Your account has been created successfully");
	         	exit();
           }else {
	           	header("Location: ../../frontend/homepage/homepage.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: ../../frontend/homepage/homepage.php");
	exit();
}