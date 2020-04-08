<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nilai extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model('M_Nilai');
    $this->load->model('SaveModel');


   
  } 

  public function index()
  {
    $data['content'] = $this->db->get('tb_nilai');;
    $data['rombel'] = $this->M_Nilai->get_data('tb_rombel')->result();
    $data['jenis'] = $this->M_Nilai->get_data('tb_jenis')->result();
    $data['kategori'] = $this->M_Nilai->get_data('tb_kategori')->result();



    $this->load->view('guru/nilai',$data);
  } 

  public function add()
  {
    $data['rombel'] = $this->M_Nilai->get_data('tb_rombel')->result();
    $data['jenis'] = $this->M_Nilai->get_data('tb_jenis')->result();
    $data['kategori'] = $this->M_Nilai->get_data('tb_kategori')->result();

    $rombel = $this->input->post('rombel');
    $jenis = $this->input->post('jenis');
    $kategori = $this->input->post('kategori');
    $mapel = $this->input->post('mapel');

    $data['nilai'] = $this->db->query("select * from tb_siswa,tb_nilai where tb_siswa.nis = tb_nilai.nis and id_rombel=$rombel and id_mapel= $mapel and id_jenis = $jenis and id_kategori = $kategori")->result();

    $this->load->view('guru/add_nilai', $data);

  } 

  public function detail($id=null)
  {
    # code...
  }

  public function add_action()
  {
    $data['rombel'] = $this->M_Nilai->get_data('tb_rombel')->result();
    $data['jenis'] = $this->M_Nilai->get_data('tb_jenis')->result();
    $data['kategori'] = $this->M_Nilai->get_data('tb_kategori')->result();
    $rombel = $this->input->post('rombel');
    $jenis = $this->input->post('jenis');
    $kategori = $this->input->post('kategori');



    $data  = array
    (
      'id_mapel' => $this->session->userdata('id_mapel'),
      'id_jenis' => $this->input->post('jenis'),
      'id_kategori' => $this->input->post('kategori'),
      'nis' => $this->input->post('nis'),
      'nilai' => $this->input->post('nilai')


     );

    $this->db->insert('tb_nilai',$data);
    $this->session->set_flashdata('simpan','Berhasil Disimpan');    
    redirect(base_url('nilai'),'refresh');
  

  }
  
   public function save(){
    // Ambil data yang dikirim dari form
    $id = $_POST['id']; // Ambil data nis dan masukkan ke variabel nis

    $nis = $_POST['nis']; // Ambil data nis dan masukkan ke variabel nis
    $id_jenis = $_POST['jenis']; // Ambil data nama dan masukkan ke variabel nama
    $id_mapel = $_POST['mapel']; // Ambil data telp dan masukkan ke variabel telp
    $id_kategori = $_POST['kategori']; // Ambil data alamat dan masukkan ke variabel alamat
    $nilai = $_POST['nilai']; // Ambil data alamat dan masukkan ke variabel alamat
    $data = array();
    
    $index = 0; // Set index array awal dengan 0
    foreach($id as $dataid){ // Kita buat perulangan berdasarkan nis sampai data terakhir
      array_push($data, array(
        'id' => $dataid,
        'nis'=>$nis[$index],
        'id_jenis'=>$id_jenis[$index],  // Ambil dan set data nama sesuai index array dari $index
        'id_mapel'=>$id_mapel[$index],  // Ambil dan set data telepon sesuai index array dari $index
        'id_kategori'=>$id_kategori[$index],  // Ambil dan set data telepon sesuai index array dari $index
        'nilai'=>$nilai[$index],  // Ambil dan set data alamat sesuai index array dari $index
      ));
      
      $index++;
    }
    $sql = $this->db->update_batch('tb_nilai',$data,'id');
    // $sql = $this->SaveModel->save_batch($data); // Panggil fungsi save_batch yang ada di model siswa (SiswaModel.php)
    
    // Cek apakah query insert nya sukses atau gagal
    if($sql){ // Jika sukses
      $this->session->set_flashdata('simpan','Berhasil Disimpan');    
    redirect(base_url('nilai'),'refresh');
    }else{ // Jika gagal
      echo "gagal";
    }
  }



}