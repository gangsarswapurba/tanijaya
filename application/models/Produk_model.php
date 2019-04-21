<?php

class Produk_model extends CI_Model {

        public function get_product_detail($value)
        {
          $this->db->where('id', $value);
          $query = $this->db->get('produk');
          return $query->row_array();
        }

}
