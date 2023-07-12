<?php 
session_start();
 require('connection.php');
if (isset($_POST['user']) and isset($_POST['password'])){
$username = $_POST['user'];
$password = $_POST['password'];
$query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){
$_SESSION['username'] = $username;
}else{

			$errmsg_arr[] = 'INVALID LOGIN CREDENTIALS';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: index.php?error");
				exit(); }
}
}

if (isset($_SESSION['username'])){
header('Location: dashboard.php');

}else{}
?>