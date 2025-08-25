<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();

      // Cek login
      if (!$this->session->userdata('login')) {
         redirect('admin');
      }

      // Cek role admin
      if ($this->session->userdata('peran') != 'admin') {
         redirect('beranda');
      }

      $this->load->model('Profile_model');
      $this->load->library('form_validation');
   }

   // Halaman index (list profile)
   public function index()
   {
      $data['judul'] = 'Kelola Profile Perusahaan';
      $data['profile'] = $this->Profile_model->ambil_semua_profile();
      $data['total_profile'] = $this->Profile_model->hitung_total_profile();

      $this->load->view('admin/profile/index', $data);
   }

   // Halaman tambah profile
   public function tambah()
   {
      $data['judul'] = 'Tambah Profile Perusahaan';

      if ($this->input->post()) {
         $this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required|min_length[3]');
         $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|min_length[10]');
         $this->form_validation->set_rules('visi', 'Visi', 'required|min_length[10]');
         $this->form_validation->set_rules('misi', 'Misi', 'required|min_length[10]');
         $this->form_validation->set_rules('tahun_berdiri', 'Tahun Berdiri', 'required|numeric');
         $this->form_validation->set_rules('jumlah_klien', 'Jumlah Klien', 'required|numeric');
         $this->form_validation->set_rules('jumlah_proyek', 'Jumlah Proyek', 'required|numeric');

         if ($this->form_validation->run() == TRUE) {
            $data_profile = array(
               'nama_perusahaan' => $this->input->post('nama_perusahaan'),
               'deskripsi' => $this->input->post('deskripsi'),
               'visi' => $this->input->post('visi'),
               'misi' => $this->input->post('misi'),
               'tahun_berdiri' => $this->input->post('tahun_berdiri'),
               'jumlah_klien' => $this->input->post('jumlah_klien'),
               'jumlah_proyek' => $this->input->post('jumlah_proyek'),
               'alamat' => $this->input->post('alamat'),
               'telepon' => $this->input->post('telepon'),
               'email' => $this->input->post('email'),
               'website' => $this->input->post('website'),
               'status' => 'tidak_aktif',
               'created_at' => date('Y-m-d H:i:s')
            );

            if ($this->Profile_model->tambah_profile($data_profile)) {
               $this->session->set_flashdata('sukses', 'Profile perusahaan berhasil ditambahkan!');
               redirect('admin/profile');
            } else {
               $this->session->set_flashdata('error', 'Gagal menambahkan profile perusahaan!');
            }
         }
      }

      $this->load->view('admin/profile/tambah', $data);
   }

   // Halaman edit profile
   public function edit($id = null)
   {
      if ($id === null) {
         redirect('admin/profile');
      }

      $data['judul'] = 'Edit Profile Perusahaan';
      $data['profile'] = $this->Profile_model->ambil_profile_by_id($id);

      if (!$data['profile']) {
         $this->session->set_flashdata('error', 'Profile tidak ditemukan!');
         redirect('admin/profile');
      }

      if ($this->input->post()) {
         $this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required|min_length[3]');
         $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|min_length[10]');
         $this->form_validation->set_rules('visi', 'Visi', 'required|min_length[10]');
         $this->form_validation->set_rules('misi', 'Misi', 'required|min_length[10]');
         $this->form_validation->set_rules('tahun_berdiri', 'Tahun Berdiri', 'required|numeric');
         $this->form_validation->set_rules('jumlah_klien', 'Jumlah Klien', 'required|numeric');
         $this->form_validation->set_rules('jumlah_proyek', 'Jumlah Proyek', 'required|numeric');

         if ($this->form_validation->run() == TRUE) {
            $data_profile = array(
               'nama_perusahaan' => $this->input->post('nama_perusahaan'),
               'deskripsi' => $this->input->post('deskripsi'),
               'visi' => $this->input->post('visi'),
               'misi' => $this->input->post('misi'),
               'tahun_berdiri' => $this->input->post('tahun_berdiri'),
               'jumlah_klien' => $this->input->post('jumlah_klien'),
               'jumlah_proyek' => $this->input->post('jumlah_proyek'),
               'alamat' => $this->input->post('alamat'),
               'telepon' => $this->input->post('telepon'),
               'email' => $this->input->post('email'),
               'website' => $this->input->post('website'),
               'updated_at' => date('Y-m-d H:i:s')
            );

            if ($this->Profile_model->update_profile($id, $data_profile)) {
               $this->session->set_flashdata('sukses', 'Profile perusahaan berhasil diperbarui!');
               redirect('admin/profile');
            } else {
               $this->session->set_flashdata('error', 'Gagal memperbarui profile perusahaan!');
            }
         }
      }

      $this->load->view('admin/profile/edit', $data);
   }

   // Hapus profile
   public function hapus($id = null)
   {
      if ($id === null) {
         redirect('admin/profile');
      }

      $profile = $this->Profile_model->ambil_profile_by_id($id);
      if (!$profile) {
         $this->session->set_flashdata('error', 'Profile tidak ditemukan!');
         redirect('admin/profile');
      }

      if ($this->Profile_model->hapus_profile($id)) {
         $this->session->set_flashdata('sukses', 'Profile perusahaan berhasil dihapus!');
      } else {
         $this->session->set_flashdata('error', 'Gagal menghapus profile perusahaan!');
      }

      redirect('admin/profile');
   }

   // Set profile aktif
   public function set_aktif($id = null)
   {
      if ($id === null) {
         redirect('admin/profile');
      }

      $profile = $this->Profile_model->ambil_profile_by_id($id);
      if (!$profile) {
         $this->session->set_flashdata('error', 'Profile tidak ditemukan!');
         redirect('admin/profile');
      }

      if ($this->Profile_model->set_profile_aktif($id)) {
         $this->session->set_flashdata('sukses', 'Profile perusahaan berhasil diaktifkan!');
      } else {
         $this->session->set_flashdata('error', 'Gagal mengaktifkan profile perusahaan!');
      }

      redirect('admin/profile');
   }
}
