<?php
class Form_model extends CI_Model{
  function simpan_user(){
    $simpan_data=array(
                        'induk' =>$this->input->post('induk'),
                        'nama' =>$this->input->post('nama'),
                        'alamat' =>$this->input->post('alamat'),
                        'kota' =>$this->input->post('kota'),                  );

    $simpan=$this->db->insert('user',$simpan_data);
    return $simpan;
  }

}