<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Account_model extends CI_Model
{

	var $table = 'tags';

	public function __construct()
	{
		parent::__construct();
	}

	public function select_data()
	{
		$sql = "SELECT id,
            row_number() over (order by data->>'name') as rownum,
            data->>'name' AS name,
            data->>'note' AS note,
            data->>'type' AS type,
            is_deleted
            FROM " . $this->table . " WHERE data->>'type' = 'acc_type' ";

		return $sql;
	}

	public function get_by_id($id)
	{
		$sql = $this->select_data();
		$sql .= " AND id = " . $id;

		$res = $this->db->query($sql);
		return $this->iam_database->q_result_array($res);
	}

	public function update_client($id, $data)
	{
		$this->db->set("data", "jsonb_merge(data, '" . json_encode($data) . "')", FALSE);
		$this->db->where('id', $id);
		$this->db->update($this->table);
	}

	private function _get_datatables_query()
	{
		$sql = $this->select_data();

		$column = ['name', 'note'];
		$i = 0;
		$sql .= " AND ( ";
		foreach ($column as $item) {
			if ($i === 0) {
				$sql .= " lower(data->>'" . $item . "') LIKE lower('%" . $_POST['search']['value'] . "%') ";
			} else {
				$sql .= " OR lower(data->>'" . $item . "') LIKE lower('%" . $_POST['search']['value'] . "%') ";
			}
			$i++;
		}
		$sql .= ") ";
		return $sql;
	}

	function get_datatables()
	{
		$sql = $this->_get_datatables_query();
		$sql .= " ORDER BY data->>'name'";
		if ($_POST['length'] != -1) {
			$sql .= " LIMIT " . $_POST['length'] . " OFFSET " . $_POST['start'];
		}
		$res = $this->db->query($sql);
		return $res->result();
	}

	function count_filtered()
	{
		$sql = $this->_get_datatables_query();
		$res = $this->db->query($sql);
		return $res->num_rows();
	}

	public function count_all()
	{
		$sql = $this->_get_datatables_query();
		return $this->db->count_all_results();
	}

	public function save($data)
	{
		$this->db->insert($this->table, ['data' => json_encode($data)]);
		return $this->db->insert_id();
	}

	public function update($where, $data)
	{
		$this->db->update($this->table, ['data' => json_encode($data)], $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}
}
