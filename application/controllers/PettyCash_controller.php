<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PettyCash_controller extends CI_Controller {

    public function __construct(){
		parent::__construct();
	   $this->load->model('general_model');
            $this->general_model->check_admin();
	   $this->load->model('pettycash_model');
       }
	public function index()
	{
          
            $data['Type']=$this->pettycash_model->allTypecash();
           $data['cash']=$this->pettycash_model->allrecordcash();
             $this->load->view('PettyCash/pettycash',$data);
	}
        
         public function Add() {

          $data['cash'] = $this->input->post();
            $amount = $this->input->post('petty_cash_amount');
            $detail = $this->input->post('petty_cash_naration');
              $createat = $this->input->post('created_at');
           
            $s = $this->input->post('store_id');
            $data['pettycash_record'] = array('store_id'=>$s,'petty_cash_typeid'=>'Recieved', 'paid_by' => '2', 'paid_to' => '3', 'petty_cash_amount' => $amount
                , 'petty_cash_naration' => $detail,'created_at' => $createat);
         
          $bool =$this->pettycash_model->addcash($data);
          if($bool>0){
               $this->general_model->successadded_Msg('success','Cash Added Succesfully...');
             redirect('PettyCash_controller/');
             
          }
         }
          public function AddPay() {

          $data['cash'] = $this->input->post();
            $t = $this->input->post('petty_cash_typeid');
           $amount = $this->input->post('petty_cash_amount');
            $detail = $this->input->post('petty_cash_naration');
            
            $s = $this->input->post('store_id');
              $createat = $this->input->post('created_at');
           
            $data['pettycash_record'] = array('store_id'=>$s,'petty_cash_typeid'=>$t, 'paid_by' => '2', 'paid_to' => '3', 'petty_cash_amount' => '-'.$amount
                , 'petty_cash_naration' => $detail,'created_at' => $createat);
         
          $bool =$this->pettycash_model->addcash($data);
          if($bool>0){
               $this->general_model->successadded_Msg('success','Cash Added Succesfully...');
             redirect('PettyCash_controller/');
             
          }
         }
        
        
	
	
          
                
          
}
	
	
