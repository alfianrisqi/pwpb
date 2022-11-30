<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends CI_Controller
{
    public function index()
    {
        $data['riwayat'] = $this->db->get('riwayat')->result_array();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('riwayat/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail_riwayat($id)
    {
        $data['riwayat'] = $this->db->get_where('riwayat', ['id_riwayat' => $id])->row_array();

        $detail = $this->m_gudang->detail_riwayat($id);
        $data['detail'] = $detail;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('riwayat/detail_riwayat', $data);
        $this->load->view('templates/footer');
    }
}
