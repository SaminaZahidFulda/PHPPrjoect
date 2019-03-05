<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->general_model->check_login();
	}
	
	public function index(){
		$rs = $this->db->get('admin');
		$records = $rs->result();
		$data['result'] = $records;
		$this->load->view('dashboard', $data);
	}
	
	public function edit(){
		if($this->input->post() !=""){
			$this->db->where('id', $this->uri->segment(3));
			$this->db->update('admin', $this->input->post());
			redirect('dashboard');
		}else{
			$data['title'] = 'Update User';
			$rs = $this->db->select('id, name, username, password')->get('admin');
			$data['row'] = $rs->row();
			$this->load->view('edit', $data);
		}
	}
	
	public function delete(){
		$this->db->where('id', $this->uri->segment(3))->delete('admin');
		redirect('dashboard');
	}
}