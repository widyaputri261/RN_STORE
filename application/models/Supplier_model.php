<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier_model extends CI_Model
{

    public function getSupplier()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('supplier');
    }

    public function insertSupplier()
    {
        $nama = $this->input->post('nama');
        $jk = $this->input->post('jk');
        $no_telp = $this->input->post('no_telp');
        $alamat = $this->input->post('alamat');

        $data = [
            'nama' => $nama,
            'jk' => $jk,
            'no_telp' => $no_telp,
            'alamat' => $alamat,

        ];
        $this->db->insert('supplier', $data);
    }

    public function getSupplierById($id)
    {
        return $this->db->get_where('supplier', ['id' => $id])->row_array();  
    }

    public function updateSupplier($id)
    {
        $nama = $this->input->post('nama');
        $jk = $this->input->post('jk');
        $no_telp = $this->input->post('no_telp');
        $alamat = $this->input->post('alamat');
        $data = [
            'nama' => $nama,
            'jk' => $jk,
            'no_telp' => $no_telp,
            'alamat' => $alamat,

        ];
        $this->db->where('id', $id);
        $this->db->update('supplier', $data);
    }

}