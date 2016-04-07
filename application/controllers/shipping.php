<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shipping extends CI_Controller {

	private $_data = array();
	private $_template = 'default';



	public function __construct() {
	
		$this->_data = array();
		parent::__construct();
		$this->_template = $this->config->item('template');
		
	}


	public function index(){
	
		$this->_data['_page'] = 'shipping';
		$this->_data['_page_title'] = 'Home';
		$this->_data['_template'] = $this->_template;
		$this->load->view( $this->_template . '/outershell' , $this->_data);

	
	}

}