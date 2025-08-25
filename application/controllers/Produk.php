<?php
// application/controllers/Produk.php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->cek_admin();
        $this->load->model('Produk_model');
    }

    public function index()
    {
        // Redirect to admin if accessing directly
        redirect('admin/produk');
    }

    public function admin()
    {
        $data['judul'] = 'Kelola Produk - Admin';
        $data['produk'] = $this->Produk_model->ambil_semua_produk();

        $this->load->view('admin/produk/index', $data);
    }

    public function tambah()
    {
        if ($this->input->post()) {
            $this->form_validation->set_rules('nama_produk', 'Nama Paket', 'required');
            $this->form_validation->set_rules('kategori', 'Kategori', 'required');
            $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
            $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

            if ($this->form_validation->run() == TRUE) {
                // Konfigurasi upload
                $config['upload_path'] = './uploads/products/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = 2048;
                $config['encrypt_name'] = TRUE;

                $this->upload->initialize($config);

                $nama_gambar = '';
                if ($this->upload->do_upload('gambar')) {
                    $upload_data = $this->upload->data();
                    $nama_gambar = $upload_data['file_name'];
                }

                $data = array(
                    'nama_produk' => $this->input->post('nama_produk'),
                    'kategori' => $this->input->post('kategori'),
                    'harga' => $this->input->post('harga'),
                    'kualitas' => $this->input->post('kualitas'),
                    'garansi' => $this->input->post('garansi'),
                    'instalasi' => $this->input->post('instalasi'),
                    'support' => $this->input->post('support'),
                    'maintenance' => $this->input->post('maintenance'),
                    'is_promo' => $this->input->post('is_promo') ? 1 : 0,
                    'harga_promo' => $this->input->post('harga_promo') ?: NULL,
                    'promo_label' => $this->input->post('promo_label'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'gambar' => $nama_gambar
                );

                $result = $this->Produk_model->tambah_produk($data);
                if ($result) {
                    $this->session->set_flashdata('sukses', 'Paket berhasil ditambahkan!');
                    redirect('admin/produk');
                } else {
                    // Debug: Tampilkan error database
                    $db_error = $this->db->error();
                    log_message('error', 'Database error: ' . json_encode($db_error));
                    $this->session->set_flashdata('error', 'Gagal menambahkan paket! Error: ' . $db_error['message']);
                }
            }
        }

        $data['judul'] = 'Tambah Paket - Admin';
        $this->load->view('admin/produk/tambah', $data);
    }

    public function edit($id)
    {
        $produk = $this->Produk_model->ambil_produk_berdasarkan_id($id);
        if (!$produk) {
            show_404();
        }

        if ($this->input->post()) {
            $this->form_validation->set_rules('nama_produk', 'Nama Paket', 'required');
            $this->form_validation->set_rules('kategori', 'Kategori', 'required');
            $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
            $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

            if ($this->form_validation->run() == TRUE) {
                $config['upload_path'] = './uploads/products/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = 2048;
                $config['encrypt_name'] = TRUE;

                $this->upload->initialize($config);

                $nama_gambar = $produk->gambar;
                if ($this->upload->do_upload('gambar')) {
                    // Hapus gambar lama
                    if ($produk->gambar && file_exists('./uploads/products/' . $produk->gambar)) {
                        unlink('./uploads/products/' . $produk->gambar);
                    }

                    $upload_data = $this->upload->data();
                    $nama_gambar = $upload_data['file_name'];
                }

                $data = array(
                    'nama_produk' => $this->input->post('nama_produk'),
                    'kategori' => $this->input->post('kategori'),
                    'harga' => $this->input->post('harga'),
                    'kualitas' => $this->input->post('kualitas'),
                    'garansi' => $this->input->post('garansi'),
                    'instalasi' => $this->input->post('instalasi'),
                    'support' => $this->input->post('support'),
                    'maintenance' => $this->input->post('maintenance'),
                    'is_promo' => $this->input->post('is_promo') ? 1 : 0,
                    'harga_promo' => $this->input->post('harga_promo') ?: NULL,
                    'promo_label' => $this->input->post('promo_label'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'gambar' => $nama_gambar
                );

                $result = $this->Produk_model->perbarui_produk($id, $data);
                if ($result) {
                    $this->session->set_flashdata('sukses', 'Paket berhasil diperbarui!');
                    redirect('admin/produk');
                } else {
                    // Debug: Tampilkan error database
                    $db_error = $this->db->error();
                    log_message('error', 'Database error: ' . json_encode($db_error));
                    $this->session->set_flashdata('error', 'Gagal memperbarui paket! Error: ' . $db_error['message']);
                }
            }
        }

        $data['judul'] = 'Edit Paket - Admin';
        $data['produk'] = $produk;
        $this->load->view('admin/produk/edit', $data);
    }

    public function hapus($id)
    {
        $produk = $this->Produk_model->ambil_produk_berdasarkan_id($id);
        if (!$produk) {
            show_404();
        }

        // Hapus gambar jika ada
        if ($produk->gambar && file_exists('./uploads/products/' . $produk->gambar)) {
            unlink('./uploads/products/' . $produk->gambar);
        }

        $result = $this->Produk_model->hapus_produk($id);
        if ($result) {
            $this->session->set_flashdata('sukses', 'Paket berhasil dihapus!');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus paket!');
        }

        redirect('admin/produk');
    }

    private function cek_admin()
    {
        if (!$this->session->userdata('login')) {
            redirect('auth/masuk');
        }
        if ($this->session->userdata('peran') != 'admin') {
            redirect('beranda');
        }
    }
}
