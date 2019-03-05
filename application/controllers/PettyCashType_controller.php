<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PettyCashType_controller extends CI_Controller {

    public function __construct(){
		parent::__construct();
	   $this->load->model('general_model');
            $this->general_model->check_admin();
	   $this->load->model('pettycashType_model');
       }
	public function index()
	{
           $data['cash']=$this->pettycashType_model->allrecordcashtype();
             $this->load->view('PettyCash/pettycashtype',$data);
	}
        
         public function Add() {
           unset($_POST['save']);
          $data['cash'] = $this->input->post();
          // echo '<pre>';
          // print_r($data);
          // exit;
          $bool =$this->pettycashType_model->addcashtype($data);
          if($bool>0){
               $this->general_model->successadded_Msg('success','Cash Type Added Succesfully...');
             redirect('PettyCashType_controller/');
             
          }
         }
        
        
	
	
          
                
          
}
	
	
