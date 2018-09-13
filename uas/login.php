<?php
$title="login";
$error=null;
include_once 'koneksi.php';

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM login WHERE username='{$username}' AND password='{password}'";
	$result = mysqli_query($conn, $sql);
	if ($result && $result->num_rows > 0) {
		session_start();
		$_SESSION['islogin'] = 1;
		header('location: index.php');
	}else
		$error = "username atau password salah.";
}
include_once 'header.php'; ?>
<div class="content_b">
	<div class="main">
		<div id ="login">
			<h2>login form</h2>
			<form action="" method="post">
				<label>Username :</label>
				<input id="name" name="username" placeholder="username" type="text">
				<label>Password :</label>
				<input type="password" name="password" id="password" placeholder="************">
				<input type="submit" name="submit" value="login">
				<span><?php echo $error; ?></span>
			</form>
		</div>
	</div>
</div>
<?php include_once 'footer.php'; ?>