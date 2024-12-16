<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelAlat extends CI_Model
{
    //manajemen alat
    public function getAlat()
    {
        return $this->db->get('alat');
    }

    public function getLimitAlat()
    {
        return $this->db->get('alat');
    }

    public function alatWhere($where)
    {
        return $this->db->get_where('alat', $where);
    }

    public function simpanAlat($data = null)
    {
        $this->db->insert('alat', $data);
    }

    public function updateAlat($data = null, $where = null)
    {
        $this->db->update('alat', $data, $where);
    }

    public function hapusAlat($where = null)
    {
        $this->db->delete('alat', $where);
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

    public function alatTotalRecord()
    {
        $this->db->from('alat');
        return $this->db->count_all_results();
    }

    public function alatLimit($batas, $awal = 0)
    {
        $this->db->order_by('id', 'DESC');
        $this->db->limit($batas, $awal);

        return $this->db->get('alat');
    }

    //manajemen kategori
    public function getKategori()
    {
        return $this->db->get('kategori');
    }

    public function kategoriWhere($where)
    {
        return $this->db->get_where('kategori', $where);
    }

    public function simpanKategori($data = null)
    {
        $this->db->insert('kategori', $data);
    }

    public function hapusKategori($where = null)
    {
        $this->db->delete('kategori', $where);
    }

    public function updateKategori($where = null, $data = null)
    {
        $this->db->update('kategori', $data, $where);
    }

    //join
    public function joinKategorialat($where)
    {
        //$this->db->select('alat.id_kategori,kategori.kategori');
        $this->db->from('alat');
        $this->db->join('kategori', 'kategori.id = alat.id_kategori');
        $this->db->where($where);
        return $this->db->get();
    }
}
