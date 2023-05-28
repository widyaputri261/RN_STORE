<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Notification extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $params = array('server_key' => $this->Settings_model->general()["server_api_midtrans"], 'production' => $this->Settings_model->general()["midtrans_production"]);
        $this->load->library('veritrans');
        $this->veritrans->config($params);
        $this->load->helper('url');
    }

    public function index()
    {
        $json_result = file_get_contents('php://input');
        $result = json_decode($json_result);

        if ($result) {
            $notif = $this->veritrans->status($result->order_id);
        }

        error_log(print_r($result, TRUE));

        $transaction = $notif->transaction_status;
        $type = $notif->payment_type;
        $order_id = $notif->order_id;
        $fraud = $notif->fraud_status;

        if ($transaction == 'capture') {
            if ($type == 'credit_card') {
                if ($fraud == 'challenge') {
                    echo "Transaction order_id: " . $order_id . " is challenged by FDS";
                } else {
                    echo "Transaction order_id: " . $order_id . " successfully captured using " . $type;
                }
            }
        }else if ($transaction == 'settlement') {
            $this->db->set('pay_status', 'settlement');
            $this->db->where('invoice_code', $order_id);
            $this->db->update('invoice');
        }else if ($transaction == 'pending') {
            $this->db->set('pay_status', 'pending');
            $this->db->where('invoice_code', $order_id);
            $this->db->update('invoice');
        }else if ($transaction == 'deny') {
            $this->db->set('pay_status', 'cancel');
            $this->db->where('invoice_code', $order_id);
            $this->db->update('invoice');
        }
    }
}

/* End of file Controllername.php */
