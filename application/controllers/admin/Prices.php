<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Prices extends Admin_Controller
{

	public function __construct()
	{
		parent::__construct();

		/* Load :: Common */
		$this->load->model('admin/price_model');
		$this->lang->load('admin/prices');

		/* Title Page :: Common */
		$this->page_title->push(lang('menu_prices'));
		$this->data['pagetitle'] = $this->page_title->show();

		/* Breadcrumbs :: Common */
		$this->breadcrumbs->unshift(1, lang('menu_prices'), 'admin/prices');
	}

	public function index()
	{
		/* Breadcrumbs */
		$this->data['breadcrumb'] = $this->breadcrumbs->show();

		$this->data['price_cat'] = $this->price_model->get_price_cat_combo();
		/* Load Template */
		$this->template->admin_render('admin/prices/index', $this->data);
	}

	public function list_price_cat()
	{
		$list = $this->price_model->get_dt_price_cat();
		$output = [
				"draw"            => $_POST['draw'],
				"recordsTotal"    => $this->price_model->count_all($this->price_model->tb_tags()),
				"recordsFiltered" => $this->price_model->count_filtered('price_cat'),
				"data"            => $list,
		];
		echo json_encode($output);
	}

	public function list_price()
	{
		$id = $this->input->post('id');
		$list = $this->price_model->get_dt_price($id);
		$output = [
				"draw"            => $_POST['draw'],
				"recordsTotal"    => $this->price_model->count_all_data($this->price_model->select_price_by_cat_id($id)),
				"recordsFiltered" => $this->price_model->count_filtered('price', $id),
				"data"            => $list,
		];
		echo json_encode($output);
	}

	public function edit_price_cat()
	{
		$id = $this->input->post('id');
		$data = $this->price_model->get_price_cat_by_id($id);
		print(json_encode($data[0]));
	}

	public function edit_price()
	{
		$id = $this->input->post('id');
		$data = $this->price_model->get_price_by_id($id);
		print(json_encode($data[0]));
	}

	public function delete_price_cat()
	{
		$id = $this->input->post('id');
		$this->price_model->delete($this->price_model->tb_tags(), ['id' => $id]);
		echo json_encode(["status" => TRUE]);
	}

	public function delete_price()
	{
		$id = $this->input->post('id');
		$this->price_model->delete($this->price_model->tb_prices(), ['id' => $id]);
		echo json_encode(["status" => TRUE]);
	}

	public function upsert_price_cat()
	{
		$id = $this->input->post('id');
		$data = [
				'desc'  => $this->input->post('desc'),
				'note1' => $this->price_model->set_reserve($this->input->post('note1')),
				'note2' => $this->price_model->set_reserve($this->input->post('note2')),
				'note3' => $this->price_model->set_reserve($this->input->post('note3')),
				'note4' => $this->price_model->set_reserve($this->input->post('note4')),
				'note5' => $this->price_model->set_reserve($this->input->post('note5')),
				'type'  => 'price_cat',
		];


		if ($id > 0) {
			$this->price_model->update($this->price_model->tb_tags(), ['id' => $id], $data);
		} else {
			$this->price_model->insert($this->price_model->tb_tags(), $data);
		}
		echo json_encode(["status" => TRUE]);
	}

	public function upsert_price()
	{
		$id = $this->input->post('id');
		$data = [
				'doc'    => $this->input->post('doc'),
				'cat_id' => $this->input->post('cat'),
				'price1' => $this->input->post('price1'),
				'price2' => $this->input->post('price2'),
				'price3' => $this->input->post('price3'),
				'price4' => $this->input->post('price4'),
				'price5' => $this->input->post('price5'),
				'type'   => 'price',
		];

		if ($id > 0) {
			$this->price_model->update($this->price_model->tb_prices(), ['id' => $id], $data);
		} else {
			$this->price_model->insert($this->price_model->tb_prices(), $data);
		}
		echo json_encode(["status" => TRUE]);
	}

	public function price_name_by_cat_id()
	{
		$cat_id = $this->input->post('cat_id');
		$name = $this->price_model->get_price_name_by_cat_id($cat_id);
		echo $name[0]['data'];
	}
}
