<?php
/*$username ="aku";
$password ="dia";

function valid($user, $pass){
	global $username,$password;
	return $user === $username && $pass === $password;
}*/

session_start();
//koneksi ke data base 
include "koneksi.php";
//periksa isi formulir
if(isset($_POST['user']) && isset($_POST['pass'])){
	 $user = $_POST['user'];
	 $pass = $_POST['pass'];
//query data user & pass di database

	$data = "SELECT * FROM tbl_user WHERE user = '$user' AND pass = '$pass'";
	$hasil = mysqli_query($koneksi, $data);

//periksa hasil query
 if(mysqli_num_rows($hasil) > 0){
 	//login berhasil
 	$data_user = mysqli_fetch_assoc($hasil);
 	$_SESSION['user'] = $data_user['nama_lengkap'];
 	$_SESSION['sedang_login'] = true;
 	//redirect ke halaman
 	header("Location: dashboard.php");
 	exit;
 } else {
 	//login gagal
 	?> 
 	    <script type="text/javascript">
 	       alert('maaf,Username/pasword tidak terdaftar');
 	       document.location.href ="index.php";
 	    </script>
 	 <?php      
  }
}
//tutup koneksi
mysqli_query($koneksi);
?>