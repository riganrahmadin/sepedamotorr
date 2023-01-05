<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Registrasi extends CI_Controller{
    public function index()
    {
        $this->form_validation->set_rules('name','Name','required',[
            'required' => 'nama anda belum di isi !!'
        ]);
         $this->form_validation->set_rules('username','Username','required',[
            'required' => ' Username anda belum di isi !!'
        ]);
         $this->form_validation->set_rules('password_1','Password','required|matches[password_2]',[
             'required' => 'Password wajib diisi!',
             'matches' => 'Password tidak cocok'
        ]);
          $this->form_validation->set_rules('password_2','Password','required|matches[password_1]');
        
        if($this->form_validation->run() == false){
        $this->load->view('templates/header');
        $this->load->view('registrasi');
    }else{
        $data = array(
            'id' => '',
            'name' => $this->input->post('name'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password_1'),
            'role_id' => 2,
        );
        $this->db->insert('tbl_user', $data);
        redirect('auth/login');
    }
    }
}