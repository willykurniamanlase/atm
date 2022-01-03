<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_mobil extends CI_Model
{
    function getDataMobil()
    {
        $query = $this->db->get('mobil');
        return $query->result();
    }

    function insertDataMobil($data)
    {
        $this->db->insert('mobil', $data);
    }

    function deleteDataMobil($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mobil');
    }

    function updateDataMobil($id, $data)
    {
        $query = $this->db->set($data);
        $query = $this->db->where(['id' => $id]);
        $query = $this->db->update('mobil');
        return $query;
        #$this->db->where('id', $id);
        #$this->db->update('mobil', $data);
    }

    function getDataMobilDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('mobil');
        return $query->row();
    }
}
