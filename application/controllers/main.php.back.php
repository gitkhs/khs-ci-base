<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

		$this->theme_path = base_url("include/purpose");
	}

	/*
	 * 사이트 헤더, 푸터를 자동으로 추가해준다.
	 */
	public function _remap($method)
	{
		//헤더 include
		$data	= array('theme'=>$this->theme_path, 'theme_cu'=>'goods');
		$this->load->view('_header', $data);

		$data	= array('m1'=>"main", 'm2'=>"{$method}");
		$this->load->view('_top', $data);
	
		if( method_exists($this, $method) )
		{
			$this->{"{$method}"}();
		}
	
		$this->load->view('_bottom', $data);
	}
	
	public function index()
	{
 		$this->load->view('main');
	}

	public function ls()
	{
 		$this->load->view('main');
	}
}
