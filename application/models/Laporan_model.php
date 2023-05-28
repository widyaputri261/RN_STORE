<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model {
    public function lapbeli_harian($tanggal, $bulan, $tahun)
    {
        $this->db->select("pembelian.id, pembelian.qty, pembelian.price_buy, pembelian.price_sell, pembelian.date, supplier.nama, products.id, products.title");
        $this->db->join("products", "pembelian.product_id=products.id");
        $this->db->join("supplier", "pembelian.supplier_id=supplier.id");
        $this->db->where('DAY(pembelian.date)', $tanggal);
        $this->db->where('MONTH(pembelian.date)', $bulan);
        $this->db->where('YEAR(pembelian.date)', $tahun);
        return $this->db->get("pembelian")->result();
    }

    public function lapbeli_bulanan($bulan, $tahun)
    {
        $this->db->select("pembelian.id, pembelian.qty, pembelian.price_buy, pembelian.price_sell, pembelian.date, supplier.nama, products.id, products.title");
        $this->db->join("products", "pembelian.product_id=products.id");
        $this->db->join("supplier", "pembelian.supplier_id=supplier.id");
        $this->db->where('MONTH(pembelian.date)', $bulan);
        $this->db->where('YEAR(pembelian.date)', $tahun);
        return $this->db->get("pembelian")->result();
    }

    public function lapbeli_tahunan($tahun)
    {
        $this->db->select("pembelian.id, pembelian.qty, pembelian.price_buy, pembelian.price_sell, pembelian.date, supplier.nama, products.id, products.title");
        $this->db->join("products", "pembelian.product_id=products.id");
        $this->db->join("supplier", "pembelian.supplier_id=supplier.id");
        $this->db->where('YEAR(pembelian.date)', $tahun);
        return $this->db->get("pembelian")->result();
    }

    public function lapjual_harian($tanggal, $bulan, $tahun)
    {
        $this->db->select("invoice.*, transaction.product_name, transaction.price, transaction.qty");
        $this->db->join("transaction", "invoice.invoice_code=transaction.id_invoice");
        $this->db->where('DAY(invoice.date_input)', $tanggal);
        $this->db->where('MONTH(invoice.date_input)', $bulan);
        $this->db->where('YEAR(invoice.date_input)', $tahun);
        $this->db->where('invoice.pay_status', 'settlement');
        return $this->db->get("invoice")->result();
    }

    public function lapjual_bulanan($bulan, $tahun)
    {
        $this->db->select("invoice.*, transaction.product_name, transaction.price, transaction.qty");
        $this->db->join("transaction", "invoice.invoice_code=transaction.id_invoice");
        $this->db->where('MONTH(invoice.date_input)', $bulan);
        $this->db->where('YEAR(invoice.date_input)', $tahun);
        $this->db->where('invoice.pay_status', 'settlement');
        return $this->db->get("invoice")->result();
    }

    public function lapjual_tahunan($tahun)
    {
        $this->db->select("invoice.*, transaction.product_name, transaction.price, transaction.qty");
        $this->db->join("transaction", "invoice.invoice_code=transaction.id_invoice");
        $this->db->where('YEAR(invoice.date_input)', $tahun);
        $this->db->where('invoice.pay_status', 'settlement');
        return $this->db->get("invoice")->result();
    }

    public function lappesan_harian($tanggal, $bulan, $tahun)
    {
        $this->db->select("order_paket.*");
        $this->db->where('DAY(order_paket.date_input)', $tanggal);
        $this->db->where('MONTH(order_paket.date_input)', $bulan);
        $this->db->where('YEAR(order_paket.date_input)', $tahun);
        return $this->db->get("order_paket")->result();
    }

    public function lappesan_bulanan($bulan, $tahun)
    {
        $this->db->select("order_paket.*");
        $this->db->where('MONTH(order_paket.date_input)', $bulan);
        $this->db->where('YEAR(order_paket.date_input)', $tahun);
        return $this->db->get("order_paket")->result();
    }

    public function lappesan_tahunan($tahun)
    {
        $this->db->select("order_paket.*");
        $this->db->where('YEAR(order_paket.date_input)', $tahun);
        return $this->db->get("order_paket")->result();
    }
}