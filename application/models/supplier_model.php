<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class supplier_model extends CI_Model {
	
	
    public function allsuppliers(){
		$rs = $this->db->where('mse_supplier.deleted','0')
                       ->where('Store_id', $this->general_model->branch_id)->get('mse_supplier');
             return $rs->result();
	}
    
    
    
	public function Addsupplier($data){
		$rs = $this->db->insert('mse_supplier', $data['supplier_record']);
             $bool= $this->db->affected_rows()>0? true:false;
             return $this->db->insert_id();
	}
        
        
       public function singlesupplier($id){
        
               $rs = $this->db->query("    SELECT mse_supplier.*,category_sp.`category_name`
                                   FROM mse_supplier
             LEFT JOIN category_sp ON mse_supplier.`supplier_id`=category_sp.`supplier_id` where mse_supplier.deleted = 0 && mse_supplier.supplier_id=".$id);
                 return $rs->row();
       }
       
       
       public function AddsupplierCategory($data){
               $rs = $this->db->insert('category_sp',$data['supplier_category']);
                 $bool= $this->db->affected_rows()>0? true:false;
            return $bool;
       }
        
       public function updatesupplier($data,$id){
       $rs=   $this->db->update('UPDATE mse_supplier
INNER JOIN category_sp
SET '.$data['supplier_record']. 
'SET '.$data['supplier_category'].
'WHERE supplier_id='.$id);
       echo $this->db->last_query();
       exit;
		 $bool= $this->db->affected_rows()>0? true:false;
                 return $bool;
}


  public function deletesupplier($id)
	{
		  $rs=   $this->db->update('mse_supplier',array('deleted'=>'1'), array('supplier_id'=>$id));
		   $bool= $this->db->affected_rows()>0? true:false;
                 return $bool;	
	}
        
        public function deletecategory($id)
	{
             $rs=   $this->db->update('category_sp',array('deleted'=>'1'), array('supplier_id'=>$id));
		$bool= $this->db->affected_rows()>0? true:false;
                 return $bool;	
	}
        
        
        public function Addbankinfo($data){
		$rs = $this->db->insert('bank_info', $data['bank_info']);
             $bool= $this->db->affected_rows()>0? true:false;
             return $bool;
	}
        
         public function getcategorysupplier(){
            
                $rs= $this->db->query("SELECT DISTINCT category_name FROM (`category_sp`) 
                     JOIN `mse_supplier` ON `mse_supplier`.`supplier_type` = `category_sp`.`category_id`");
    //$rs = $this->db->select('category_name')->from('category_sp')->join('mse_supplier', 'mse_supplier.supplier_id = category_sp.supplier_id')->where(array('supplier_type'=>'Finish Material'));
             // echo $this->db->last_query();
               return $rs->result_array();
       }
       
     
                public function getcountry_States(){
            
                $rs= $this->db->query("  SELECT states.`id` AS state_id, states.`name`,countries.`id` FROM countries 
                                  JOIN states ON states.`country_id` = countries.`id`
                                   WHERE countries.`id`=166");
    //$rs = $this->db->select('category_name')->from('category_sp')->join('mse_supplier', 'mse_supplier.supplier_id = category_sp.supplier_id')->where(array('supplier_type'=>'Finish Material'));
             // echo $this->db->last_query();
               return $rs->result();
       }
}
