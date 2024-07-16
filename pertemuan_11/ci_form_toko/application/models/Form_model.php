<?php
class Form_model extends CI_Model{
  function simpan_transaksi(){
    $simpan_data=array(
                        'kode_barang' =>$this->input->post('kode_barang'),
                        'nama_barang' =>$this->input->post('nama_barang'),
                        'harga_satuan' =>$this->input->post('harga_satuan'),
                        'jumlah' =>$this->input->post('jumlah'),
                        'total_bayar' =>$this->input->post('total_bayar'),                  );

    $simpan=$this->db->insert('transaksi',$simpan_data);
    return $simpan;
  }

  function get_user_all(){
    $query=$this->db->query("SELECT * FROM transaksi ORDER BY kode_barang ASC");
    return $query->result();
  }

}