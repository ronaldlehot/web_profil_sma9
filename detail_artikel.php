
<?php 

require_once 'koneksi.php';
if (!isset($_GET['id']) || $_GET['id'] == '') header('Location: index.php');
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_artikel WHERE id = $id");
$artikel = mysqli_fetch_assoc($query);
$aktif = 'artikel';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Artikel</title>
   
    
    <link rel="stylesheet" href="resources/fonts/stylesheet.css">
	<link rel="stylesheet" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="resources/css/style.css">
</head>
<body>


<?php include 'header.php'; ?>

 <!-- HOME -->
 <section id="tentang-home">
      <h2>Detail Artikel SMAN 9 Kupang</h2>
    </section>
<!-- content -->
<div class="row p-3">
			<div class="col-md-8">
				<div class="title mb-3">
					<?= $artikel['judul'] ?> (<?= date('d M y', strtotime($artikel['tanggal'])) ?>)
				</div>
				<div class="artikel">
					<img src="images/artikel/<?= $artikel['foto'] ?>" alt="" width="100%" class="float-left mb-3 img-thumbnail">
					<?= $artikel['isi'] ?>
				</div>
			</div>
			<?php require_once 'sidebar.php'; ?>
		</div>

        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

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