<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class Cetak extends CI_Controller
{
    public function index($id)
    {
        $data['riwayat'] = $this->db->get_where('riwayat', ['id_riwayat' => $id])->row_array();

        // $data['riwayat'] = $this->db->get('riwayat')->result($id);
        $this->load->model('m_gudang');
        $detail = $this->m_gudang->detail_riwayat($id);
        $data['detail'] = $detail;

        $this->load->view('print.php', $data);
    }
}
