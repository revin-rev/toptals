<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class faq extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('faq_model');
	}

	public function index()
	{
		
		$data['main_content'] = 'faq_view';		
		$this->load->view('includes/template',$data);
		
		//$this->load->view('test_page');
		
	}
}

?>