<?php
class Control_toko extends CI_Controller{

  function _Contruct(){
    parent:: _contruct();
  }

  // Fungsi Input Data
  function form(){
    $data['judul']='Entry Data Transaksi';
    $this->load->view('Form',$data);
    
  }
  
  // Fungsi Simpan
  function simpan_transaksi(){
    $this->load->model('Form_model');
    $this->form_model->simpan_transaksi();
    $data['notifikasi']='Transaksi Berhasil Disimpan';
    $data['judul']='Tambah Data Berhasil';
    $this->load->view('notifikasi',$data);
  }

  // Fungsi Lihat Data
  function daftar_user(){
    $this->load->model('Form_model');
    $data['judul']='Menampilkan Riwayat';
    $data['daftar_user']=$this->form_model->get_user_all();
    $this->load->view('daftar_user',$data);
  }

  // Fungsi Delete Data
  function delete_user($kode_barang){
    $where = array('kode_barang'=>$kode_barang);
    $this->form_model->delete_user($where, transaksi);
    redirect('control_toko/daftar_user');
  }

}