<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Suratonline extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('galery_model', 'galery');
        $this->load->model('pengajuan_track_model', 'pengajuan_track');
        $this->load->model('M_Penduduk', 'penduduk');

        $this->load->helper(array('form', 'url', 'Cookie', 'String'));
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $data = $this->dashboard->user();
        $data['profil'] = $this->galery->profil();
        $judul = [
            'title' => 'Pengajuan Surat Online',
            'sub_title' => ''
        ];
        $data["notUseFooter"] = true;

        $this->load->view('frontend/header', $judul);
        $this->load->view('frontend/s_online', $data);
        $this->load->view('frontend/footer', $data);
    }

    public function ajukan()
    {

        $nik = $this->input->post('nik', TRUE);
        $idUser = $this->session->userdata("id_user");
        if ($this->pengajuan_track->userIsFilled($idUser) == true) {
            $this->session->set_flashdata(
                'success',
                '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    &times;
                </button>
                <h5><i class="fa fa-solid fa-exclamation"></i> Informasi</h5>
                <Jika>Nik anda sudah melakukan pengajuan, sedang di proses
                <br>
                Jika ingin mengajukan kembali harap hapus pengajuan sebelumnya</p>
            </div>'
            );
            redirect(base_url("suratonline"));
        } else {
            // redirect(base_url("suratonline"));
            // Konfigurasi untuk upload file
            $config['overwrite'] = true; // overwrite file yg sudah ada
            // $config['upload_path']   = './uploads/berkas'; // Direktori penyimpanan file
            $config['allowed_types'] = '*'; // Jenis file yang diizinkan
            // $config['max_size']      = 3096; // Maksimum ukuran file dalam KB

            $this->load->library("upload", $config);

            $namaKtp =    $_FILES['ktp']['name'];
            $namaSuratPribadi =  $_FILES['pribadi']['name'];
            $namaSuketDesa =  $_FILES['desa']['name'];
            $namaSuketKec =  $_FILES['camat']['name'];
            $namaIjazah =  $_FILES['ijazah']['name'];
            $namaPasFoto =  $_FILES['foto']['name'];

            $now = new DateTime('now');

            $nama = $this->input->post('nama', TRUE);
            $t_lahir = $this->input->post('tempat_lahir', TRUE);
            $tgl_lahir = $this->input->post('tanggal_lahir', TRUE);
            $job = $this->input->post('pekerjaan', TRUE);
            $gender = $this->input->post('gender', TRUE);
            $nikah = $this->input->post('status', TRUE);
            $pend = $this->input->post('pendidikan', TRUE);
            $agama = $this->input->post('agama', TRUE);
            $telp = $this->input->post('no_hp', TRUE);
            $alamat = $this->input->post('alamat', TRUE);
            $desa = $this->input->post('desa', TRUE);
            $kec = $this->input->post('kecamatan', TRUE);
            $dtm = $now->format('Y-m-d H:i:s');
            $ktp = $this->input->post('ktp', TRUE);

            $save = [
                'id_user' => $idUser,
                'nik' => $nik,
                'name' => $nama,
                'birthplace' => $t_lahir,
                'birthday' => $tgl_lahir,
                'job' => $job,
                'gender' => $gender,
                'status_married' => $nikah,
                'last_education' => $pend,
                'religion' => $agama,
                'telp' => $telp,
                'address' => $alamat,
                'desa' => $desa,
                'kecamatan' => $kec,
                'dtm_Submission' => $dtm,
                "status" => 1
            ];

            $this->db->insert('pengajuan_surat', $save);

            if (
                $this->upload->do_upload('ktp') &&
                $this->upload->do_upload('pribadi') &&
                $this->upload->do_upload('desa') &&
                $this->upload->do_upload('camat') &&
                $this->upload->do_upload('ijazah') &&
                $this->upload->do_upload('foto')
            ) {


                // File-file berhasil diunggah
                $this->upload->data("ktp");
                $this->upload->data("pribadi");
                $this->upload->data("desa");
                $this->upload->data("camat");
                $this->upload->data("ijazah");
                $this->upload->data("foto");

                $data = [
                    'nik' => $nik,
                    'id_user' => $this->session->userdata("id_user"),
                    'ktp' => $namaKtp,
                    'pernyataan_pribadi' => $namaSuratPribadi,
                    'suket_desa' => $namaSuketDesa,
                    'suket_kec' => $namaSuketKec,
                    'ijazah' => $namaIjazah,
                    'pas_foto' => $namaPasFoto,
                ];

                ///tambahkan ke database
                $this->db->insert('upload_file', $data);

                // $this->session->set_userdata("is_filled", true);
                $this->session->set_flashdata(
                    'success',
                    '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        &times;
                    </button>
                    <h5><i class="fa fa-check"></i> Berhasil</h5>
                    <p>Pengajuan anda sedang di proses</p>
                </div>'
                );
                redirect(base_url("suratonline"));
            }
            // Ada yang salah dengan pengunggahan file
            $this->session->set_flashdata(
                'success',
                '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    &times;
                </button>
                <h5><i class="fas fa-exclamation-triangle"></i> Gagal mengajukan</h5>
                <p>Harap coba kembali lagi</p>
            </div>'
            );
            redirect('suratonline');
        }
    }

    function IsPengajuanExist($nik)
    {
        $this->db->where('nik', $nik);
        $query = $this->db->get('pengajuan_surat');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function remove($user_id)
    {
        $this->session->userdata("is_filled", false);
        $this->pengajuan_track->delete_row($user_id);
        redirect(base_url("tracking/" . $user_id));
    }
}
