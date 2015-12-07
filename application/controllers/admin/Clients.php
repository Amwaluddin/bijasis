<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends Admin_Controller
{

	public function __construct()
	{
		parent::__construct();

		/* Load :: Common */
		$this->load->model('admin/client_model');
		$this->lang->load('admin/clients');

		/* Title Page :: Common */
		$this->page_title->push(lang('menu_clients'));
		$this->data['pagetitle'] = $this->page_title->show();

		/* Breadcrumbs :: Common */
		$this->breadcrumbs->unshift(1, lang('menu_clients'), 'admin/clients');
	}

	public function index()
	{
		/* Breadcrumbs */
		$this->data['breadcrumb'] = $this->breadcrumbs->show();

		/* Load Template */
		$this->template->admin_render('admin/clients/index', $this->data);
	}

	public function ajax_list()
	{
		$list = $this->client_model->get_datatables();
		$output = [
			"draw"            => $_POST['draw'],
			"recordsTotal"    => $this->client_model->count_all(),
			"recordsFiltered" => $this->client_model->count_filtered(),
			"data"            => $list,
		];

		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit()
	{
		$id = $this->input->post('id');
		$data = $this->client_model->get_by_id($id);
		print(json_encode($data[0]));
	}

	public function ajax_save()
	{
		$id = $this->input->post('id');
		$data = [
			'client_name'     => $this->input->post('client_name'),
			'partner'         => $this->input->post('partner'),
			'contact_name1'   => $this->input->post('contact_name1'),
			'contact_name2'   => $this->input->post('contact_name2'),
			'contact_number1' => $this->input->post('contact_number1'),
			'contact_number2' => $this->input->post('contact_number2'),
			'business_sector' => $this->input->post('business_sector'),
			'tax_number'      => $this->input->post('tax_number'),
		];

		if ($id > 0) {
			$this->client_model->update(['id' => $id], $data);
		} else {
			$insert = $this->client_model->save($data);
		}
		echo json_encode(["status" => TRUE]);
	}

	public function ajax_delete($id)
	{
		$this->client_model->delete_by_id($id);
		echo json_encode(["status" => TRUE]);
	}

	public function _get_csrf_nonce()
	{
		$this->load->helper('string');
		$key = random_string('alnum', 8);
		$value = random_string('alnum', 20);
		$this->session->set_flashdata('csrfkey', $key);
		$this->session->set_flashdata('csrfvalue', $value);

		return [$key => $value];
	}

	public function _valid_csrf_nonce()
	{
		if ($this->input->post($this->session->flashdata('csrfkey')) !== FALSE && $this->input->post($this->session->flashdata('csrfkey')) == $this->session->flashdata('csrfvalue')) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}
