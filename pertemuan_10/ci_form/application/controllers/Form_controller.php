<?php
class Form_controller extends CI_Controller{

  function _Contruct(){
    parent:: _contruct();
  }

  function form(){
    $data['judul']='Entry Data User';
    $this->load->view('Form',$data);
  }

  function simpan_user(){
    $this->load->model('Form_model');
    $this->form_model->simpan_user();
    $data['notifikasi']='Data Berhasil Disimpan';
    $data['judul']='Tambah Data Berhasil';
    $this->load->view('notifikasi',$data);
  }

}