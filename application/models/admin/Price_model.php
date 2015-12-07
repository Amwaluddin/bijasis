<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Price_model extends Pg_Model
{

	var $tb_tags = 'tags';
	var $table = 'prices';

	public function __construct()
	{
		parent::__construct();
	}

	public function set_reserve($reserve)
	{
		if ($reserve == '') {
			$reserve = '&lt;Reserve&gt;';
		}
		return $reserve;
	}

	public function select_price_cat()
	{
		$sql = "SELECT id,
            row_number() over (order by data->>'desc') AS rownum,
            data->>'desc' AS desc,
            data->>'note1' note1,
            data->>'note2' note2,
            data->>'note3' note3,
            data->>'note4' note4,
            data->>'note5' note5,
            is_deleted
            FROM " . $this->tb_tags . "
            WHERE data->>'type' = 'price_cat'";
		return $sql;
	}

	public function select_price()
	{
		$sql = "SELECT id,
            row_number() over (order by id) as rownum,
            data->>'cat_id' cat_id,
            data->>'doc' doc,
            data->>'price1' price1,
            data->>'price2' price2,
            data->>'price3' price3,
            data->>'price4' price4,
            data->>'price5' price5,
            is_deleted
            FROM " . $this->tb_prices();
		return $sql;
	}

	public function select_price_by_id($id)
	{
		$sql = $this->select_price();
		$sql .= " WHERE id='" . $id . "'";
		return $sql;
	}

	public function select_price_by_cat_id($id)
	{
		$sql = $this->select_price();
		$sql .= " WHERE data->>'cat_id'='" . $id . "'";
		return $sql;
	}

	public function get_dt_price_cat()
	{
		return parent::_get_datatables($this->get_dt_query_price_cat(), 'cat_id');
	}

	private function get_dt_query_price_cat()
	{
		$column = ['desc', 'note1', 'note2', 'note3', 'note4', 'note5'];

		return parent::_get_datatables_query($this->select_price_cat(), $column);
	}

	public function get_dt_price($id)
	{
		return parent::_get_datatables($this->get_dt_query_price($id), 'bill_to');
	}

	private function get_dt_query_price($id)
	{
		$column = ['cat_id', 'doc', 'price1', 'price2', 'price3', 'price4', 'price5'];

		return parent::_get_datatables_query($this->select_price_by_cat_id($id), $column);
	}

	public function count_filtered($type = '', $id = '')
	{
		if ($type == 'price') {
			return parent::count_filtered($this->get_dt_query_price($id));
		} elseif ($type == 'price_cat') {
			return parent::count_filtered($this->get_dt_query_price_cat());
		}
	}

	public function get_price_cat_by_id($id)
	{
		$sql = $this->select_price_cat();

		return parent::get_by_id($sql, $id);
	}

	public function get_price_by_id($id)
	{
		$sql = $this->select_price_by_id($id);

		return parent::get_by_id($sql, $id);
	}

	public function get_price_cat_combo()
	{
		$sql = "SELECT id, data->>'desc' AS name FROM " . $this->tb_tags . " WHERE data->>'type' = 'price_cat'";

		$res = $this->db->query($sql);

		return $this->iam_database->q_int_str_arr($res);
	}

	public function get_price_name_by_cat_id($cat_id)
	{
		$sql = "SELECT data FROM " . $this->tb_tags . " WHERE id = '" . $cat_id . "'";

		$res = $this->db->query($sql);

		return $res->result_array();
	}
}