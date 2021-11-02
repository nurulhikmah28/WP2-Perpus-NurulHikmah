<?php

defined('BASEPATH') or exit('no direct script access allowed');

class Tokosepatu extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Toko Sepatu';
        $this->load->view('form-toko-sepatu', $data);
    }
    public function cetak()
    {
        $this->load->model('ModelTokoSepatu');
        $data = [
            'nama' => $this->input->post('nama'),
            'telp' => $this->input->post('telp'),
            'merk' => $this->input->post('merk'),
            'ukuran' => $this->input->post('ukuran'),
            'harga_sepatu' => $this->ModelTokoSepatu->harga($this->input->post('merk'))
        ];
        $this->load->view('data-toko-sepatu', $data);
    }
}

?>