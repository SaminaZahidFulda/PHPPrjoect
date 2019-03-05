<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Store_model extends CI_Model {

       private $table= 'store_config';
	public function AddStoreData($data){
		$rs = $this->db->insert('store_config', $data['store']);
              $this->db->affected_rows()>0? true:false;
            
             return $this->db->insert_id();
	}
       
      
       public function getstore(){
               $rs = $this->db->where('storeId',$this->general_model->branch_id)->get('store_config');
                 return $rs->row_array();
       }
       
      
        
        
         public function Addbankinfo($data){
		$rs = $this->db->insert('bank_info', $data['storebank']);
             $bool= $this->db->affected_rows()>0? true:false;
             return $bool;
	}
        public function getstorebanks(){
            $rs= $this->db->query("SELECT bank_info.`bankInfo_id`,bank_info.`bank_name`,bank_info.`account_no` FROM bank_info
WHERE bank_info.`bank_info_for`='Store'  && deleted = '0' && bank_info.`Store_ID`=".$this->general_model->branch_id);
            return $rs->result();
        }
        
        public function UpdateStoreData($data,$id,$path){
              $rs=   $this->db->update('store_config', $data['store'], array('storeId'=>$id));
		 $bool= $this->db->affected_rows()>0? true:false;
                 $path1 = dirname($_SERVER["SCRIPT_FILENAME"])."/uploads/".$path;
                 if(is_file($path1)){
                 if(unlink($path1)){
                     return $bool;
                }
               
        } 
}
public function deletebank($id)
	{
		 $rs=   $this->db->update('bank_info',array('deleted'=>'1'), array('bankInfo_id'=>$id));
		return $this->db->affected_rows()>0? true:false;
                	
	}


                 }
