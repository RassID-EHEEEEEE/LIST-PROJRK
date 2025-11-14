<?php
session_start();
//koneksi ke data base 
include "koneksi.php";
//periksa isi formulir
if(isset($_POST['username']) && isset($_POST['password'])){
	$password = $_POST['password'];
	$username = $_POST['username'];
	//query data user & pass di database
	
	$data = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
	$hasil = mysqli_query($koneksi, $data);

//periksa hasil query
 if(mysqli_num_rows($hasil) > 0){
 	//login berhasil
 	$data_user = mysqli_fetch_assoc($hasil);
 	$_SESSION['username'] = $data_user['nama_lengkap'];
 	$_SESSION['sedang_login'] = true;
 	//redirect ke halaman
 	header("Location: datamaskapai.php");
 	exit;
 } else {
 	//login gagal
 	?> 
 	    <script type="text/javascript">
 	       alert('maaf,Username/pasword tidak terdaftar');
 	       document.location.href ="login.php";
 	    </script>
 	 <?php      
  }
}
//tutup koneksi
mysqli_close($koneksi);
?>