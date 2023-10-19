    <div class="container-fluid">
        <!-- Table Pengajuan view -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="text-black">Jumlah Pengajuan</h2>
                <div class="card card-chart">
                    <div class="card-header">
                        <canvas id="Tabel_pengajuan"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->

        <!-- SUMMARY PENGAJUAN -->
        <div class="row">
            <div class="col-md-4 col-sm-4 col-md-offset-2 col-sm-offset-2">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="orange">
                        <i class="material-icons">mark_email_read</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Jumlah Pengajuan</p>
                        <h3 class="card-title"><?= $this->db->get_where('pengajuan_surat')->num_rows(); ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 ">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="green">
                        <i class="material-icons">mark_email_unread</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Sudah diproses</p>
                        <h3 class="card-title"><?= $this->db->get_where('pengajuan_surat', ["status" => "3"])->num_rows(); ?></h3>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-md-offset-2 col-sm-offset-2">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="yellow">
                        <i class="material-icons">mail</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Belum diproses</p>
                        <h3 class="card-title"><?= $this->db->get_where('pengajuan_surat', ["status" => "1"])->num_rows(); ?></h3>
                    </div>

                </div>
            </div>
            <div class="col-md-4 col-sm-4 ">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="red">
                        <i class="material-icons">unsubscribe</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Ditolak</p>
                        <h3 class="card-title"><?= $this->db->get_where('pengajuan_surat', ["status" => "0"])->num_rows(); ?></h3>
                    </div>

                </div>
            </div>
        </div>
        <!--  -->
    </div>