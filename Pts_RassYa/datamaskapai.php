<?php
session_start();
if (!isset($_SESSION['sedang_login'])) {
   header("Location: login.php");
   exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rasya.Com</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>

  <nav>
    <div class="nav-container">
        <h1><span>Rasya.com</span></h1>
      </div>
      <ul class="nav-links">
        <li><a href="#info">Info Pesawat</a></li>
        <li><a href="#jadwal">Jadwal Penerbangan</a></li>
        <li><a href="#ticket">Ticket</a></li>
      </ul>
      <div class="nav-buttons">
        <a href="login.php" class="daftar">Daftar</a>
        <a href="login.php" class="masuk">Login</a>
      </div>
    </div>
  </nav>

  <section id="info">
    <h2> Info Pesawat</h2>
    <p>Temukan informasi seputar maskapai, kelas penerbangan, dan fasilitas terbaik untuk perjalanan Anda.</p>
    <div class="info-grid">
      <div class="info-card">
        <h3>Maskapai Populer</h3>
        <p>Garuda Indonesia, AirAsia, Batik Air, Citilink, Lion Air, dan lainnya.</p>
      </div>
      <div class="info-card">
        <h3>Kelas Penerbangan</h3>
        <p>Economy, Business, dan First Class sesuai kebutuhan dan kenyamanan Anda.</p>
      </div>
      <div class="info-card">
        <h3>Fasilitas Pesawat</h3>
        <p>Hiburan, makanan, Wi-Fi, dan layanan premium di setiap penerbangan.</p>
      </div>
    </div>
  </section>

  <section id="jadwal">
    <h2>Jadwal Penerbangan</h2>
    <p>Lihat jadwal penerbangan terbaru dari berbagai maskapai.</p>
    <table>
        <ul>
          <thead>
    	<tr>
    			<th>No</th>
    			<th>Nama Pesawat</th>
    			<th>Class</th>
    			<th>Kapasitas</th>
    			<th>Bandara</th>
    			<th>Tujuan</th>
        </ul>

     <?php 
      $no=0;
      include "koneksi.php";
      $tampil=mysqli_query($koneksi,"SELECT * FROM maskapai");
      while($data=mysqli_fetch_array($tampil)){
        ?>
    		</tr>
      </thead>
      <tr>
            <td><?php echo $data['id_pesawat']; ?></td>
            <td><?php echo $data['nama_pesawat']; ?></td>
            <td><?php echo $data['class']; ?></td>
            <td><?php echo $data['kapasitas']; ?></td>
            <td><?php echo $data['bandara']; ?></td>
            <td><?php echo $data['tujuan']; ?></td>
      </tr> 
<?php } ?>

    	</table>
  </section>


  <section id="ticket">
    <h2> Pesan Tiket Pesawat</h2>
    <p>Cari dan pesan tiket pesawat dengan mudah dan cepat.</p>
    <form>
      <input type="text" placeholder="Kota Asal">
      <input type="text" placeholder="Kota Tujuan">
      <input type="date">
      <button type="submit">Cari Tiket</button>
    </form>
  </section>


  <footer>
    <p>© 2025 Rasya.Com | Semua Hak Dilindungi</p>
  </footer>

</body>
</html>
