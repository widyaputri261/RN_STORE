<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Fotografi_model extends CI_Model
{

    //Paket
    public function get()
    {
        $this->db->select("paket.id AS paketId, paket.title AS paketTitle, paket.price AS paketPrice, paket.date_submit AS paketDate, paket.img AS paketImg, paket.publish AS paketPublish");
        $this->db->order_by("paket.id", "desc");
        return $this->db->get("paket");
    }

    public function getPaket($number, $offset)
    {
        $this->db->select("paket.id AS paketId, paket.title AS paketTitle, paket.price AS paketPrice, paket.date_submit AS paketDate, paket.img AS paketImg, paket.publish AS paketPublish");
        $this->db->order_by("paket.id", "desc");
        return $this->db->get("paket", $number, $offset);
    }

    public function getSearchPaket($key, $number, $offset)
    {
        $this->db->select("paket.id AS paketId, paket.title AS paketTitle, paket.price AS paketPrice, paket.date_submit AS paketDate, paket.img AS paketImg, paket.publish AS paketPublish");
        $this->db->like('paket.title', $key);
        $this->db->or_like('paket.price', $key);
        $this->db->order_by("paket.id", "desc");
        return $this->db->get("paket", $number, $offset);
    }

    public function searchPaket($q, $type = "")
    {
        if ($type == "") {
            $this->db->where('publish', 1);
            $this->db->like('title', $q);
            return $this->db->get('paket');
        } else if ($type == "az") {
            $this->db->where('publish', 1);
            $this->db->order_by('title', 'asc');
            $this->db->like('title', $q);
            return $this->db->get('paket');
        } else if ($type == "za") {
            $this->db->where('publish', 1);
            $this->db->order_by('title', 'desc');
            $this->db->like('title', $q);
            return $this->db->get('paket');
        } else if ($type == "pricemax") {
            $this->db->where('publish', 1);
            $this->db->order_by('price', 'asc');
            $this->db->like('title', $q);
            return $this->db->get('paket');
        } else if ($type == "pricemin") {
            $this->db->where('publish', 1);
            $this->db->order_by('price', 'desc');
            $this->db->like('title', $q);
            return $this->db->get('paket');
        }
    }

    public function searchPaketPrice($q, $min, $max)
    {
        if ($max == "0") {
            $this->db->where('publish', 1);
            $this->db->where('price >=', $min);
            $this->db->like('title', $q);
            return $this->db->get('paket');
        } else {
            $this->db->where('publish', 1);
            $this->db->where('price >=', $min);
            $this->db->where('price <=', $max);
            $this->db->like('title', $q);
            return $this->db->get('paket');
        }
    }

    public function getAllPaket($type = "")
    {
        if ($type == "") {
            $this->db->where('publish', 1);
            $this->db->order_by('id', 'desc');
            return $this->db->get('paket');
        } else if ($type == "az") {
            $this->db->where('publish', 1);
            $this->db->order_by('title', 'asc');
            return $this->db->get('paket');
        } else if ($type == "za") {
            $this->db->where('publish', 1);
            $this->db->order_by('title', 'desc');
            return $this->db->get('paket');
        } else if ($type == "pricemax") {
            $this->db->where('publish', 1);
            $this->db->order_by('price', 'asc');
            return $this->db->get('paket');
        } else if ($type == "pricemin") {
            $this->db->where('publish', 1);
            $this->db->order_by('price', 'desc');
            return $this->db->get('paket');
        } 
    }

    // public function getAllPaketByCategory($c, $type = "")
    // {
    //     if ($type == "") {
    //         $this->db->where('publish', 1);
    //         $this->db->where('category', $c);
    //         $this->db->order_by('id', 'desc');
    //         return $this->db->get('paket');
    //     } else if ($type == "az") {
    //         $this->db->where('publish', 1);
    //         $this->db->where('category', $c);
    //         $this->db->order_by('title', 'asc');
    //         return $this->db->get('paket');
    //     } else if ($type == "za") {
    //         $this->db->where('publish', 1);
    //         $this->db->where('category', $c);
    //         $this->db->order_by('title', 'desc');
    //         return $this->db->get('paket');
    //     } else if ($type == "pricemax") {
    //         $this->db->where('publish', 1);
    //         $this->db->where('category', $c);
    //         $this->db->order_by('price', 'asc');
    //         return $this->db->get('paket');
    //     } else if ($type == "pricemin") {
    //         $this->db->where('publish', 1);
    //         $this->db->where('category', $c);
    //         $this->db->order_by('price', 'desc');
    //         return $this->db->get('paket');
    //     } else if ($type == "promo") {
    //         $this->db->where('publish', 1);
    //         $this->db->where('category', $c);
    //         $this->db->where('promo_price != 0');
    //         $this->db->order_by('id', 'desc');
    //         return $this->db->get('paket');
    //     }
    // }

    public function getAllPaketPrice($min, $max)
    {
        if ($max == "0") {
            $this->db->where('publish', 1);
            $this->db->where('price >=', $min);
            return $this->db->get('paket');
        } else {
            $this->db->where('publish', 1);
            $this->db->where('price >=', $min);
            $this->db->where('price <=', $max);
            return $this->db->get('paket');
        }
    }

    // public function getAllPaketByCategoryPrice($cat, $min, $max)
    // {
    //     if ($max == "0") {
    //         $this->db->where('publish', 1);
    //         $this->db->where('category', $cat);
    //         $this->db->where('price >=', $min);
    //         return $this->db->get('paket');
    //     } else {
    //         $this->db->where('publish', 1);
    //         $this->db->where('category', $cat);
    //         $this->db->where('price >=', $min);
    //         $this->db->where('price <=', $max);
    //         return $this->db->get('paket');
    //     }
    // }

    // public function getImgPaketBySlug($slug)
    // {
    //     $paket = $this->db->get_where('paket', ['slug' => $slug])->row_array();
    //     return $this->db->get_where('img_paket', ['id_paket' => $paket['id']]);
    // }

    public function getPaketLimit()
    {
        $this->db->select("*");
        $this->db->from("paket");
        $this->db->order_by("id", "desc");
        $this->db->limit(12);
        $this->db->where('publish', 1);
        return $this->db->get();
    }

    // public function getBestPaketLimit()
    // {
    //     $this->db->select("*");
    //     $this->db->from("paket");
    //     $this->db->order_by("transaction", "desc");
    //     $this->db->limit(6);
    //     $this->db->where('publish', 1);
    //     return $this->db->get();
    // }

    public function getPaketById($id)
    {
        $this->db->select("*,paket.id AS paketId, paket.slug AS slugP");
        $this->db->from("paket");
        $this->db->order_by("paket.id", "desc");
        $this->db->where('paket.id', $id);
        return $this->db->get()->row_array();
    }

    public function getPaketBySlug($slug)
    {
        $this->db->select("*,paket.id AS paketId, paket.slug AS slugP");
        $this->db->from("paket");
        $this->db->order_by("paket.id", "desc");
        $this->db->where('paket.slug', $slug);
        return $this->db->get()->row_array();
    }

    public function uploadImg()
    {
        $config['upload_path'] = './assets/images/paket/';
        $config['allowed_types'] = 'jpg|png|jpeg|image/png|image/jpg|image/jpeg';
        $config['max_size'] = '2048';
        $config['file_name'] = round(microtime(true) * 1000);

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('img')) {
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }

    // public function insertImg($upload, $id)
    // {
    //     $data = [
    //         'id_paket' => $id,
    //         'img' => $upload['file']['file_name']
    //     ];
    //     $this->db->insert('img_paket', $data);
    // }

    public function insertPaket($upload)
    {
        $title = $this->input->post('title');
        $price = $this->input->post('price');
        $img = $upload['file']['file_name'];
        $description = $this->input->post('description');
        $date_submit = date("Y-m-d H:i:s");
        $publish = $this->input->post('status');
        function textToSlug($text = '')
        {
            $text = trim($text);
            if (empty($text)) return '';
            $text = preg_replace("/[^a-zA-Z0-9\-\s]+/", "", $text);
            $text = strtolower(trim($text));
            $text = str_replace(' ', '-', $text);
            $text = $text_ori = preg_replace('/\-{2,}/', '-', $text);
            return $text;
        }
        $slug =  textToSlug($title);

        $data = [
            "title" => $title,
            "price" => $price,
            "img" => $img,
            "description" => $description,
            "date_submit" => $date_submit,
            "publish" => $publish,
            "slug" => $slug
        ];
        $this->db->insert('paket', $data);
    }

    public function updatePaket($img, $id)
    {
        $title = $this->input->post('title');
        $price = $this->input->post('price');
        $img = $img;
        $description = $this->input->post('description');
        $publish = $this->input->post('status');
        function textToSlug($text = '')
        {
            $text = trim($text);
            if (empty($text)) return '';
            $text = preg_replace("/[^a-zA-Z0-9\-\s]+/", "", $text);
            $text = strtolower(trim($text));
            $text = str_replace(' ', '-', $text);
            $text = $text_ori = preg_replace('/\-{2,}/', '-', $text);
            return $text;
        }
        $slug =  textToSlug($title);

        $data = [
            "title" => $title,
            "price" => $price,
            "img" => $img,
            "description" => $description,
            "publish" => $publish,
            "slug" => $slug
        ];

        $this->db->where('id', $id);
        $this->db->update('paket', $data);
    }

    // public function updateViewer($slug)
    // {
    //     $result = $this->db->get_where('paket', ['slug' => $slug])->row_array();
    //     $newV = (int)$result['viewer'] + 1;
    //     $this->db->set('viewer', $newV);
    //     $this->db->where('id', $result['id']);
    //     $this->db->update('paket');
    // }

    //Fotografer
    public function getFotografer()
    {
        return $this->db->get('fotografer');
    }

    public function getFotograferLimit()
    {
        $this->db->limit(6);
        return $this->db->get('fotografer');
    }

    public function getFotograferById($id)
    {
        return $this->db->get_where('fotografer', ['id' => $id])->row_array();
    }

    public function uploadIcon()
    {
        $config['upload_path'] = './assets/images/fotografer/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['file_name'] = round(microtime(true) * 1000);

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('img')) {
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }

    public function insertFotografer($upload)
    {
        $name = $this->input->post('name');
        $file = $upload['file']['file_name'];
        $jk = $this->input->post('jk');
        $alamat = $this->input->post('alamat');
        $telp = $this->input->post('no_telp');

        $data = [
            'name' => $name,
            'img' => $file,
            'jk' => $jk,
            'alamat' => $alamat,
            'no_telp' => $telp
        ];
        $this->db->insert('fotografer', $data);
    }

    public function updateFotografer($img, $id)
    {
        $name = $this->input->post('name');
        $jk = $this->input->post('jk');
        $alamat = $this->input->post('alamat');
        $telp = $this->input->post('no_telp');
        $data = [
            'name' => $name,
            'img' => $img,
            'jk' => $jk,
            'alamat' => $alamat,
            'no_telp' => $telp
        ];
        $this->db->where('id', $id);
        $this->db->update('fotografer', $data);
    }

    //jadwal

    //lokasi
    // public function getLokasi()
    // {
    //     $this->db->order_by("lokasi.id", "desc");
    //     return $this->db->get("lokasi");
    // }

    // public function getLokasiById($id)
    // {
    //     return $this->db->get_where('lokasi', ['id' => $id])->row_array();
    // }

    // public function getRegency()
    // {
    //     return $this->db->get("regencies");
    // }

    // public function insertLokasi()
    // {
    //     $regency = $this->input->post('regency');
    //     $price = $this->input->post('price');
    //     $data = [
    //         "regency" => $regency,
    //         "price" => $price
    //     ];
    //     $this->db->insert('lokasi', $data);
    // }

    // public function editLokasi($id)
    // {
    //     $regency = $this->input->post('regency');
    //     $price = $this->input->post('price');
    //     $data = [
    //         'regency' => $regency,
    //         'price' => $price
    //     ];
    //     $this->db->where('id', $id);
    //     $this->db->update('lokasi', $data);
    // }

    //order fotografi

    public function getRegency()
    {
        $this->db->order_by("regencies.id", "desc");
        return $this->db->get("regencies");
    }

    public function getOrdersPaket($number, $offset)
    {
        $this->db->order_by("order_paket.id", "desc");
        return $this->db->get("order_paket", $number, $offset);
    }

    public function getDataInvoice($id){
        return $this->db->get_where('order_paket', ['invoice_code' => $id])->row_array();
    }

    public function invoice_code()
    {
        $sql = "SELECT MAX(MID(invoice_code,9,4)) AS invoice_code FROM order_paket WHERE MID(invoice_code,3,6) = DATE_FORMAT(CURDATE(), '%y%m%d')";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $n = ((int)$row->invoice_code) + 1;
            $no = sprintf("%'.04d", $n);
        } else {
            $no = "0001";
        }
        $invoice = "MP" . date('ymd') . $no;
        return $invoice;
    }

    public function insertOrderPaket($post)
    {
        $params = [
            'invoice_code' => $post['invoice'],
            'nama' => $post['nama'],
            'email' => $post['email'],
            'telp' => $post['telp'],
            'date_input' => $post['date_input'],
            'paket' => $post['paket_name'],
            'price' => $post['price'],
            'jenis_acara' => $post['jenis_acara'],
            'lokasi' => $post['lokasi'],
            'alamat' => $post['alamat'],
            'kabupaten' => $post['regency'],
            'biaya_tambahan' => $post['biayaTambahan'],
            'date' => $post['date'],
            'time' => $post['time'],
            'total' => $post['total'],
            'jml_bayar' =>$post['jml_bayar'],
            'kembalian' =>$post['kembalian'],
            'status' => '0'
        ];
        $this->db->insert('order_paket', $params);
    }

    public function sum_all_pesan()
    {
        $hasil=$this->db->query("SELECT SUM(total) as total FROM order_paket");
        return $hasil;
    }
}

/* End of file Fotografi_model.php */
