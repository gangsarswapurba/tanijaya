<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function _admin_output($output = null)
	{
		$this->load->view('admin.php',(array)$output);
	}

	public function index()
	{
		redirect('admin/produk');
	}

	public function pesanan()
	{
		if (!$this->ion_auth->logged_in()) {

      redirect('auth/login');
    }

		$crud = new grocery_CRUD();

		$crud->set_table('pesanan');
		$crud->set_subject('Pesanan');
		$crud->unset_print();
		$crud->unset_export();

		$crud->display_as('id_produk','Produk');
		$crud->display_as('qty','Jumlah');
		$crud->display_as('id_pembeli','Pembeli');
		$crud->set_relation('id_produk','produk','{nama} {kota}');
		$crud->set_relation('id_pembeli','pembeli','nama');

		$output = $crud->render();

		$this->_admin_output($output);

	}

	public function pembeli()
	{
		if (!$this->ion_auth->logged_in()) {

      redirect('auth/login');
    }

		$crud = new grocery_CRUD();

		$crud->set_table('pembeli');
		$crud->set_subject('Pembeli');
		$crud->unset_print();
		$crud->unset_export();

		// $crud->display_as('id_produk','Produk');
		// $crud->display_as('qty','Jumlah');
		// $crud->display_as('id_pembeli','ID Pembeli');
		// $crud->set_relation('id_produk','produk','nama');

		$output = $crud->render();

		$this->_admin_output($output);

	}

	public function produk()
	{
		if (!$this->ion_auth->logged_in()) {

      redirect('auth/login');
    }

		$crud = new grocery_CRUD();

		$crud->set_table('produk');
		$crud->set_subject('Produk');
		$crud->unset_print();
		$crud->unset_export();

		$crud->set_field_upload('foto','assets/img/product');

		$crud->display_as('id_kategori','Kategori');
		$crud->set_relation('id_kategori','kategori','nama');

		$output = $crud->render();

		$this->_admin_output($output);

	}

	public function kategori()
	{
		if (!$this->ion_auth->logged_in())
    {
      redirect('auth/login');
    }

		$crud = new grocery_CRUD();

		$crud->set_table('kategori');
		$crud->set_subject('Kategori');
		$crud->unset_print();
		$crud->unset_export();

		$crud->set_field_upload('foto','assets/img/kategori');

		$output = $crud->render();

		$this->_admin_output($output);

	}

	public function pengaturan()
	{

		if (!empty($this->input->post())) {

				$data = array(
					'no_wa' => $this->input->post('no_wa'),
					'alamat' => $this->input->post('alamat'),
				 	'ig' => $this->input->post('ig')
        );

				foreach ($data as $key => $value) {
						$this->db->set('isi', $value);
						$this->db->where('nama', $key);
						$this->db->update('pengaturan');
				}

				$this->session->set_flashdata('setting_saved', 'Pengaturan berhasil disimpan.');

		} else {
			$this->load->model('Pengaturan_model');
			$data['no_wa'] = $this->Pengaturan_model->get_pengaturan('no_wa');
			$data['alamat'] = $this->Pengaturan_model->get_pengaturan('alamat');
			$data['ig'] = $this->Pengaturan_model->get_pengaturan('ig');
		}

		$this->load->view('pengaturan.php', $data);
	}

}
