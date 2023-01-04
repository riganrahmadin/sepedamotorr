<?php
    defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller{
    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_ke_keranjang($id){
        $barang = $this->model_barang->find($id);

        $data = array(
            'id' => $barang->idbarang,
            'qty' => 1,
            'price'=> $barang->harga,
            'name' => $barang->nama
            // 'options' => array('size' =>'L','color' =>'')
        );
        $this->cart->insert($data);
        redirect('dashboard');
    }
    public function detail_keranjang(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
    }
    public function pembayaran(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
    }

    public function proses_pesanan(){
        $is_prosess = $this->model_invoice->index();
        if($is_prosess){
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');
        }else{
            echo "Mohon maaf, Pesanan Anda gagal di proses";
        }
       
    }
    public function hapus_item_keranjang($rowid)
    {
        $data = [
            'rowid' => $rowid,
            'qty' => 0
        ];

        $this->cart->update($data);
        redirect('dashboard/detail_keranjang');
    }
    public function detail($idbarang){
        $data['barang'] = $this->model_barang->detail_brg($idbarang);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_barang',$data);
        $this->load->view('templates/footer');
    }
    public function hapus_keranjang(){
        $this->cart->destroy();
        redirect('dashboard/index');
    }
}