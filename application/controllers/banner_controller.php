<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class banner_controller extends CI_Controller {

    public function __construct(){
		parent::__construct();
	   $this->load->model('general_model');
            $this->general_model->check_admin();
	  }
	public function index()
	{
          
             $this->load->view('banner/uploadbanner');
	}
        
         public function Add() {
         $image =$_FILES['Banner_image']['name'];
         $store_id = $this->input->post('Store_id');
          if($this->input->post('category')=='Subbanner'){
              $productimage = $this->general_model->upload_imagebannersub('Banner_image');
             
             $data['record'] = array('Store_id'=>$store_id,
                 'Banner_image'=>$productimage['file_name'],'category'=>$this->input->post('category'));
          $bool =$this->general_model->insertbanner($data);
           }
           else  if($this->input->post('category')=='banner'){
              
         $productimage = $this->general_model->upload_imagebanner('Banner_image');
          
          $data['record'] = array('Store_id'=>$store_id,'Banner_image'=>$productimage['file_name'],
              'category'=>$this->input->post('category'));
           
          $bool =$this->general_model->insertbanner($data);
           } 
           
           if($bool>0){
               $this->general_model->successadded_Msg('success','Cash Added Succesfully...');
             redirect('banner_controller/');
             
          }
         }
        
        
	
	
          
                
          
}
	
	
