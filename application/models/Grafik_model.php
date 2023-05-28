<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Grafik_model extends CI_Model
{

    function statistik_stok()
    {
        $this->db->select("SUM(stock) AS total, categories.name AS categoriesName");
        $this->db->join("categories", "products.category=categories.id");
        $this->db->order_by("products.id", "desc");
        $this->db->group_by("categories.name");
        return $this->db->get("products")->result();
    }

    function statistik_jual()
    {
        $this->db->select("SUM(total_price) AS total, DATE_FORMAT(date_input,'%d %M %Y') AS date");
        $this->db->where('invoice.pay_status', 'settlement');
        $this->db->order_by("invoice.id", "desc");
        $this->db->group_by("date_input");
        return $this->db->get("invoice")->result();
    }

    function statistik_pesan()
    {
        $this->db->select("SUM(total) AS total, DATE_FORMAT(date_input,'%d %M %Y') AS date");
        $this->db->order_by("order_paket.id", "desc");
        $this->db->group_by("date_input");
        return $this->db->get("order_paket")->result();
    }
}

/* End of file Grafik_model.php */
