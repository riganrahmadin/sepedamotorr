<?php
class Model extends CI_Controller{
    public function yamaha(){
            $data['Yamaha'] = $this->model_kategori->data_Yamaha()->result();   
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('Yamaha',$data);
            $this->load->view('templates/footer');
     }
      public function Honda(){
            $data['Honda'] = $this->model_kategori->data_Honda()->result();   
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('Honda',$data);
            $this->load->view('templates/footer');
     }
      public function Suzuki(){
            $data['Suzuki'] = $this->model_kategori->data_Suzuki()->result();   
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('Suzuki',$data);
            $this->load->view('templates/footer');
     }
}