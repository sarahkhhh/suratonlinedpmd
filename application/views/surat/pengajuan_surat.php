<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<?php if ($this->session->flashdata('success') == TRUE) : ?>
					<div class="alert alert-success">
						<span><?= $this->session->flashdata('success'); ?></span>
					</div>
				<?php endif; ?>
				<div class="card">
					<div class="card-header card-header-icon" data-background-color="orange">
						<i class="material-icons">mail</i>
					</div>
					<div class="card-content">
						<h4 class="card-title">Pengajuan Surat</h4>

						<div class="material-datatables">
							<table id="datatables" class="table table-striped table-no-bordered table-hover " width="100%" style="width:100%">
								<thead>
									<tr>
										<th>No</th>
										<th>NIK</th>
										<th>Nama</th>
										<th>Pekerjaan</th>
										<th>Jenis Kelamin</th>
										<th>Status Pengajuan</th>
										<!-- <th class="disabled-sorting text-right">Actions</th> -->
										<th>No Telepon</th>
										<th>Tanggal pengajuan</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>

									<?php $no = 1; ?>
									<?php foreach ($data as $key) : ?>
										<tr>
											<td><?= $no; ?></td>
											<td><?= $key['nik']; ?></td>
											<td><?= $key['name']; ?></td>
											<td><?= $key['job']; ?></td>
											<td><?= $key['gender']; ?></td>
											<?php if ($key['status'] == "0") : ?>
												<td class="btn btn-danger"><?= $status[$key['status']]; ?></td>
											<?php elseif ($key['status'] == "1") : ?>
												<td class="btn btn-primary"><?= $status[$key['status']]; ?></td>
											<?php elseif ($key['status'] == "2") : ?>
												<td class="btn btn-warning"><?= $status[$key['status']]; ?></td>
											<?php elseif ($key['status'] == "3") : ?>
												<td class="btn btn-success"><?= $status[$key['status']]; ?></td>
											<?php endif; ?>

											<td><?= $key['telp']; ?></td>
											<td><?= $key['dtm_submission']; ?></td>
											<td style="font-weight: bold; color: black;"><a href="<?= base_url(); ?>surat/detail/<?= $key['id']; ?>">Lihat detail</a></td>
										</tr>
										<?php $no++; ?>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>

					</div>
					<!-- end content-->
				</div>
				<!--  end card  -->
			</div>
			<!-- end col-md-12 -->
		</div>
		<!-- end row -->
	</div>
</div>