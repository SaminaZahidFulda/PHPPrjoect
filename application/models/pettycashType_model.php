<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pettycashType_model extends CI_Model {
	
     
    
    public function allrecordcashtype(){
		$rs = $this->db->where('Store_id', $this->general_model->branch_id)->get('petty_cash_type');
		  return $rs->result();
	}
    public function addcashtype($data){
		$rs = $this->db->insert('petty_cash_type', $data['cash']);
               return $this->db->insert_id();
	}

       
          
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */