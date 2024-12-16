<?php 

class m_booking extends CI_Model {
	public function tampil_data()
    {
        return $this->db->get('alat');
    }
    public function getData($table)
    {
        return $this->db->get($table)->row();
    }
    public function tampil_data_where($where,$table)
    {
        $this->db->where($where);
        return $this->db->get($table);
    }
    public function tambah_barang($data,$table)
    {
        $this->db->insert($table,$data);
    }

    public function edit_barang($where, $table)
    {
        $this->db->select('alat.*');
        return $this->db->get_where($table,$where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function request_data()
    {
        $this->db->join('user','alat.id=user.id');
        $this->db->select('alat.*,user.nama as nama_user');
        return $this->db->get('alat');
    }
    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $this->db->from('alat');
        return $this->db->get()->row($field);
    }
}

?>