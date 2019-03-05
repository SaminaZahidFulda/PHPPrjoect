<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class myfirst extends CI_Controller {

    public function __construct(){
		parent::__construct();
    $this->load->model('dbusers_model');
     $this->general_model->check_admin();
     $this->load->model('general_model');
       }
	public function index()
	{
          $data['users']=$this->dbusers_model->allUsers();
          $this->load->view('Personnal\ListAdmin',$data);
		// $this->load->view('myform');
          
	}
	
	
	public function AddUser(){
            unset($_POST['submit']);
            $user = $this->input->post();
             //echo '<pre>';
           // print_r($user);
                   
           if(empty($user)){
            $this->load->view('Personnal\myform');
             
        }else{
            $this->form_validation->set_rules('user_firstname', 'First Name', 'required|min_length[5]|max_length[12]');
		 $this->form_validation->set_rules('user_lastname', 'Last Name', 'required|min_length[5]');
		 $this->form_validation->set_rules('user_type', 'Type of User', 'required');
		 $this->form_validation->set_rules('user_phone', 'Telephone', 'required|max_length[11]|max_length[15]|integer');
		 
		 $this->form_validation->set_rules('user_mobile', 'Cell Number', 'required|max_length[11]|max_length[11]|integer');
		 
		 $this->form_validation->set_rules('user_address', 'Address', 'required');
		 
	    $this->form_validation->set_rules('user_username', 'Username', 'required|min_length[5]|max_length[12]|is_unique[user.user_username]');
		$this->form_validation->set_rules('user_password', 'Password', 'required|matches[passconf]|min_length[6]');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('Personnal\myform');
		}
		else
		{
		unset($_POST['submit']);
                unset($_POST['user_email']);
                unset($_POST['passconf']);
                
            $verify = $this->dbusers_model->AddUsers($this->input->post());
            if($verify==true){
            $this->general_model->successadded_Msg('warning','Record Added Succesfullyyyyyyy...');
             redirect('myfirst\AddUser');
            }
            
        }
		
		}
        }
                
                public function updateUser($id)
	{
                    
		unset($_POST['submit']);
        $user_data = $this->input->post();
       // echo '<pre>';
            //print_r($user_data);
        $id = $this->uri->segment(3);
        //echo $id;
        if(empty($user_data)){
            $data['row'] = $this->dbusers_model->singleUser($id);
            $this->load->view('Personnal\UpdateUser', $data);
        }
        else{
           // echo $id;
                unset($_POST['passconf']);
                unset($_POST['olduser_password']);
                unset($_POST['Submit']);
               
            $updated=$this->dbusers_model->updateUser($_POST, $id);
            if($updated==true){
              $this->general_model->successadded_Msg('info','Record Updated Succesfully...');
             redirect('myfirst\index');
             
        }
			//ye rule applyy hngyy input field pe is tarah k agr koi input field khalii choraa gaya then ye error msg display hngyy 
           
            
        }
	}
	
	
	
	        public function deleteUser()
	{
		 $id = $this->uri->segment(3);
			//ye rule applyy hngyy input field pe is tarah k agr koi input field khalii choraa gaya then ye error msg display hngyy 
           $delete=$this->dbusers_model->deleteUser($id);
            if($delete==true){
              $this->general_model->successadded_Msg('warning','Record Deleted Succesfully...');
             redirect('myfirst\index');
             
        }
           
		
	}
	
}
