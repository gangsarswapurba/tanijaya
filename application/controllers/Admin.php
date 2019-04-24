<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function _example_output($output = null)
	{
		$this->load->view('example.php',(array)$output);
	}

	public function produk()
	{
		if (!$this->ion_auth->logged_in())
    {
      redirect('auth/login');
    }

		$crud = new grocery_CRUD();

		$crud->set_table('produk');
		$crud->set_subject('Produk');

		$crud->set_field_upload('foto','assets/img/product');

		$output = $crud->render();

		$this->_example_output($output);

	}

}
