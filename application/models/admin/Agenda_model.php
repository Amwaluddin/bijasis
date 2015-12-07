<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda_model extends Pg_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function select_agenda()
	{
		$sql = "SELECT id,
            row_number() over (order by data->>'bill_to') as rownum,
            data->>'job_date' job_date,
            data->>'bill_to' bill_to,
            data->>'client_id' client_id,
            data->>'desc' as desc,
            data->>'process' process,
            data->>'actor' actor,
            data->>'status' status,
            data->>'price_cat' price_cat,
            data->>'price_id' price_id,
            data->>'priority' priority,
            data->>'area' area,
            data->>'qty' qty,
            data->>'unit_price' unit_price,
            is_deleted
            FROM " . $this->TB_AGENDA;

		return $sql;
	}

	public function select_client()
	{
		$sql = "SELECT id,
            row_number() over (order by data->>'name') as rownum,
            data->>'name' AS name,
            data->>'title' AS title,
            is_deleted
            FROM " . $this->TB_CLIENTS .
			" WHERE data->>'type' = 'person'";

		return $sql;
	}

	private function get_dt_query_agenda()
	{
		$column = ['bill_to', 'desc', 'process', 'actor', 'status'];

		return parent::_get_datatables_query($this->select_agenda(), $column);
	}

	public function get_dt_agenda()
	{
		return parent::_get_datatables($this->get_dt_query_agenda(), 'bill_to');
	}

	public function get_agenda_by_id($id)
	{
		$sql = $this->select_agenda();

		return parent::get_by_id($sql, $id);
	}

	private function get_dt_query_client()
	{
		$column = ['name', 'title'];

		return parent::_get_datatables_query($this->select_client(), $column);
	}

	public function get_dt_client()
	{
		return parent::_get_datatables($this->get_dt_query_client(), 'name');
	}

	public function get_client_by_id($id)
	{
		$sql = $this->select_client();

		return parent::get_by_id($sql, $id);
	}

	public function count_filtered($type = '')
	{
		if ($type == 'agenda') {
			return parent::count_filtered($this->get_dt_query_agenda());
		} elseif ($type == 'client') {
			return parent::count_filtered($this->get_dt_query_client());
		}
	}

	public function cb_client_person()
	{
		$sql = "SELECT id, CONCAT(data->>'name', ', ', COALESCE(data->>'title')) as name
			FROM " . $this->TB_CLIENTS . "
			WHERE data->>'type' = 'person'  ORDER BY data->>'name'";

		return parent::combobox($sql);
	}

	public function cb_price_cat()
	{
		$sql = "SELECT id, data->>'desc' as name FROM " . $this->TB_TAGS . " WHERE data->>'type' = 'price_cat'";

		return parent::combobox($sql);
	}

	public function cb_doc_price_bypricecat($price_cat_id)
	{
		$sql = "SELECT id, data->>'doc' as name FROM " . $this->TB_PRICES . " WHERE data->>'cat_id' = '" . $price_cat_id . "'";

		return parent::combobox($sql);
	}

	public function dt_price_cat()
	{
		$sql = "SELECT id, data->>'desc' as text FROM " . $this->TB_TAGS . " WHERE data->>'type' = 'price_cat'";
		return parent::dt_json($sql);
	}

	public function dt_client_person()
	{
		$sql = "SELECT id, CONCAT(data->>'name', ', ', COALESCE(data->>'title')) as text
			FROM " . $this->TB_CLIENTS . "
			WHERE data->>'type' = 'person'  ORDER BY data->>'name'";
		return parent::dt_json($sql);
	}

	public function dt_client_company()
	{
		$sql = "SELECT id, data->>'client_name' as text
			FROM " . $this->TB_CLIENTS . "
			WHERE data->>'type' = 'company'  ORDER BY data->>'name'";
		return parent::dt_json($sql);
	}

	public function dt_process_bycatid($cat_id)
	{
		$sql = "SELECT id, data->>'doc' AS text FROM " . $this->TB_PRICES() . "
			WHERE data->>'cat_id' = '" . $cat_id . "'";
		return parent::dt_json($sql);
	}

	/*
	 * 2015-12-01
	 * get priority by CatId and Process
	 * return json data
	 */
	public function dt_priority_bycatid_byprice_id($cat_id, $price_id)
	{
		$sql = $this->db->query("SELECT data FROM " . $this->TB_TAGS . "
		 WHERE id = '" . $price_id . "' AND data->>'cat_id' = '".$cat_id."'");
		return parent::dt_json($sql);
	}
}
