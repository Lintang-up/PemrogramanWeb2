<?php
class Form_model extends CI_Model{
  // Fungsi Simpan
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

  // Fungsi Lihat Data
  function get_user_all(){
    $query=$this->db->query("SELECT * FROM transaksi ORDER BY kode_barang ASC");
    return $query->result();
  }

  // Fungsi Delete Data
  function delete_user($where, $kode_barang){
    // $query=$this->db->query("delete from user where induk='$induk'");
    $this->db->where($where);
    $this->db->delete($kode_barang);
  }

}