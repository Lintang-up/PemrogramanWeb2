<?php
class Control_toko extends CI_Controller{

  function _Contruct(){
    parent:: _contruct();
  }

  function form(){
    $data['judul']='Entry Data Transaksi';
    $this->load->view('Form',$data);
    
  }
  
  function simpan_transaksi(){
    $this->load->model('Form_model');
    $this->form_model->simpan_transaksi();
    $data['notifikasi']='Transaksi Berhasil Disimpan';
    $data['judul']='Tambah Data Berhasil';
    $this->load->view('notifikasi',$data);
  }

  function daftar_user(){
    $this->load->model('Form_model');
    $data['judul']='Menampilkan Riwayat';
    $data['daftar_user']=$this->form_model->get_user_all();
    $this->load->view('daftar_user',$data);
  }
}