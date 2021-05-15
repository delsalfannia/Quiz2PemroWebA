<?php
	session_start();
 
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
		header('index.php');
		exit();
	}
	include('conn.php');
	$query=mysqli_query($conn,"select * from user where userid='".$_SESSION['id']."'");
	$row=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Halaman</title>
</head>
<body>
	<h2>Login Sukses</h2>
	<?php echo $row['username']; ?>
	<br>
	<a  href="logout.php">Logout</a>
</body>
</html>