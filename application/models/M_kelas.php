<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class M_kelas extends CI_Model
{
	
	public function get_all()
	{
	    return $this->db->get('kelas')->result();
	}
}