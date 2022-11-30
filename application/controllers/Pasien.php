<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
    public function index()
    {
        $this->load->model('m_gudang');
        $data['pasien'] = $this->m_gudang->ambil_pasien();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pasien/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_pasien()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('tambah_pasien');
        $this->load->view('templates/footer');

        $nama_pasien = $this->input->post('nama_pasien');
        $alamat      = $this->input->post('alamat');
        $no_telp     = $this->input->post('no_telp');

        $data = array(
            'nama_pasien'        => $nama_pasien,
            'alamat'   => $alamat,
            'no_telp'  => $no_telp,
        );
        $this->m_gudang->get_pasien($data, 'pasien');
        $this->session->set_flashdata('message', '<div
			class="alert alert-info alert-dismissible"
			role="alert">
			<button type="button" class="close"
				data-dismiss="alert" aria-label="Close"><span
				aria-hidden="true">&times;</span></button>
			pasien berhasil ditambahkan!
			</div>');
        redirect('pasien/indexpasien');
    }

    public function edit_pasien($id)
    {
        $where = array('id_pasien' => $id);
        $data['pasien'] = $this->m_gudang->edit_pasien($where, 'pasien')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_pasien', $data);
        $this->load->view('templates/footer');
    }
    public function update($id)
    {
        $where = array('id_pasien' => $id);
        $nama_pasien    = $this->input->post('nama_pasien');
        $alamat    = $this->input->post('alamat');
        $no_telp    = $this->input->post('no_telp');


        $data = array(
            'nama_pasien' => $nama_pasien,
            'alamat' => $alamat,
            'no_telp' => $no_telp,

        );
        $where = array(
            'id_pasien' => $id
        );
        $this->m_gudang->update_pasien($where, $data, 'pasien');
        $this->session->set_flashdata('message', '<div
			class="alert alert-info alert-dismissible"
			role="alert">
			<button type="button" class="close"
				data-dismiss="alert" aria-label="Close"><span
				aria-hidden="true">&times;</span></button>
			Data Berhasil Diupdate!
			</div>');
        redirect('pasien/indexpasien');
    }
    public function delete($id)
    {
        $where = array('id_pasien' => $id);
        $this->m_gudang->hapus_pasien($where, 'pasien');
        $this->session->set_flashdata('message', '<div
			class="alert alert-danger alert-dismissible"
			role="alert">
			<button type="button" class="close"
				data-dismiss="alert" aria-label="Close"><spa
			aria-hidden="true">&times;</span></button>
			Data Berhasil Dihapus!
		</div>');

        redirect('pasien/indexpasien');
    }
}
