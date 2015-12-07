<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();

		/* Load :: Common */
		$this->load->model('admin/account_model');
		$this->lang->load('admin/accounts');

		/* Title Page :: Common */
		$this->page_title->push(lang('menu_accounts'));
		$this->data['pagetitle'] = $this->page_title->show();

		/* Breadcrumbs :: Common */
		$this->breadcrumbs->unshift(1, lang('menu_clients'), 'admin/clients');
	}

	public function index()
	{
		/* Breadcrumbs */
		$this->data['breadcrumb'] = $this->breadcrumbs->show();

		/* Load Template */
		$this->template->admin_render('admin/accounts/index', $this->data);
	}

	public function ajax_list_acc_type()
	{
		$list = $this->account_model->get_datatables();
		$output = [
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->account_model->count_all(),
			"recordsFiltered" => $this->account_model->count_filtered(),
			"data" => $list,
		];

		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit_acc_type()
	{
		$id = $this->input->post('id');
		$data = $this->account_model->get_by_id($id);
		print(json_encode($data[0]));
	}

	public function ajax_save_acc_type()
	{
		$id = $this->input->post('id');
		$data = [
			'name' => $this->input->post('name'),
			'note' => $this->input->post('note'),
			'type' => 'acc_type',
		];

		if ($id > 0) {
			$this->account_model->update(['id' => $id], $data);
		} else {
			$insert = $this->account_model->save($data);
		}
		echo json_encode(["status" => TRUE]);
	}

	public function ajax_delete_acc_type($id)
	{
		$this->account_model->delete_by_id($id);
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
