<?php

class Pengaturan_model extends CI_Model {

        public function get_all()
        {
                $query = $this->db->get('pengaturan');
                return $query->result_array();
        }

        public function get_pengaturan($nama)
        {
          if (!empty($nama)) {
            $this->db->select('isi');
            $this->db->where('nama', html_escape($nama));
            $query = $this->db->get('pengaturan');
            $row_array = $query->row_array();
            return $row_array['isi'];

          } else {
                get_all();
              }
        }

}
