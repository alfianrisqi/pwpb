<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan extends CI_Controller
{
    public function index()
    {
        $data['pasien'] = $this->db->get('pasien')->result_array();
        $data['obat'] = $this->db->get('obat')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('pemesanan', $data);
            $this->load->view('templates/footer');
        } else {
        }
    }

    public function tambah()
    {
        $pasien = $this->input->post('nama_pasien');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telp');
        $tanggal = date('Y-m-d', time());
        $obat   = $this->input->post('obat');
        $stok = $this->input->post('stok');
        $obat = $this->input->post('obat');
        $harga = $this->input->post('harga');
        $no_pemesanan = $this->input->post('no_pemesanan');

        $data = [
            'nama_pasien' => $pasien,
            'alamat' => $alamat,
            'no_telp' => $no_telp,
            'tanggal' => $tanggal,
            'id_riwayat' => $no_pemesanan,
        ];

        $this->db->insert('riwayat', $data);

        foreach ($obat as $key => $obt) {
            $jml_beli = $stok[$key];

            $data_riwayat_detail =  [
                'tanggal'       => $tanggal,
                'id_obat'       => $obt,
                'jumlah'        => $stok[$key],
                'total_harga'   => $harga[$key] * $stok[$key],
                'harga'         => $harga[$key],
                'id_riwayat'     => $no_pemesanan
            ];

            $this->db->insert('riwayat_detail', $data_riwayat_detail);

            // tambah stok
            $this->db->query("
            UPDATE obat
            SET stok = stok - $jml_beli
            WHERE id_obat=$obt 
            ");
        }
        $this->session->set_flashdata('message', '<div
			class="alert alert-info alert-dismissible"
			role="alert">
			<button type="button" class="close"
				data-dismiss="alert" aria-label="Close"><span
				aria-hidden="true">&times;</span></button>
			pesanan berhasil!
			</div>');
        redirect('riwayat/indexriwayat');
    }
}
