<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ortu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Nilai');
	}	

	public function index()
	{
	$data['content'] = $this->db->get('tb_nilai');
	$data['rombel'] = $this->M_Nilai->get_data('tb_rombel')->result();
    $data['jenis'] = $this->M_Nilai->get_data('tb_jenis')->result();
    $data['kategori'] = $this->M_Nilai->get_data('tb_kategori')->result();


		$this->load->view('page/halutamaortu',$data);
	} 

	public function nilai()
	{
		$this->load->view('ortu/nilai');
	}

	public function jenis()
	{
		$this->load->view('ortu/jenis');
	}
	public function hasil()
	{
		$jenis = $this->uri->segment(3);
		$nis = $this->session->userdata('username');
		$data['hasil'] = $this->db->query("SELECT * FROM tb_siswa,tb_nilai,tb_mapel WHERE tb_mapel.id_mapel = tb_nilai.id_mapel and tb_siswa.nis = tb_nilai.nis and tb_siswa.nis = $nis and tb_nilai.id_jenis = $jenis and tb_nilai.id_kategori = 1 ")->result();
		$data['hasil2'] = $this->db->query("SELECT * FROM tb_siswa,tb_nilai,tb_mapel WHERE tb_mapel.id_mapel = tb_nilai.id_mapel and tb_siswa.nis = tb_nilai.nis and tb_siswa.nis = $nis and tb_nilai.id_jenis = $jenis and tb_nilai.id_kategori = 2 ")->result();


		$this->load->view('ortu/hasil',$data);
	}

	public function absensi()
	{
		$this->load->view('ortu/absensi');
	}

	public function hasilabsen()
	{
		$sem = $this->uri->segment(3);
		$nis = $this->session->userdata('username');
		$data['hasil'] = $this->db->query("SELECT * FROM tb_siswa,tb_absensi,tb_rombel,tb_rayon WHERE tb_siswa.id_rombel = tb_rombel.id_rombel and tb_siswa.id_rayon = tb_rayon.id_rayon and tb_siswa.nis = tb_absensi.nis and tb_siswa.nis = $nis and tb_absensi.id_semester = $sem")->result();

		$this->load->view('ortu/hasilabsen',$data);
	}

}