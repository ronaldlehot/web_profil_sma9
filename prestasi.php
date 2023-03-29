
<?php 

require_once 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM tbl_prestasi");
$aktif = 'prestasi';
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
    <!-- NAVIGATION -->
    <?php include 'header.php'; ?>

    <!-- HOME -->
    <section id="tentang-home">
      <h2>Prestasi SMAN 9 Kupang</h2>
    </section>

   
    <!-- FILTER BERITA -->
    <div class="post-filter container">
      <span class="filter-item active-filter" data-filter="semua">Semua</span>
      <!-- <span class="filter-item" data-filter="sekolah">Sekolah</span>
      <span class="filter-item" data-filter="iptek">IPTEK</span>
      <span class="filter-item" data-filter="pendidikan">Pendidikan</span> -->
    </div>

    <!-- Postingan -->
    <section  class="post container" style="justify-content: baseline;">
    <?php while($artikel = mysqli_fetch_assoc($query)) : ?>
      <!-- Post Box 1 :  Pendidikan-->
      <div class="post-box pendidikan">
        <img src="images/prestasi/<?= $artikel['foto'] ?>" alt="" class="post-img" />
     
        <a class="post-title" ><?= $artikel['judul'] ?> </a>
        <span class="post-date"><?= date('d M y', strtotime($artikel['tanggal'])) ?></span>
        
        <!-- Profil -->
      </div>
      <?php endwhile; ?>

    </section>
      

    <?php include 'footer.php' ?>

     

    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

  </body>
</html>
