<?php 

require_once 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM tbl_galeri");
$aktif = 'gallery';
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

    <section id="tentang-home">
      <h2>Galeri</h2>
    </section>

    

    <section id="galeri" class="galeri">
    <?php while($artikel = mysqli_fetch_assoc($query)) : ?>
      <div class="box-container">
        <div class="box">
            <img src="images/gallery/<?= $artikel['foto'] ?>" alt=""  class="post-img" />
          </a>
        </div>

        <?php endwhile; ?>
    
    </section>

    <?php include 'footer.php' ?>
  </body>
</html>
