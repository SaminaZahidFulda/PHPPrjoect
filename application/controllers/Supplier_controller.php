<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Supplier_controller extends CI_Controller {

    public function __construct(){
		parent::__construct();
	   $this->load->model('general_model');
            $this->general_model->check_admin();
	   $this->load->model('supplier_model');
       }
	public function index()
	{
            $data['suppliers']=$this->supplier_model->allsuppliers();
            $this->load->view('Supplier/Supplierlisting',$data);
		
	}
	
	
        public function get_cities($stateid){
            $html = '';
            $State_id=  $this->input->post('supplier_state');
            $rs = $this->db->where('state_id', $stateid)->get('cities');
            foreach($rs->result() as $city){
                $html .='<option value="'.$city->id.'">'.$city->name.'</option>';
            }
            echo $html;
        }
        
	public function addsupplier(){
            unset($_POST['submit']);
            $supplier = $this->input->post();
                 /*    if($this->input->post('supplier_state')==1){
                  $State_id=  $this->input->post('supplier_state');
               $row= $this->general_model->select_data('cities',$State_id);
               print_r($row);
               exit();
                $html .='<option value="'.$row->id.'">'.$row->name.'</option>';
	  echo $html;
                }*/
           if(empty($supplier)){
                $data['states']= $this->supplier_model->getcountry_States();
           
            $this->load->view('Supplier/supplier');
        }else{
            $this->form_validation->set_rules('supplier_fname', 'First Name', 'required|min_length[5]|max_length[12]');
		 $this->form_validation->set_rules('supplier_lname', 'Last Name', 'required|min_length[5]');
                 	 $this->form_validation->set_rules('supplier_email', 'Email', 'required||is_unique[mse_supplier.supplier_email]');
		 
		 $this->form_validation->set_rules('supplier_phone', 'Telephone', 'required|max_length[11]|max_length[15]|integer');
		 
		 $this->form_validation->set_rules('supplier_mobile', 'Cell Number', 'required|max_length[11]|max_length[11]|integer');
		 $this->form_validation->set_rules('supplier_address', 'Address', 'required');
		 $this->form_validation->set_rules('supplier_shopname', 'Shop Name', 'required');
		 
	    

		if ($this->form_validation->run() !=True)
		{
		
                $firstname = $this->input->post('supplier_fname');
                $lastname = $this->input->post('supplier_lname');
                $email = $this->input->post('supplier_email');
                $phone = $this->input->post('supplier_phone');
                $type = $this->input->post('supplier_type');
                $mobile = $this->input->post('supplier_mobile');
                $address= $this->input->post('supplier_address');
                 $date= $this->input->post('supplier_added');
                 $brno = $this->input->post('branch_no');
                 $bank_name = $this->input->post('bank_name');
                 $acc_no = $this->input->post('account_no');
               $state= $this->input->post('supplier_state');
                $Shopaddress= $this->input->post('supplier_shopname');
                  $Shopaddress= $this->input->post('supplier_shopname');
                $S= $this->input->post('Store_id');
              
                
                
                
                 $data['supplier_record']= array('Store_id'=>$S,'supplier_fname'=>$firstname,'supplier_lname'=>$lastname
                         ,'supplier_email'=>$email,'supplier_phone'=>$phone,'supplier_mobile'=>$mobile,'supplier_state'=>$state,'supplier_address'=>$address,'supplier_type'=>$type,
                     'supplier_shopname'=>$Shopaddress
                         ,'supplier_added'=>$date);
           $supplierid= $this->supplier_model->Addsupplier($data);
          
                $category = $this->input->post('category_name');
              
                  $pid = $this->input->post('parent_id');
              
                            $image =$_FILES['image']['name'];
            
             $productimage = $this->general_model->upload_imagebannersub('image');
                $supplier_id =  $supplierid;
               // echo '<pre>';
               // print_r($_POST);
                $data['supplier_category']= array('parent_id'=>$pid,'image'=>$image,'category_name'=>$category,'Store_id'=>$S,'supplier_id'=>$supplier_id);
            $add=$this->supplier_model->AddsupplierCategory($data);
             foreach ($brno AS $key => $ct) {
            $data['bank_info']= array('Store_ID'=>$S,'SupplierID'=>$supplierid,'branch_no'=>$brno[$key],'bank_name'=>$bank_name[$key],'account_no'=>$acc_no[$key],'bank_info_for'=>'Supplier','date_added'=>$date);
             $addbank=$this->supplier_model->Addbankinfo($data);}
              if($supplierid>0 && $add==true&&$addbank){
              $this->general_model->successadded_Msg('success','Information Added Succesfully...');
             redirect('Supplier_controller/');
             
              }
                   }
            }
        }
		
        
                public function updatesupplier()
	{
                    
		unset($_POST['submit']);
        $supplier_data = $this->input->post();
       
        $id = $this->uri->segment(3);
      
        if(empty($supplier_data)){
            $data['row'] = $this->supplier_model->singlesupplier($id);
         // echo '<pre>';
          //  print_r($data['row']);
            $this->load->view('Supplier/UpdateSupplier', $data);
        }
        else{
             $firstname = $this->input->post('supplier_fname');
                $lastname = $this->input->post('supplier_lname');
                $email = $this->input->post('supplier_email');
                $phone = $this->input->post('supplier_phone');
                $type = $this->input->post('supplier_type');
                $mobile = $this->input->post('supplier_mobile');
                $address= $this->input->post('supplier_address');
                 $date= $this->input->post('supplier_updated');
                 $brno = $this->input->post('branch_no');
                 $bank_name = $this->input->post('bank_name');
                 $acc_no = $this->input->post('account_no');
               $state= $this->input->post('supplier_state');
                $Shopaddress= $this->input->post('supplier_shopname');
               $category = $this->input->post('category_name');
                
            unset($_POST['Submit']);
                    $data['supplier_record']= array('supplier_fname'=>$firstname,'supplier_lname'=>$lastname
                         ,'supplier_email'=>$email,'supplier_phone'=>$phone,'supplier_mobile'=>$mobile,'supplier_state'=>$state,'supplier_address'=>$address,'supplier_type'=>$type,
                     'supplier_shopname'=>$Shopaddress
                         ,'supplier_updated'=>$date);
                    $data['supplier_category']= array('category_name'=>$category);
           $rs=  $this->supplier_model->updatesupplier($data, $id);
             if($rs == true){
                                 $this->general_model->successadded_Msg('info','Record Updated...');
       redirect('Supplier_controller/');
		
                            }
             
        }
			//ye rule applyy hngyy input field pe is tarah k agr koi input field khalii choraa gaya then ye error msg display hngyy 
         
            
	}
	
	
	
	        public function deletesupplier()
	{
		 $id = $this->uri->segment(3);
                
			//ye rule applyy hngyy input field pe is tarah k agr koi input field khalii choraa gaya then ye error msg display hngyy 
                $rs= $this->supplier_model->deletesupplier($id);
                $rs1= $this->supplier_model->deletecategory($id);
               if($rs &&  $rs1 == true){
                                 $this->general_model->successadded_Msg('warning','Record Deleted...');
       redirect('Supplier_controller/');
		
                            }
              
	}
	
}


