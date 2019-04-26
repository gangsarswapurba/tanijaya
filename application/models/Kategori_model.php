<?php

class Kategori_model extends CI_Model {

        public function get_all()
        {
                $query = $this->db->get('kategori');
                return $query->result_array();
        }

        public function get_category_detail($id_kategori='')
        {
          if (!empty($id_kategori)) {
            $this->db->where('id', $id_kategori);
            $query = $this->db->get('kategori');
            return $query->row_array();
          } else {
            // code...
          }
        }

        public function get_all_products($id_kategori='')
        {
          if (!empty($id_kategori)) {
            $this->db->where('id_kategori', $id_kategori);
            $query = $this->db->get('produk');
            return $query->result_array();
          } else {
            // code...
          }

        }

}
