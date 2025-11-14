<?php
session_start();
if (!isset($_SESSION['sedang_login'])) {
   header("Location: index.php");
   exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Tabel User</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <style> 
   * {
      box-sizing: border-box;
    }
header {
  text-align: center;
  margin-bottom: 15px;
}

header h1 {
  color: #003366;
  margin: 0;
  font-size: 13rem;
}
.address {
      font-size: 1rem;
      color: #004080;
      margin-top: 4px;
    }
    marquee {
      margin: 15px 0 30px;
      color: #0059b3;
      font-weight: 600;
      font-size: 1.1rem;
      border-bottom: 2px solid #0059b3;
      padding-bottom: 5px;
    }


table {
      width: 90%;
      max-width: 900px;
      border-collapse: separate;
      border-spacing: 0;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
      background-color: white;
      margin-bottom: 40px;
    }
    th, td {
      padding: 15px 12px;
      text-align: center;
      border-bottom: 1px solid #ddd;
      font-weight: 600;
      font-size: 1rem;
      color: #003366;
    }
    th {
      background-color: #0059b3;
      color: white;
      font-weight: 700;
      font-size: 1.1rem;
    }
    tr:last-child td {
      border-bottom: none;
    }
    tr:hover {
      background-color: #f0f8ff;
    }
    img {
      border-radius: 8px;
      max-width: 100px;
      height: auto;
      object-fit: contain;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    a {
      color: #0059b3;
      text-decoration: none;
      font-weight: 700;
      padding: 6px 14px;
      border: 2px solid #0059b3;
      border-radius: 6px;
      transition: all 0.3s ease;
    }
    a:hover {
      background-color: #0059b3;
      color: white;
    }

    .section-title {
      font-size: 1.6rem;
      color: #003366;
      margin-bottom: 15px;
      font-weight: 700;
      text-align: center;
      text-transform: uppercase;
      letter-spacing: 2px;
    }
    @media (max-width: 640px) {
      input[type="text"] {
        font-size: 1rem;
        padding: 12px 16px;
      }
      button {
        font-size: 1rem;
        padding: 0 20px;
      }
      table {
        width: 100%;
      }
      th, td {
        font-size: 0.9rem;
        padding: 10px 6px;
      }
    }
  
</style>
</head>
<body>
  <!-- Judul olShop -->
  <center><h1 <big style="color: black">LiRasStore</h1></center></big>
  <center><font face="calibri" size="3" color="#000000">
  <h6><small><center>Alamat: Jl. Raya Saketi-Malingping KM. 07</font></center></small></h6>

   
 <marquee behavior="scroll" direction="left" scrollamount="5" style="width: 90%; max-width: 600px; margin-bottom: 40px; border-bottom: 2px solid #0059b3; padding-bottom: 5px; color: #0059b3; font-weight: 600;">
    Menyediakan Macam Macam Produk Untuk Game, seperti TopUp, Joki, Jual Beli akun Dll.
  </marquee>
 

    <!-- Konten -->
    <section class="section-title">USER</section>
    <center><table>
      <thead>
      <tr>
        <th width="46" height="36">No</th>
        <th width="36" height="36">User Name</th>
        <th width="70" height="36">Password</th>
        <th width="72" height="36">Role</th>
        <th width="79" height="40">Nama Lengkap</th>
        <th width="36" height="36" colspan="2">Opsi</th>
      </tr>
    </thead>
    <tbody>

        
      </tbody>
      <<?php
      $no=0;
      include "koneksi.php";
      $tampil=mysqli_query($koneksi,"SELECT * FROM tbl_user");
      while($data=mysqli_fetch_array($tampil)){
        ?>
      <tr>
        <td><?php echo $no=$no+1; ?></td>
          <td><?php echo $data['user']; ?></td>
          <td><?php echo $data['pass']; ?></td>
          <td><?php echo $data['role']; ?></td>
          <td><?php echo $data['nama_lengkap']; ?></td>
          <td><a href="#" btn btn-warning>UBAH</a></td>
          <td><a href="#">HAPUS</a></td>
      
      
      </tr>
      <?php } ?>
    </table>
</body>
</html>