<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa extends CI_Controller {

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


		$this->load->view('guru/data_siswa',$data);
	} 

	public function data()
	{
		   $rombel = $this->input->post('rombel');
		   $jenis = $this->input->post('jenis');
		   $kategori = $this->input->post('kategori');
		   $mapel = $this->input->post('mapel');



		$data['siswa'] = $this->db->query("SELECT * FROM tb_nilai,tb_siswa WHERE tb_nilai.nis = tb_siswa.nis and id_rombel=$rombel and id_jenis=$jenis and id_kategori=$kategori and id_mapel = $mapel ")->result();
		$data['rombel'] = $this->M_Nilai->get_data('tb_rombel')->result();
	    $data['jenis'] = $this->M_Nilai->get_data('tb_jenis')->result();
    	$data['kategori'] = $this->M_Nilai->get_data('tb_kategori')->result();

		$this->load->view('guru/data_siswa_lengkap', $data);
	}

	public function rinci($id = NULL)
	{
		$data['rinci'] = $this->db->get('kendaraan where id = 1 ');
		$this->db->where('id',$id);		
	}

	public function delete($id = NULL)
	{
		$this->db->where('id', $id);
		$this->db->delete('kendaraan');
		$this->session->set_flashdata('hapus','Berhasil Dihapus');
		redirect('kendaraan','refresh');
	}

	
	public function read($id = NULL)
	{
		$this->db->where('id', $id);

		$data['content'] = $this->db->get('kendaraan');
		$this->load->view('admin/data_kendaraan', $data);
		
	}


	  public function detail($id = NULL)
	  {
	    $this->db->where('id', $id);
	    $data['content'] = $this->db->get('kendaraan');  
	    $this->load->view('admin/detailkendaraan', $data);
	  }

	  public function updatestatus($id='')
	  {
	  	 $data = array(
      'status' => '1'
      
       );

     $this->db->where('id', $id);
    $this->db->update('kendaraan', $data);
    $this->session->set_flashdata('update','Berhasil Diupdate');
    redirect('kendaraan','refresh');  
	  }

}