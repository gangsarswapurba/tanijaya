<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
        $this->load->model('Kategori_model');
        $data['semua_kategori_produk'] = $this->Kategori_model->get_all();

        $this->load->model('Produk_model');
        $data['lima_produk_favorit'] = $this->Produk_model->get_top_5_product();

        $this->load->model('Pengaturan_model');
        $data['no_wa'] = $this->Pengaturan_model->get_pengaturan('no_wa');
  			$data['alamat'] = $this->Pengaturan_model->get_pengaturan('alamat');
  			$data['ig'] = $this->Pengaturan_model->get_pengaturan('ig');

    		$this->load->model('Pengaturan_model');
    		$data['banner'] = $this->Pengaturan_model->get_banner();
        $data['banner_url'] = $this->Pengaturan_model->get_banner_url();

        $this->load->view('header');

        $this->load->view('produk-favorit', $data);

        $this->load->view('banner');

        $this->load->view('kategori-produk', $data);

        $this->load->view('footer', $data);
    }
}
