<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Faktur_gudang extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('tambah_obat');
        $this->load->view('templates/footer');
    }

    public function tambah_obat()
    {
        $stok        = $this->input->post('stok');
        $obat      = $this->input->post('obat');
        $harga     = $this->input->post('harga');

        $data = array(
            'stok'        => $stok,
            'obat'   => $obat,
            'harga'  => $harga,
        );
        $this->m_gudang->tambah_data($data, 'obat');
        $this->session->set_flashdata('message', '<div
			class="alert alert-info alert-dismissible"
			role="alert">
			<button type="button" class="close"
				data-dismiss="alert" aria-label="Close"><span
				aria-hidden="true">&times;</span></button>
			obat berhasil ditambahkan!
			</div>');
        redirect('welcome/obat');
    }
}
