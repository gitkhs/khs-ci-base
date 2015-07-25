<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common extends CI_Controller {
	function __construct()
	{
		session_start();

		parent::__construct();

		// 기본 헬퍼 로드
		$this->load->helper('url');
		$this->load->helper('array');
		$this->load->helper('cookie');
		$this->load->helper("directory");
		
		// 글로벌 변수 선언
		$this->setBase();
	}

	private function setBase() {
		// URI 파라메터 정의
		$this->param			= $this->uri->uri_to_assoc();
		$this->param['class']	= $this->uri->segment(1) ? $this->uri->segment(1) : 'main';
		$this->param['method']	= $this->uri->segment(2) ? $this->uri->segment(2) : 'index';

		// 사이트 기본 정보 설정
		$this->site		= array('root'=>'', 'title'=>'site title', 'csstheme'=>'cosmo', 'layout'=>'default');
	}
}
