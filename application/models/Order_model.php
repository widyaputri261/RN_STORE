<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends CI_Model {

    public function getCartUser(){
        $id = $this->session->userdata('id');
        return $this->db->get_where('cart', ['user' => $id]);
    }

    public function getCartStock(){
        $id = $this->session->userdata('id');
        $this->db->where('qty > stock' );
        return $this->db->get_where('cart', ['user' => $id]);
    }

    public function getCart(){
        $id = $this->session->userdata('id');
        $this->db->where('qty <= stock' );
        return $this->db->get_where('cart', ['user' => $id]);
    }
    
    // public function getCartPaketUser(){
    //     $id = $this->session->userdata('id');
    //     return $this->db->get_where('cart_paket', ['user' => $id]);
    // }

    public function getOrders($number,$offset){
        $this->db->order_by('id', 'desc');
        return $this->db->get('invoice',$number,$offset);
    }

    // public function getOrdersPaket($number,$offset){
    //     $this->db->order_by('id', 'desc');
    //     return $this->db->get('order_paket',$number,$offset);
    // }

    public function getOrderByInvoice($id){
        return $this->db->get_where('transaction', ['id_invoice' => $id]);
    }

    public function getDataInvoice($id){
        return $this->db->get_where('invoice', ['invoice_code' => $id])->row_array();
    }

    public function uploadFile(){
        $config['upload_path'] = './assets/images/confirmation/';
        $config['allowed_types'] = 'jpg|png|jpeg|pdf';
        $config['max_size'] = '2048';
        $config['file_name'] = round(microtime(true)*1000);

        $this->load->library('upload', $config);
        if($this->upload->do_upload('file')){
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        }else{
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }

    public function insertPaymentConfirmation($upload){
        $invoice = $this->input->post('invoice', true);
        $file = $upload['file']['file_name'];
        $data = [
            'invoice' => $invoice,
            'file' => $file
        ];
        $this->db->insert('payment_proof', $data);
    }

    public function sum_all_jual()
    {
        $hasil=$this->db->query("SELECT SUM(total_price) as total_price FROM invoice WHERE pay_status='settlement'");
        return $hasil;
    }
}