<section class="page-section">
	<div class="container-fluid">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Tracking Surat Online</h2>
		</div>
		<div class="text-justify p-5">
			<div class="row justify-content-center">
				<div class="col-12 col-md-10 col-lg-10">
					<div class="row">
						<div class="col-lg-9 offset-1">
							<div class="row justify-content-between">
								<h3>Keterangan:</h3>
								<?php if ($row) : ?>
									<a href="<?= base_url("suratonline/remove"); ?>/<?= $row['id_user']; ?>"><button class="btn btn-danger"> <i class="fa fa-trash"></i> Hapus</button></a>
								<?php endif ?>
							</div>
							<?php if ($row) : ?>
								<table class="table">
									<tr>
										<td>Nama</td>
										<td>:</td>
										<td><?= $row['name'] ?></td>
									</tr>
									<tr>
										<td>NIK</td>
										<td>:</td>
										<td><?= $row['nik'] ?></td>
									</tr>
									<tr>
										<td>No Hp</td>
										<td>:</td>
										<td><?= $row['telp'] ?></td>
									</tr>
									<tr>
										<td>Dokumen</td>
										<td>:</td>
										<td>
											<button class="btn btn-outline-info m-1 p-1" data-toggle="modal" data-target="#file_ktp"><i class="fa fa-file"></i> KTP</button>
											<button class="btn btn-outline-info m-1 p-1" data-toggle="modal" data-target="#file_pernyataan_pribadi"><i class="fa fa-file"></i> Surat Pernyataan</button>
											<button class="btn btn-outline-info m-1 p-1" data-toggle="modal" data-target="#file_suket_desa"><i class="fa fa-file"></i> Suket Desa</button>
											<button class="btn btn-outline-info m-1 p-1" data-toggle="modal" data-target="#file_ijazah"><i class="fa fa-file"></i> Ijazah</button>
											<button class="btn btn-outline-info m-1 p-1" data-toggle="modal" data-target="#file_pas_foto"><i class="fa fa-file"></i> Pas Foto</button>
										</td>

									</tr>
								</table>
							<?php else : ?>
								<h1>Belum mengajukan Surat</h1>

							<?php endif ?>
						</div>
					</div>
					<?php if ($row) : ?>
						<div>
							<div class="checkout-wrap" style="display: flex; justify-content: center;">
								<ul class="checkout-bar" style="display: flex; justify-content: space-between; width: 70%; padding: 0 50px;">
									<?php if ($row['status'] == 0) : ?>
										<li class="active first">Belum mengajukan</li>
									<?php elseif ($row['status'] == 2) : ?>
										<li class="">Pengajuan Surat<br>Pending</li>
										<li class="">Dokumen<br>Diterima</li>
										<li class="">Verifikasi Berkas<br>Dilanjutkan</li>

									<?php elseif ($row['status'] == 3) : ?>

										<li class="active first">Pengajuan Surat<br>Pending</li>
										<li class="active">Dokumen<br>Diterima</li>
										<li class="">Verifikasi Berkas<br>Dilanjutkan</li>


									<?php elseif ($row['status'] == 1) : ?>
										<li class="active first">Pengajuan Surat<br>Pending</li>
										<li class="active">Dokumen<br>Diterima</li>
										<li class="active">Verifikasi Berkas / Persyaratan<br>Dilanjutkan</li>

									<?php endif; ?>
								</ul>
							</div>
						</div>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Modal KTP -->
<?php if ($file && $file['ktp']) : ?>
	<div class="modal fade" id="file_ktp" tabindex="-1" role="dialog" aria-labelledby="fileLampiran" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="fileLampiran"><?= base_url('uploads/berkas/') ?> <?= $file['ktp']; ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<embed type="application/pdf" width="100%" height="450px;" src="<?= base_url('uploads/berkas/') ?><?= $file['ktp']; ?>"></embed>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
<?php endif ?>

<!-- MODAL SURAT PERNYATAAN -->
<?php if ($file && $file['pernyataan_pribadi']) : ?>
	<div class="modal fade" id="file_pernyataan_pribadi" tabindex="-1" role="dialog" aria-labelledby="fileLampiran" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="fileLampiran"><?= base_url('uploads/berkas/') ?><?= $file['pernyataan_pribadi']; ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<embed type="application/pdf" width="100%" height="450px;" src="http://localhost/suratdpmd/uploads/berkas/652b757a43dd8Formulir Instansi.pdf"></embed>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
<?php endif ?>

<!-- MODAL SURAT SUKET DESA -->
<?php if ($file && $file['suket_desa']) : ?>
	<div class="modal fade" id="file_pernyataan_pribadi" tabindex="-1" role="dialog" aria-labelledby="fileLampiran" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="fileLampiran"><?= base_url('uploads/berkas/') ?>.<?= $file['suket_desa']; ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<embed type="application/pdf" width="100%" height="450px;" src="<?= base_url('uploads/berkas/') ?>.<?= $file['suket_desa']; ?>"></embed>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
<?php endif ?>

<!-- MODAL SURAT Ijazah -->
<?php if ($file && $file['ijazah']) : ?>
	<div class="modal fade" id="file_ijazah" tabindex="-1" role="dialog" aria-labelledby="fileLampiran" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="fileLampiran"><?= base_url('uploads/berkas/') ?><?= $file['ijazah']; ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<embed type="application/pdf" width="100%" height="450px;" src="<?= base_url('uploads/berkas/') ?>652b757a45da4nsi.pdf"></embed>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
<?php endif ?>


<!-- MODAL SURAT Pas Photo -->
<?php if ($file && $file['pas_foto']) : ?>
	<div class="modal fade" id="file_pas_foto" tabindex="-1" role="dialog" aria-labelledby="fileLampiran" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="fileLampiran"><?= base_url('uploads/berkas/') ?> <?= $file['pas_foto']; ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<embed type="application/pdf" width="100%" height="450px;" src="<?= base_url('uploads/berkas/') ?><?= $file['pas_foto']; ?>"></embed>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
<?php endif ?>