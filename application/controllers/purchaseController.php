<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class purchaseController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->load->model('purchase_model');
         $this->general_model->check_admin();
        $this->load->model('general_model');
    }
       
     public function index() {
       
         $data['purchase']  =  $this->purchase_model->getpurchases();
         $this->load->view('purchase/purchaselisting',$data);
    }

    public function get_category($supplierid){
            $html = '';
          //  $supplierid=  $this->input->post('fpurchase_supplierid');
           
                          $supplierid = $this->uri->segment(3);
                          
            $rs = $this->purchase_model->getcategorysupplierFinish1($supplierid);
            
            foreach($rs as $c){
                $html .='<option value="'.$c->category_id.'">'.$c->category_name.'</option>';
            }
            echo $html;
        }
        
        public function get_categoryRAW($supplierid){
            $html = '';
          //  $supplierid=  $this->input->post('fpurchase_supplierid');
           
                          $supplierid = $this->uri->segment(3);
                          
            $rs = $this->purchase_model->getcategorysupplierRAW1($supplierid);
            
            foreach($rs as $c){
                $html .='<option value="'.$c->category_id.'">'.$c->category_name.'</option>';
            }
            echo $html;
        }
   
    public function Addpurchase() {

          $data = $this->input->post();
        
        if (empty($data)) {
        $data['supplierFinish'] = $this->purchase_model->getsupplierFinish();
        $data['supplierRaw'] = $this->purchase_model->getsupplierRAW();
        $data['categorieFinish'] = $this->purchase_model->getcategorysupplierFinish();
        $data['categorieRaw'] = $this->purchase_model->getcategorysupplierRaw();
        $this->load->view('purchase/PurchaseRF', $data);
        } else if ($this->input->post('fpurchase_netTotal')!=null) {
            
            
            
           $sp_id = $this->input->post('fpurchase_supplierid');
            $catname = $this->input->post('fDpurchase_catname');
            $color = $this->input->post('fDpurchase_color');
            $reorderlevel = $this->input->post('fDpurchase_reorderlevel');
            $unitprice = $this->input->post('fDpurchase_unitprice');
            $qty = $this->input->post('fDpurchase_quantity');
           $saleprice = $this->input->post('fDpurchase_saleprice');
            $subtotal = $this->input->post('fpurchase_subtotal');
            $nettotal = $this->input->post('fpurchase_netTotal');
            $discount = $this->input->post('fpurchase_discount');
            $dateadded = $this->input->post('fpurchase_dateAdded');
             $productname = $this->input->post('product_itemname');
             $s= $this->input->post('Store_id');
              $article = $this->input->post('product_article');
            $data['purchase_record'] = array('Store_id'=>$s,'fpurchase_supplierid' => $sp_id,'fpurchase_subtotal'=>$subtotal, 'fpurchase_discount' => $discount
               ,'fpurchase_netTotal'=>$nettotal, 'fpurchase_dateAdded' => $dateadded);
            
             
             $purchaseid = $this->purchase_model->Addpurchase($data);
              $image =$_FILES['product_image']['name'];
            
             $productimage = $this->general_model->upload_images('product_image');
            foreach ($catname AS $key => $ct) {
             $data['add_product'] = array('Store_id'=>$s, 'transaction_id'=>$purchaseid ,'transaction_type' => 'purchase','category_name'=>$ct, 'color_name' => $color[$key]
               ,'cost_price'=>$unitprice[$key],'product_saleprice'=>$saleprice[$key],'product_itemname'=>$productname[$key] ,'product_article'=>$article[$key],
                 'product_image'=>$productimage[$key],
                 'product_dateAdded' => $dateadded);
            $product = $this->purchase_model->Addproduct($data);
           
             } 
             $data['paymentadd'] = $this->input->post('payment');
             $data['paymentadd']['purchase_id'] =$purchaseid;
            // echo '<pre>';
            // print_r($data['payment']);
             //exit();
               $bool1=$this->purchase_model->addpaymentpurchase($data);
            foreach ($catname AS $key => $ct) {
                $data['purchasedetail_record'] = array('Store_id'=>$s,'fDpurchase_purchaseID'=>$purchaseid,'fDpurchase_catname'=>$ct,'fDpurchase_color'=>$color[$key], 'fDpurchase_unitprice'=>$unitprice[$key],'fDpurchase_saleprice'=>$saleprice[$key], 
                    'fDpurchase_quantity'=>$qty[$key],'fDpurchase_reorderlevel'=>$reorderlevel[$key]);
                            $add= $this->purchase_model->Addpurchasedetail($data);
                  
            }             if($add==true && $bool1==true){
              $this->general_model->successadded_Msg('success','Purchase Added Succesfully...');
             redirect('purchaseController/');
             
        }
               
        } else if ($this->input->post('Rmpurchase_netTotal')!=null) {
           // echo '<pre>';
           //  print_r($this->input->post('payment1'));
           //  exit();
            $sp_id = $this->input->post('Rmpurchase_supplierid');
            $catname = $this->input->post('Rmpurchase_catname');
             $totalyard = $this->input->post('Rmpurchase_totalyard');
            
            $amountperyard = $this->input->post('Rmpurchase_amountperyard');
            $amount = $this->input->post('Rmpurchase_amount');
            $subtotal = $this->input->post('Rmpurchase_subtotal');
            $s= $this->input->post('Store_id');
             
            $discount = $this->input->post('Rmpurchase_discount');
              $nettotal = $this->input->post('Rmpurchase_netTotal');
            $dateadded = $this->input->post('Rmpurchase_dateadded');
               
            $data['purchaseRaw_record'] = array('Store_id'=>$s,'Rmpurchase_supplierid' => $sp_id, 'Rmpurchase_amount' => $amount,'Rmpurchase_subtotal'=>$subtotal,
               'Rmpurchase_discount'=>$discount,'Rmpurchase_netTotal'=>$nettotal, 'Rmpurchase_dateadded' => $dateadded);
            $purchaseRawid = $this->purchase_model->AddRawpurchase($data);
                $data['paymentadd']         =  $this->input->post('payment1');
               $data['paymentadd']['purchase_id'] =$purchaseRawid;
            foreach ($catname AS $key => $ct) {
             // $pruchase_detail = array('category_id'=>$ct, 'unit_price'=>$unitprice[$key], 'qty'=>$qty[$key]);
             $data['purchaseRawdetail_record'] = array('Store_id'=>$s,'Rmpurchase_purchaseID'=>$purchaseRawid,'Rmpurchase_catname'=>$ct, 'Rmpurchase_totalyard'=>$totalyard[$key],'Rmpurchase_amount'=>$amount[$key],
              'Rmpurchase_amountperyard'=>$amountperyard[$key]);    
               $my= $this->purchase_model->AddpurchaseRawdetail($data);
               $bool1=$this->purchase_model->addpaymentpurchase($data);
               if($my==true && $bool1==true){
                   $this->general_model->successadded_Msg('info','Purchasee Added Succesfully...');
             redirect('purchaseController/index');
              
               }
            }
              
        }
    }
  public function detailpurchase(){
      
      if($this->input->post('paid')){
           $data['paymentadd']=$this->input->post('fp');
         
          // echo '<pre>';
          // print_r($data['paymentadd']);
          // exit;
                            $bool = $this->purchase_model->addpaymentpurchase($data);
                            if($bool){
                                 $this->general_model->successadded_Msg('info','Amount Recieved Succesfully...');
             redirect('purchaseController/index');
                            }
      }
             $eid = $this->uri->segment(3);
              $data['detail'] = $this->purchase_model->getpurchasedetail($eid);
              
             $data['purchase1']  =  $this->purchase_model->getpurchase1($eid);
               $data['purchase']  =  $this->purchase_model->getpurchase($eid);
              
              // echo '<pre>';
               //print_r($data['detail']);
             $this->load->view('purchase/purchasedetail',$data);
   
  }
  public function deletepurchase(){
      $id = $this->uri->segment(3);
      echo $id;
       echo $rs = $this->purchase_model->deletepurchase($id);
      echo $rs1 = $this->purchase_model->deletepurchasedetail($id);
     echo $rs2 = $this->purchase_model->deletepurchasepayment($id);
       if($rs == true){
                                 $this->general_model->successadded_Msg('warning','Record Deleted...');
             redirect('purchaseController/index');
                            }
  }
  
}
