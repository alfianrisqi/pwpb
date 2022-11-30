<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_riwayat extends CI_Controller
{
    public function index($id)
    {
        $data['riwayat'] = $this->db->get_where('riwayat', ['id_riwayat' => $id])->row_array();

        $detail = $this->m_gudang->detail_riwayat($id);
        $data['detail'] = $detail;
        // var_dump($detailGudang);
        // die;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('detail_riwayat', $data);
        $this->load->view('templates/footer');
    }
}
