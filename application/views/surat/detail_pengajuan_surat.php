<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-8 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
                <h2 style="font-weight: bold;">Detail pengajuan surat</h2>
                <div style="text-align: end;">
                    <a href="#"><button class="btn btn-success"> <i class="fa fa-pencil"></i> Update</button></a>
                    <?php if ($data) : ?>
                        <a href="<?= base_url("suratonline/remove"); ?>/<?= $data['id']; ?>"><button class="btn btn-danger"> <i class="fa fa-trash"></i> Hapus</button></a>
                    <?php endif ?>
                </div>
                <?php if ($data) : ?>
                    <table class="table">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?= strtoupper($data['name']) ?></td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>:</td>
                            <td><?= $data['nik'] ?></td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td>:</td>
                            <td><?= $data['telp'] ?></td>
                        </tr>
                        <tr>
                            <td>Tempat, Tanggal lahir</td>
                            <td>:</td>
                            <td><?= $data['birthplace'] ?>, <?= $data['birthday']; ?></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>:</td>
                            <td><?= $data['job'] ?></td>
                        </tr>
                        <tr>
                            <td>Status perkawinan</td>
                            <td>:</td>
                            <td><?= $data['status_married'] ?></td>
                        </tr>
                        <tr>
                            <td>Pendidikan terakhir</td>
                            <td>:</td>
                            <td><?= $data['last_education'] ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td><?= $data['religion'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?= $data['address'] ?>, Desa <?= $data['desa']; ?>, Kec.<?= $data['kecamatan']; ?></td>
                        </tr>
                        <tr>
                            <td>Dokumen</td>
                            <td>:</td>
                            <td>
                                <button class="btn btn-primary m-1 p-1" data-toggle="modal" data-target="#file_ktp"><i class="fa fa-file"></i> KTP</button>
                                <button class="btn btn-primary m-1 p-1" data-toggle="modal" data-target="#file_pernyataan_pribadi"><i class="fa fa-file"></i> Surat Pernyataan</button>
                                <button class="btn btn-primary m-1 p-1" data-toggle="modal" data-target="#file_suket_desa"><i class="fa fa-file"></i> Suket Desa</button>
                                <button class="btn btn-primary m-1 p-1" data-toggle="modal" data-target="#file_ijazah"><i class="fa fa-file"></i> Ijazah</button>
                                <button class="btn btn-primary m-1 p-1" data-toggle="modal" data-target="#file_pas_foto"><i class="fa fa-file"></i> Pas Foto</button>
                            </td>

                        </tr>
                        <tr>
                            <td>Status Pengajuan</td>
                            <td>:</td>
                            <td>
                                <?php if ($data['status'] == "0") : ?>
                                    <h4 class="text-danger" style="font-weight: bold;">Ditolak</h4>
                                <?php elseif ($data['status'] == "1") : ?>
                                    <h4 class="text-primary" style="font-weight: bold;">Belum diproses</h4>
                                <?php elseif ($data['status'] == "2") : ?>
                                    <h4 class="text-warning" style="font-weight: bold;">Diproses</h4>
                                <?php elseif ($data['status'] == "3") : ?>
                                    <h4 class="text-success" style="font-weight: bold;">Diterima</h4>
                                <?php endif; ?>
                            </td>
                        </tr>
                    </table>
                <?php else : ?>
                    <h1>Belum mengajukan Surat</h1>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>