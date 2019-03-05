<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class booking_model extends CI_Model {
	
    
    public function Addbooking($data){
		$rs = $this->db->insert('booking_material', $data['booking']);
               return $this->db->insert_id();
	}
        public function Addstiching($data){
		$rs = $this->db->insert('bookinstiching',  $data['stiching']);
                 return $this->db->insert_id();
	}
	
	public function Addcolor($data){
		$rs = $this->db->insert('product_color',$data['color']);
               return $this->db->affected_rows()>0? true:false;
	}
        public function allcolor(){
		$rs = $this->db->where('Store_id', $this->general_model->branch_id)->get('product_color');
		
		return $rs->result();
	}
        public function allRawcategories(){
		$rs = $this->db->query('SELECT category_sp.`category_name`,rmpurchase_detail.`Rmpurchase_catname`,rmpurchase_detail.`Rmpurchase_amountperyard`
                      FROM rmpurchase_detail
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
        
          
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */