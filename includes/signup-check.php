<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['email']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$email = validate($_POST['email']);

	$user_data = 'uname='. $uname. '&email='. $email;


	if (empty($uname)) {
		header("Location: ../signup.php?error=Username is required&$user_data");
	    exit();
	}
    
    else if(empty($email)){
        header("Location: ../signup.php?error=E-mail is required&$user_data");
	    exit();
	}
    
    else if(empty($pass)){
        header("Location: ../signup.php?error=Password is required&");
	    exit();
	}
    
    
	else if(empty($re_pass)){
        header("Location: ../signup.php?error=Repeat Password is required&$user_data");
	    exit();
	}
    
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $uname)){
        header("Location: ../signup.php?error=Invalid email&uname");
	    exit();
	}
    
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?error=Invalid email&uname=".$uname);
	    exit();
	} 

	else if($pass !== $re_pass){
        header("Location: ../signup.php?error=The confirmation password does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
//        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE username='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: ../signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(username, password, email) VALUES('$uname', '$pass', '$email')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: ../signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: ../signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: ../signup.php");
	exit();
}