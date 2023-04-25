<?php 

class Model_kategori extends CI_Model{
    public function rp0_rp5()
    {
       return $this->db->get_where('tb_barang', array('kategori'=>'rp0_rp5'));
    }
    public function rp0510()
    {
        return $this->db->get_where('tb_barang',array('kategori'=>'rp05_rp10'));
    }
    public function rp1015()
    {
        return $this->db->get_where('tb_barang',array('kategori'=>'rp10_rp15'));
    }
    public function rp1520()
    {
        return $this->db->get_where('tb_barang', array('kategori'=>'rp15_rp20'));
    }
    public function rp2025()
    {
        return $this-> db->get_where('tb_barang',array('kategori'=>'rp20_rp25'));
    }
    public function rp2530()
    {
        return $this->db->get_where('tb_barang',array('kategori'=>'rp25_rp30'));
    }
    public function rp3035()
    {
        return $this->db->get_where('tb_barang',array('kategori'=>'rp30_rp35'));
    }
    public function rp35()
    {
        return $this->db->get_where('tb_barang',array('kategori'=>'rp35'));
    }
}

 ?>