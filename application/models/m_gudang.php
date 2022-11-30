<?php

class M_gudang extends CI_MODEL
{
    public function get_data()
    {
        return $this->db->get('obat')->result_array();
    }
    public function ambil_faktur()
    {
        return $this->db->get('faktur')->result_array();
    }
    public function ambil_pasien()
    {
        return $this->db->get('pasien')->result_array();
    }
    public function tambah_data($data)
    {
        return $this->db->insert('obat', $data);
    }
    public function get_pasien($data)
    {
        return $this->db->insert('pasien', $data);
    }
    public function tambah_pasien($data)
    {
        return $this->db->insert('pasien', $data);
    }
    public function hapus_obat($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function hapus_faktur($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function hapus_pasien($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function edit_pasien($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function update_pasien($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function detail_faktur($id = NULL)
    {
        $queryGudang = "SELECT faktur_detail.*, obat
        FROM faktur_detail JOIN obat 
        ON faktur_detail.id_obat = obat.id_obat
        WHERE faktur_detail.no_faktur = $id";
        // return $this->db->get('faktur_detail')->result_array($id);
        $detail = $this->db->query($queryGudang)->result_array();
        return $detail;
    }

    public function detail_riwayat($id)
    {
        $this->db->select('*');
        $this->db->from('riwayat_detail');
        $this->db->join('obat', 'obat.id_obat = riwayat_detail.id_obat');
        $this->db->join('riwayat', 'riwayat.id_riwayat = riwayat_detail.id_riwayat');
        $this->db->where('riwayat_detail.id_riwayat', $id);
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function riwayat($id)
    {
        return $this->db->get('riwayat')->result_array($id);
    }

    public function detail($id = NULL)
    {
        $query = $this->db->get_where('riwayat', array('id_riwayat' => $id))->row();
        return $query;
    }
}
