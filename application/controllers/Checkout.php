<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

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

      if (!empty($this->input->post())) {

        $data = array(
					'no_hp' => $this->input->post('no_hp'),
					'alamat' => $this->input->post('alamat'),
				 	'nama' => $this->input->post('nama')
        );

        $this->load->model('Pembeli_model');
        $id_pembeli = $this->Pembeli_model->pembeli_baru($data);

        if ($id_pembeli) {

          $pesanan = array();
          $i = 0;
          foreach ($this->cart->contents() as $content) {
            // echo "<pre>";
            // print_r($content);
            // echo "</pre>";
            $pesanan[$i]['id_produk'] = $content['id'];
            $pesanan[$i]['qty'] = $content['qty'];
            $pesanan[$i]['subtotal'] = $content['subtotal'];
            $pesanan[$i]['id_pembeli'] = $id_pembeli;
            $i++;
          }

          // echo "<pre>";
          // print_r($pesanan);
          // echo "</pre>";

          $this->load->model('Pesanan_model');
          if ($this->Pesanan_model->pesanan_baru($pesanan)) {
            $this->cart->destroy();
            redirect('checkout/thankyou');
          }

        } else {

        }

      } else {

        $this->load->model('Pengaturan_model');
        $data['no_wa'] = $this->Pengaturan_model->get_pengaturan('no_wa');
  			$data['alamat'] = $this->Pengaturan_model->get_pengaturan('alamat');
  			$data['ig'] = $this->Pengaturan_model->get_pengaturan('ig');

        $this->load->view('header');

        $this->load->view('checkout');

        $this->load->view('footer', $data);

      }

    }

    public function thankyou($value='')
    {
      $this->load->model('Pengaturan_model');
      $data['no_wa'] = $this->Pengaturan_model->get_pengaturan('no_wa');
      $data['alamat'] = $this->Pengaturan_model->get_pengaturan('alamat');
      $data['ig'] = $this->Pengaturan_model->get_pengaturan('ig');

      $this->load->view('header');

      $this->load->view('thankyou');

      $this->load->view('footer', $data);
    }

}
