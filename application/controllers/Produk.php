<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

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
	public function index($id_produk = 1)
	{

		$this->load->model('Produk_model');

		$data['lima_produk_favorit'] = $this->Produk_model->get_top_5_product();

		$data['produk'] = $this->Produk_model->get_product_detail($id_produk);

		$data['kategori'] = $this->Produk_model->get_category($id_produk);

		$this->load->model('Pengaturan_model');
		$data['no_wa'] = $this->Pengaturan_model->get_pengaturan('no_wa');
		$data['alamat'] = $this->Pengaturan_model->get_pengaturan('alamat');
		$data['ig'] = $this->Pengaturan_model->get_pengaturan('ig');

		$this->load->view('header');

		$this->load->view('produk-favorit', $data);

		$this->load->view('produk', $data);

		$this->load->view('footer', $data);
	}
}
