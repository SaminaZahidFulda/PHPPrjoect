<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Worker_controller extends CI_Controller {

    public function __construct(){
		parent::__construct();
	   $this->load->model('general_model');
            $this->general_model->check_admin();
	  $this->load->model('Worker_model');
       }
	public function index()
	{
           // $data['suppliers']=$this->supplier_model->allsuppliers();
             $data['Worker']=$this->Worker_model->getworkerinfo();
            
            //  $data['storebanks']=$this->Store_model->getstorebanks();
               $this->load->view('Worker/workerlisting',$data);
		   
	}

	
	public function addWorkerinfo(){
           unset($_POST['submit']);
            $data['worker'] = $this->input->post();
           
            if(empty($data['worker'])){
            $this->load->view('Worker/worker');
		 }
                 else {
                     
                    $id= $this->Worker_model->AddWorker($data);
                      if($id>0 ){
                    $this->general_model->successadded_Msg('info','Worker Added Succesfully...');
                    redirect('Worker_controller/');
                }
            
        }   }
        public function updateWorker(){
           unset($_POST['submit']);
            $data['updateworker'] = $this->input->post();
           
            if(empty($data['updateworker'])){
                echo "okkk";
                $eid = $this->uri->segment(3);
                $data['Worker']=$this->Worker_model->getsingleworkerinfo($eid);
                    ///echo '<pre>';
                   // print_r($data['Worker']);
            $this->load->view('Worker/updateworker',$data);
		 }
                 else {
                       $eid = $this->uri->segment(3);
                    $id= $this->Worker_model->UpdateWorker($data,$eid);
                      if($id==true ){
                    $this->general_model->successadded_Msg('info','Worker Update Succesfully...');
                    redirect('Worker_controller/');
                }
            
        }
}

 public function deleteWorker($employeeid) {
        $eid = $this->uri->segment(3);
        $bool1 = $this->Worker_model->deleteWorker($eid);
     
        if ($bool1 == true ) {
            $this->general_model->successadded_Msg('warning', 'Worker Deleted Succesfully...');
            redirect('Worker_controller/');
        }
    }


}
