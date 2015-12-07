<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Amwaluddin Lubis, ST
 * Date: 10/27/2015
 * Time: 2:11 PM
 * File Name : Pg_Model.php
 */
class Pg_Model extends CI_Model
{
	var $TB_AGENDA = 'agenda';
	var $TB_CLIENTS = 'clients';
	var $TB_PRICES = 'prices';
	var $TB_TAGS = 'tags';

	public function __construct()
	{
		parent::__construct();
	}

	function _get_datatables_query($sql_select, $column = [])
	{
		$sql = $sql_select;
		$i = 0;
		if (strpos(strtolower($sql), 'where') === false) {
			$sql .= ' WHERE (';
		} else {
			$sql .= ' AND (';
		}
		foreach ($column as $item) {
			if ($i === 0) {
				$sql .= " lower(data->>'" . $item . "') LIKE lower('%" . $_POST['search']['value'] . "%') ";
			} else {
				$sql .= " OR lower(data->>'" . $item . "') LIKE lower('%" . $_POST['search']['value'] . "%') ";
			}
			$i++;
		}
		$sql .= ')';

		return $sql;
	}

	public function _get_datatables($sql, $order = '')
	{
		if ($order != '') {
			$sql .= " ORDER BY data->>'" . $order . "'";
		}
		if ($_POST['length'] != -1) {
			$sql .= " LIMIT " . $_POST['length'] . " OFFSET " . $_POST['start'];
		}
		$res = $this->db->query($sql);

		return $res->result();
	}

	public function count_all($table, $where = [])
	{
		if (count($where) > 0) {
			$this->db->where($where);
		}
		$this->db->from($table);

		return $this->db->count_all_results();
	}

	public function count_all_data($sql)
	{
		$res = $this->db->query($sql);

		return $res->num_rows();
	}

	public function count_filtered($sql)
	{
		$res = $this->db->query($sql);

		return $res->num_rows();
	}
	public function update($table, $where = [], $data = [])
	{
		$this->db->update($table, ['data' => json_encode($data)], $where);
		$this->db->affected_rows();
	}

	public function insert($table, $data = [])
	{
		$this->db->insert($table, ['data' => json_encode($data)]);
		$this->db->insert_id();
	}

	public function delete($table, $where = [])
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function get_by_id($sql, $id)
	{
		if (strpos(strtolower($sql), 'where') === false) {
			$sql .= ' WHERE ';
		} else {
			$sql .= ' AND ';
		}

		$sql .= "id = " . $id;
		$res = $this->db->query($sql);

		return $this->iam_database->q_result_array($res);
	}

	public function combobox($sql)
	{
		$query = $this->db->query($sql);
		$res = $this->iam_database->q_result_array($query);
		$cl = [];
		$k = array_keys($res[0]);
		foreach ($res AS $row) {
			$cl[$row[$k[0]]] = $row[$k[1]];
		}
		return $cl;
	}

	public function tb_agenda()
	{
		return $this->TB_AGENDA;
	}

	public function tb_client()
	{
		return $this->TB_CLIENTS;
	}

	public function tb_prices()
	{
		return $this->TB_PRICES;
	}

	public function tb_tags()
	{
		return $this->TB_TAGS;
	}

	public function extract_data($post)
	{
		foreach ($post AS $r) {
			$data[$r] = $this->input->post($r);
		}
		return $data;
	}

	public function dt_json($sql)
	{
		$res = $this->db->query($sql);

		$json = $this->iam_database->q_result_array($res);
		return json_encode($json);
	}

}
