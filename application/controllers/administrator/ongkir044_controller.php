
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ongkir044_controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        is_admin_logged_in();
        $this->load->model('produk_ongkir044_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['list_ongkir044'] = $this->produk_ongkir044_model->get_all();
        $this->load->view('administrator/templates/header');
        $this->load->view('administrator/templates/sidebar');
        $this->load->view('administrator/ongkir044/index', $data);
        $this->load->view('administrator/templates/footer');
    }

    public function tambah_ongkir044()
    {
        $data['title'] = 'Tambah ongkir044';

        $this->form_validation->set_rules(
            'nama_ekspedisi044',
            'Nama ongkir044',
            'required'
        );

        $this->form_validation->set_rules(
            'kota_tujuan044',
            'Kota Tujuan',
            'required'
        );

        $this->form_validation->set_rules(
            'tarif_per_kg044',
            'Tarif Per Kg',
            'required|numeric'
        );

        $this->form_validation->set_rules(
            'estimasi_hari044',
            'Estimasi Hari',
            'required|integer'
        );

        if ($this->form_validation->run() !== FALSE) {
            $this->_simpan_ongkir044();
        } else {
            $this->load->view('administrator/templates/header', $data);
            $this->load->view('administrator/templates/sidebar');
            $this->load->view('administrator/ongkir044/tambah_ongkir044');
            $this->load->view('administrator/templates/footer');
        }
    }

    private function _simpan_ongkir044()
    {
        $data = [
            'nama_ekspedisi044' => ucwords($this->input->post('nama_ekspedisi044')),
            'kota_tujuan044' => ucwords($this->input->post('kota_tujuan044')),
            'tarif_per_kg044' => $this->input->post('tarif_per_kg044'),
            'estimasi_hari044' => $this->input->post('estimasi_hari044')
        ];

        $simpan = $this->produk_ongkir044_model->tambah($data);

        if ($simpan) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-success d-flex align-items-center alert-dismissible fade show"
                role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                    aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <div>
                    Berhasil menambahkan ongkir044!!
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert"
                    aria-label="Close"></button>
            </div>
            ');
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show"
                role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                    aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                    Gagal menambahkan ongkir044!!
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert"
                    aria-label="Close"></button>
            </div>
            ');
        }

        redirect('admin/ongkir044');
    }

    public function ubah_ongkir044($id)
    {
        // check dulu apakah id dengan ongkir044 ada?
        $ongkir044 = $this->produk_ongkir044_model->get_by_id($id);

        if ($ongkir044) {
            $this->form_validation->set_rules(
                'nama_ekspedisi044',
                'Nama ongkir044',
                'required'
            );

            $this->form_validation->set_rules(
                'kota_tujuan044',
                'Kota Tujuan',
                'required'
            );

            $this->form_validation->set_rules(
                'tarif_per_kg044',
                'Tarif Per Kg',
                'required|numeric'
            );

            $this->form_validation->set_rules(
                'estimasi_hari044',
                'Estimasi Hari',
                'required|integer'
            );

            if ($this->form_validation->run() !== FALSE) {
                $this->_ubah_ongkir044($id);
            } else {
                $data['title'] = 'Ubah ongkir044';
                $data['ongkir044'] = $ongkir044;

                $this->load->view('administrator/templates/header', $data);
                $this->load->view('administrator/templates/sidebar');
                $this->load->view('administrator/ongkir044/ubah_ongkir044', $data);
                $this->load->view('administrator/templates/footer');
            }
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show"
                role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                    ongkir044 tidak ditemukan!!
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('admin/ongkir044');
        }
    }

    private function _ubah_ongkir044($id)
    {
        $data = [
            'nama_ekspedisi044' => ucwords($this->input->post('nama_ekspedisi044')),
            'kota_tujuan044' => ucwords($this->input->post('kota_tujuan044')),
            'tarif_per_kg044' => $this->input->post('tarif_per_kg044'),
            'estimasi_hari044' => $this->input->post('estimasi_hari044')
        ];

        $ubah = $this->produk_ongkir044_model->ubah($data, $id);

        if ($ubah) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-success d-flex align-items-center alert-dismissible fade show"
                role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                    aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <div>
                    Berhasil mengubah ongkir044!!
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert"
                    aria-label="Close"></button>
            </div>
            ');
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show"
                role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                    aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                    Gagal mengubah ongkir044!!
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert"
                    aria-label="Close"></button>
            </div>
            ');
        }

        redirect('admin/ongkir044');
    }

    public function hapus_ongkir044($id)
    {
        // check apakah ada ongkir044
        $ongkir044 = $this->produk_ongkir044_model->get_by_id($id);

        if ($ongkir044) {
            $hapus = $this->produk_ongkir044_model->hapus($id);

            if ($hapus) {
                $this->session->set_flashdata('message', '
                <div class="alert alert-success d-flex align-items-center alert-dismissible fade show"
                    role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                        aria-label="Success:">
                        <use xlink:href="#check-circle-fill" />
                    </svg>
                    <div>
                        Berhasil menghapus ongkir044!!
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
                ');
            } else {
                $this->session->set_flashdata('message', '
                <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show"
                    role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                        aria-label="Danger:">
                        <use xlink:href="#exclamation-triangle-fill" />
                    </svg>
                    <div>
                        Gagal menghapus ongkir044!!
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
                ');
            }

        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show"
                role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                    aria-label="Danger">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                    ongkir044 tidak ditemukan!!
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert"
                    aria-label="Close"></button>
            </div>
            ');
        }

        redirect('admin/ongkir044');
    }
}
