<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EmbriodaryBooking_controller extends CI_Controller {

    public function __construct(){
		parent::__construct();
	   $this->load->model('general_model');
            $this->general_model->check_admin();
	   $this->load->model('booking_model');
       }
	public function index()
	{
           $data['color']=$this->booking_model->allcolor();
           $data['categories']=$this->booking_model->allRawcategories();
            
               $this->load->view('bookingmaterial/booking',$data);
		   
	}
	
	
	public function addbooking(){
                  //  echo "<pre>";
                   // print_r($this->input->post());
                   // exit();
                  $data['booking']=$this->input->post('booking');          
                   $data['stiching']=$this->input->post('stiching');     
                    //  echo "<pre>";
                   // print_r($data['booking']);
                    //            echo "<pre>";
                    //print_r($data['stiching']);
                   // exit();  
                   $bool=  $this->booking_model->Addbooking($data);
                   $data['stiching']['booking_id']=$bool;
                    $bool=  $this->booking_model->Addstiching($data); 
                    if( $bool>0){
                          $this->general_model->successadded_Msg('success','Booking Added Succesfully...');
                    redirect('EmbriodaryBooking_controller/');
            
                    }
                    
                    
        }
                       public function addcolor(){
                    $data['color']=$this->input->post();
                    $data['color']['Store_id']= $this->session->userdata('store_id');
                     $bool=  $this->booking_model->Addcolor($data);
                         if($bool){
                             echo "pekfhjef";
                              $data['color']=$this->booking_model->allcolor();
           $data['categories']=$this->booking_model->allRawcategories();
            
                              $this->load->view('bookingmaterial/booking',$data);
		
                         }
                       
                       }
        
                     
         public function get_yardcost($category){
            $html = '';
          //  $supplierid=  $this->input->post('fpurchase_supplierid');
                   $category = $this->uri->segment(3);
            $rs = $this->booking_model->allRawcategoriesCost($category);
           $html=$rs->Rmpurchase_amountperyard;
            echo $html;
        }
          
                
          
}
	
	
