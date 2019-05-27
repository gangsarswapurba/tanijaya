<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($id_kategori = 1)
	{

		$this->load->model('Kategori_model');
		$data['kategori'] = $this->Kategori_model->get_category_detail($id_kategori);
		$data['produk_produk'] = $this->Kategori_model->get_all_products($id_kategori);

		$this->load->model('Pengaturan_model');
		$data['no_wa'] = $this->Pengaturan_model->get_pengaturan('no_wa');
		$data['alamat'] = $this->Pengaturan_model->get_pengaturan('alamat');
		$data['ig'] = $this->Pengaturan_model->get_pengaturan('ig');

		$this->load->view('header');

		$this->load->view('kategori.php', $data);

		$this->load->view('footer', $data);
	}
}
