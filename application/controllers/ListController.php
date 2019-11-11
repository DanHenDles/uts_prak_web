<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class ListController extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->library('Template');
        $this->load->model('tampildata');
	}

	public function index()
	{			
		$data = $this->tampildata->getdata();
		$var_kirim =([
			'data' => $data
		]);
		
		$this->template->display('listsepatu',$var_kirim);
	}
}