<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Categories_model');
        $this->load->model('Products_model');
        $this->load->model('Fotografi_model');
    }

    public function index($slug)
    {
        $page = $this->Settings_model->getPageBySlug($slug);
        if ($page == NULL) {
            redirect(base_url() . '404');
        } else {
            $data['title'] = $page['title'] . ' - ' . $this->Settings_model->general()["app_name"];
            $data['css'] = 'page';
            $data['page'] = $page;
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('page/page', $page);
            $this->load->view('templates/footer_notmpl');
        }
    }

    public function search()
    {
        $q = $_GET['q'];
        $ob = @$_GET['ob'];
        $maxprice = @$_GET['maxprice'];
        $minprice = @$_GET['minprice'];
        $promo = @$_GET['promo'];
        $condition = @$_GET['condition'];
        if ($ob != NULL) {
            if ($ob = "latest") {
                $data['titleHead'] = '|| Urutkan > Terbaru';
                $data['products'] = $this->Products_model->searchProducts($q, "");
                // $data['paket'] = $this->Fotografi_model->searchPaket($q, "");
            } else if ($ob = "az") {
                $data['titleHead'] = '|| Urutkan > Abjad A-Z';
                $data['products'] = $this->Products_model->searchProducts($q, "az");
                // $data['paket'] = $this->Fotografi_model->searchPaket($q, "az");
            } else if ($ob == "za") {
                $data['titleHead'] = '|| Urutkan > Abjad Z-A';
                $data['products'] = $this->Products_model->searchProducts($q, "za");
                // $data['paket'] = $this->Fotografi_model->searchPaket($q, "za");
            } else if ($ob == "pmin") {
                $data['titleHead'] = '|| Urutkan > Harga Terendah';
                $data['products'] = $this->Products_model->searchProducts($q, "pricemax");
                // $data['paket'] = $this->Fotografi_model->searchPaket($q, "pricemax");
            } else if ($ob == "pmax") {
                $data['titleHead'] = '|| Urutkan > Harga Tertinggi';
                $data['products'] = $this->Products_model->searchProducts($q, "pricemin");
                // $data['paket'] = $this->Fotografi_model->searchPaket($q, "pricemin");
            }
        } else if ($minprice != NULL || $maxprice != NULL) {
            if ($minprice == "") {
                $minprice = "0";
                $data['titleHead'] = '|| Harga >' . $minprice . ' - ' . $maxprice;
            } else if ($maxprice == "") {
                $maxprice = "0";
                $data['titleHead'] = '|| Harga >' . $minprice . " -->";
            } else if ($maxprice < $minprice) {
                $maxprice = "0";
                $data['titleHead'] = '|| Harga >' . $minprice . " -->";
            } else {
                $data['titleHead'] = '|| Harga >' . $minprice . ' - ' . $maxprice;
            }
            $data['products'] = $this->Products_model->searchProductsPrice($q, $minprice, $maxprice);
            // $data['paket'] = $this->Fotografi_model->searchPaketPrice($q, $minprice, $maxprice);
        } else {
            $data['titleHead'] = '';
            $data['products'] = $this->Products_model->searchProducts($q, "");
            // $data['paket'] = $this->Fotografi_model->searchPaket($q, "");
        }
        $data['title'] = 'Hasil pencarian : ' . $q;
        $data['css'] = 'products';
        $data['responsive'] = 'product-responsive';
        $data['q'] = $q;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('page/search', $data);
        $this->load->view('templates/footerv2');
    }
}

/* End of file Page.php */
