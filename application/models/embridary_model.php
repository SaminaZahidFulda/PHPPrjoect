<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class embridary_model extends CI_Model {
	
     public function addproduct($data){
		$rs = $this->db->insert('add_product', $data['product']);
                return $this->db->affected_rows()>0? true:false;
            
	}
    public function Addembriodary($data){
		$rs = $this->db->insert('embroideryDetail', $data['embriodary']);
                return $this->db->insert_id();
	}
 public function addpaymentpurchase($data){
		$rs = $this->db->insert('embriodary_payment', $data['paymentadd']);
                return $this->db->affected_rows()>0? true:false;
            
	}
       
        public function allcolor(){
		$rs = $this->db->where('Store_id', $this->general_model->branch_id)->get('product_color');
		
		return $rs->result();
	}
         public function allworker(){
		$rs = $this->db->where('Store_id', $this->general_model->branch_id)->get('worker_info');
		
		return $rs->result();
	}
        public function allRawcategories(){
		$rs = $this->db->query('SELECT category_sp.`category_name`,rmpurchase_detail.`Rmpurchase_catname`,rmpurchase_detail.`Rmpurchase_amountperyard`
                      FROM 
                      rmpurchase_detail
                      INNER JOIN category_sp ON category_sp.`category_id`=rmpurchase_detail.`Rmpurchase_catname`
                      WHERE rmpurchase_detail.`Store_id` ='.$this->session->userdata('store_id'));
		
		return $rs->result();
	}
         public function allRawcategoriesCost($category){
		$rs = $this->db->query('SELECT rmpurchase_detail.`Rmpurchase_amountperyard`
                      FROM rmpurchase_detail
                      INNER JOIN category_sp ON category_sp.`category_id`=rmpurchase_detail.`Rmpurchase_catname`
                      WHERE rmpurchase_detail.`Rmpurchase_catname`='.$category.'&& rmpurchase_detail.`Store_id` ='.$this->session->userdata('store_id'));
		
		return $rs->row();
	}
	    public function allembriodaryrecord(){
		$rs = $this->db->query('SELECT embroiderydetail.`embriodary_id`,worker_info.`worker_name`,category_sp.`category_name`,product_color.`colorname`,embroiderydetail.`embriodary_yard`,
embroiderydetail.`embriodary_payable`,embroiderydetail.`embriodary_dateAdded`
FROM embroiderydetail
INNER JOIN worker_info ON embroiderydetail.`worker_id` = worker_info.`worker_ID`
 INNER JOIN category_sp ON embroiderydetail.`embriodary_category` = category_sp.`category_id`
 INNER JOIN product_color ON embroiderydetail.`embriodary_colour`= product_color.`pcid`WHERE embroiderydetail.`store_id` ='.$this->session->userdata('store_id'));
		
		return $rs->result();
	}
         public function embriodarydetail($id){
		$rs = $this->db->query('SELECT embriodary_payment.`embriodary_balance`,embroiderydetail.`embriodary_id`,
worker_info.`worker_name`,category_sp.`category_name`, product_color.`colorname`,
embroiderydetail.`embriodary_yard`,embriodary_payment.`embriodary_pay`,
 embroiderydetail.`embriodary_categoryprice`, embroiderydetail.`embriodary_colourprice`, 
 embroiderydetail.`embriodary_description`, embriodary_payment.`embriodary_typepaid`,
  embroiderydetail.`embriodary_payable`,embroiderydetail.`embriodary_dateAdded` 
  FROM embroiderydetail 
  INNER JOIN worker_info ON embroiderydetail.`worker_id` = worker_info.`worker_ID`
   INNER JOIN category_sp ON embroiderydetail.`embriodary_category` = category_sp.`category_id` 
   INNER JOIN product_color ON embroiderydetail.`embriodary_colour`= product_color.`pcid` 
   INNER JOIN embriodary_payment ON embriodary_payment.`embriodary_id`= embroiderydetail.`embriodary_id`
   WHERE embroiderydetail.`embriodary_id`='.$id);
		
		return $rs->result();
	}
        
       public function embriodarydetail1($id){
		$rs = $this->db->query('SELECT embroiderydetail.`embriodary_id`,
worker_info.`worker_name`,category_sp.`category_name`, product_color.`colorname`,
embroiderydetail.`embriodary_yard`,
 embroiderydetail.`embriodary_categoryprice`, embroiderydetail.`embriodary_colourprice`, 
 embroiderydetail.`embriodary_description`, 
  embroiderydetail.`embriodary_payable`,embroiderydetail.`embriodary_dateAdded` 
  FROM embroiderydetail 
  INNER JOIN worker_info ON embroiderydetail.`worker_id` = worker_info.`worker_ID`
   INNER JOIN category_sp ON embroiderydetail.`embriodary_category` = category_sp.`category_id` 
   INNER JOIN product_color ON embroiderydetail.`embriodary_colour`= product_color.`pcid` 
   WHERE embroiderydetail.`embriodary_id`='.$id);
		
		return $rs->row();
	}    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */