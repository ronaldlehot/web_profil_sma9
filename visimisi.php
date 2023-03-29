<?php 

require_once 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM tbl_visi_misi WHERE id = 1");
$visi_misi = mysqli_fetch_assoc($query);
$aktif = 'visi_misi'; 
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
      <h2>Visi Misi</h2>
    </section>

    <section id="visi-misi">
      <div class="vsi">
        <h2>Visi dan Misi</h2>
       
      </div>

      <div class="msi">
      
        <ol type="1">
          <li><?= $visi_misi['visi_misi'] ?></li>
        </ol>
      </div>
    </section>

    <?php include 'footer.php' ?>

  </body>
</html>
