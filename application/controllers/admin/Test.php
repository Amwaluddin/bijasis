<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Amwaluddin Lubis
 * Date: 11/1/2015
 * Time: 12:52 AM
 */
class Test extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pg_model');
	}

	public function test_combo()
	{
		return $this->pg_model->combobox(1);
	}
}