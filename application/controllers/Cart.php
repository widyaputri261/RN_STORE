<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Categories_model');
        $this->load->model('Products_model');
        $this->load->model('Fotografi_model');
        $this->load->model('Order_model');
        $this->load->helper('cookie');
        if (!$this->session->userdata('login')) {
            $cookie = get_cookie('e382jxndj');
            if ($cookie == NULL) {
                redirect(base_url() . 'login?redirect=cart');
            } else {
                $getCookie = $this->db->get_where('user', ['cookie' => $cookie])->row_array();
                if ($getCookie) {
                    $dataCookie = $getCookie;
                    $dataSession = [
                        'id' => $dataCookie['id']
                    ];
                    $this->session->set_userdata('login', true);
                    $this->session->set_userdata($dataSession);
                } else {
                    redirect(base_url() . 'login?redirect=cart');
                }
            }
        }
    }

    public function index()
    {
        $data['title'] = 'Keranjang - ' . $this->Settings_model->general()["app_name"];
        $data['css'] = 'cart';
        $data['responsive'] = '';
        $data['cart'] = $this->Order_model->getCartUser();
        $data['cartStock'] = $this->Order_model->getCart();
        $data['stock'] = $this->Order_model->getCartStock();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('page/cart', $data);
        $this->load->view('templates/footerv2');
    }

    //cart product
    public function add_to_cart()
    {
        $id = $this->input->post('id');
        $setting = $this->db->get('settings')->row_array();
        $result = $this->db->get_where('products', ['id' => $id])->row_array();
        $check = $this->db->get_where('cart', ['user' => $this->session->userdata('id'), 'id_product' => $result['id']])->row_array();
        $this->db->where('product', $id);
        $this->db->where('min <=', $check['qty'] + $this->input->post('qty'));
        $this->db->order_by('id', 'desc');
        $grosir = $this->db->get('grosir')->row_array();
        if ($setting['promo'] == 1) {
            if ($result['promo_price'] == 0) {
                if ($grosir) {
                    $price = $grosir['price'];
                } else {
                    $price = $result['price'];
                }
            } else {
                $price = $result['promo_price'];
            }
        } else {
            if ($grosir) {
                $price = $grosir['price'];
            } else {
                $price = $result['price'];
            }
        }
        if ($check) {
            $qtyupdate = intval($check['qty']) + intval($this->input->post('qty'));
            $chekStock = $this->db->get_where('products', ['id' => $id])->row_array();
            if ($qtyupdate > $chekStock['stock']) {
                $this->session->set_flashdata('error', "<script>
                swal({
                title: 'Stok produk tidak mencukupi',
                text: 'Kamu tidak bisa menambah jumlah barang di keranjang karena telah melebihi stok yang tersedia',
                icon: 'warning'
                });
                </script>");
            } else {
                $data = [
                    'user' => $this->session->userdata('id'),
                    'id_product' => $result['id'],
                    'product_name' => $result['title'],
                    'price' => $price,
                    'qty' => $qtyupdate,
                    'stock' => $result['stock'],
                    'img' => $result['img'],
                    'slug' => $result['slug'],
                    'weight' => $result['weight']
                ];
                $this->db->where('id', $check['id']);
                $this->db->update('cart', $data);
                $this->session->set_flashdata('success', "<script>
                    swal({
                        text: 'Berhasil ditambah ke Keranjang',
                        icon: 'success'
                    });
                    </script>");
            }
        } else {
            $data = [
                'user' => $this->session->userdata('id'),
                'id_product' => $result['id'],
                'product_name' => $result['title'],
                'price' => $price,
                'qty' => $this->input->post('qty'),
                'stock' => $result['stock'],
                'img' => $result['img'],
                'slug' => $result['slug'],
                'weight' => $result['weight']
            ];
            $this->db->insert('cart', $data);
            $this->session->set_flashdata('success', "<script>
                swal({
                    text: 'Berhasil ditambah ke Keranjang',
                    icon: 'success'
                });
            </script>");
        }
    }

    public function edit_qty()
    {
        $rowid = $this->input->post('rowid');
        $id = $this->input->post('id');
        $setting = $this->db->get('settings')->row_array();
        $result = $this->db->get_where('products', ['id' => $id])->row_array();
        $check = $this->db->get_where('cart', ['user' => $this->session->userdata('id'), 'id_product' => $result['id']])->row_array();
        $this->db->where('product', $id);
        $this->db->where('min <=', $check['qty'] + $this->input->post('qty'));
        $this->db->order_by('id', 'desc');
        $grosir = $this->db->get('grosir')->row_array();
        if ($setting['promo'] == 1) {
            if ($result['promo_price'] == 0) {
                if ($grosir) {
                    $price = $grosir['price'];
                } else {
                    $price = $result['price'];
                }
            } else {
                $price = $result['promo_price'];
            }
        } else {
            if ($grosir) {
                $price = $grosir['price'];
            } else {
                $price = $result['price'];
            }
        }
        $qtyupdate = intval($this->input->post('qty'));
        $chekStock = $this->db->get_where('products', ['id' => $id])->row_array();
        if ($qtyupdate > $chekStock['stock']) {
            $this->session->set_flashdata('error', "<script>
                swal({
                title: 'Stok produk tidak mencukupi',
                text: 'Kamu tidak bisa menambah jumlah barang di keranjang karena telah melebihi stok yang tersedia',
                icon: 'warning'
                });
                </script>");
        } else {
            if ($setting['promo'] == 1) {
                if ($result['promo_price'] == 0) {
                    if ($qtyupdate >= $grosir['min']) {
                        $data = [
                        
                            'price' => $grosir['price'],
                            'qty' => $qtyupdate,
                        ];
                        $this->db->where('id', $rowid);
                        $this->db->update('cart', $data);
                        $this->session->set_flashdata('success', "<script>
                                swal({
                                    text: 'Berhasil ditambah ke Keranjang',
                                    icon: 'success'
                                });
                                </script>");
                    }else{
                        $data = [
                            'price' => $result['price'],
                            'qty' => $qtyupdate,
                        ];
                        $this->db->where('id', $rowid);
                        $this->db->update('cart', $data);
                        $this->session->set_flashdata('success', "<script>
                                swal({
                                    text: 'Berhasil ditambah ke Keranjang',
                                    icon: 'success'
                                });
                                </script>");
                    }
                } else {
                    $data = [
                        'price' => $result['promo_price'],
                        'qty' => $qtyupdate,
                    ];
                    $this->db->where('id', $rowid);
                    $this->db->update('cart', $data);
                    $this->session->set_flashdata('success', "<script>
                            swal({
                                text: 'Berhasil ditambah ke Keranjang',
                                icon: 'success'
                            });
                            </script>");
                }
            } else {
                if ($qtyupdate >= $grosir['min']) {
                    $data = [
                    
                        'price' => $grosir['price'],
                        'qty' => $qtyupdate,
                    ];
                    $this->db->where('id', $rowid);
                    $this->db->update('cart', $data);
                    $this->session->set_flashdata('success', "<script>
                            swal({
                                text: 'Berhasil ditambah ke Keranjang',
                                icon: 'success'
                            });
                            </script>");
                }else{
                    $data = [
                        'price' => $result['price'],
                        'qty' => $qtyupdate,
                    ];
                    $this->db->where('id', $rowid);
                    $this->db->update('cart', $data);
                    $this->session->set_flashdata('success', "<script>
                            swal({
                                text: 'Berhasil ditambah ke Keranjang',
                                icon: 'success'
                            });
                            </script>");
                }
            }
        }
    }

    public function add_ket()
    {
        $rowid = $this->input->post('rowid');
        $ket = $this->input->post('ket');
        $this->db->set('ket', $ket);
        $this->db->where('id', $rowid);
        $this->db->update('cart');
    }

    public function get_item()
    {
        $id = $this->input->post('id');
        $return = $this->db->get_where('cart', ['id' => $id])->row_array();
        echo json_encode($return);
    }

    public function delete($id)
    {
        $this->db->where('user', $this->session->userdata('id'));
        $this->db->where('id', $id);
        $this->db->delete('cart');
        redirect(base_url() . 'cart');
    }

    public function delete_cart()
    {
        $this->db->where('user', $this->session->userdata('id'));
        $this->db->delete('cart');
        redirect(base_url() . 'cart');
    }

    //cart paket
    // public function add_to_cart_paket()
    // {
    //     $checkCart = $this->db->get_where('cart_paket', ['user' => $this->session->userdata('id')])->row_array();
    //     if ($checkCart == 0) {
    //         $id = $this->input->post('id');
    //         $setting = $this->db->get('settings')->row_array();
    //         $result = $this->db->get_where('paket', ['id' => $id])->row_array();
    //         $check = $this->db->get_where('cart_paket', ['user' => $this->session->userdata('id'), 'id_paket' => $result['id']])->row_array();
    //         $this->db->where('paket', $id);
    //         $this->db->where('min <=', $check['qty'] + $this->input->post('qty'));
    //         $this->db->order_by('id', 'desc');

    //         if ($setting['promo'] == 1) {
    //             if ($result['promo_price'] == 0) {
    //                 $price = $result['price'];
    //             } else {
    //                 $price = $result['promo_price'];
    //             }
    //         } else {
    //             $price = $result['price'];
    //         }

    //         if ($check) {
    //             $qtyupdate = intval($check['qty']) + intval($this->input->post('qty'));
    //             $data = [
    //                 'user' => $this->session->userdata('id'),
    //                 'id_paket' => $result['id'],
    //                 'paket_name' => $result['title'],
    //                 'price' => $price,
    //                 'qty' => $qtyupdate,
    //                 'img' => $result['img'],
    //                 'slug' => $result['slug'],
    //             ];
    //             $this->db->where('id', $check['id']);
    //             $this->db->update('cart_paket', $data);
    //         } else {
    //             $data = [
    //                 'user' => $this->session->userdata('id'),
    //                 'id_paket' => $result['id'],
    //                 'paket_name' => $result['title'],
    //                 'price' => $price,
    //                 'qty' => $this->input->post('qty'),
    //                 'img' => $result['img'],
    //                 'slug' => $result['slug'],
    //             ];
    //             $this->db->insert('cart_paket', $data);
    //         }
    //     }else{
    //         $this->session->set_flashdata('cek', "<script>
    //         swal({
    //         text: 'Anda memiliki transaksi pemesanan paket yang belum diselesaikan',
    //         icon: 'info'
    //         });
    //         </script>");
    //     }
    // }

    // public function add_ket_paket()
    // {
    //     $rowid = $this->input->post('rowid');
    //     $ket = $this->input->post('ket');
    //     $this->db->set('ket', $ket);
    //     $this->db->where('id', $rowid);
    //     $this->db->update('cart_paket');
    // }

    // public function get_item_paket()
    // {
    //     $id = $this->input->post('id');
    //     $return = $this->db->get_where('cart_paket', ['id' => $id])->row_array();
    //     echo json_encode($return);
    // }

    // public function delete_paket($id)
    // {
    //     $this->db->where('user', $this->session->userdata('id'));
    //     $this->db->where('id', $id);
    //     $this->db->delete('cart_paket');
    //     redirect(base_url() . 'cart');
    // }

    // public function delete_cart_paket()
    // {
    //     $this->db->where('user', $this->session->userdata('id'));
    //     $this->db->delete('cart_paket');
    //     redirect(base_url() . 'cart');
    // }
}
