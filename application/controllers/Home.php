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

        $this->load->view('header');

        $this->load->view('produk-favorit', $data);

        $this->load->view('banner');

        $this->load->view('kategori-produk', $data);

        $this->load->view('footer');
    }
}
