<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencarian extends CI_Controller {

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

        $yang_dicari = $this->input->get('keyword');

        $yang_dicari = html_escape($yang_dicari);

        $data['yang_dicari'] = $yang_dicari;

        $this->load->model('Produk_model');

        $data['hasil_pencarian'] = $this->Produk_model->cari($yang_dicari);

        $this->load->view('header');

        $this->load->view('hasil-pencarian', $data);

        $this->load->view('footer');
    }
}
