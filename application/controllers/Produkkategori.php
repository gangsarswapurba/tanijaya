<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produkkategori extends CI_Controller {

 
    public function index()
    {
        $this->load->view('header');
        $this->load->view('produkkategori');
        $this->load->view('footer');
    }
}
