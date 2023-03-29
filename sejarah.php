<?php 

require_once 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM tbl_tentang_website WHERE id = 1");
$tentang_website = mysqli_fetch_assoc($query);
$aktif = 'tentang_website'; 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMA Negeri 9 Kupang</title>
    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.1/css/all.css" />
    <!-- Link Box Icon -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css" />
    <!-- Link JS -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <!-- Link JS -->
    <script src="main.js"></script>
    <!-- Link JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
  </head>
  <body>
    <!-- NAVIGATION -->
    <?php include 'header.php'; ?>

    <section class="sejarah-header">
      <div class="sejarah-container">
        <!-- Kembali Ke Halaman Blog -->
        <a href="index.html" class="sejarah-home">Kembali ke Beranda</a>
        <!-- Judul -->
        <h2 class="sejarah-title">Sejarah Singkat SMAN 9 Kupang</h2>
        <!-- Postingan gambar -->
        <img class="img-sejarah" src="images/gerbangsman9.jpg" alt="Gerbang sekolah" />
      </div>
    </section>

    <!-- POSTINGAN -->
    <section class="sejarah-content">
      <h2 class="sub-heading"></h2>
      <p class="sejarah-text">
      <?= $tentang_website['tentang_website'] ?>
      </p>
    
    </section>


    <?php include 'footer.php' ?>
   

    <script src="main.js"></script>
    <script>
      $(document).ready(function () {
        $('.num').counterup({
          Delay: 10,
          time: 1200,
        });
      });
    </script>
    
  </body>
</html>
