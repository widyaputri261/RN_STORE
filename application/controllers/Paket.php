<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model('Categories_model');
		$this->load->model('Fotografi_model');
	}

	public function index(){
		$ob = @$_GET['ob'];
		$maxprice = @$_GET['maxprice'];
		$minprice = @$_GET['minprice'];
		$promo = @$_GET['promo'];
		if($ob != NULL){
			if($ob == "latest"){
				$data['titleHead'] = 'Urutkan > Terbaru';
				$data['paket'] = $this->Fotografi_model->getAllPaket("");
			}else if($ob == "az"){
				$data['titleHead'] = 'Urutkan > Abjad A-Z';
				$data['paket'] = $this->Fotografi_model->getAllPaket("az");
			}else if($ob == "za"){
				$data['titleHead'] = 'Urutkan > Abjad Z-A';
				$data['paket'] = $this->Fotografi_model->getAllPaket("za");
			}else if($ob == "pmin"){
				$data['titleHead'] = 'Urutkan > Harga Terendah';
				$data['paket'] = $this->Fotografi_model->getAllPaket("pricemax");
			}else if($ob == "pmax"){
				$data['titleHead'] = 'Urutkan > Harga Tertinggi';
				$data['paket'] = $this->Fotografi_model->getAllPaket("pricemin");
			}
		}else if($minprice != NULL || $maxprice != NULL){
			if($minprice == ""){
				$minprice = "0";
				$data['titleHead'] = 'Harga > ' . $minprice . ' - ' . $maxprice;
			}else if($maxprice == ""){
				$maxprice = "0";
				$data['titleHead'] = 'Harga > ' . $minprice . " -->";
			}else if($maxprice < $minprice){
				$maxprice = "0";
				$data['titleHead'] = 'Harga > ' . $minprice . " -->";
			}else{
                $data['titleHead'] = 'Harga > ' . $minprice . ' - ' . $maxprice;
            }
			$data['paket'] = $this->Fotografi_model->getAllPaketPrice($minprice, $maxprice);
		}else if($promo != NULL && $promo == "true"){
			$data['titleHead'] = 'Penawaran > Promo';
			$data['paket'] = $this->Fotografi_model->getAllPaket("promo");
		}else{
			$data['titleHead'] = '';
			$data['paket'] = $this->Fotografi_model->getAllPaket("");
		}
		$data['title'] = 'Semua Paket - ' . $this->Settings_model->general()["app_name"];
		$data['css'] = 'products';
		$data['responsive'] = 'product-responsive';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('page/paket', $data);
		$this->load->view('templates/footerv2');
	}

	public function detail_paket($slug){
		$getPaket = $this->Fotografi_model->getPaketBySlug($slug);
		
			$this->Fotografi_model->updateViewer($slug);
			$data['title'] = $getPaket['title'] . ' - ' . $this->Settings_model->general()["app_name"];
			$data['css'] = 'detail';
			$data['responsive'] = '';
			$data['paket'] = $getPaket;
			$data['img'] = $this->Fotografi_model->getImgPaketBySlug($slug);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar');
			$this->load->view('page/detail_paket', $data);
			$this->load->view('templates/footerv2');
		
	}
}

	

/* End of file Paket.php */
