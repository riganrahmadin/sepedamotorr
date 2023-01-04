<?php

class Model_kategori extends CI_Model{
    public function data_Yamaha(){
        return $this->db->get_where("tbl_barang", array('model'=>'Yamaha'));
    }
    public function data_Honda(){
        return $this->db->get_where("tbl_barang", array('model'=>'Honda'));
    }
      public function data_Suzuki(){
        return $this->db->get_where("tbl_barang", array('model'=>'Suzuki'));
    }
}