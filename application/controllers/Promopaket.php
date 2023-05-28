<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Promopaket extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Categories_model');
        $this->load->model('Fotografi_model');
        $this->load->model('Settings_model');
        $this->load->model('Promo_model');
    }

    public function index()
    {
        $data['title'] = 'Promo - '.$this->Settings_model->general()["app_name"];
        $data['css'] = 'promo';
        $data['promo_paket'] = $this->Promo_model->getPromoPaket();
        $data['setting'] = $this->Settings_model->getSetting();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('page/promo_paket', $data);
        $this->load->view('templates/footerv2');
    }
}



/* End of file Promo.php */
