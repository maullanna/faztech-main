<?php
// application/controllers/Beranda.php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
        $this->load->model('Testimoni_model');
        $this->load->model('Kontak_model');
        $this->load->model('Pekerjaan_model');
        $this->load->model('Profile_model');
    }

    public function index()
    {
        try {
            // Ambil data dari database dengan error handling
            $data['judul'] = 'FazTech - Solusi Keamanan Terpercaya';

            // Load data dengan try-catch untuk setiap model
            try {
                $data['produk_unggulan'] = $this->Produk_model->ambil_produk_unggulan(4);
            } catch (Exception $e) {
                $data['produk_unggulan'] = [];
                log_message('error', 'Error loading produk_unggulan: ' . $e->getMessage());
            }

            try {
                $data['testimoni_terbaru'] = $this->Testimoni_model->ambil_testimoni_terbaru(5);
            } catch (Exception $e) {
                $data['testimoni_terbaru'] = [];
                log_message('error', 'Error loading testimoni: ' . $e->getMessage());
            }

            try {
                $data['kategori_produk'] = $this->Produk_model->ambil_semua_kategori();
            } catch (Exception $e) {
                $data['kategori_produk'] = [];
                log_message('error', 'Error loading kategori: ' . $e->getMessage());
            }

            try {
                $data['total_produk'] = $this->Produk_model->hitung_total_produk();
            } catch (Exception $e) {
                $data['total_produk'] = 0;
                log_message('error', 'Error counting products: ' . $e->getMessage());
            }

            // Status login user (hidden from public)
            $data['sudah_login'] = false;
            $data['nama_pengguna'] = '';
            $data['peran_pengguna'] = '';

            $this->load->view('beranda/index', $data);
        } catch (Exception $e) {
            // Fallback jika ada error fatal
            log_message('error', 'Fatal error in Beranda controller: ' . $e->getMessage());

            // Show simple error page
            $data['judul'] = 'FazTech - Solusi Keamanan Terpercaya';
            $data['produk_unggulan'] = [];
            $data['testimoni_terbaru'] = [];
            $data['kategori_produk'] = [];
            $data['total_produk'] = 0;
            $data['sudah_login'] = false;
            $data['nama_pengguna'] = '';
            $data['peran_pengguna'] = '';

            $this->load->view('beranda/index', $data);
        }
    }

    // Method untuk halaman produk lengkap dengan pagination
    public function produk()
    {
        // Load library pagination
        $this->load->library('pagination');

        // Parameter dari URL dan form
        $kata_kunci = $this->input->get('search') ? $this->input->get('search') : '';
        $kategori = $this->input->get('kategori') ? $this->input->get('kategori') : '';
        $urutan = $this->input->get('urutan') ? $this->input->get('urutan') : 'terbaru';
        $page = $this->input->get('page') ? $this->input->get('page') : 1;

        // Konfigurasi pagination
        $per_page = 12; // 12 produk per halaman
        $offset = ($page - 1) * $per_page;

        // Ambil data produk dengan pagination
        $produk = $this->Produk_model->ambil_produk_dengan_pagination($per_page, $offset, $kata_kunci, $kategori, $urutan);
        $total_produk = $this->Produk_model->hitung_total_produk_dengan_filter($kata_kunci, $kategori);
        $total_semua_produk = $this->Produk_model->hitung_total_produk(); // Total produk tanpa filter untuk stats

        // Konfigurasi pagination
        $config['base_url'] = base_url('produk');
        $config['total_rows'] = $total_produk;
        $config['per_page'] = $per_page;
        $config['page_query_string'] = TRUE;
        $config['query_string_segment'] = 'page';
        $config['reuse_query_string'] = TRUE;

        // Styling pagination
        $config['full_tag_open'] = '<nav aria-label="Pagination"><ul class="flex justify-center space-x-2 mt-8">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['first_link'] = 'Pertama';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Terakhir';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = 'Selanjutnya';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = 'Sebelumnya';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><span class="px-4 py-2 bg-primary text-white rounded-lg">';
        $config['cur_tag_close'] = '</span></li>';
        $config['num_links'] = 3;
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors');

        $this->pagination->initialize($config);

        // Data untuk view
        $data['judul'] = 'Semua Produk - FazTech';
        $data['produk'] = $produk;
        $data['kategori_produk'] = $this->Produk_model->ambil_semua_kategori();
        $data['kata_kunci'] = $kata_kunci;
        $data['kategori_terpilih'] = $kategori;
        $data['urutan_terpilih'] = $urutan;
        $data['total_produk'] = $total_produk;
        $data['total_semua_produk'] = $total_semua_produk; // Total produk tanpa filter
        $data['pagination_links'] = $this->pagination->create_links();
        $data['current_page'] = $page;
        $data['total_pages'] = ceil($total_produk / $per_page);

        // Status login user (hidden from public)
        $data['sudah_login'] = false;
        $data['nama_pengguna'] = '';
        $data['peran_pengguna'] = '';

        $this->load->view('beranda/produk', $data);
    }

    // AJAX untuk pencarian produk
    public function cari_produk()
    {
        $kata_kunci = $this->input->post('kata_kunci');
        $kategori = $this->input->post('kategori');

        $produk = $this->Produk_model->cari_produk_dengan_filter($kata_kunci, $kategori);

        // Return JSON untuk AJAX
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($produk));
    }

    // AJAX untuk detail produk (modal)
    public function detail_produk($id)
    {
        $produk = $this->Produk_model->ambil_produk_berdasarkan_id($id);

        if (!$produk) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'Produk tidak ditemukan']));
            return;
        }

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($produk));
    }

    // Method untuk generate link WhatsApp
    private function generate_whatsapp_link($nama_produk, $harga)
    {
        $nomor_whatsapp = '6281234567890'; // Ganti dengan nomor admin
        $pesan = "Halo admin, saya tertarik untuk membeli paket: {$nama_produk} dengan harga Rp " . number_format($harga, 0, ',', '.');
        $pesan_encoded = urlencode($pesan);

        return "https://wa.me/{$nomor_whatsapp}?text={$pesan_encoded}";
    }

    // AJAX untuk mendapatkan link WhatsApp
    public function whatsapp_link()
    {
        $nama_produk = $this->input->post('nama_produk');
        $harga = $this->input->post('harga');

        $whatsapp_link = $this->generate_whatsapp_link($nama_produk, $harga);

        echo json_encode(['success' => true, 'whatsapp_link' => $whatsapp_link]);
    }

    // Method untuk halaman kategori CCTV
    public function kategori_cctv()
    {
        $data['judul'] = 'Paket CCTV - FazTech';
        $data['kategori'] = 'CCTV';
        $data['produk'] = $this->Produk_model->ambil_produk_by_kategori('CCTV');
        $data['total_produk'] = count($data['produk']);

        $this->load->view('beranda/kategori', $data);
    }

    // Method untuk halaman kategori Access Control
    public function kategori_access_control()
    {
        $data['judul'] = 'Paket Access Control - FazTech';
        $data['kategori'] = 'Access Control';
        $data['produk'] = $this->Produk_model->ambil_produk_by_kategori('Access Control');
        $data['total_produk'] = count($data['produk']);

        $this->load->view('beranda/kategori', $data);
    }

    // Method untuk halaman kategori Barrier Gate
    public function kategori_barrier_gate()
    {
        $data['judul'] = 'Paket Barrier Gate - FazTech';
        $data['kategori'] = 'Barrier Gate';
        $data['produk'] = $this->Produk_model->ambil_produk_by_kategori('Barrier Gate');
        $data['total_produk'] = count($data['produk']);

        $this->load->view('beranda/kategori', $data);
    }

    // Method untuk halaman kategori Internet Dedicated
    public function kategori_internet_dedicated()
    {
        $data['judul'] = 'Paket Internet Dedicated - FazTech';
        $data['kategori'] = 'Internet Dedicated';
        $data['produk'] = $this->Produk_model->ambil_produk_by_kategori('Internet Dedicated');
        $data['total_produk'] = count($data['produk']);

        $this->load->view('beranda/kategori', $data);
    }

    // Method untuk halaman kategori Smart Solution
    public function kategori_smart_solution()
    {
        $data['judul'] = 'Paket Smart Solution - FazTech';
        $data['kategori'] = 'Smart Solution';
        $data['produk'] = $this->Produk_model->ambil_produk_by_kategori('Smart Solution');
        $data['total_produk'] = count($data['produk']);

        $this->load->view('beranda/kategori', $data);
    }

    // Method untuk halaman kategori Gallery
    public function kategori_gallery()
    {
        $data['judul'] = 'Gallery - FazTech';
        $data['kategori'] = 'Gallery';
        $data['produk'] = $this->Produk_model->ambil_produk_by_kategori('Gallery');
        $data['total_produk'] = count($data['produk']);

        $this->load->view('beranda/kategori', $data);
    }

    // Halaman Profile Perusahaan
    public function profile()
    {
        $data['judul'] = 'Profile Perusahaan - FazTech Security Solutions';
        $data['meta_description'] = 'Mengenal lebih dekat FazTech Security Solutions, mitra terpercaya dalam solusi keamanan modern dengan teknologi AI terdepan dan tim teknisi bersertifikasi.';
        $data['meta_keywords'] = 'profile perusahaan, faztech, solusi keamanan, cctv, access control, barrier gate';
        
        $this->load->view('beranda/profile', $data);
    }

    public function kirim_kontak()
    {
        if ($this->input->post()) {
            $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[3]');
            $this->form_validation->set_rules('telepon', 'Telepon', 'required|min_length[8]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('jenis_properti', 'Jenis Properti', 'required');

            if ($this->form_validation->run() == TRUE) {
                $data = array(
                    'nama' => $this->input->post('nama'),
                    'telepon' => '+62' . $this->input->post('telepon'),
                    'email' => $this->input->post('email'),
                    'jenis_properti' => $this->input->post('jenis_properti'),
                    'catatan' => $this->input->post('catatan')
                );

                if ($this->Kontak_model->simpan_kontak($data)) {
                    $this->session->set_flashdata('sukses', 'Pesan Anda berhasil dikirim! Kami akan menghubungi Anda segera.');
                } else {
                    $this->session->set_flashdata('error', 'Gagal mengirim pesan. Silakan coba lagi.');
                }
            } else {
                $this->session->set_flashdata('error', validation_errors());
            }
        }

        redirect('beranda#kontak');
    }
}
