<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."controllers/common/Common".EXT);

class Main extends Common {
	function __construct()
	{
		parent::__construct();
	}

	//
	// 함수 리맵핑: 
	public function _remap($method)
	{
 		if( method_exists($this, $method) ) {
			$this->{"{$method}"}();
		}
 		$this->load->view('default', $this);
	}

	public function index()
	{
	}

	public function login()
	{
	}
}
