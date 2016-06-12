<?php
class Banksampah extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('model_bsn');
	}
	
	public function index() {
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('content');
		$this->load->view('footer');
	}
	
	//********************************
	// Data Nasabah
	//********************************
	
	public function dataNasabah() {
		$data['query'] = $this->model_bsn->getData('tbl_nasabah', 'id_nasabah', 'DESC')->result();
		
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('content_dataNasabah', $data);
		$this->load->view('footer');		
	}
	
	public function tambahNasabah() {
		$cek = $this->model_bsn->getData('tbl_nasabah', 'id_nasabah', 'DESC')->row();
		
		if(empty($cek)){
			$noNew = '00001'; 
		}else{
			$noOld = (int) substr($cek->no_rekening, 8, 5);
			$noOld++;
			$noNew = sprintf('%05s', $noOld);
		}
			$noRekening = $noNew.'BSN01';
			
		$data = array(
			'no_rekening' => $noRekening,
			'nama' => '',
			'rt_rw_kelas' => '',
			'kelurahan_sekolah' => '',
			'kelompok' => '',
			'jenis' => ''
		);
		
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('content_tambahNasabah', $data);
		$this->load->view('footer');		
	}
	
	public function prosesInputNasabah() {
		$data = array(
			'no_rekening' => $this->input->post('no_rekening'),
			'nama' => $this->input->post('nama'),
			'rt_rw_kelas' => $this->input->post('rt_rw_kelas'),
			'kelurahan_sekolah' => $this->input->post('kelurahan_sekolah'),
			'kelompok' => $this->input->post('kelompok'),
			'jenis' => $this->input->post('jenis'),
			'tanggal_daftar' => date('Y-m-d')
		);
		
		$query = $this->model_bsn->insertData('tbl_nasabah', $data);
		if($query) {
			$dt = array(
				'no_rekening' => $this->input->post('no_rekening'),
				'tanggal' => date('Y-m-d')
			);
			$this->model_bsn->insertData('tbl_tabungannasabah', $dt);			
			redirect('banksampah/dataNasabah/1');
		} else {
			redirect('banksampah/tambahNasabah/1');
		}
	}
	
	public function tabunganNasabah() {	
		$data['query'] = $this->model_bsn->getData('tbl_nasabah', 'id_nasabah', 'DESC')->result();
		
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('content_dataTabunganNasabah', $data);
		$this->load->view('footer');		
	}
	
	public function dataTabunganNasabah() {
		$key = $this->uri->segment(3);
		$data = $this->model_bsn->getDataTabungan($key)->row();
		
		if(empty($data)) 
			redirect('banksampah/tabunganNasabah');
		else
					
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('content_WheredataNasabah', $data);
		$this->load->view('footer');		
	} 
	
	
}

?>