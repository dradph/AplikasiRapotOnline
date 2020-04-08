<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ps extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model('M_Nilai');
    $this->load->model('AbsenModel');

  } 

  public function index()
  {
    $rayon = $this->input->post('rayon');
    $data['siswa'] = $this->db->query("SELECT * FROM tb_siswa,tb_rombel WHERE tb_siswa.id_rombel = tb_rombel.id_rombel AND id_rayon = 1")->result();
    $this->load->view('ps/siswa',$data);
  } 

  public function siswa($id = NULL)
  {

    $rayon = $this->input->post('rayon');
    $data['siswa'] = $this->db->query("SELECT * FROM tb_siswa,tb_rombel  WHERE tb_siswa.id_rombel = tb_rombel.id_rombel AND id_rayon = $id ORDER BY tb_rombel.id_rombel ASC , tb_siswa.nama ASC")->result();
    $this->load->view('ps/siswa',$data);

  } 

  public function detail($id = NULL)
    {
      $data['jenis'] = $this->M_Nilai->get_data('tb_jenis')->result();
      $this->db->where('nis', $id);
      $data['content'] = $this->db->query("SELECT * FROM tb_siswa,tb_rombel WHERE tb_siswa.id_rombel = tb_rombel.id_rombel  and tb_siswa.nis = $id");  


      $this->load->view('ps/detailsiswa', $data);
    }
  public function data_detail($id = NULL)
  {   
        $data['jenis'] = $this->M_Nilai->get_data('tb_jenis')->result();
        $this->db->where('nis', $id);
        $nis = $this->input->post('nis');
        $data['content'] = $this->db->query("SELECT * FROM tb_siswa,tb_rombel WHERE tb_siswa.id_rombel = tb_rombel.id_rombel  and tb_siswa.nis = $id");  

        $rombel = $this->input->post('rombel');
        $jenis = $this->input->post('jenis');
     

        $data['p'] = $this->db->query("SELECT * FROM tb_mapel,tb_siswa,tb_rombel,tb_nilai WHERE tb_mapel.id_mapel = tb_nilai.id_mapel and tb_siswa.nis = tb_nilai.nis and tb_siswa.id_rombel = tb_rombel.id_rombel AND tb_nilai.id_jenis = $jenis and tb_siswa.nis = $nis and tb_nilai.id_kategori = 1")->result();
        $data['k'] = $this->db->query("SELECT * FROM tb_mapel,tb_siswa,tb_rombel,tb_nilai WHERE tb_mapel.id_mapel = tb_nilai.id_mapel and tb_siswa.nis = tb_nilai.nis and tb_siswa.id_rombel = tb_rombel.id_rombel AND tb_nilai.id_jenis = $jenis and tb_siswa.nis = $nis and tb_nilai.id_kategori = 2")->result();  




        $this->load->view('ps/data_detail', $data);
  }

  public function detailabsen($id = NULL)
    {
      $data['semester'] = $this->M_Nilai->get_data('tb_semester')->result();
      $this->db->where('nis', $id);
      $data['content'] = $this->db->query("SELECT * FROM tb_siswa,tb_rombel WHERE tb_siswa.id_rombel = tb_rombel.id_rombel  and tb_siswa.nis = $id");  

      $sem = $this->input->post('semester');

      $this->load->view('ps/detailabsen', $data);
    }

     public function data_detailabsen($id = NULL)
  {   
        $data['semester'] = $this->M_Nilai->get_data('tb_semester')->result();
        $this->db->where('nis', $id);
        $nis = $this->input->post('nis');
        $data['content'] = $this->db->query("SELECT * FROM tb_siswa,tb_rombel WHERE tb_siswa.id_rombel = tb_rombel.id_rombel  and tb_siswa.nis = $id");  

        $rombel = $this->input->post('rombel');
        $semester = $this->input->post('semester');
     

        $data['p'] = $this->db->query("SELECT * FROM tb_semester,tb_absensi,tb_siswa where tb_absensi.id_semester = tb_semester.id_semester and tb_absensi.nis = tb_siswa.nis and tb_semester.id_semester = $semester and tb_siswa.nis = $id");




        $this->load->view('ps/data_detailabsen', $data);
  }

  public function absensi()
  {
    $data['semester'] = $this->M_Nilai->get_data('tb_semester')->result();
    $this->load->view('ps/absensi',$data);

  }

  public function upd()
  {
    $data['semester'] = $this->M_Nilai->get_data('tb_semester')->result();
    $this->load->view('ps/upd',$data);
  }


  public function add_absensi()
  {
        $rayon = $this->input->post('rayon');
        $semester = $this->input->post('semester');


    $data['semester'] = $this->M_Nilai->get_data('tb_semester')->result();
      $data['content'] = $this->db->query("SELECT * FROM tb_rayon,tb_siswa,tb_rombel,tb_absensi WHERE tb_siswa.id_rombel = tb_rombel.id_rombel and  tb_rayon.id_rayon = $rayon and tb_siswa.nis = tb_absensi.nis and tb_siswa.id_rayon = $rayon and tb_absensi.id_semester = $semester");  
      $data['sem'] = $this->input->post('semester');

    $this->load->view('ps/add_absensi',$data);

  }

  public function add_upd()
  {
    $rayon = $this->input->post('rayon');
    $semester = $this->input->post('semester');

    $data['sem'] = $this->input->post('semester');
    $data['semester'] = $this->M_Nilai->get_data('tb_semester')->result();
    $data['content'] = $this->db->query("SELECT * FROM tb_rayon,tb_siswa,tb_rombel WHERE tb_siswa.id_rombel = tb_rombel.id_rombel and  tb_rayon.id_rayon = $rayon and tb_siswa.id_rayon = $rayon")->result();  
    $data['upd'] = $this->db->query("SELECT * FROM tb_upd,tb_siswa where tb_siswa.nis = tb_upd.nis AND tb_siswa.id_rayon = $rayon and tb_upd.semester = $semester  ")->result();
    $this->load->view('ps/add_upd',$data);
  }


  public function add_updnilai($id = null)
  {

    $rayon = $this->input->post('rayon');
    $data['upd'] = $this->M_Nilai->get_data('tb_jenisupd')->result();

    $data['content'] = $this->db->query("SELECT * FROM tb_upd,tb_siswa,tb_rombel WHERE tb_siswa.id_rombel = tb_rombel.id_rombel and
    tb_siswa.nis = tb_upd.nis and  tb_upd.id = $id")->result();  
   
    $this->load->view('ps/add_updnilai',$data);
  }
  public function prestasi()
  {
    $data['semester'] = $this->M_Nilai->get_data('tb_semester')->result();
    $this->load->view('ps/prestasi',$data);
  }

   public function add_prestasi()
 {
    $rayon = $this->input->post('rayon');
    $semester = $this->input->post('semester');

    $data['sem'] = $this->input->post('semester');
    $data['semester'] = $this->M_Nilai->get_data('tb_semester')->result();
    $data['content'] = $this->db->query("SELECT * FROM tb_rayon,tb_siswa,tb_rombel WHERE tb_siswa.id_rombel = tb_rombel.id_rombel and  tb_rayon.id_rayon = $rayon and tb_siswa.id_rayon = $rayon")->result();  
    $data['prestasi'] = $this->db->query("SELECT * FROM tb_prestasi,tb_siswa where tb_siswa.nis = tb_prestasi.nis AND tb_siswa.id_rayon = $rayon and tb_prestasi.semester = $semester  ")->result();
    $this->load->view('ps/add_prestasi',$data);
  }
  public function add_prestasinilai($id = null)
  {

    $rayon = $this->input->post('rayon');

    $data['content'] = $this->db->query("SELECT * FROM tb_prestasi,tb_siswa,tb_rombel WHERE tb_siswa.id_rombel = tb_rombel.id_rombel and
    tb_siswa.nis = tb_prestasi.nis and  tb_prestasi.id = $id")->result();  
   
    $this->load->view('ps/add_prestasinilai',$data);
  }


    public function action_update($id = null)
  { 
    $data = array(
      'upd1' => $this->input->post('upd1'),
      'nilai1' => $this->input->post('nilai1'),
      'upd2' => $this->input->post('upd2'),
      'nilai2' => $this->input->post('nilai2'),
       );
    
    $this->db->where('id', $id);
    $this->db->update('tb_upd', $data);
    $this->session->set_flashdata('update','Berhasil Disimpan');
    redirect('ps/upd','refresh');  
  }

   public function action_updateprestasi($id = null)
  { 
    $data = array(
      'prestasi1' => $this->input->post('prestasi1'),
      'prestasi2' => $this->input->post('prestasi2'),
      'prestasi3' => $this->input->post('prestasi3'),
      'keterangan1' => $this->input->post('keterangan1'),
      'keterangan2' => $this->input->post('keterangan2'),
      'keterangan3' => $this->input->post('keterangan3'),
       );
    
    $this->db->where('id', $id);
    $this->db->update('tb_prestasi', $data);
    $this->session->set_flashdata('update','Berhasil Disimpan');
    redirect('ps/prestasi','refresh');  
  }


  public function save(){
    // Ambil data yang dikirim dari form
    $id = $_POST['id'];
    $nis = $_POST['nis']; // Ambil data nis dan masukkan ke variabel nis
    $id_semester = $_POST['semester']; // Ambil data nama dan masukkan ke variabel nama
    $s = $_POST['s'];
    $i = $_POST['i']; // Ambil data telp dan masukkan ke variabel telp
    $a = $_POST['a']; // Ambil data telp dan masukkan ke variabel telp
     // Ambil data telp dan masukkan ke variabel telp
    $data = array();
    
    $index = 0; // Set index array awal dengan 0
    foreach($id as $dataid){ // Kita buat perulangan berdasarkan nis sampai data terakhir
      array_push($data, array(
        'id'=>$dataid,
        'nis'=>$nis[$index],
        'id_semester'=>$id_semester[$index],  // Ambil dan set data nama sesuai index array dari $index
        's'=>$s[$index],  // Ambil dan set data telepon sesuai index array dari $index
        'i'=>$i[$index],  // Ambil dan set data telepon sesuai index array dari $index
        'a'=>$a[$index],  // Ambil dan set data alamat sesuai index array dari $index
      ));
      
      $index++;
    }
    //$sql = $this->db->update_batch('tb_nilai',$data,'id');
    $sql = $this->db->update_batch('tb_absensi',$data,'id');

    // Cek apakah query insert nya sukses atau gagal
    if($sql){ // Jika sukses
      $this->session->set_flashdata('simpan','Berhasil Disimpan');    
    redirect(base_url('ps'),'refresh');
    }else{ // Jika gagal
      echo "gagal";
    }
  }

  public function rapot()
  {
   // $data['uh1'] = $this->db->query("SELECT * FROM tb_siswa,tb_nilai, WHERE nis = $id");
    $data['semester'] = $this->M_Nilai->get_data('tb_semester')->result();

    $this->load->view('ps/rapot' ,$data);
  }

  public function datarapot()
  {
    $rayon = $this->input->post('rayon');
    $data['semester'] = $this->input->post['semester'];
    $data['semester'] = $this->M_Nilai->get_data('tb_semester')->result();


     $data['siswa'] = $this->db->query("SELECT * FROM tb_siswa,tb_rombel  WHERE tb_siswa.id_rombel = tb_rombel.id_rombel AND id_rayon = $rayon ORDER BY tb_rombel.id_rombel ASC , tb_siswa.nama ASC")->result();
    $this->load->view('ps/datarapot',$data);

  }

  public function datarapotdetail()
  {
        $nis = $this->uri->segment(4);
        $sem = $this->uri->segment(3);


        $data['content'] = $this->db->query("SELECT * FROM tb_siswa,tb_rombel WHERE tb_siswa.id_rombel = tb_rombel.id_rombel  and tb_siswa.nis = $nis");
        $data['sem'] = $this->db->query("SELECT * FROM tb_semester,tb_absensi,tb_siswa where tb_absensi.id_semester = tb_semester.id_semester and tb_absensi.nis = tb_siswa.nis and tb_semester.id_semester = $sem and tb_siswa.nis = $nis");      

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


        $this->load->view('ps/datarapotdetail', $data);
  }
}