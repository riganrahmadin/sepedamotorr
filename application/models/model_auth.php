<?php

class Model_auth extends CI_Model{

    public function cek_login(){
      $username = set_Value('username');
      $password = set_value('password');

        $result = $this->db->where('username',$username)
        ->where('password', $password)
        ->limit(1)
        ->get('tbl_user');

        if($result ->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }

    }
    
    // public function cek_login_member($u, $p)
    // {
    //     $q = $this->db->get_where('tbl_member', array('username' => $u, 'password' => $p));
    //     return $q;
    // }
    
}