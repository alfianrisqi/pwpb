<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Faktur extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('no_faktur', 'No_faktur', 'required');

        $this->load->model('m_gudang');
        $data['faktur'] = $this->m_gudang->ambil_faktur();

        $data['obat'] = $this->db->get('obat')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('tambah_faktur', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'supplier' => $this->input->post('supplier'),
                'no_faktur' => $this->input->post('no_faktur'),
                'tanggal_pembelian' => date('Y-m-d', time()),
            ];

            $this->db->insert('faktur', $data);
            // $id_faktur = $this->db->insert_id();
            $no_faktur = $this->input->post('no_faktur');

            $stok = $this->input->post('stok');
            $obat = $this->input->post('obat');
            $harga = $this->input->post('harga');

            $data_faktur_detail = array();
            /**
             * 1
             * 2
             * 3
             * [2000,5000,6000]
             * [miksagrip, bodrek, ultraflu]
             */

            foreach ($obat as $key => $obt) {
                $jml_beli = $stok[$key];

                $data_faktur_detail =  [
                    'id_obat' => $obt,
                    'jumlah' => $stok[$key],
                    'total_harga' => $harga[$key] * $stok[$key],
                    'harga' => $harga[$key],
                    'no_faktur' => $no_faktur
                ];

                $this->db->insert('faktur_detail', $data_faktur_detail);

                $this->db->query("
                UPDATE obat
                SET stok = stok + $jml_beli
                WHERE id_obat=$obt 
                ");
            }
            $this->session->set_flashdata('message', '<div
			class="alert alert-info alert-dismissible"
			role="alert">
			<button type="button" class="close"
				data-dismiss="alert" aria-label="Close"><span
				aria-hidden="true">&times;</span></button>
			suplayer sudah mengirimkan obat!
			</div>');

            redirect('welcome/faktur_obat');
        }
    }

    public function delete($id)
    {
        $where = array('id' => $id);
        $this->m_gudang->hapus_faktur($where, 'faktur');
        $this->session->set_flashdata('message', '<div
			class="alert alert-danger alert-dismissible"
			role="alert">
			<button type="button" class="close"
				data-dismiss="alert" aria-label="Close"><spa
			aria-hidden="true">&times;</span></button>
			supplayer Berhasil Dihapus!
		</div>');
        redirect('welcome/faktur_obat');
    }

    public function detail_faktur($id)
    {
        $this->load->model('m_gudang', 'model');
        $detail = $this->model->detail_faktur($id);
        $data['detail'] = $detail;

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('faktur/detail_faktur', $data);
        $this->load->view('templates/footer');
    }
}
