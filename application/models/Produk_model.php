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

   public function get_product_by_name($nama_produk)
   {
      $this->db->select('*');
      $this->db->where('nama_produk', $nama_produk);
      return $this->db->get('produk')->row();
   }

   public function bulk_insert_products($products_data)
   {
      return $this->db->insert_batch('produk', $products_data);
   }

   public function bulk_update_products($products_data)
   {
      $success_count = 0;
      foreach ($products_data as $product) {
         if (isset($product['id']) && $this->db->update('produk', $product, array('id' => $product['id']))) {
            $success_count++;
         }
      }
      return $success_count;
   }

   // Method untuk filter produk
   public function filter_produk($search = '', $kategori = '', $brand = '', $min_harga = '', $max_harga = '')
   {
      $this->db->select('*');
      
      // Filter berdasarkan nama produk (search)
      if (!empty($search)) {
         $this->db->group_start();
         $this->db->like('nama_produk', $search);
         $this->db->or_like('deskripsi', $search);
         $this->db->group_end();
      }
      
      // Filter berdasarkan kategori
      if (!empty($kategori)) {
         $this->db->where('kategori', $kategori);
      }
      
      // Filter berdasarkan brand (Hikvision/Dahua)
      if (!empty($brand)) {
         $this->db->like('nama_produk', $brand);
      }
      
      // Filter berdasarkan range harga
      if (!empty($min_harga) && is_numeric($min_harga)) {
         $this->db->where('harga >=', $min_harga);
      }
      
      if (!empty($max_harga) && is_numeric($max_harga)) {
         $this->db->where('harga <=', $max_harga);
      }
      
      // Urutan default
      $this->db->order_by('kategori', 'ASC');
      $this->db->order_by('nama_produk', 'ASC');
      
      return $this->db->get('produk')->result();
   }
   
   // Method untuk mendapatkan list kategori
   public function get_kategori_list()
   {
      $this->db->select('DISTINCT(kategori) as kategori', FALSE);
      $this->db->from('produk');
      $this->db->order_by('kategori', 'ASC');
      $result = $this->db->get()->result();
      
      $kategori_list = array();
      foreach ($result as $row) {
         $kategori_list[] = $row->kategori;
      }
      
      return $kategori_list;
   }
   
   // Method untuk mendapatkan list brand
   public function get_brand_list()
   {
      $brands = array('Hikvision', 'Dahua');
      return $brands;
   }
}
