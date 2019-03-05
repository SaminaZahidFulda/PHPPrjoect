<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class general_model extends CI_Model {
    
    
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
     public function check_login($data) {
      
        $rs = $this->db->get_where('user', $data);
        //echo $this->db->last_query(); 
        $query = $rs->result_array();
         
        if ($rs->num_rows > 0) {
            return $query;
        } else {
            return false;
        }
    }
    
    
    public function getFacebookpagecount($url){
         $addr="http://api.facebook.com/restserver.php?method=links.getStats&urls=".$url;
$page_source=file_get_contents($addr);
$page = htmlentities($page_source);
$like="<like_count>";
$like1="</like_count>";
$lik=strpos($page,htmlentities($like));
$lik1=strpos($page,htmlentities($like1));
$fullcount=strlen($page);
$a=$fullcount-$lik1;
$aaa=substr($page,$lik+18,-$a);
$aaa1=substr($page,605,610);
return $aaa;
    }
   

    public function successadded_Msg($type, $text) {
        $msg = "<div class='alert alert-" . $type . " alert-block fade in col-md-5 col-md-offset-2'<button type='button' class='close close-sm' 
                        data-dismiss='alert'> <i class='icon-remove pull-right'></i> </button>
                    <h4> <i class='icon-ok-sign'></i>&nbsp;" . $text . " </h4>
                    <p></p>
                  </div>";
        $this->session->set_flashdata('verify', $msg);
    }

    public function select_data($table, $where = array()) {
        if ($where != null) {
            $rs = $this->db->get($table)->where($where);
           
            return $rs->result();
        } else {
            $rs = $this->db->get($table);
             
            return $rs->result();
        }
    }
    
    public function selectbanner() {
      $rs= $this->db->query("SELECT banner_image
FROM banners
WHERE banners.`category`='banner'");
      return $rs->result();
       
    }
     public function selectcategory() {
      $rs= $this->db->query("SELECT * FROM (`category_sp`) 
                     JOIN `mse_supplier` ON `mse_supplier`.`supplier_id` = `category_sp`.`supplier_id` 
                     WHERE `supplier_type` = 'Finished Material' && `category_sp`.deleted = 0
                      && `category_sp`.parent_id = 0 ");
      
      return $rs->result();
     }
        public function selectsubcategory($id) {
      $rs= $this->db->query("SELECT * FROM (`category_sp`) 
                     JOIN `mse_supplier` ON `mse_supplier`.`supplier_id` = `category_sp`.`supplier_id` 
                    
                     WHERE `supplier_type` = 'Finished Material' && `category_sp`.deleted = '0'
                      && `category_sp`.`parent_id` = ".$id);
      
      
      return $rs->result();
       
    }
     public function storebranch() {
      $rs= $this->db->query('SELECT store_config.`Store_branch`,store_config.`storeId`
FROM USER
RIGHT JOIN store_config ON store_config.`storeId`=USER.`store_id` GROUP BY store_config.`storeId`');
      return $rs->result();
       
    }

    function do_uploadproduct($filename) {
        $this->config = array(
            'upload_path' => dirname($_SERVER["SCRIPT_FILENAME"]) . "/uploads/products",
            'upload_url' => base_url() . "uploads/products",
            'allowed_types' => "gif|jpg|png|jpeg|pdf|doc|xml",
        );
        $this->load->library('upload', $this->config);
        if ($this->upload->do_upload($filename)) {
            return $this->upload->data();
        } else {
            return false;
        }
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