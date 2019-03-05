<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class  FrontIndex_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
         $this->load->model('general_model');  
        
        require_once('includes/headerfront.php');   
 
    }

    public function index() {
        
             
         $data['pics'] = $this->general_model->selectbanner();
         $this->load->view('FrontApp/index',$data);
    }

    

}
