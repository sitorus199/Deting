<?php
class Buku extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->m_pengunjung->count_visitor();
	}
	function index(){
		$this->load->view('depan/v_buku',$x);
	}
}
