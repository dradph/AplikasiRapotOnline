<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tu extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model('M_Nilai');
    $this->load->model('SaveModel');


   
  } 

  public function index()
  {
    $data['content'] = $this->db->get('tb_nilai');;
    $data['rayon'] = $this->M_Nilai->get_data('tb_rayon')->result();
    $data['semester'] = $this->M_Nilai->get_data('tb_semester')->result();



    $this->load->view('halutamatu',$data);
  } 

  public function cetak()
  {
  	$data['content'] = $this->db->get('tb_rayon');
    $data['rayon'] = $this->M_Nilai->get_data('tb_rayon')->result();
    $data['semester'] = $this->M_Nilai->get_data('tb_semester')->result();



    $this->load->view('halutamatu',$data);
  }

 
  public function datasiswa()
  {
    $data['content'] = $this->db->get('tb_rayon');
    $data['rayon'] = $this->M_Nilai->get_data('tb_rayon')->result();
    $data['semester'] = $this->M_Nilai->get_data('tb_semester')->result();

    $rayon = $this->input->post('rayon');
    $semester = $this->input->post('semester');
    $data['siswa'] = $this->db->query("SELECT * FROM tb_rayon,tb_siswa,tb_rombel WHERE tb_siswa.id_rombel = tb_rombel.id_rombel and tb_siswa.id_rayon = tb_rayon.id_rayon and tb_rayon.id_rayon = $rayon  ")->result();

    $this->load->view('tu/datasiswa', $data);

  }


public function datarapotdetail()
  {
        $nis = $this->uri->segment(4);
        $sem = $this->uri->segment(3);


        $data['content'] = $this->db->query("SELECT * FROM tb_siswa,tb_rombel WHERE tb_siswa.id_rombel = tb_rombel.id_rombel  and tb_siswa.nis = $nis");
        $data['sem'] = $this->db->query("SELECT * FROM tb_semester,tb_absensi,tb_siswa where tb_absensi.id_semester = tb_semester.id_semester and tb_absensi.nis = tb_siswa.nis and tb_semester.id_semester = $sem and tb_siswa.nis = $nis");    
        $data['upd'] = $this->db->query("SELECT * FROM tb_semester,tb_siswa,tb_upd WHERE tb_siswa.nis = tb_upd.nis and tb_semester.id_semester = tb_upd.semester and tb_semester.id_semester = $sem and tb_upd.nis = $nis");  
        $data['prestasi'] = $this->db->query("SELECT * FROM tb_semester,tb_siswa,tb_prestasi WHERE tb_siswa.nis = tb_prestasi.nis and tb_semester.id_semester = tb_prestasi.semester and tb_semester.id_semester = $sem and tb_siswa.nis = $nis");  

        $sintakjenis = "SELECT * FROM tb_mapel,tb_siswa,tb_rombel,tb_nilai WHERE tb_mapel.id_mapel = tb_nilai.id_mapel and tb_siswa.nis = tb_nilai.nis and tb_siswa.id_rombel = tb_rombel.id_rombel AND tb_nilai.id_jenis";
        $sintakkategori = "and tb_siswa.nis = $nis and tb_nilai.id_kategori";

        

        // SEMESTER 1
        $data['uh1p'] = $this->db->query("$sintakjenis = 1 $sintakkategori = 1")->result();
        $data['uh2p'] = $this->db->query("$sintakjenis = 2 $sintakkategori = 1")->result();
        $data['uh3p'] = $this->db->query("$sintakjenis = 3 $sintakkategori = 1")->result();
        $data['uh4p'] = $this->db->query("$sintakjenis = 4 $sintakkategori = 1")->result();
        $data['utsp'] = $this->db->query("$sintakjenis = 9 $sintakkategori = 1")->result();
        $data['uasp'] = $this->db->query("$sintakjenis = 10 $sintakkategori = 1")->result();
        $data['uh1k'] = $this->db->query("$sintakjenis = 1 $sintakkategori = 2")->result();
        $data['uh2k'] = $this->db->query("$sintakjenis = 2 $sintakkategori = 2")->result();
        $data['uh3k'] = $this->db->query("$sintakjenis = 3 $sintakkategori = 2")->result();
        $data['uh4k'] = $this->db->query("$sintakjenis = 4 $sintakkategori = 2")->result();
        $data['utsk'] = $this->db->query("$sintakjenis = 9 $sintakkategori = 2")->result();
        $data['uask'] = $this->db->query("$sintakjenis = 10 $sintakkategori = 2")->result();

        // SEMESTER 2

        $data['uh5p'] = $this->db->query("$sintakjenis = 5 $sintakkategori = 1")->result();
        $data['uh6p'] = $this->db->query("$sintakjenis = 6 $sintakkategori = 1")->result();
        $data['uh7p'] = $this->db->query("$sintakjenis = 7 $sintakkategori = 1")->result();
        $data['uh8p'] = $this->db->query("$sintakjenis = 8 $sintakkategori = 1")->result();
        $data['utspg'] = $this->db->query("$sintakjenis = 11 $sintakkategori = 1")->result();
        $data['ukkp'] = $this->db->query("$sintakjenis = 12 $sintakkategori = 1")->result();
        $data['uh5k'] = $this->db->query("$sintakjenis = 5 $sintakkategori = 2")->result();
        $data['uh6k'] = $this->db->query("$sintakjenis = 6 $sintakkategori = 2")->result();
        $data['uh7k'] = $this->db->query("$sintakjenis = 7 $sintakkategori = 2")->result();
        $data['uh8k'] = $this->db->query("$sintakjenis = 8 $sintakkategori = 2")->result();
        $data['utskg'] = $this->db->query("$sintakjenis = 11 $sintakkategori = 2")->result();
        $data['ukkk'] = $this->db->query("$sintakjenis = 12 $sintakkategori = 2")->result();


        $this->load->view('tu/datarapotdetail', $data);
  }


