<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Store_controller extends CI_Controller {

    public function __construct(){
		parent::__construct();
	   $this->load->model('general_model');
            $this->general_model->check_admin();
	   $this->load->model('Store_model');
       }
	public function index()
	{
           // $data['suppliers']=$this->supplier_model->allsuppliers();
              $data['storefirst']=$this->Store_model->getstore();
              
              $data['storebanks']=$this->Store_model->getstorebanks();
               $this->load->view('StoreConfiguration/store',$data);
		   
	}
	
	public function deletebank(){
             $id = $this->uri->segment(3);
              $rs= $this->Store_model->deletebank($id);
                if($rs == true){
                                 $this->general_model->successadded_Msg('warning','Deleted...');
             redirect('Store_controller/index');
                            }
        }
	public function addstore(){
            
                        $owner  = $this->input->post('store_Ownername');
                        $phn = $this->input->post('store_phone');
                        $adr = $this->input->post('store_shopAddress');
                        $des  = $this->input->post('store_description');
                        $cotton  = $this->input->post('store_CottonCaution');
                        $silkcaution = $this->input->post('store_silkcaution');
                        $pic = $_FILES['storePicture']['name'];
                                               $dateadded = $this->input->post('Store_Added');

                       
                    $data['store'] = array('store_Ownername' => $owner,'store_phone'=>$phn, 'store_shopAddress' => $adr
               ,'store_description'=>$des,'store_CottonCaution' =>$cotton, 'store_silkcaution' => $silkcaution, 'storePicture' => $pic, 'Store_Added' => $dateadded);
                         if($this->Store_model->getstorebanks()<0){
                             $bool= $this->general_model->do_upload1("storePicture");
                    $storeid= $this->Store_model->AddStoreData($data);
                       if($storeid>0){
              $this->general_model->successadded_Msg('success','Store Detail Added Succesfully...');
             redirect('Store_controller/addstore');
             
                         }
                         }
                       else {
                           echo '<pre>';
                           print_r( $data['store']);
                          $rs= $this->Store_model->getstore();
                           $path =$rs['storePicture'];
                           $bool= $this->general_model->do_upload1("storePicture");
                             $storeid= $this->Store_model->UpdateStoreData($data,$this->general_model->branch_id,$path);
                            if($bool>0){
                               $this->general_model->successadded_Msg('success','Store Updated Succesfully...');
             redirect('Store_controller/');
              
                            }
                            
                       }  
                         
                       }
        
                     
        public function addbank(){
            $bank= $this->input->post();
                 $bno= $this->input->post('branch_no');  
                 $bname= $this->input->post('bank_name');    
                 $acc= $this->input->post('account_no');
                 $dateadded = $this->input->post('Store_Added');
                        foreach ($bname AS $key => $ct) {
                         $data['storebank'] = array('Store_ID' => '1','bank_info_for'=>'Store', 'branch_no' => $bno[$key]
               , 'bank_name' => $bname[$key], 'account_no' => $acc[$key], 'date_added' => $dateadded);
                    $this->Store_model->Addbankinfo($data);
                       redirect('Store_controller/');
             
                      }
        }        
                
          
}
	
	
