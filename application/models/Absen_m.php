<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen_m extends CI_Model 
{
	private $table=array('absen_masuk','absen_keluar','user');
	public function get($id=null) 
	{
		$this->db->from($this->table[0]);
  	if ($id !=null) {
  	  $this->db->where('id',$id);
  	}
  	$query=$this->db->get();
    return $query;
	}
	public function getDate($date,$user)
	{
		$this->db->from($this->table[0]);
		$this->db->where('tanggal_masuk',$date);
		$this->db->where('user',$user);
		return $this->db->get();
	}
	public function getKeluar($date,$user)
	{
		$this->db->from($this->table[1]);
		$this->db->where('tanggal_keluar',$date);
		$this->db->where('user',$user);
		return $this->db->get();
	}
	public function add($data)
	{
		 $this->db->insert($this->table[0],$data);
     return $this->db->insert_id();
	}
	public function addKeluar($data)
	{
		 $this->db->insert($this->table[1],$data);
     return $this->db->insert_id();
	}
	public function join($data)
	{
		$query = $this->db->query("SELECT `absen_masuk`.*, `absen_keluar`.*, `user`.* FROM `absen_masuk` LEFT JOIN `absen_keluar` ON `absen_keluar`.`idabsen_masuk`=`absen_masuk`.`id` LEFT JOIN `user` ON `absen_masuk`.`user`=`user`.`iduser` WHERE `tanggal_masuk` LIKE '$data%' ");
		return $query->result_array();
	}
}