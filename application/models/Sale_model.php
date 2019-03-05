<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sale_model extends CI_Model {

    private $table = 'store_config';

    
      public function getsale(){
               $rs = $this->db->where('deleted','0')
                       ->where('Store_id', $this->general_model->branch_id)->get('mse_sale');
                 return $rs->result();
       }
    public function addsale($data) {
        $rs = $this->db->insert('mse_sale',  $data['items']);
        $this->db->affected_rows() > 0 ? true : false;

        return $this->db->insert_id();
    }
     public function addsaleitems($data) {
        $rs = $this->db->insert('sale_items', $data['item']);
        $this->db->affected_rows() > 0 ? true : false;

        return $this->db->insert_id();
    }

    //  public function item_search($term){
    //        $rs = $this->db->where('product_itemname',$term)->get('add_product');
    //        return $rs->result();
    //}
    public function item_search($q) {
        $rs = $this->db->query("SELECT 
  add_product.`product_id`,
  add_product.`product_article`,
  add_product.`product_itemname`,
  category_sp.`category_name`,
  color_detail.`ColorName`,
  add_product.`cost_price`,
  add_product.`product_saleprice`,
  add_product.`product_image` 
FROM
  add_product 
  INNER JOIN category_sp 
    ON category_sp.`category_id` = add_product.`category_name` 
  INNER JOIN color_detail 
    ON color_detail.`colorid` = add_product.`color_name`
    WHERE add_product.`product_article` LIKE '%$q%'
    OR add_product.`product_itemname` LIKE '%$q%' && add_product.Store_id =".$this->session->userdata('store_id'), FALSE);
        return $rs->result();
    }
      public function item_search1($q) {
        $rs = $this->db->query("SELECT 
  add_product.`product_id`,
  add_product.`product_article`,
  add_product.`product_itemname`,
  category_sp.`category_name`,
  color_detail.`ColorName`,
  add_product.`cost_price`,
  add_product.`product_saleprice`,
  add_product.`product_image` 
FROM
  add_product 
  INNER JOIN category_sp 
    ON category_sp.`category_id` = add_product.`category_name` 
  INNER JOIN color_detail 
    ON color_detail.`colorid` = add_product.`color_name` where add_product.`product_id` =".$q);
           echo '<pre>';
  print_r($rs->result());
  exit;
        return $rs->result();
    }

    

 public function getdetail($q) {
        $rs = $this->db->query("SELECT mse_sale.*,sale_items.`item_quantity`,sale_items.`item_total_price`,sale_items.`item_unit_price`,sale_items.`item_quantity`,
add_product.`product_itemname`,add_product.`product_image`
FROM mse_sale
INNER JOIN sale_items ON sale_items.`sale_id` = mse_sale.`sale_id`
INNER JOIN add_product ON add_product.`product_id` = sale_items.`item_id` where mse_sale.sale_id = ".$q);
        return $rs->result();
    }
     public function generateinvoice($id) {
      $rs= $this->db->query('SELECT store_config.*,mse_sale.*,sale_items.*,add_product.`product_itemname`
FROM mse_sale
INNER JOIN sale_items ON sale_items.`sale_id` = mse_sale.`sale_id`
INNER JOIN add_product ON add_product.`product_id` = sale_items.`item_id`
INNER JOIN store_config ON store_config.`storeId` = mse_sale.`Store_id` WHERE mse_sale.`sale_id`='.$id);
      return $rs->result();
       
    }
}
