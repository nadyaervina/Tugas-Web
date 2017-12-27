<?php 
include 'koneksi.php';
	if (isset($_POST['submit'])) 
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = mysqli_query($conn,"SELECT * FROM admin WHERE username='$username' AND password='$password'");
		if (mysqli_num_rows($query) > 0) {
			session_start();
			$_SESSION['login'] = '1';

			header("location:home.php");
		}else{
		header("location:login-home.php");
		}

	}
	
 ?>