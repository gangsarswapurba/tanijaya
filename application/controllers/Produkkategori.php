<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produkkategori extends CI_Controller {


    public function index()
    {
        $this->load->model('Pengaturan_model');
        $data['no_wa'] = $this->Pengaturan_model->get_pengaturan('no_wa');
  			$data['alamat'] = $this->Pengaturan_model->get_pengaturan('alamat');
  			$data['ig'] = $this->Pengaturan_model->get_pengaturan('ig');

        $this->load->view('header');
        $this->load->view('produkkategori');
        $this->load->view('footer', $data);
    }
}
