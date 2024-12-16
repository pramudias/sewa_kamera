<?php if (!defined('BASEPATH')) exit('No Direct Script Access Allowed');

class ModelPinjam extends CI_Model
{

    //manip table pinjam
    public function simpanPinjam($data)
    {
        $this->db->insert('pinjam', $data);
    }

    public function selectData($table, $where)
    {
        return $this->db->get($table, $where);
    }

    public function updateData($data, $where)
    {
        $this->db->update('pinjam', $data, $where);
    }

    public function deleteData($tabel, $where)
    {
        $this->db->delete($tabel, $where);
    }

    public function joinData()
    {
        $this->db->select('pinjam.*, alat.nama_barang');
        $this->db->from('pinjam');
        $this->db->join('alat', 'alat.id=pinjam.id_alat');
        
        return $this->db->get()->result_array();
    }

    public function total($where)
    {
        $this->db->where($where);

        return $this->db->get('pinjam');
    }


    //manip tabel detai pinjam
    public function simpanDetail($idbooking, $nopinjam)
    {
        $sql = "INSERT INTO detail_pinjam (no_pinjam,id) SELECT pinjam.no_pinjam,booking_detail.id FROM pinjam, booking_detail WHERE booking_detail.id_booking=$idbooking AND pinjam.no_pinjam='$nopinjam'";
        $this->db->query($sql);
    }
}
