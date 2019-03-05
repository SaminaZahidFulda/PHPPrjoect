<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dbusers_model extends CI_Model {
	
	public function allUsers(){
		$rs = $this->db->where('deleted_at','0')
                       ->where('store_id', $this->general_model->branch_id)->get('user');
		
		return $rs->result();
	}
	public function AddUsers($user){
		$rs = $this->db->insert('user',$user);
               return $this->db->affected_rows()>0? true:false;
	}
	     public function singleUser($id)
	{
		 
		$rs = $this->db->where('user_id',$id)->get('user');
                return $rs->row();
	}
	     public function updateUser($data,$id)
	{
		 $rs=   $this->db->update('user', $data, array('user_id'=>$id));
		 return $this->db->affected_rows()>0? true:false;
                 //if($bool==1){
                  //   echo "Updated..";
                 //}
                 //else{ 
                //     echo "Not Updated..";
                //s }
                
	}
        
           public function deleteUser($id)
	{
		 $rs=   $this->db->update('user',array('deleted_at'=>'1') ,array('user_id'=>$id));
		return $this->db->affected_rows()>0? true:false;
                 //if($bool==1){
                    // echo "Deleted..";
                 //}
                // else{ 
                   //  echo "Not Deleted..";
                // }	
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */