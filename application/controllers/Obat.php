<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends CI_Controller
{
	public function index()
	{
		$this->load->model('m_gudang');
		$data['obat'] = $this->m_gudang->get_data();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('obat/index', $data);
		$this->load->view('templates/footer');
	}
	public function faktur()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('faktur/obat');
		$this->load->view('templates/footer');
	}

	public function delete($id)
	{
		$where = array('id_obat' => $id);
		$this->m_gudang->hapus_obat($where, 'obat');
		$this->session->set_flashdata('message', '<div
			class="alert alert-danger alert-dismissible"
			role="alert">
			<button type="button" class="close"
				data-dismiss="alert" aria-label="Close"><spa
			aria-hidden="true">&times;</span></button>
			Data Berhasil Dihapus!
		</div>');

		redirect('welcome/obat');
	}
	public function edit($id)
	{
		$where = array('id_obat' => $id);
		$data['obat'] = $this->m_gudang->edit_data($where, 'obat')->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit', $data);
		$this->load->view('templates/footer');
	}
	public function update($id)
	{
		$where = array('id_obat' => $id);
		$obat    = $this->input->post('obat');
		$harga    = $this->input->post('harga');
		$stok    = $this->input->post('stok');


		$data = array(
			'obat' => $obat,
			'harga' => $harga,
			'stok' => $stok,

		);
		$where = array(
			'id_obat' => $id
		);
		$this->m_gudang->update_data($where, $data, 'obat');
		$this->session->set_flashdata('message', '<div
			class="alert alert-info alert-dismissible"
			role="alert">
			<button type="button" class="close"
				data-dismiss="alert" aria-label="Close"><span
				aria-hidden="true">&times;</span></button>
			Data Berhasil Diupdate!
			</div>');
		redirect('welcome/obat');
	}
}
