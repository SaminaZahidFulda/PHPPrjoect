<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ListProducts_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Frontgeneral_model');
        $this->load->library('cart');
         $this->general_model->check_admin();
    }

    public function index() {
        // $data['color']=$this->booking_model->allcolor();
        // $data['categories']=$this->booking_model->allRawcategories();

    }

    public function Show($id) {
        
         $data['products'] = $this->Frontgeneral_model->getproducts($id);
        
        $this->load->view('FrontApp/ListProducts',$data);
 
        
    }
    
     public function ShowGrid($id) {
        
         $data['products'] = $this->Frontgeneral_model->getproducts($id);
          $this->load->view('FrontApp/ListGridProducts',$data);
 
        
    }
    
    
     public function SingleProduct($id) {
        
         $data['products'] = $this->Frontgeneral_model->getproductsingle($id);
       
          $this->load->view('FrontApp/SingleProductdetail',$data);
 
        
    }
     public function Addtocart() {
       
          $id=$this->input->post('id');
         $data['products']= $this->Frontgeneral_model->getproductsingle($id);
      
       if($data['products']){
                $item = array(
                    'id' => $data['products']->product_id,
                    'name' =>$data['products']->product_itemname,
                    'price' =>$data['products']->product_saleprice,
                    'qty' =>1,
                    'options' =>array(
                            'image'=>$data['products']->product_image,'article #'=>$data['products']->product_article)
       );}
      $this->cart->insert($item);
        
          $this->load->view('FrontApp/ListProducts',$data);
    }
    
       public function Viewcart() {
        $this->load->view('FrontApp/ViewCart');
 
           }
           
            public function deleteItemCart($id) {
        $this->cart->update(array('rowid'=>$id, 'qty'=>0));
        redirect('FrontIndex_controller/');
           }
}
    
    
 
   