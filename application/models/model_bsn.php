<?php
class Model_bsn extends CI_Model {
	
	public function getData($table, $key, $value) {
		$this->db->order_by($key, $value);
		return $this->db->get($table);
	}
	
	public function getDataWhere($table, $key, $value) {
		$this->db->where($key, $value);
		return $this->db->get($table);
	}
	
	public function insertData($table, $data) {
		return $this->db->insert($table, $data);
	}
	
	//query menampilkan data tabungan nasabah
	public function getDataTabungan($key) {
		$query = "SElECT n.*, t.* FROM tbl_nasabah AS n
				  JOIN tbl_tabungannasabah AS t
				  WHERE n.no_rekening = '$key'
				  AND t.no_rekening = '$key'";
		return $this->db->query($query);
	}
	
}

?>