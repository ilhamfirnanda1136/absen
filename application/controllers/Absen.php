<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		check_not_login();
		$this->load->model(['user_m','absen_m']);
	}
	public function masuk()
	{
		$date=date('Y-m-d');
		$user=$this->session->userdata('userid');
		$cekdate['row']=$this->absen_m->getDate($date,$user)->row();
		 $this->load->view('header');
		if ($cekdate['row']==null) {
			$this->load->view('absenmasuk/masuk');
		}
		else{
			$this->load->view('absenmasuk/list',$cekdate);
		}
	}
	public function prosesMasuk()
	{
	  $post=$this->input->post(null,true);
	  if (isset($post['masuk'])) {
	  	$startTime=date('H:i:s');
	  	$convertedTime=date('H:i:s',strtotime('-3 minutes',strtotime($startTime)));
	  	$data=array(
	  		'tanggal_masuk'=>date('Y-m-d'),
	  		'jam_masuk'=>$convertedTime,
	  		'user'=>$post['user']
	  	);
	  	$this->absen_m->add($data);
	  	if ($this->db->affected_rows()>0) {
					$this->session->set_flashdata('success', 'data berhasil ditambah');
				}
				redirect('absen/masuk');
	  }
	}
	public function keluar()
	{
		$date=date('Y-m-d');
		$user=$this->session->userdata('userid');
		$cekdate['row']=$this->absen_m->getDate($date,$user)->row();
		$cekdateKeluar['row']=$this->absen_m->getKeluar($date,$user)->row();
		$this->load->view('header');
		if ($cekdateKeluar['row']==null) {
			$this->load->view('absenkeluar/keluar',$cekdate);
		}
		else{
			$this->load->view('absenkeluar/list',$cekdateKeluar);
		}	
	}
	public function prosesKeluar()
	{
		$post=$this->input->post(null,true);
		if (isset($post['keluar'])) {
			$startTime=date('H:i:s');
			$masuk=$this->absen_m->get($post['absenmasuk'])->row();
			$awal  = strtotime($masuk->jam_masuk);
			$akhir = strtotime($startTime);
			$diff  = $akhir - $awal;
			$jam   = floor($diff / (60 * 60));
			$menit = $diff - $jam * (60 * 60);
			$jam_kerja = $jam." jam ". floor($menit/60)." menit";
	  	$data=array(
	  		'tanggal_keluar'=>date('Y-m-d'),
	  		'jam_keluar'=>$startTime,
	  		'user'=>$post['user'],
	  		'idabsen_masuk'=>$post['absenmasuk'],
	  		'keterangan'=>$post['keterangan'],
	  		'jam_kerja'=>$jam_kerja
	  	);
	  	$this->absen_m->addKeluar($data);
	  	if ($this->db->affected_rows()>0) {
					$this->session->set_flashdata('success', 'data berhasil ditambah');
			}
		 redirect('absen/keluar');
		}
	}
	public function riwayat()
	{
		$get=$this->input->get(null,true);
		$date=date('Y-m');
		if (!isset($get['bulan']) && !isset($get['tahun'])) {
			$datas['row']=$this->absen_m->join($date);
			$datas['bulan']=date('m');
			$datas['tahun']=date('Y');
		}
		else {
			$dateCampuran=$get['tahun'].'-'.$get['bulan'];
			$datas['row']=$this->absen_m->join($dateCampuran);
			$datas['bulan']=$get['bulan'];
			$datas['tahun']=$get['tahun'];
		}
		$this->load->view('header');
		$this->load->view('riwayat/data',$datas);
	}
	public function laporan($bln,$thn)
	{
		$dateCampuran=$thn.'-'.$bln;
		$data['row'] =$this->absen_m->join($dateCampuran);
	    $this->load->library('pdf');
	    $this->pdf->setPaper('A4', 'potrait');
	    $this->pdf->filename = "laporan bulanan.pdf";
	    $this->pdf->load_view('laporan_pdf', $data);
	}
}

?>