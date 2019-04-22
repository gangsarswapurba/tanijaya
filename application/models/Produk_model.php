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
 
}
