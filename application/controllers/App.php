<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('Template');
	
		// $this->load->model('app_model','app');
	}

	public function index()
	{			
		$this->template->display('content');
	}
}