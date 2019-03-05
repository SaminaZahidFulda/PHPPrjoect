<?php   
  require_once('includes/header.php');   
require_once('includes/sidebar.php'); 
?>
    <link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>font-awesome-4.0.3/css/font-awesome.min.css" rel="stylesheet" media="screen">


   <div class="page-content">
    <div class="content container">
        <div class="col-md-12">
          <ol style="margin-bottom: 5px;" class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>welcome/">Home</a></li>
                <li><a href="#">Employees</a></li>
                <li class="active">List</li>
              </ol>
        </div>
<div class="col-lg-12">
    <div id="alert">
            <?php echo $this->session->flashdata('verify'); ?>
        </div>
          <div class="widget">
            <div class="widget-header"><i class="icon-large icon-group"></i>
              <h3 class="left">Employees</h3>       
              &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                 &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                    &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                       &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                          &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                             &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                             <button class="btn btn-primary" type="button"> <i class="fa fa-plus-square"></i> 
          <a  href="<?php echo base_url();?>Employee_controller/addEmployeeinfo" ><span class="text">More Employee</span> </a>  </button>
          
          
           &nbsp;  <button class="btn btn-success" type="button" id="login" name="login"> <i class="fa fa-arrow-circle-right"></i> 
          <span class="text"><b> Login</b></span> </button>
           &nbsp;  <button class="btn btn-default" type="button" data-toggle="modal" data-target="#myModal"> <i style="color: darkviolet " class="fa  fa-plus"></i> 
               <span class="text"><b style="color: darkviolet ">Salary</b></span> </button>
  
    
    <div class="modal fade" id="myModal" role="dialog">
                   <div class="modal-dialog">
   
     <form action="<?php echo base_url(); ?>Employee_controller/updateSalary" method="post" class="form-horizontal row-border" data-validate="parsley" name="employeeinfo" />
  
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">x</button>
          <h4 class="modal-title"> Increase Salary</h4>
        </div>
       
        
       <div class="modal-body">
        <div class="content container"> 
            <div class="row">
                  

                 <label class="col-sm-3">Employee</label>
                <div class=" col-lg-6">
               <select class="form-control required" id="employee_id" name="employee_id" >
          <?php   foreach($Employees As $e){
  ?>       
    <option value ="<?php  echo $e->employee_id;?>"><?php  echo $e->employee_fname;?></option>
    <?php
}
  ?>
      </select>   
                </div> 
                 <br><br><br>
                <label class="col-sm-3">Salary</label>
                  <div class="col-sm-6">
                    <input  required class="form-control"  placeholder="Account" name="salary_current" id="salary_current" />
                  </div>     
                  <br><br><br>
             
                  <label class="col-sm-3">Salary Increment</label>
                  <div class="col-sm-6">
                      <input type="integer" required class="form-control"  placeholder="Account" onblur="calculate()" name="salary_account" id="salary_account" />
                  </div>
 
                
            </div></div>
		 
        </div>
        <div class="modal-footer">
         <div class="col-lg-9","col-lg-offset-9">
                </div>
          <button type="submit" class="btn btn-success btn-sm">Save</button>
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
        </div>
      </div>
                   </form>
      </div>
   </div>
 </h3>
              
            </div>
            <div class="widget-content"> 
            
          <div class="widget widget-table action-table">
            
           
            <div class="widget-content">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th><i class="icon-large icon-list-ol"></i> </th>
                    <th> <i class="icon-large icon-user"></i>&nbsp; Name</th>
                    <th> <i class="icon-large icon-envelope"></i>&nbsp; Email</th>
                          <th> <i class="icon-large icon-phone"></i> &nbsp;Contact </th>
                          <th> <i class="icon-large icon-credit-card"></i>&nbsp;Salary</th>
                    <th> <i class="icon-large icon-plus-sign"></i>&nbsp; Action</th>
                  </tr>
                </thead>
                <tbody>
                    
                      <?php   
 if(empty($Employees)){
     ?>
                           <tr>
                         <td>   </td><td></td><td></td><td><?php  echo "No record found";?></td><td></td><td></td></tr>
                   
      <?php 
      }?> 
    <?php
$count=1;
foreach($Employees As $e){
  ?>
                                  
                  <tr>
                    <td><?php  echo $count;?> </td>
                    <td><?php  echo $e->employee_fname;?></td>
                    <td><?php  echo $e->employee_email;?></td>
                    <td><?php  echo $e->employee_phone;?></td>
                     <td><?php  echo $e->employee_salary;?></td>
             <td class="td-actions">
             <a class="btn btn-small btn-success" href="<?php echo base_url(); ?>Employee_controller/updateEmployee/<?php echo $e->employee_id;?>"><i class="btn-icon-only icon-edit"> </i></a>
             <a class="btn btn-danger btn-small" href="<?php echo base_url(); ?>Employee_controller/deleteEmployee/<?php echo $e->employee_id;?>"><i class="btn-icon-only icon-remove-sign"> </i></a>
             </td>
                  </tr>
             <?php
$count++;
}
?>
                
                </tbody>
              </table>
            </div>
          
          </div>
       
     

</div></div></div>











<?php

require_once('includes/footer.php');?>



</div></div>
<script>
    function  calculate(){
                     var total=0;
                     var increment= document.getElementById("salary_account").value;
                      var salary= document.getElementById("salary_current").value;
                      var total =  parseInt(salary) + parseInt(increment);
                       document.getElementById("salary_current").value=total;
                  
               }
               
            $('#employee_id').change(function(){
    $.ajax({
        url:'<?php echo base_url();?>Employee_controller/get_salary/'+$(this).val(),
        type:'POST',
        success:function(data){
            $('#salary_current').val(data);
        }
    });
});   
               
               
               
    </script>