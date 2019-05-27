<?php

class Pesanan_model extends CI_Model {

  public function pesanan_baru($semua_pesanan)
  {
    return $this->db->insert_batch('pesanan', $semua_pesanan);
  }

}
