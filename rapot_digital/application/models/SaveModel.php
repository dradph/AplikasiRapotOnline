<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class SaveModel extends CI_Model {
  public function view(){
    return $this->db->get('tb_nilai')->result();
  }
  
  public function save_batch($data){
    return $this->db->update_batch('tb_nilai', $data);
  }

}