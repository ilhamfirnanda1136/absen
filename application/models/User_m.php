<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model 
{
	private $table='user';

    public function login($post)
    {
        $this->db->select("*");
        $this->db->from('user');
        $this->db->where('username',$post['username']);
        $this->db->where('password',md5($post['password']));
        $query=$this->db->get();
        return $query;
    }
    public function get($id=null)
    {
        
    	$this->db->from($this->table);
    	if ($id!=null) {
    	  $this->db->where('iduser',$id);
    	}
    	$query=$this->db->get();
        return $query;
    }
    public function add($data) 
    {
     $this->db->insert($this->table,$data);
     return $this->db->insert_id();
    }
    public function hapus($id)
    {
    	$this->db->where('iduser',$id);
        $this->db->delete($this->table);
    }
    public function updatePassword($data)
    {
        $this->db->where('iduser',$data['iduser']);
        $this->db->update($this->table,$data);
    }
}