<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pettycash_model extends CI_Model {
	
     
    
    public function allrecordcash(){
		$rs = $this->db->where('store_id', $this->general_model->branch_id)->get('petty_cash');
		  return $rs->result();
	}
    public function addcash($data){
		$rs = $this->db->insert('petty_cash', $data['pettycash_record']);
               return $this->db->insert_id();
	}

        public function allTypecash(){
		$rs = $this->db->get('petty_cash_Type');
		  return $rs->result();
	}
          
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */