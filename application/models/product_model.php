<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class product_model extends CI_Model {
	
     
    
    public function allproducts(){
		$rs = $this->db->query('SELECT add_product.`product_id`,add_product.`product_article`,add_product.`product_itemname`,category_sp.`category_name`,
color_detail.`ColorName`,add_product.`cost_price`,add_product.`product_saleprice`,add_product.`product_image`
FROM add_product
INNER JOIN category_sp ON category_sp.`category_id`=add_product.`category_name`
INNER JOIN color_detail ON color_detail.`colorid` = add_product.`color_name` WHERE add_product.`Store_id` = '.$this->general_model->branch_id);
		  return $rs->result();
	}
      public function allimages(){
		$rs = $this->db->query('SELECT add_product.`product_image`
                           FROM add_product  WHERE add_product.`Store_id` = '.$this->general_model->branch_id);
                  return $rs->result();
	} 
        
        
          
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */