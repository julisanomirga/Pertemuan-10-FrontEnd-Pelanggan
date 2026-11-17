
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class kota2422500044_controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        is_admin_logged_in();
        $this->load->model('produk_kota2422500044_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['list_kota2422500044'] = $this->produk_kota2422500044_model->get_all();
        $this->load->view('administrator/templates/header');
        $this->load->view('administrator/templates/sidebar');
        $this->load->view('administrator/kota2422500044/index', $data);
        $this->load->view('administrator/templates/footer');
    }

    public function tambah_kota2422500044()
    {
        $data['title'] = 'tambah_kota2422500044';

        $this->form_validation->set_rules(
            'nama_kota044',
            'Nama kota',
            'required'
        );

        $this->form_validation->set_rules(
            'jenis_kota044',
            'jenis kota',
            'required'
        );

        $this->form_validation->set_rules(
            'provinsi044',
            'provinsi',
            'required|numeric'
        );

        $this->form_validation->set_rules(
            'status044',
            'status',
            'required|integer'
        );

        if ($this->form_validation->run() !== FALSE) {
            $this->_simpan_kota2422500044();
        } else {
            $this->load->view('administrator/templates/header', $data);
            $this->load->view('administrator/templates/sidebar');
            $this->load->view('administrator/kota2422500044/tambah_kota2422500044');
            $this->load->view('administrator/templates/footer');
        }
    }

    private function _simpan_kota2422500044()
    {
        $data = [
            'nama_kota044' => ucwords($this->input->post('nama_kota044')),
            'jenis_kota044' => ucwords($this->input->post('jenis_kota044')),
            'provinsi044' => $this->input->post('provinsi044'),
            'status044' => $this->input->post('status044')
        ];

        $simpan = $this->produk_kota2422500044_model->tambah($data);

        if ($simpan) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-success d-flex align-items-center alert-dismissible fade show"
                role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                    aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <div>
                    Berhasil menambahkan kota2422500044!!
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
                    Gagal menambahkan kota2422500044!!
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert"
                    aria-label="Close"></button>
            </div>
            ');
        }

        redirect('admin/kota2422500044');
    }

    public function ubah_kota2422500044($id)
    {
        // check dulu apakah id dengan kota2422500044 ada?
        $kota2422500044 = $this->produk_kota2422500044_model->get_by_id($id);

        if ($kota2422500044) {
            $this->form_validation->set_rules(
                'nama_kota044',
                'Nama kota2422500044',
                'required'
            );

            $this->form_validation->set_rules(
                'jenis_kota044',
                'jenis kota',
                'required'
            );

            $this->form_validation->set_rules(
                'provinsi044',
                'provinsi',
                'required|numeric'
            );

            $this->form_validation->set_rules(
                'status044',
                'status',
                'required|integer'
            );

            if ($this->form_validation->run() !== FALSE) {
                $this->_ubah_kota2422500044($id);
            } else {
                $data['title'] = 'Ubah kota2422500044';
                $data['kota2422500044'] = $kota2422500044;

                $this->load->view('administrator/templates/header', $data);
                $this->load->view('administrator/templates/sidebar');
                $this->load->view('administrator/kota2422500044/ubah_kota2422500044', $data);
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
                    kota2422500044 tidak ditemukan!!
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('admin/kota2422500044');
        }
    }

    private function _ubah_kota2422500044($id)
    {
        $data = [
            'nama_kota044' => ucwords($this->input->post('nama_kota044')),
            'jenis_kota044' => ucwords($this->input->post('jenis_kota044')),
            'provinsi044' => $this->input->post('provinsi044'),
            'status044' => $this->input->post('status044')
        ];

        $ubah = $this->produk_kota2422500044_model->ubah($data, $id);

        if ($ubah) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-success d-flex align-items-center alert-dismissible fade show"
                role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                    aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <div>
                    Berhasil mengubah kota2422500044!!
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
                    Gagal mengubah kota2422500044!!
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert"
                    aria-label="Close"></button>
            </div>
            ');
        }

        redirect('admin/kota2422500044');
    }

    public function hapus_kota2422500044($id)
    {
        // check apakah ada kota2422500044
        $kota2422500044 = $this->produk_kota2422500044_model->get_by_id($id);

        if ($kota2422500044) {
            $hapus = $this->produk_kota2422500044_model->hapus($id);

            if ($hapus) {
                $this->session->set_flashdata('message', '
                <div class="alert alert-success d-flex align-items-center alert-dismissible fade show"
                    role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                        aria-label="Success:">
                        <use xlink:href="#check-circle-fill" />
                    </svg>
                    <div>
                        Berhasil menghapus kota2422500044!!
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
                        Gagal menghapus kota2422500044!!
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
                    kota2422500044 tidak ditemukan!!
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert"
                    aria-label="Close"></button>
            </div>
            ');
        }

        redirect('admin/kota2422500044');
    }
}
