<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class AbsenModel extends CI_Model {
  public function view(){
    return $this->db->get('tb_absensi')->result();
  }
  
  public function save_batch($data){
    return $this->db->insert_batch('tb_absensi', $data);
  }

}