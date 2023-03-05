<?= Flasher::flash(); ?>
<div class="container">
	<div class="row justify-content-center my-5 py-4">
		<div class="col">
			<div class="card">
				<div class="card-header">
					<div class="col position-relative">
						<h3 class="card-title">Data Peminjaman Buku</h3>
						<button type="button" class="btn btn-primary position-absolute top-0 end-0" data-bs-toggle="modal" data-bs-target="#formModal">
							Tambah Data Pinjam
						</button>
					</div>
				</div>
				<div class="card-body">
					<table class="table table-stripped table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Siswa</th>
								<th>Kelas</th>
								<th>Nama Buku</th>
								<th>Tanggal</th>
								<th>Jumlah Pinjam</th>
								<th>Keterangan</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($data['prps'] as $prps) : ?>
								<tr>
									<td><?= $no++; ?></td>
									<td><?= $prps['nama_siswa']; ?></td>
									<td><?= $prps['kelas']; ?></td>
									<td><?= $prps['nama_buku']; ?></td>
									<td><?= $prps['tanggal']; ?></td>
									<td><?= $prps['jumlah_pinjam']; ?></td>
									<td><?= $prps['keterangan']; ?></td>
									<td>
										<a href="<?= BASEURL; ?>/perpustakaan/hapus/<?= $prps['id_pinjam'] ?>" class="badge bg-danger text-decoration-none mx-1" onclick="return confirm('yakin?')">Hapus</a>
										<a href="<?= BASEURL; ?>/perpustakaan/ubah/<?= $prps['id_pinjam'] ?>" class="badge bg-warning text-decoration-none mx-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal">Ubah</a>
										<a href="<?= BASEURL; ?>/perpustakaan/detail/<?= $prps['id_pinjam'] ?>" class="badge bg-primary text-decoration-none mx-1">Detail</a>
									</td>

								</tr>

							<?php endforeach; ?>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- Modal -->
	<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="formModalLabel">Tambah Data</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="<?= BASEURL; ?>/perpustakaan/tambah" method="POST">
						<div class="form-group">
							<div class="row my-3">
								<div class="col">
									<label for="nama_siswa" class="form-label">Nama Siswa</label>
									<input type="text" class="form-control" name="nama_siswa" id="nama_siswa" required autofocus>
								</div>
							</div>
							<div class="row my-3">
								<div class="col">
									<label for="kelas" class="form-label">Kelas</label>
									<select class="form-select" aria-label="Default select example" name="kelas" id="kelas">
										<option selected> --= Pilih Kelas =--</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select>
								</div>
								<div class="col">
									<label for="kelas" class="form-label">-</label>
									<select class="form-select" aria-label="Default select example" name="abjad" id="abjad">
										<option selected> --= Pilih Kelas =--</option>
										<option value="A">A</option>
										<option value="B">B</option>
										<option value="C">C</option>
										<option value="D">D</option>
										<option value="E">E</option>
										<option value="F">F</option>
									</select>
								</div>

							</div>
							<div class="row my-3">
								<div class="col">
									<label for="nama_buku" class="form-label">Nama Buku</label>
									<input type="text" class="form-control" name="nama_buku" id="nama_buku" required>
								</div>
								<div class="col">
									<label for="jumlah_pinjam" class="form-label">Jumlah Pinjam</label>
									<input type="number" class="form-control" name="jumlah_pinjam" id="jumlah_pinjam" required>
								</div>
								<input type="hidden" class="form-control" name="keterangan" id="keterangan" value="dipinjam" required>
							</div>
							<div class="col">
								<label for="jumlah_kembali" class="form-label">Jumlah Kembali</label>
								<input type="text" class="form-control" name="jumlah_kembali" id="jumlah_kembali" required readonly>
							</div>
							<div class="col">
								<label for="tanggal" class="form-label">Tanggal</label>
								<input type="date" class="form-control" name="tanggal" id="tanggal" required readonly>
							</div>
						</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
				</form>
			</div>
		</div>
	</div>