<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Iam_database
{

	function q_result_array($query)
	{
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return FALSE;
		}
	}

	function q_int_str_arr($query)
	{
		if ($query->num_rows() > 0) {
			$arr = $query->result_array();
			$res = [];
			foreach ($arr as $v) {
				$res[$v['id']] = $v['name'];
			}

			return $res;
		} else {
			return FALSE;
		}
	}

	function q_str_arr($query)
	{
		if ($query->num_rows() > 0) {
			$arr = $query->result_array();
			$res = [];
			foreach ($arr as $v) {
				array_push($res, $v['data']);
			}

			return $res;
		} else {
			return FALSE;
		}
	}

	function iam_update_by_id($table, $data, $id)
	{
		$this->db->set("data", "jsonb_merge(data, '" . json_encode($data) . "')", FALSE);
		$this->db->where('id', $id);
		$this->db->update($table);
	}

	function iam_delete_by_id($table, $id)
	{
		$this->db->where('id', $id);
		$this->db->delete($table);
	}

	function iam_save($table, $data)
	{
		$this->db->insert($table, ['data' => json_encode($data)]);

		return $this->db->insert_id();
	}

	function _get_datatables_query($sql_select, $column = [])
	{
		$sql = $sql_select;
		$i = 0;
		foreach ($column as $item) {
			if ($i === 0) {
				$sql .= " WHERE lower(data->>'" . $item . "') LIKE lower('%" . $_POST['search']['value'] . "%') ";
			} else {
				$sql .= " OR lower(data->>'" . $item . "') LIKE lower('%" . $_POST['search']['value'] . "%') ";
			}
			$i++;
		}

		return $sql;
	}

	function count_filtered($sql)
	{
		//$sql = $this->_get_datatables_query();
		$res = $this->db->query($sql);

		return $res->num_rows();
	}

	function get_datatables($sql, $order = '')
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

	public function count_all($table)
	{
		$this->db->from($table);

		return $this->db->count_all_results();
	}
}