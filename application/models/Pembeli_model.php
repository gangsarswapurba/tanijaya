<?php

class Pembeli_model extends CI_Model {

  public function pembeli_baru($pembeli)
  {
          $this->db->insert('pembeli', $pembeli);

          return $this->db->insert_id();
  }

}
