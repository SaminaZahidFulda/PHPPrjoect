<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Frontgeneral_model extends CI_Model {
    
    
    public $branch_id;
    
    public function __construct() {
        parent::__construct();
        $this->branch_id = $this->session->userdata('store_id');
    }

        public function check_admin() {
        if(!$this->session->userdata('user_id')){
            redirect('login');
        }
    }
    
     public function getproducts($id) {
      
        $rs= $this->db->query("SELECT add_product.*,category_sp.`category_name` as cname,color_detail.`ColorName`  FROM add_product
INNER JOIN category_sp ON category_sp.`category_id`=add_product.`category_name`

INNER JOIN color_detail ON color_detail.`colorid` = add_product.`color_name`
WHERE add_product.`category_name`=".$id);
      
      return $rs->result();
    }
   
     public function getproductsingle($id) {
      
        $rs= $this->db->query("SELECT add_product.*,fpurchase_detail.`fDpurchase_color`,fpurchase_detail.`fDpurchase_quantity`,color_detail.`ColorName`,category_sp.`category_name` as cname
FROM add_product
INNER JOIN fpurchase_detail ON fpurchase_detail.`fDpurchase_purchaseID` = add_product.`transaction_id`

INNER JOIN category_sp ON category_sp.`category_id`=add_product.`category_name`
INNER JOIN color_detail ON color_detail.`colorid` = add_product.`color_name`
WHERE add_product.`product_id`=".$id);
      
      return $rs->row();
    }
     public function check_login($data) {
      
       $rs= $this->db->query("SELECT * FROM (`category_sp`) 
                     JOIN `mse_supplier` ON `mse_supplier`.`supplier_id` = `category_sp`.`supplier_id` WHERE `supplier_type` = 'Finished Material' && `category_sp`.deleted = 0");
      return $rs->result();
    }
    
    
   
    public function selectcategory() {
      $rs= $this->db->query("SELECT * FROM (`category_sp`) 
                     JOIN `mse_supplier` ON `mse_supplier`.`supplier_id` = `category_sp`.`supplier_id` WHERE `supplier_type` = 'Finished Material' && `category_sp`.deleted = 0");
      return $rs->result();
       
    }
     public function selectsubcategory($id) {
      $rs= $this->db->query("SELECT * FROM (`category_sp`) 
                     JOIN `mse_supplier` ON `mse_supplier`.`supplier_id` = `category_sp`.`supplier_id` WHERE `supplier_type` = 'Finished Material' && `category_sp`.deleted = 0
                     && category_sp.parent_id=".$id);
      return $rs->result();
       
    }
     public function selectsubbanner() {
      $rs= $this->db->query("SELECT banner_image
FROM banners
WHERE banners.`category`='Subbanner'");
      return $rs->result();
       
    }
   function upload_imagebannersub($filename) {
        $this->config = array(
            'upload_path' => dirname($_SERVER["SCRIPT_FILENAME"]) . "/uploads/bannerPics/Sub",
            'upload_url' => base_url() . "uploads/bannerPics/Sub",
            'allowed_types' => "gif|jpg|png|jpeg|pdf|doc|xml",
        );
        $this->load->library('upload', $this->config);
        if ($this->upload->do_upload($filename)) {
            return $this->upload->data('file_name');
        } else {
            return false;
        }
    } 
function upload_imagebanner($filename) {
        $this->config = array(
            'upload_path' => dirname($_SERVER["SCRIPT_FILENAME"]) . "/uploads/bannerPics",
            'upload_url' => base_url() . "uploads/bannerPics",
            'allowed_types' => "gif|jpg|png|jpeg|pdf|doc|xml",
        );
        $this->load->library('upload', $this->config);
        if ($this->upload->do_upload($filename)) {
            return $this->upload->data('file_name');
        } else {
            return false;
        }
    }
    public function upload_images($file_name) {
        $count = count($_FILES[$file_name]['size']);
        foreach ($_FILES as $key => $value) {
            for ($sbs = 0; $sbs < $count; $sbs++) {
                $_FILES[$file_name]['name'] = $value['name'][$sbs];
                $_FILES[$file_name]['type'] = $value['type'][$sbs];
                $_FILES[$file_name]['tmp_name'] = $value['tmp_name'][$sbs];
                $_FILES[$file_name]['error'] = $value['error'][$sbs];
                $_FILES[$file_name]['size'] = $value['size'][$sbs];
                $data = $this->do_uploadproduct($file_name);
                $result[] = $data['file_name'];
            }
        }

        return $result;
    }

    function do_upload1($filename, $dir = 'uploads') {
        $this->config = array(
            'upload_path' => dirname($_SERVER["SCRIPT_FILENAME"]) . "/uploads/",
            'upload_url' => base_url() . "uploads/",
            'allowed_types' => "gif|jpg|png|jpeg|pdf|doc|xml",
        );
        $this->load->library('upload', $this->config);
        if ($this->upload->do_upload($filename)) {
            echo "succes";
            return true;
        } else {
            echo "fail";
            return false;
        }
    }
    
    public function getproductscount(){
       $rs= $this->db->query('SELECT COUNT(add_product.`product_id` ) as p
FROM add_product');
        return $rs->row();
    }
     public function getbookingscount(){
       $rs= $this->db->query('SELECT COUNT(booking_material.`booking_id`) AS p
FROM booking_material WHERE booking_material.`deleted` = 0');
        return $rs->row();
    }
    
     public function getamount(){
       $rs= $this->db->query('SELECT SUM(petty_cash.petty_cash_amount) AS p
FROM petty_cash WHERE petty_cash.`deleted` = 0');
        return $rs->row();
    }
    
   
 public function insertbanner($data){
		$rs = $this->db->insert('banners', $data['record']);
                return $this->db->affected_rows()>0? true:false;
            
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */