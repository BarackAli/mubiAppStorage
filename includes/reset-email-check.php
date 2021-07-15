<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['email'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);

	if (empty($email)) {
		header("Location: ../reset-password.php?error=E-mail is required");
	    exit();
	}else{
        // hashing the password
//        $pass = md5($pass);
        
		$sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: ../home.php");
		        exit();
            }else{
				header("Location: ../reset-password.php?error=Incorect Username or password");
		        exit();
			}
		}else{
			header("Location: ../reset-password.php?error=Incorect Username or password");
	        exit();
		}
	}
	
}else{
	header("Location: ../reset-password.php");
	exit();
}