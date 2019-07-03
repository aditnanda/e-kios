<?php
class M_produk extends CI_Model {
  public function __construct() {
        parent::__construct();
  }

  public function input($data){
    try{
      $this->db->insert('barang', $data);
      return true;
    }catch(Exception $e){
    }
  }


public function data(){
   $this->db->select('*');
   $this->db->from('barang');
   $data = $this->db->get();
   return $data->result();
 }

 public function getid($id){
     $this->db->where('id', $id);
     return $this->db->get('barang')->result();
   }

 public function gambar($id)
   {
     $this->db->where('id', $id);
     return $this->db->get('barang')->row();
   }
 public function ubah($id, $data) {
     try{
       $this->db->where('id',$id)->limit(1)->update('barang', $data);
       return true;
     }catch(Exception $e){}
 }

 public function hapus($id){
   $this->db->where('id', $id);
   $this->db->delete('barang');
 }
 public function detail($key){
    $this->db->where('nama',$key);
    $this->db->from('barang');
    $data = $this->db->get();
    return $data->result();
  }

//dibuat 07-07-2018
  public function cekStock($id){
     $this->db->where('id',$id);
     $this->db->from('barang');
     $data = $this->db->get();
     return $data->result();
   }

   public function cekStockbyNama($nama){
         $this->db->where('nama',$nama);
         $this->db->from('barang');
         $data = $this->db->get();
         return $data->result();
       }

 public function kategori($key){
    $this->db->where('kategori',$key);
    $this->db->from('barang');
    $data = $this->db->get();
    return $data->result();
  }
}
?>
