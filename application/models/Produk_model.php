<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{

   public function __construct()
   {
      parent::__construct();
   }

   public function ambil_semua_produk()
   {
      $this->db->select('*');
      $this->db->order_by('kategori', 'ASC');
      $this->db->order_by('nama_produk', 'ASC');
      return $this->db->get('produk')->result();
   }

   public function ambil_produk_berdasarkan_id($id)
   {
      $this->db->select('*');
      $this->db->where('id', $id);
      return $this->db->get('produk')->row();
   }

   public function tambah_produk($data)
   {
      // Debug: Log data yang akan ditambahkan
      log_message('debug', 'Adding new product with data: ' . json_encode($data));

      // Set default values untuk field sub fitur jika tidak ada
      if (!isset($data['kualitas'])) {
         $data['kualitas'] = '';
      }
      if (!isset($data['garansi'])) {
         $data['garansi'] = '';
      }
      if (!isset($data['instalasi'])) {
         $data['instalasi'] = '';
      }
      if (!isset($data['support'])) {
         $data['support'] = '';
      }
      if (!isset($data['maintenance'])) {
         $data['maintenance'] = '';
      }

      // Set default promo values
      if (!isset($data['is_promo'])) {
         $data['is_promo'] = 0;
      }
      if (!isset($data['harga_promo'])) {
         $data['harga_promo'] = NULL;
      }
      if (!isset($data['promo_label'])) {
         $data['promo_label'] = '';
      }

      $result = $this->db->insert('produk', $data);

      // Debug: Log result
      if (!$result) {
         $db_error = $this->db->error();
         log_message('error', 'Insert failed Error: ' . json_encode($db_error));
      }

      return $result;
   }

   public function perbarui_produk($id, $data)
   {
      // Debug: Log data yang akan diupdate
      log_message('debug', 'Updating product ID: ' . $id . ' with data: ' . json_encode($data));

      // Set default values untuk field sub fitur jika tidak ada
      if (!isset($data['kualitas'])) {
         $data['kualitas'] = '';
      }
      if (!isset($data['garansi'])) {
         $data['garansi'] = '';
      }
      if (!isset($data['instalasi'])) {
         $data['instalasi'] = '';
      }
      if (!isset($data['support'])) {
         $data['support'] = '';
      }
      if (!isset($data['maintenance'])) {
         $data['maintenance'] = '';
      }

      // Set default promo values
      if (!isset($data['is_promo'])) {
         $data['is_promo'] = 0;
      }
      if (!isset($data['harga_promo'])) {
         $data['harga_promo'] = NULL;
      }
      if (!isset($data['promo_label'])) {
         $data['promo_label'] = '';
      }

      $this->db->where('id', $id);
      $result = $this->db->update('produk', $data);

      // Debug: Log result
      if (!$result) {
         $db_error = $this->db->error();
         log_message('error', 'Update failed for product ID: ' . $id . ' Error: ' . json_encode($db_error));
      }

      return $result;
   }

   public function hapus_produk($id)
   {
      return $this->db->delete('produk', array('id' => $id));
   }

   public function hitung_total_produk()
   {
      return $this->db->count_all('produk');
   }

   public function ambil_produk_unggulan($limit = 8)
   {
      $this->db->select('*');
      $this->db->order_by('kategori', 'ASC');
      $this->db->order_by('nama_produk', 'ASC');
      $this->db->limit($limit);
      return $this->db->get('produk')->result();
   }

   public function ambil_semua_kategori()
   {
      $this->db->select('kategori');
      $this->db->group_by('kategori');
      $this->db->order_by('kategori', 'ASC');
      return $this->db->get('produk')->result();
   }

   public function cari_produk_dengan_filter($kata_kunci = '', $kategori = '')
   {
      $this->db->select('*');

      if (!empty($kata_kunci)) {
         $this->db->group_start();
         $this->db->like('nama_produk', $kata_kunci);
         $this->db->or_like('deskripsi', $kata_kunci);
         $this->db->or_like('kategori', $kata_kunci);
         $this->db->group_end();
      }

      if (!empty($kategori)) {
         $this->db->where('kategori', $kategori);
      }

      $this->db->order_by('kategori', 'ASC');
      $this->db->order_by('nama_produk', 'ASC');
      return $this->db->get('produk')->result();
   }

   public function ambil_produk_dengan_pagination($limit, $offset, $kata_kunci = '', $kategori = '', $urutan = 'kategori')
   {
      $this->db->select('*');

      if (!empty($kata_kunci)) {
         $this->db->group_start();
         $this->db->like('nama_produk', $kata_kunci);
         $this->db->or_like('deskripsi', $kata_kunci);
         $this->db->or_like('kategori', $kata_kunci);
         $this->db->group_end();
      }

      if (!empty($kategori)) {
         $this->db->where('kategori', $kategori);
      }

      // Set urutan
      switch ($urutan) {
         case 'nama':
            $this->db->order_by('nama_produk', 'ASC');
            break;
         case 'harga_rendah':
            $this->db->order_by('harga', 'ASC');
            break;
         case 'harga_tinggi':
            $this->db->order_by('harga', 'DESC');
            break;
         default:
            $this->db->order_by('kategori', 'ASC');
            $this->db->order_by('nama_produk', 'ASC');
            break;
      }

      $this->db->limit($limit, $offset);
      return $this->db->get('produk')->result();
   }

   public function hitung_total_produk_dengan_filter($kata_kunci = '', $kategori = '')
   {
      if (!empty($kata_kunci)) {
         $this->db->group_start();
         $this->db->like('nama_produk', $kata_kunci);
         $this->db->or_like('deskripsi', $kata_kunci);
         $this->db->or_like('kategori', $kata_kunci);
         $this->db->group_end();
      }

      if (!empty($kategori)) {
         $this->db->where('kategori', $kategori);
      }

      return $this->db->count_all_results('produk');
   }

   public function ambil_produk_by_kategori($kategori)
   {
      $this->db->select('*');
      $this->db->where('kategori', $kategori);
      $this->db->order_by('nama_produk', 'ASC');
      return $this->db->get('produk')->result();
   }

   public function ambil_produk_terbaru($limit = 6)
   {
      $this->db->select('*');
      $this->db->order_by('tanggal_dibuat', 'DESC');
      $this->db->limit($limit);
      return $this->db->get('produk')->result();
   }

   public function ambil_produk_populer($limit = 6)
   {
      // Untuk sementara, ambil produk berdasarkan tanggal terbaru
      $this->db->select('*');
      $this->db->order_by('tanggal_dibuat', 'DESC');
      $this->db->limit($limit);
      return $this->db->get('produk')->result();
   }

   public function update_fitur_produk($id, $fitur_data)
   {
      $this->db->where('id', $id);
      return $this->db->update('produk', $fitur_data);
   }
}
