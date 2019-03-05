<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('general_model');
        }
	
	public function index(){
             
            $data['store'] = $this->general_model->storebranch();
           
            $this->load->view('login',$data);
	}
	
	public function submitlogin() {
             unset($_POST['login']);
            $data= $this->input->post();
           
          
            $check = $this->general_model->check_login($data);
            if($check==true){
               
               // echo $my =$check[0]['user_id'];
               // echo '<pre>';
               // print_r($check);
               
                $this->session->set_userdata($data);
                $data['user_id'] =$check[0]['user_id'];
                $data['user_type'] =$check[0]['user_type'];
                $this->session->set_userdata($data);
                 $data['user_id']= $this->session->userdata('user_id');
              //  echo $data['user_id'];
                $data['username']=$this->session->userdata('user_username');
              //   echo $this->session->userdata('user_type');
                $data['Storeid']=$this->session->userdata('store_id');
                
              
                //echo $data['username'];
                $this->load->view('index',$data);
            }
            else {
                  $data['store'] = $this->general_model->storebranch();
          
              $this->general_model->successadded_Msg('Warning','Please Enter Valid Username or Password');
                       $this->load->view('login',$data);
            }
           
              
		
	}
        public function logout(){
           $this->session->sess_destroy();
            redirect('login');
            
        }
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */