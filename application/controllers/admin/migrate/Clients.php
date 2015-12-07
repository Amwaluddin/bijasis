<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database('db_server');
		$this->load->model('m_server');
	}

	public function index()
	{

	}
}