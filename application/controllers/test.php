<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class test extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('test_model');
	}

	public function index()
	{
		
		$data['main_content'] = 'test_page';		
		$this->load->view('includes/template',$data);
		
		//$this->load->view('test_page');
		
	}
}

?>