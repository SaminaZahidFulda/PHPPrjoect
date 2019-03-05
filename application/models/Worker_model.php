<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Worker_model extends CI_Model {

    
	public function AddWorker($data){
		$rs = $this->db->insert('worker_info', $data['worker']);
              $this->db->affected_rows()>0? true:false;
            
             return $this->db->insert_id();
	}
       
      
       public function getworkerinfo(){
               $rs = $this->db->where('worker_deleted','0')
                       ->where('Store_id', $this->general_model->branch_id)
                       ->get('worker_info');
                 return $rs->result();
       }
     
        
        
         public function getsalary($id){
		$rs = $this->db->select('employee_salary')->where('employee_id',$id)->get('employee_info');
               
             return $rs->row_array();
	}
        
            public function singleemployee($id)
	{
		$rs = $this->db->where('employee_id',$id)->get('employee_info');
                return $rs->row();
	}
           public function getsingleworkerinfo($id)
	{
		$rs = $this->db->where('worker_id',$id)->get('worker_info');
                return $rs->row();
	}
     
      
          public function UpdateWorker($data,$eid){
       $rs=   $this->db->update('worker_info', $data['updateworker'], array('worker_ID'=>$eid));
		 $bool= $this->db->affected_rows()>0? true:false;
                 return $bool;
}
  


   public function deleteWorker($id)
	{
	   $rs=   $this->db->update('worker_info',array('worker_deleted'=>'1'), array('worker_ID'=>$id));
			return $this->db->affected_rows()>0? true:false;
                	
	}

       

        } 

