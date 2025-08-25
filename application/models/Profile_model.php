<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_model extends CI_Model
{
   public function __construct()
   {
      parent::__construct();
   }

   // Ambil semua data profile
   public function ambil_semua_profile()
   {
      return $this->db->get('profile_perusahaan')->result();
   }

   // Ambil profile berdasarkan ID
   public function ambil_profile_by_id($id)
   {
      return $this->db->get_where('profile_perusahaan', array('id' => $id))->row();
   }

   // Ambil profile aktif (yang ditampilkan di website)
   public function ambil_profile_aktif()
   {
      $this->db->where('status', 'aktif');
      $this->db->limit(1);
      return $this->db->get('profile_perusahaan')->row();
   }

   // Tambah profile baru
   public function tambah_profile($data)
   {
      return $this->db->insert('profile_perusahaan', $data);
   }

   // Update profile
   public function update_profile($id, $data)
   {
      $this->db->where('id', $id);
      return $this->db->update('profile_perusahaan', $data);
   }

   // Hapus profile
   public function hapus_profile($id)
   {
      return $this->db->delete('profile_perusahaan', array('id' => $id));
   }

   // Set profile sebagai aktif
   public function set_profile_aktif($id)
   {
      // Set semua profile menjadi tidak aktif
      $this->db->update('profile_perusahaan', array('status' => 'tidak_aktif'));

      // Set profile yang dipilih menjadi aktif
      $this->db->where('id', $id);
      return $this->db->update('profile_perusahaan', array('status' => 'aktif'));
   }

   // Hitung total profile
   public function hitung_total_profile()
   {
      return $this->db->count_all('profile_perusahaan');
   }
}
