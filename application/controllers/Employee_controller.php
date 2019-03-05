<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Employee_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('general_model');
         $this->general_model->check_admin();
        $this->load->model('Employee_model');
    }

    public function index() {
        // $data['suppliers']=$this->supplier_model->allsuppliers();
        $data['Employees'] = $this->Employee_model->getemployeeinfo();

        //  $data['storebanks']=$this->Store_model->getstorebanks();
        $this->load->view('Employee/employeelisting', $data);
    }

    public function updateSalary() {
        $Eid = $this->input->post('employee_id');
        $Ecurrent = $this->input->post('salary_current');
        $data['update_salary'] = array('employee_salary' => $Ecurrent);
        $this->Employee_model->updateSalary($data, $Eid);
        redirect('Employee_controller/');
    }

    public function addEmployeeinfo() {
        unset($_POST['submit']);
        $employee = $this->input->post();
        // echo '<pre>';
        //  print_r($employee);
        if (empty($employee)) {
            $this->load->view('Employee/employee');
        } else {
            $Efname = $this->input->post('employee_fname');
            $Elname = $this->input->post('employee_lname');
            $Eemail = $this->input->post('employee_phone');
            $Econtact = $this->input->post('employee_email');
            $EAddress = $this->input->post('employee_address');
            $Esalaray = $this->input->post('employee_salary');
            $Eadvance = $this->input->post('employee_advance');
            $Edate = $this->input->post('employee_addedDate');
            
             $E = $this->input->post('store_id');
           
            
            $data['Employee_record'] = array('store_id' => $E, 'employee_fname' => $Efname, 'employee_lname' => $Elname, 'employee_phone' => $Eemail
                , 'employee_email' => $Econtact, 'employee_address' => $EAddress, 'employee_salary' => $Esalaray, 'employee_advance' => $Eadvance, 'employee_addedDate' => $Edate);
            // echo '<pre>';
            // print_r($data['Employee_record']);
            $id = $this->Employee_model->AddEmployee($data);
            $EgardRelation = $this->input->post('guardian_relation');
            $Egardfname = $this->input->post('guardian_fname');
            $Egardlname = $this->input->post('guardian_lname');
            $Egardphone = $this->input->post('guardian_phone');
            $Egardaddres = $this->input->post('guardian_address');
            $Egarddate = $this->input->post('guardian_dateAdded');
            $data['Employee_gaurdian'] = array('store_id' => $E, 'guardian_relation' => $EgardRelation, 'employee_id' => $id, 'guardian_fname' => $Egardfname
                , 'guardian_lname' => $Egardlname, 'guardian_phone' => $Egardphone, 'guardian_address' => $Egardaddres, 'guardian_dateAdded' => $Edate);
            //   echo '<pre>';
            // print_r($data['Employee_gaurdian']);
            $bool = $this->Employee_model->AddEmployeeGaurdian($data);
            $Erfname = $this->input->post('reference_fname');
            $Erlname = $this->input->post('reference_lname');
            $Erphone = $this->input->post('reference_phone');
            $Eraddres = $this->input->post('reference_address');
            $data['Employee_reffernce'] = array('store_id' => $E, 'employee_id' => $id, 'reference_fname' => $Erfname
                , 'reference_lname' => $Erlname, 'reference_phone' => $Erphone, 'reference_address' => $Eraddres, 'reference_dateAdded' => $Edate);
            //  echo '<pre>';
            //print_r($data['Employee_reffernce']);
            $bool1 = $this->Employee_model->AddEmployeeRefference($data);
            if ($id > 0 && $bool == true) {
                $this->general_model->successadded_Msg('info', 'Employee Added Succesfully...');
                redirect('Employee_controller/');
            }
        }
    }

    public function get_salary($employeeid) {
        $html = '';
        $rs = $this->Employee_model->getsalary($employeeid);
        $html = $rs['employee_salary'];
        echo $html;
    }

    public function updateEmployee($id) {

        unset($_POST['submit']);
        $employee = $this->input->post();
       // echo '<pre>';
       // print_r($employee);
        $id = $this->uri->segment(3);
        if (empty($employee)) {
            $data['row'] = $this->Employee_model->singleemployee($id);
            $data['row1'] = $this->Employee_model->singleemployeegaurdian($id);
            $data['row2'] = $this->Employee_model->singleemployeereffernce($id);
            $this->load->view('Employee/updateemployee', $data);
        } else {
            $eid = $this->uri->segment(3);

            $Efname = $this->input->post('employee_fname');
            $Elname = $this->input->post('employee_lname');
            $Eemail = $this->input->post('employee_phone');
            $Econtact = $this->input->post('employee_email');
            $EAddress = $this->input->post('employee_address');
            $Esalaray = $this->input->post('employee_salary');
            $Eadvance = $this->input->post('employee_advance');
            $Edate = $this->input->post('employee_addedDate');
            $data['Employee_record'] = array('store_id' => '1', 'employee_fname' => $Efname, 'employee_lname' => $Elname, 'employee_phone' => $Eemail
                , 'employee_email' => $Econtact, 'employee_address' => $EAddress, 'employee_salary' => $Esalaray, 'employee_advance' => $Eadvance, 'employee_addedDate' => $Edate);
         
            $id = $this->Employee_model->UpdateEmployee($data, $eid);
            $EgardRelation = $this->input->post('guardian_relation');
            $Egardfname = $this->input->post('guardian_fname');
            $Egardlname = $this->input->post('guardian_lname');
            $Egardphone = $this->input->post('guardian_phone');
            $Egardaddres = $this->input->post('guardian_address');
            $Egarddate = $this->input->post('guardian_dateAdded');
            $data['Employee_gaurdian'] = array('guardian_relation' => $EgardRelation, 'employee_id' => $eid, 'guardian_fname' => $Egardfname
                , 'guardian_lname' => $Egardlname, 'guardian_phone' => $Egardphone, 'guardian_address' => $Egardaddres, 'guardian_dateAdded' => $Edate);
            echo '<pre>';
            print_r($data['Employee_gaurdian']);
            $bool = $this->Employee_model->UpdateEmployeeGaurdian($data, $eid);
            $Erfname = $this->input->post('reference_fname');
            $Erlname = $this->input->post('reference_lname');
            $Erphone = $this->input->post('reference_phone');
            $Eraddres = $this->input->post('reference_address');
            $data['Employee_reffernce'] = array('employee_id' => $eid, 'reference_fname' => $Erfname
                , 'reference_lname' => $Erlname, 'reference_phone' => $Erphone, 'reference_address' => $Eraddres, 'reference_dateAdded' => $Edate);
            echo '<pre>';
            print_r($data['Employee_reffernce']);
            $bool1 = $this->Employee_model->UpdateEmployeeRefference($data, $eid);
            if ($bool == true) {
                $this->general_model->successadded_Msg('info', 'Employee Updated Succesfully...');
                redirect('Employee_controller/');
            }
        }
    }

    public function deleteEmployee($employeeid) {
        $eid = $this->uri->segment(3);
        $bool1 = $this->Employee_model->deleteEmployee($eid);
        $bool = $this->Employee_model->deleteEmployeegaurdian($eid);
        $bool2 = $this->Employee_model->deleteEmployeereffernce($eid);
        if ($bool == true && $bool1 == true && $bool2 == true) {
            $this->general_model->successadded_Msg('warning', 'Employee Deleted Succesfully...');
            redirect('Employee_controller/');
        }
    }

}
