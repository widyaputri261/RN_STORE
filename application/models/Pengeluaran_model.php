<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengeluaran_model extends CI_Model
{

    public function getPengeluaran()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('pengeluaran');
    }

    public function insertPengeluaran()
    {
        $title = $this->input->post('title');
        $price = $this->input->post('price');
        $date = $this->input->post('date');
        $ket = $this->input->post('ket');

        $data = [
            'title' => $title,
            'price' => $price,
            'ket' => $ket,
            'date' => $date,
        ];
        $this->db->insert('pengeluaran', $data);
    }

    public function getPengeluaranById($id)
    {
        return $this->db->get_where('pengeluaran', ['id' => $id])->row_array();  
    }

    public function updatePengeluaran($id)
    {
        $title = $this->input->post('title');
        $price = $this->input->post('price');
        $date = $this->input->post('date');
        $ket = $this->input->post('ket');

        $data = [
            'title' => $title,
            'price' => $price,
            'ket' => $ket,
            'date' => $date,
        ];
        $this->db->where('id', $id);
        $this->db->update('pengeluaran', $data);
    }

    public function sum_all_keluar()
    {
        $hasil=$this->db->query("SELECT SUM(price) as price FROM pengeluaran");
        return $hasil;
    }
}