<?php
include_once 'header.php'; ?>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<br/>
<div class="content_b">
	<div class="main">
		<div id ="login">
			<h2>login form</h2>
			<form action="cek_login.php" method="post">
				<label>Username :</label>
				<input id="name" name="username" placeholder="username" type="text">
				<label>Password :</label>
				<input type="password" name="password" id="password" placeholder="************">
				<input type="submit" name="submit" value="login">
			</form>
		</div>
	</div>
</div>
<?php include_once 'footer.php'; ?>