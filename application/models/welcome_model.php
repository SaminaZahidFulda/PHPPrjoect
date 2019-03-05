<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome_model extends CI_Model {
	
	public function allUsers(){
		$rs = $this->db->get('users');
		return $rs->result();
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */