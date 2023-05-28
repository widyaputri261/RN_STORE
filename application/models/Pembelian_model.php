<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembelian_model extends CI_Model
{

    public function get($id = null)
    {
        $this->db->from('pembelian');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function del($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pembelian');
    }

    public function getPembelian($number, $offset)
    {
        $this->db->select("pembelian.id AS pembelianId, pembelian.qty AS pembelianQty, pembelian.price_buy AS pembelianPricebuy, pembelian.price_sell AS pembelianPricesell, pembelian.total AS pembelianTotal, pembelian.date AS pembelianDate, supplier.nama AS supplierNama, products.id, products.title AS productTitle");
        $this->db->join("products", "pembelian.product_id=products.id");
        $this->db->join("supplier", "pembelian.supplier_id=supplier.id");
        $this->db->order_by("pembelian.id", "desc");
        return $this->db->get("pembelian", $number, $offset);
    }

    public function insertPembelian($post)
    {
        $params = [
            'product_id' => $post['item_id'],
            'supplier_id' => $post['supplier'],
            'qty' => $post['qty'],
            'price_buy' => $post['price_buy'],
            'price_sell' => $post['price_sell'],
            'total' => $post['total'],
            'date' => $post['date'],

        ];
        $this->db->insert('pembelian', $params);
    }

    public function sum_all_beli()
    {
        $hasil=$this->db->query("SELECT SUM(total) as total FROM pembelian");
        return $hasil;
    }

}