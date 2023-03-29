<?php 

$query_artikel_terbaru = mysqli_query($koneksi, "SELECT * FROM tbl_informasi ORDER BY tanggal ASC LIMIT 4");
$query_kategori_artikel= mysqli_query($koneksi, "SELECT * FROM tbl_ketegori_informasi LIMIT 4");

?>
<div class="col-sm-4">
	<div class="list-group">
		<span class="list-group-item text-white" style="background-color: #ED8240">Informasi Terbaru</span>
		<?php while($artikel_terbaru = mysqli_fetch_assoc($query_artikel_terbaru)) : ?>
			<a href="detail_informasi.php?id=<?= $artikel_terbaru['id'] ?>" class="list-group-item list-group-item-action"><?= $artikel_terbaru['judul'] ?></a>
		<?php endwhile; ?>
	</div>

	<div class="list-group">
		<span class="list-group-item text-white mt-3" style="background-color: #ED8240">Kategori Informasi</span>
		<?php while($kategori_artikel = mysqli_fetch_assoc($query_kategori_artikel)) : ?>
			<a href="kategori_informasi.php?id=<?= $kategori_artikel['id'] ?>" class="list-group-item list-group-item-action"><?= $kategori_artikel['nama_kategori'] ?></a>
		<?php endwhile; ?>
	</div>
</div>