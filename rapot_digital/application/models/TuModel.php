<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TuModel extends CI_Model {
    
    public function get($username){
        $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('tb_tu')->row(); // Untuk mengeksekusi dan mengambil data hasil query

        return $result;
    }
}
