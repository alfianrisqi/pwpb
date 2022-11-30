<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_faktur extends CI_Controller
{
    public function index($id)
    {

        // $this->load->model('m_gudang');
        // $data['detail_faktur'] = $this->m_gudang->detail_faktur();
        // var_dump($data);

        $this->load->model('m_gudang', 'model');
        $detail = $this->model->detail_faktur($id);
        $data['detail'] = $detail;

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_faktur', $data);
        $this->load->view('templates/footer');
    }
}
