<?php
 
class Produk_model extends CI_Model {
 
        public function get_top_5_product()
        {
                $this->db->limit(5);
                $query = $this->db->get('produk');
                return $query->result_array();
        }
 
        public function get_product_detail($value)
        {
          $this->db->where('id', $value);
          $query = $this->db->get('produk');
          return $query->row_array();
        }
 
        public function cari($value)
        {
          // $this->db->group_start();
          // $value = explode(" ", $value);
          $this->db->like('nama', $value);
          $this->db->or_like('kota', $value);
          $this->db->or_like('deskripsi', $value);
          // $this->db->group_end();
          $query = $this->db->get('produk');
          return $query->result_array();
        }
 
}
