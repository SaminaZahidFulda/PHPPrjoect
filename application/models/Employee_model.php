<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_model extends CI_Model {

    
	public function AddEmployee($data){
		$rs = $this->db->insert('employee_info', $data['Employee_record']);
              $this->db->affected_rows()>0? true:false;
            
             return $this->db->insert_id();
	}
       
      
       public function getemployeeinfo(){
               $rs = $this->db->where('employee_deleted','0')
                       ->where('store_id', $this->general_model->branch_id)->get('employee_info');
                 return $rs->result();
       }
       
        public function AddEmployeeGaurdian($data){
		$rs = $this->db->insert('employee_gaurdian', $data['Employee_gaurdian']);
             $bool= $this->db->affected_rows()>0? true:false;
             return $bool;
	}
        
        public function AddEmployeeRefference($data){
		$rs = $this->db->insert('employee_reffernce', $data['Employee_reffernce']);
             $bool= $this->db->affected_rows()>0? true:false;
             return $bool;
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
           public function singleemployeegaurdian($id)
	{
		$rs = $this->db->where('employee_id',$id)->get('employee_gaurdian');
                return $rs->row();
	}
           public function singleemployeereffernce($id)
	{
		$rs = $this->db->where('employee_id',$id)->get('employee_reffernce');
                return $rs->row();
	}
             public function updateSalary($data,$id){
       $rs=   $this->db->update('employee_info', $data['update_salary'], array('employee_id'=>$id));
		 $bool= $this->db->affected_rows()>0? true:false;
                 return $bool;
}
      
          public function UpdateEmployee($data,$eid){
       $rs=   $this->db->update('employee_info', $data['Employee_record'], array('employee_id'=>$eid));
		 $bool= $this->db->affected_rows()>0? true:false;
                 return $bool;
}
  
              public function UpdateEmployeeGaurdian($data,$eid){
       $rs=   $this->db->update('employee_gaurdian', $data['Employee_gaurdian'], array('employee_id'=>$eid));
		 $bool= $this->db->affected_rows()>0? true:false;
                 return $bool;
}                    
public function UpdateEmployeeRefference($data,$eid){
       $rs=   $this->db->update('employee_reffernce', $data['Employee_reffernce'], array('employee_id'=>$eid));
		 $bool= $this->db->affected_rows()>0? true:false;
                 return $bool;
}  

   public function deleteEmployee($id)
	{
		 $rs=   $this->db->update('employee_info',array('employee_deleted'=>'1'), array('employee_id'=>$id));
		return $this->db->affected_rows()>0? true:false;
                	
	}

public function deleteEmployeegaurdian($id)
	{
		 $rs=   $this->db->update('employee_gaurdian',array('employee_deleted'=>'1'), array('employee_id'=>$id));
		return $this->db->affected_rows()>0? true:false;
                	
	}
        public function deleteEmployeereffernce($id)
	{
		 $rs=   $this->db->update('employee_reffernce',array('employee_deleted'=>'1'), array('employee_id'=>$id));
		return $this->db->affected_rows()>0? true:false;
                	
	}
       

        } 

