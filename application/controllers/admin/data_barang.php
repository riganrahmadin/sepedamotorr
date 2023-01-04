<?php   
defined('BASEPATH') or exit('No direct script access allowed');
class Data_barang extends CI_Controller{
    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_aksi()
    {
        $nama = $this->input->post('nama');
        $model = $this->input->post('model');
        $tipe = $this->input->post('tipe');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $gambar = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "gambar gagal upload";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama'  =>  $nama,
            'model' =>  $model,
            'tipe' => $tipe,
            'harga' => $harga,
            'stok' => $stok,
            'gambar' => $gambar

        );

        $this->model_barang->tambah_barang($data, 'tbl_barang');
        redirect('admin/data_barang/index');
    }

    public function edit($id)
    {
        $where = array('idbarang' =>$id);
        $data['barang'] = $this->model_barang->edit_barang($where,'tbl_barang')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_barang', $data);
        $this->load->view('templates_admin/footer');
    }
    public function update(){
        $id = $this->input->post('idbarang');
        $nama = $this->input->post('nama');
        $model = $this->input->post('model');
        $tipe = $this->input->post('tipe');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');

        $data = array(
            'nama'  =>  $nama,
            'model' =>  $model,
            'tipe' => $tipe,
            'harga' => $harga,
            'stok' => $stok
        );

        $where = array(
            'idbarang' => $id
        );

        $this->model_barang->update_data($where,$data,'tbl_barang');
        redirect('admin/data_barang/index');
    }
    public function detail($idbarang)
    {
        $data['barang'] = $this->model_barang->detail_brg($idbarang);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_barang', $data);
        $this->load->view('templates_admin/footer');;
    }
    public function hapus($id){
        $where = array('idbarang' => $id);
        $this->model_barang->hapus_data($where,'tbl_barang');
        redirect('admin/data_barang/index');
    }
}
