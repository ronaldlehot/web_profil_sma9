<?php 

require_once 'koneksi.php';
if (!isset($_GET['id']) || $_GET['id'] == '') header('Location: index.php');
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_informasi WHERE id = $id");
$artikel = mysqli_fetch_assoc($query);
$aktif = 'informasi';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMA Negeri 9 Kupang</title>

    
  </head>
  <body>


    <!-- HEADING -->
    <div class="navv container">
      <!-- logo -->
      <a href="#" class="logo">blog<span>smansem</span></a>
    
    </div>

    <section class="post-header">
      <div class="header-content post-container">
        <!-- Kembali Ke Halaman Blog -->
        <a href="blog.php" class="back-home">Kembali ke Beranda</a>
        <!-- Judul -->
        <h1 class="header-title"><?= $artikel['judul'] ?> (<?= date('d M y', strtotime($artikel['tanggal'])) ?>)</h1>
        <!-- Postingan gambar -->
        <img  src="images/informasi/<?= $artikel['foto'] ?>" alt="guru kreatif" class="header-img" />
      </div>
    </section>

    <!-- POSTINGAN -->
    <section class="post-content post-container">
      <h2 class="sub-heading"><?= $artikel['isi'] ?></h2>
      <p class="post-text">
      </p>
      
    </section>






    <!-- FOOTER -->
    <footer>
      <div class="kolom-footer">
        <h3>Top Product</h3>
        <li>Manage Reputation</li>
        <li>Power Tools</li>
        <li>Managed Website</li>
        <li>Marketing Service</li>
      </div>

      <div class="kolom-footer">
        <h3>Top Product</h3>
        <li>Manage Reputation</li>
        <li>Power Tools</li>
        <li>Managed Website</li>
        <li>Marketing Service</li>
      </div>

      <div class="kolom-footer">
        <h3>Top Product</h3>
        <li>Manage Reputation</li>
        <li>Power Tools</li>
        <li>Managed Website</li>
        <li>Marketing Service</li>
      </div>

      <div class="kolom-footer">
        <h3>Top Product</h3>
        <li>Manage Reputation</li>
        <li>Power Tools</li>
        <li>Managed Website</li>
        <li>Marketing Service</li>
      </div>

      <div class="kolom-footer">
        <h3>News Letter</h3>
        <p>You can trust us. We Only send promo offers</p>
        <div class="subscribe">
          <input type="text" placeholder="Your Email Address" />
          <a href="#" class="yellow">SUBSCRIBE</a>
        </div>
      </div>

      <div class="hak-cipta">
        <p>Copyright ©SMA Negeri 9 Kupang 2022</p>

        <div class="pro-links">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-linkedin-in"></i>
        </div>
      </div>
    </footer>

    <script>
      $('#menu-btn').click(function () {
        $('nav .navigation ul').addClass('active');
      });
      $('#menu-close').click(function () {
        $('nav .navigation ul').removeClass('active');
      });
    </script>
  </body>
</html>