public function cetakrapot()
  {
        $nis = $this->uri->segment(4);
        $sem = $this->uri->segment(3);


        $data['content'] = $this->db->query("SELECT * FROM tb_siswa,tb_rombel WHERE tb_siswa.id_rombel = tb_rombel.id_rombel  and tb_siswa.nis = $nis");
        $data['sem'] = $this->db->query("SELECT * FROM tb_semester,tb_absensi,tb_siswa where tb_absensi.id_semester = tb_semester.id_semester and tb_absensi.nis = tb_siswa.nis and tb_semester.id_semester = $sem and tb_siswa.nis = $nis");    
        $data['upd'] = $this->db->query("SELECT * FROM tb_semester,tb_siswa,tb_upd WHERE tb_siswa.nis = tb_upd.nis and tb_semester.id_semester = tb_upd.semester and tb_semester.id_semester = $sem and tb_upd.nis = $nis");  
        $data['prestasi'] = $this->db->query("SELECT * FROM tb_semester,tb_siswa,tb_prestasi WHERE tb_siswa.nis = tb_prestasi.nis and tb_semester.id_semester = tb_prestasi.semester and tb_semester.id_semester = $sem and tb_siswa.nis = $nis");  

        $sintakjenis = "SELECT * FROM tb_mapel,tb_siswa,tb_rombel,tb_nilai WHERE tb_mapel.id_mapel = tb_nilai.id_mapel and tb_siswa.nis = tb_nilai.nis and tb_siswa.id_rombel = tb_rombel.id_rombel AND tb_nilai.id_jenis";
        $sintakkategori = "and tb_siswa.nis = $nis and tb_nilai.id_kategori";

        

        // SEMESTER 1
        $data['uh1p'] = $this->db->query("$sintakjenis = 1 $sintakkategori = 1")->result();
        $data['uh2p'] = $this->db->query("$sintakjenis = 2 $sintakkategori = 1")->result();
        $data['uh3p'] = $this->db->query("$sintakjenis = 3 $sintakkategori = 1")->result();
        $data['uh4p'] = $this->db->query("$sintakjenis = 4 $sintakkategori = 1")->result();
        $data['utsp'] = $this->db->query("$sintakjenis = 9 $sintakkategori = 1")->result();
        $data['uasp'] = $this->db->query("$sintakjenis = 10 $sintakkategori = 1")->result();
        $data['uh1k'] = $this->db->query("$sintakjenis = 1 $sintakkategori = 2")->result();
        $data['uh2k'] = $this->db->query("$sintakjenis = 2 $sintakkategori = 2")->result();
        $data['uh3k'] = $this->db->query("$sintakjenis = 3 $sintakkategori = 2")->result();
        $data['uh4k'] = $this->db->query("$sintakjenis = 4 $sintakkategori = 2")->result();
        $data['utsk'] = $this->db->query("$sintakjenis = 9 $sintakkategori = 2")->result();
        $data['uask'] = $this->db->query("$sintakjenis = 10 $sintakkategori = 2")->result();

        // SEMESTER 2

        $data['uh5p'] = $this->db->query("$sintakjenis = 5 $sintakkategori = 1")->result();
        $data['uh6p'] = $this->db->query("$sintakjenis = 6 $sintakkategori = 1")->result();
        $data['uh7p'] = $this->db->query("$sintakjenis = 7 $sintakkategori = 1")->result();
        $data['uh8p'] = $this->db->query("$sintakjenis = 8 $sintakkategori = 1")->result();
        $data['utspg'] = $this->db->query("$sintakjenis = 11 $sintakkategori = 1")->result();
        $data['ukkp'] = $this->db->query("$sintakjenis = 12 $sintakkategori = 1")->result();
        $data['uh5k'] = $this->db->query("$sintakjenis = 5 $sintakkategori = 2")->result();
        $data['uh6k'] = $this->db->query("$sintakjenis = 6 $sintakkategori = 2")->result();
        $data['uh7k'] = $this->db->query("$sintakjenis = 7 $sintakkategori = 2")->result();
        $data['uh8k'] = $this->db->query("$sintakjenis = 8 $sintakkategori = 2")->result();
        $data['utskg'] = $this->db->query("$sintakjenis = 11 $sintakkategori = 2")->result();
        $data['ukkk'] = $this->db->query("$sintakjenis = 12 $sintakkategori = 2")->result();


        $this->load->view('tu/cetakrapot', $data);
  }


}