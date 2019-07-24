<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model {

public function login_select($tbl_name,$Field,$data='',$var='')
{
	if($var !='')
	{
		$this->db->where($var);
	}
	
	$q=$this->db->select($Field)->from($tbl_name)->get();
	return $q->result();
	
	
	
}

public function dataops($tbl_name,$mode,$data='',$wdata='')
{
	if($mode=='insert')
	{
		return $this->db->insert($tbl_name,$data);
	}
	else if
	($mode=='delete')
	{
		$this->db->where($wdata);
	return	$this->db->delete($tbl_name);
	}
	else
	
	{
		
		
		
	$this->db->where($wdata);
	return	$this->db->update($tbl_name,$data);
	
	}	
	
	
}



}

?>