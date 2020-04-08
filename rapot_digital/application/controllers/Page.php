<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller {

	public function welcome(){
		date_default_timezone_set('Asia/Jakarta');
			$now=date('Y-m-d');

			$data['content'] =  $this->db->get_where("kendaraan", array('tanggal_pelaporan' => $now));
			$query = $this->db->query('SELECT * FROM kendaraan');
			

		$this->load->view('admin',$data);

	}

	function halutamaguru()
	{
		$data['content'] = $this->db->get('tb_guru');
		$this->load->view('halutamaguru',$data);
	}

	function halutamaps()
	{
		$data['content'] = $this->db->get('tb_ps');
		$this->load->view('halutamaps',$data);
	}

	function halutamatu()
	{
		$data['content'] = $this->db->get('tb_tu');
		$this->load->view('halutamatu',$data);
	}

	function halutamasiswa()
	{
		$data['content'] = $this->db->get('tb_siswa');
		$this->load->view('halutamasiswa',$data);
	}

	function halutamaortu()
	{
		$data['content'] = $this->db->get('tb_siswa');
		//$data['siswa'] = $this->db->query('SELECT * FROM tb_ortu,tb_siswa WHERE tb_ortu.nis = tb_siswa.nis and tb_ortu.nis = $nis ');
		$this->load->view('halutamaortu',$data);
	}

	public function thanks(){
		$this->load->view('thanks');
	}
}
