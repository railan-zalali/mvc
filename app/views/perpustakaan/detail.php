<div class="container my-5">
	<div class="card" style="width: 18rem;">
		<div class="card-body">
			<h5 class="card-title"><?= $data['prps']['nama_siswa']; ?></h5>
			<h6 class="card-subtitle mb-2 text-muted"><?= $data['prps']['jumlah_pinjam']; ?></h6>
			<p class="card-text"><?= $data['prps']['nama_buku']; ?></p>
			<a href="#" class="card-link"><?= $data['prps']['keterangan']; ?></a>
			<a href="<?= BASEURL; ?>/perpustakaan" class="card-link">Kembali</a>
		</div>
	</div>
</div>