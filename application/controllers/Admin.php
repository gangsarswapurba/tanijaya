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

}
