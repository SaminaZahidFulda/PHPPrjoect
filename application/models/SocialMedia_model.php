<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SocialMedia_model extends CI_Model {

    
	public function AddEmployee($data){
		$rs = $this->db->insert('employee_info', $data['Employee_record']);
              $this->db->affected_rows()>0? true:false;
            
             return $this->db->insert_id();
	}
       
        } 

