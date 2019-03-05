<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Embriodary_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('general_model');
         $this->general_model->check_admin();
        $this->load->model('embridary_model');
    }

    public function index() {
        // $data['color']=$this->booking_model->allcolor();
        // $data['categories']=$this->booking_model->allRawcategories();

         $data['embriodary'] = $this->embridary_model->allembriodaryrecord();
         $this->load->view('Embridory/EmbriodaryListing', $data);
    }

    public function add() {
         

        unset($_POST['save']);
        $data['embriodary'] = $this->input->post('a');
        
        if (empty($data['embriodary'])) {
                    $data['worker'] = $this->embridary_model->allworker();
        $data['cat'] = $this->embridary_model->allRawcategories();
        $data['color'] = $this->embridary_model->allcolor();
            $this->load->view('Embridory/embridory',$data);
        } else {
           
           // $color = $this->input->post('embroidary_colour');
              $add = $this->embridary_model->Addembriodary( $data);
              $data['paymentadd'] = $this->input->post('e');
              $data['paymentadd']['embriodary_id']=$add;
              $data['paymentadd']['Store_id']= $this->session->userdata('store_id');
               $bool1=$this->embridary_model->addpaymentpurchase($data);
                if ($add>0 && $bool1==true) {
                 $this->general_model->successadded_Msg('info', 'Detail Added Succesfully...');
                    redirect('Embriodary_controller/');
                }
            
        }
    }
 
    
    
    public function addpayment(){
           $data['paymentadd']= $this->input->post('e');
           // echo '<pre>';
           // print_r($data);
           // exit;
          $data['paymentadd']['Store_id']= $this->session->userdata('store_id');
           $bool = $this->embridary_model->addpaymentpurchase($data);
                            if($bool){
                                 $this->general_model->successadded_Msg('info','Amount Recieved Succesfully...');
             redirect('Embriodary_controller/index');
                            }
       
    } 
    public function detail($id){
        $id = $this->uri->segment(3);
         $data['embdetail1']= $this->embridary_model->embriodarydetail1($id);
          $data['embdetail']= $this->embridary_model->embriodarydetail($id);
        $this->load->view('Embridory/embridorydetail',$data);
    }
  
    public function recieving(){
        unset($_POST['save']);
       $data['product']= $this->input->post(); 
       if(empty($data['product'])){
        $id = $this->uri->segment(3);
        $data['embdetail1']= $this->embridary_model->embriodarydetail1($id);
         $this->load->view('Embridory/addproduct',$data);
    }
    else
    {
        $data['product']['Store_id']= $this->session->userdata('store_id');
       $data['product']['product_image']=$_FILES['product_image']['name'];
           $bool= $this->general_model->do_uploadproduct("product_image");
          $bool1=$this->embridary_model->addproduct($data);
                if ($bool && $bool1==true) {
                 $this->general_model->successadded_Msg('info', 'Product Added Succesfully...');
                    redirect('Embriodary_controller/');
                }
    }
    
    }
    
    public function get_yardcost($category) {
        $html = '';
        //  $supplierid=  $this->input->post('fpurchase_supplierid');
        $category = $this->uri->segment(3);
        $rs = $this->embridary_model->allRawcategoriesCost($category);
        $html = $rs->Rmpurchase_amountperyard;
        echo $html;
    }

    
    
    
}
