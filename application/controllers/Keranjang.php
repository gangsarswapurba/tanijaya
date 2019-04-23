<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('header');

        $this->load->view('cart');

        $this->load->view('footer');
    }

public function tambah()
    {

      $product_id =  $this->input->get('product_id');

      $this->load->model('Produk_model');
      $product_detail = $this->Produk_model->get_product_detail($product_id);

      $data = array(
              'id'         => $product_id,
              'qty'      =>  1,
              'price'   => $product_detail['harga'],
              'name'  => $product_detail['nama'],
              'kota'    => $product_detail['kota'],
              'per'     => $product_detail['per'],
              'satuan' => $product_detail['satuan'],
              'foto'    => $product_detail['foto']
      );

      $this->cart->insert($data);

      // $this->cart->destroy();

      redirect('/keranjang');

    }

    public function keluarkan($row_id)
    {

      $this->cart->remove($row_id);

      redirect('/keranjang');
    }
}
