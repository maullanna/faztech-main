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
        
        // Ambil parameter filter
        $search = $this->input->get('search');
        $kategori = $this->input->get('kategori');
        $brand = $this->input->get('brand');
        $min_harga = $this->input->get('min_harga');
        $max_harga = $this->input->get('max_harga');
        
        // Filter produk berdasarkan parameter
        $data['produk'] = $this->Produk_model->filter_produk($search, $kategori, $brand, $min_harga, $max_harga);
        
        // Data untuk dropdown filter
        $data['kategori_list'] = $this->Produk_model->get_kategori_list();
        $data['brand_list'] = $this->Produk_model->get_brand_list();
        
        // Data filter yang aktif
        $data['active_filters'] = array(
            'search' => $search,
            'kategori' => $kategori,
            'brand' => $brand,
            'min_harga' => $min_harga,
            'max_harga' => $max_harga
        );

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

    public function import()
    {
        $data['judul'] = 'Import Produk - Admin';
        $this->load->view('admin/produk/import', $data);
    }

    public function download_template()
    {
        // Set header untuk download CSV
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="template_produk.csv"');
        
        // Buka output stream
        $output = fopen('php://output', 'w');
        
        // Tambahkan BOM untuk UTF-8
        fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF));
        
        // Header kolom
        $headers = array(
            'nama_produk',
            'kategori',
            'harga',
            'kualitas',
            'garansi',
            'instalasi',
            'support',
            'maintenance',
            'is_promo',
            'harga_promo',
            'promo_label',
            'deskripsi',
            'gambar'
        );
        
        fputcsv($output, $headers);
        
        // Contoh data
        $sample_data = array(
            'Paket CCTV Premium',
            'CCTV',
            '5000000',
            'Kualitas Premium',
            'Garansi Resmi',
            'Instalasi Gratis',
            'Support 24/7',
            'Maintenance Berkala',
            '1',
            '4500000',
            'Promo Spesial',
            'Paket CCTV lengkap dengan 8 kamera HD dan DVR 8 channel',
            'cctv_premium.jpg'
        );
        
        fputcsv($output, $sample_data);
        
        fclose($output);
        exit;
    }

    public function process_import()
    {
        if (!$this->input->post()) {
            redirect('admin/produk/import');
        }

        // Load library yang diperlukan
        $this->load->library('upload');
        $this->load->helper('file');

        $import_file = $_FILES['import_file'];
        $product_images = isset($_FILES['product_images']) ? $_FILES['product_images'] : null;
        $skip_duplicates = $this->input->post('skip_duplicates');
        $update_existing = $this->input->post('update_existing');

        // Validasi file import
        if ($import_file['error'] !== UPLOAD_ERR_OK) {
            $this->session->set_flashdata('error', 'Gagal upload file import');
            redirect('admin/produk/import');
        }


        // Upload gambar produk (wajib)
        $uploaded_images = array();
        if (!$product_images || $product_images['name'][0] === '') {
            $this->session->set_flashdata('error', 'Gambar produk wajib diupload! Silakan pilih minimal 1 file gambar.');
            redirect('admin/produk/import');
        }
        
        $config['upload_path'] = './uploads/products/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2048;
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);

        foreach ($product_images['name'] as $key => $image_name) {
            if ($product_images['error'][$key] === UPLOAD_ERR_OK) {
                $_FILES['image'] = array(
                    'name' => $product_images['name'][$key],
                    'type' => $product_images['type'][$key],
                    'tmp_name' => $product_images['tmp_name'][$key],
                    'error' => $product_images['error'][$key],
                    'size' => $product_images['size'][$key]
                );

                if ($this->upload->do_upload('image')) {
                    $upload_data = $this->upload->data();
                    $uploaded_images[] = $upload_data['file_name'];
                }
            }
        }

        // Validasi jumlah gambar yang diupload
        if (count($uploaded_images) === 0) {
            $this->session->set_flashdata('error', 'Gagal upload gambar produk! Pastikan file gambar valid dan tidak melebihi 2MB.');
            redirect('admin/produk/import');
        }
        
        // Proses file import
        $file_extension = strtolower(pathinfo($import_file['name'], PATHINFO_EXTENSION));
        $import_data = array();

        try {
            if ($file_extension === 'csv') {
                $import_data = $this->_parse_csv($import_file['tmp_name']);
            } elseif (in_array($file_extension, ['xls', 'xlsx'])) {
                $import_data = $this->_parse_excel($import_file['tmp_name']);
            } else {
                throw new Exception('Format file tidak didukung');
            }

            if (empty($import_data)) {
                throw new Exception('File tidak berisi data yang valid');
            }

            // Proses import data
            $result = $this->_process_import_data($import_data, $skip_duplicates, $update_existing, $uploaded_images);

            if ($result['success']) {
                $this->session->set_flashdata('sukses', 'Import berhasil! ' . $result['message']);
            } else {
                $this->session->set_flashdata('error', 'Import gagal: ' . $result['message']);
            }

        } catch (Exception $e) {
            $this->session->set_flashdata('error', 'Error: ' . $e->getMessage());
        }

        redirect('admin/produk');
    }

    private function _parse_csv($file_path)
    {
        $data = array();
        $handle = fopen($file_path, 'r');
        
        if ($handle !== FALSE) {
            // Baca header row
            $headers = fgetcsv($handle);
            log_message('debug', 'CSV Headers: ' . json_encode($headers));
            log_message('debug', 'Expected headers: nama_produk,kategori,harga,kualitas,garansi,instalasi,support,maintenance,deskripsi');
            
            // Validasi header
            $expected_headers = array('nama_produk', 'kategori', 'harga', 'kualitas', 'garansi', 'instalasi', 'support', 'maintenance', 'deskripsi');
            $missing_headers = array_diff($expected_headers, $headers);
            $extra_headers = array_diff($headers, $expected_headers);
            
            if (!empty($missing_headers)) {
                log_message('error', 'Missing headers: ' . json_encode($missing_headers));
            }
            if (!empty($extra_headers)) {
                log_message('error', 'Extra headers: ' . json_encode($extra_headers));
            }
            
            $row_number = 1;
            while (($row = fgetcsv($handle)) !== FALSE) {
                $row_number++;
                log_message('debug', 'Row ' . $row_number . ': ' . json_encode($row));
                log_message('debug', 'Row count: ' . count($row) . ', Headers count: ' . count($headers));
                
                if (count($row) >= count($headers)) {
                    $row_data = array();
                    foreach ($headers as $index => $header) {
                        $row_data[$header] = isset($row[$index]) ? trim($row[$index]) : '';
                    }
                    $data[] = $row_data;
                } else {
                    log_message('error', 'Row ' . $row_number . ' has insufficient columns. Expected: ' . count($headers) . ', Found: ' . count($row));
                }
            }
            fclose($handle);
        }
        
        log_message('debug', 'Total parsed rows: ' . count($data));
        return $data;
    }

    private function _parse_excel($file_path)
    {
        // Untuk sementara, kita akan menggunakan CSV parsing
        // Untuk implementasi Excel yang lengkap, perlu library tambahan seperti PhpSpreadsheet
        return $this->_parse_csv($file_path);
    }

    private function _process_import_data($import_data, $skip_duplicates, $update_existing, $uploaded_images)
    {
        $success_count = 0;
        $error_count = 0;
        $skipped_count = 0;
        $updated_count = 0;
        $errors = array();

        foreach ($import_data as $row_index => $row) {
            try {
                // Debug: Tampilkan data row yang diproses
                $debug_info = "Baris " . ($row_index + 2) . " - Data: " . json_encode($row);
                log_message('debug', $debug_info);
                
                // Validasi data wajib dengan detail
                $missing_fields = array();
                
                if (empty($row['nama_produk'])) {
                    $missing_fields[] = 'nama_produk';
                }
                if (empty($row['kategori'])) {
                    $missing_fields[] = 'kategori';
                }
                if (empty($row['harga'])) {
                    $missing_fields[] = 'harga';
                }
                if (empty($row['deskripsi'])) {
                    $missing_fields[] = 'deskripsi';
                }
                
                if (!empty($missing_fields)) {
                    $errors[] = "Baris " . ($row_index + 2) . ": Data wajib tidak lengkap - Field kosong: " . implode(', ', $missing_fields) . " | Data: " . json_encode($row);
                    $error_count++;
                    continue;
                }
                
                // Validasi format data
                if (!is_numeric($row['harga'])) {
                    $errors[] = "Baris " . ($row_index + 2) . ": Format harga salah - harus angka, ditemukan: '" . $row['harga'] . "'";
                    $error_count++;
                    continue;
                }
                
                // Validasi kategori yang didukung
                $supported_categories = array('CCTV', 'Access Control', 'Barrier Gate', 'Internet Dedicated', 'Smart Solution', 'Gallery');
                if (!in_array($row['kategori'], $supported_categories)) {
                    $errors[] = "Baris " . ($row_index + 2) . ": Kategori tidak didukung - '" . $row['kategori'] . "'. Kategori yang didukung: " . implode(', ', $supported_categories);
                    $error_count++;
                    continue;
                }

                // Cek apakah produk sudah ada
                $existing_product = $this->Produk_model->get_product_by_name($row['nama_produk']);

                if ($existing_product) {
                    if ($skip_duplicates && !$update_existing) {
                        $skipped_count++;
                        continue;
                    } elseif ($update_existing) {
                        // Update produk yang ada
                        $update_data = array(
                            'kategori' => $row['kategori'],
                            'harga' => $row['harga'],
                            'kualitas' => $row['kualitas'] ?: 'Kualitas Premium',
                            'garansi' => $row['garansi'] ?: 'Garansi Resmi',
                            'instalasi' => $row['instalasi'] ?: 'Instalasi Gratis',
                            'support' => $row['support'] ?: 'Support 24/7',
                            'maintenance' => $row['maintenance'] ?: 'Maintenance Berkala',
                            'is_promo' => $row['is_promo'] ? 1 : 0,
                            'harga_promo' => $row['harga_promo'] ?: NULL,
                            'promo_label' => $row['promo_label'] ?: 'Promo Spesial',
                            'deskripsi' => $row['deskripsi'],
                            'gambar' => $row['gambar'] ?: $existing_product->gambar
                        );

                        if ($this->Produk_model->perbarui_produk($existing_product->id, $update_data)) {
                            $updated_count++;
                        } else {
                            $errors[] = "Baris " . ($row_index + 2) . ": Gagal update produk";
                            $error_count++;
                        }
                        continue;
                    }
                }

                // Tambah produk baru
                $new_product_data = array(
                    'nama_produk' => $row['nama_produk'],
                    'kategori' => $row['kategori'],
                    'harga' => $row['harga'],
                    'kualitas' => $row['kualitas'] ?: 'Kualitas Premium',
                    'garansi' => $row['garansi'] ?: 'Garansi Resmi',
                    'instalasi' => $row['instalasi'] ?: 'Instalasi Gratis',
                    'support' => $row['support'] ?: 'Support 24/7',
                    'maintenance' => $row['maintenance'] ?: 'Maintenance Berkala',
                    'is_promo' => $row['is_promo'] ? 1 : 0,
                    'harga_promo' => $row['harga_promo'] ?: NULL,
                    'promo_label' => $row['promo_label'] ?: 'Promo Spesial',
                    'deskripsi' => $row['deskripsi'],
                    'gambar' => $row['gambar'] ?: '',
                    'tanggal_dibuat' => date('Y-m-d H:i:s')
                );

                if ($this->Produk_model->tambah_produk($new_product_data)) {
                    $success_count++;
                } else {
                    $errors[] = "Baris " . ($row_index + 2) . ": Gagal tambah produk";
                    $error_count++;
                }

            } catch (Exception $e) {
                $errors[] = "Baris " . ($row_index + 2) . ": " . $e->getMessage();
                $error_count++;
            }
        }

        $message = "Berhasil: {$success_count}, Update: {$updated_count}, Skip: {$skipped_count}, Error: {$error_count}";
        
        if (!empty($errors)) {
            $message .= ". Detail error: " . implode('; ', array_slice($errors, 0, 10));
            
            // Log semua error untuk debugging
            foreach ($errors as $error) {
                log_message('error', 'Import Error: ' . $error);
            }
        }
        
        // Log summary untuk debugging
        log_message('info', 'Import Summary: ' . $message);
        log_message('info', 'Total rows processed: ' . count($import_data));
        log_message('info', 'Images uploaded: ' . count($uploaded_images));

        return array(
            'success' => $error_count === 0,
            'message' => $message,
            'success_count' => $success_count,
            'updated_count' => $updated_count,
            'skipped_count' => $skipped_count,
            'error_count' => $error_count,
            'errors' => $errors
        );
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
