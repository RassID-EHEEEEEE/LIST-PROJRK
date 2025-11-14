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
  <title>LiRas Store</title>
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
    <section class="section-title">JASA KAMI</section>
    <center><table>
      <thead>
      <tr>
        <th width="46" height="36">No</th>
        <th width="36" height="36">Foto Peroduk</th>
        <th width="70" height="36">Produk</th>
        <th width="72" height="36">Deskripsi</th>
        <th width="79" height="40">Stok</th>
        <th width="100" height="36">Satuan</th>
        <th width="100" height="36">Harga</th>
        <th width="36" height="36">Opsi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td><img src="Gambar/Diamond1.png" width="100px" height="100px"></td>
        <td>Diamond</td>
        <td>FF</td>
        <td>Banyak</td>
        <td>Paket</td>
        <td>Rp. 3k-10M,</td>
        <td><a href="index.php">Beli</a></td>
      </tr>
      <tr>
        <td>2</td>
        <td><img src="Gambar/akunff.jpg" width="100px" height="100px"></td>
        <td>Akun</td>
        <td>FF</td>
        <td>1</td>
        <td>Akun FF</td>
        <td>Rp. 500k,</td>
        <td><a href="index.php">Beli</a></td>
      </tr>
      <tr>
        <td>3</td>
        <td><img src="Gambar/jokiml.jpg" width="100px" height="100px"></td>
        <td>Joki</td>
        <td>ML</td>
        <td>TAK TERBATAS</td>
        <td>Joki Akun</td>
        <td>Rp. 2k-250K,</td>
        <td><a href="index.php">Beli</a></td>
      </tr>
      <tr>
        <td>4</td>
        <td><img src="Gambar/jokiff.jpg" width="100px" height="100px"></td>
        <td>Joki</td>
        <td>FF</td>
        <td>TAK TERBATAS</td>
        <td>Joki Akun</td>
        <td>Rp. 193-120k,</td>
        <td><a href="checkout.html">Beli</a></td>
     <tr>
        <td>5</td>
        <td><img src="Gambar/Robux1.png" width="100px" height="100px"></td>
        <td>Robux</td>
        <td>Roblox</td>
        <td>TAK TERBATASS</td>
        <td>Paket</td>
        <td>Rp. 193-1.609Jt,</td>
        <td><a href="checkout.html">Beli</a></td>
        </center>
      </tr>
      </tbody>
      <?php 
      $no=0;
      include "koneksi.php";
      $tampil=mysqli_query($tampil)

      ?>



      </tr>
    </table>
</body>
</html>