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

        public function get_banner()
        {
          $this->db->where('nama', 'banner');
          $query = $this->db->get('pengaturan');
          $result = $query->result_array();

          return $result[0]['isi'];
        }

        public function ubah_banner($banner_file)
        {
          $data = array(
                  'id'    => 4,
                  'nama'  => 'banner',
                  'isi'  => $banner_file
          );
          $this->db->replace('pengaturan', $data);
        }

        public function get_banner_url()
        {
          $this->db->where('nama', 'banner_url');
          $query = $this->db->get('pengaturan');
          $result = $query->result_array();

          return $result[0]['isi'];
        }

        public function ubah_banner_url($banner_file)
        {
          $data = array(
                  'id'    => 5,
                  'nama'  => 'banner_url',
                  'isi'  => $banner_file
          );
          $this->db->replace('pengaturan', $data);
        }

}
