<?php   
  require_once('includes/header.php');   
require_once('includes/sidebar.php');   
  ?>
  <form action="<?php echo base_url(); ?>Employee_controller/addEmployeeinfo" method="post" class="form-horizontal row-border" data-validate="parsley" name="employeeinfo" />
                
<div class="page-content">
    <div class="content container">
     
                <div class="row">
        <div class="col-lg-12">
        <div class="col-md-12">
          <ol style="margin-bottom: 5px;" class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>welcome/">Home</a></li>
                <li><a href="#">Employees</a></li>
                <li class="active">Add Employee</li>
              </ol>
        </div>
           
            <div class="widget-content">
              <div class="tabbable tabs-left">
                <ul class="nav nav-tabs" id="myTabLeft">
                    <li class="active"><a data-toggle="tab" href="#home-left"<i class="icon-large icon-group"></i> <b>Employee Info</b></a></li>
                  <li ><a data-toggle="tab" href="#profile-left"  <i class="icon-male"></i> <b>Guardian</b></a></li>
                  <li><a data-toggle="tab" href="#dropdown3-left" <i class="icon-large icon-list-ol"></i> <b>Reference By</b></a></li>
                </ul>
                  <div class="widget-content">
                <div class="tab-content" id="myTabContentLeft">
                  <div id="home-left" class="tab-pane fade in active">
                   <br>
                    
                  
                <div class="form-group lable-padd">
                  <label class="col-sm-3"> First Name</label>
                  <div class="input-group col-sm-6"><span class="input-group-addon"><i class="icon-user"></i></span>
                    <input type="text" required class="form-control" placeholder="Employee Name"  name="employee_fname" id="employee_fname" />
                  </div>
                </div>
                
              <div class="form-group lable-padd">
                  <label class="col-sm-3"> Last Name</label>
                  <div class="input-group col-sm-6"><span class="input-group-addon"><i class="icon-user"></i></span>
                    <input type="text" required class="form-control" placeholder="last name here"   name="employee_lname" id="employee_lname" />
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Phone Number</label>
                  <div class="input-group col-sm-6"><span class="input-group-addon"><i class="icon-phone-sign"></i></span>
                      <input type="number"  data-type="phone" placeholder="contact number" required class="form-control" name="employee_phone" id="employee_phone" />
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3"> Email</label>
            <div class="input-group col-sm-6"><span class="input-group-addon"><i class="icon-font"></i></span>
                <input type="email" data-type="email" placeholder="@yahoo.com" required class="form-control"  name="employee_email" id="employee_email" />
                  </div>
                </div>
               
                  </div> 
                      <div class="form-group lable-padd">
                  <label class="col-sm-3"> Address</label>
                  <div class="col-sm-6">
                      <textarea class="form-control"  rows="2"  id="employee_address"  name="employee_address"></textarea>

                      </div>
                      </div> 
                      <div class="form-group lable-padd">
                  <label class="col-sm-3"> Salary</label>
                  <div class="input-group col-sm-6"><span class="input-group-addon"><i class="icon-strikethrough"></i></span>
                <input type="text" required class="form-control"  placeholder="Salaray here"  name="employee_salary" id="employee_salary" />
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Advance(optional)</label>
                  <div class="col-sm-6">
             <input type="text"  required class="form-control"  name="employee_advance" id="employee_advance" />
                  </div>
                </div>
       <input type="hidden" name="employee_addedDate" id="employee_addedDate" value="<?php echo date('Y-m-d H:i:s'); ?> " />
               
                </form>
                 </div>
                  <div id="profile-left" class="tab-pane fade ">
                  <br><br>
                  <div class="form-group lable-padd">
                  <label class="col-sm-3">Relation</label>
                          <div class="col-sm-6">
                          <select class="form-control required" id="guardian_relation" name="guardian_relation" >
                    
                  <option>Father</option>
                  <option>Mother</option>
                  <option> Brother</option>
                  
                   </select>
                   </div></div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3"> First Name</label>
                  <div class="col-sm-6">
                    <input type="text" required class="form-control" placeholder="Gaurdian Name"   name="guardian_fname" id="guardian_fname" />
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3"> Last Name</label>
                  <div class="col-sm-6">
                    <input type="text"  required class="form-control" placeholder="Gaurdian Father Name here." name="guardian_lname" id="guardian_lname" />
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Phone Number</label>
                  <div class="input-group col-sm-6"><span class="input-group-addon"><i class="icon-phone"></i></span>
                    <input type="number"  data-type="phone" placeholder="Gaurdian contact number" required class="form-control" name="guardian_phone" id="guardian_phone" />
                  </div>

                </div>
              
                      <div class="form-group lable-padd">
                  <label class="col-sm-3"> Address</label>
                  <div class="col-sm-6">
                      <textarea class="form-control"  rows="2"  id="guardian_address"  name="guardian_address"></textarea>

                      </div>
                      </div>
       <input type="hidden" name="guardian_dateAdded" id="guardian_dateAdded" value="<?php echo date('Y-m-d H:i:s'); ?> " />
               
                </form>
                  </div>
                  <div id="dropdown3-left" class="tab-pane fade">
                  <br><br>
                   
                <div class="form-group lable-padd">
                  <label class="col-sm-3"> First Name</label>
                  <div class="col-sm-6">
                    <input type="text" required class="form-control" placeholder="Reference Person Name"   name="reference_fname" id="reference_fname" />
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3"> Last Name</label>
                  <div class="col-sm-6">
                    <input type="text"  required class="form-control" name="reference_lname" id="reference_lname" />
                  </div>
                </div>
               
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Phone Number</label>
                  <div class="input-group col-sm-6"><span class="input-group-addon"><i class="icon-phone"></i></span>
                    <input type="number"  data-type="phone" placeholder="Reference contact #" required class="form-control" name="reference_phone" id="reference_phone" />
                  </div>

                </div>
                       <input type="hidden" name="store_id" id="store_id" value="<?php echo $this->session->userdata('store_id'); ?> " />

                      <div class="form-group lable-padd">
                  <label class="col-sm-3"> Address</label>
                  <div class="col-sm-6">
                      <textarea class="form-control" rows="2"  id="reference_address"  name="reference_address"></textarea>

                      </div>
                      </div>
       <input type="hidden" name="reference_dateAdded" id="reference_dateAdded" value="<?php echo date('Y-m-d H:i:s'); ?> " />
               
               
                  </div>
                  <div class="col-lg-3","col-lg-offset-3">
                </div>
        <div class="doc-buttons"> 
            <button class="btn btn-s-md btn-success btn-rounded" type="submit" id="save" name="save">Save</button>  
                 <a class="btn btn-s-md btn-danger btn-rounded" type="cancel" id="cancel" name="cancel">cancel</a>  
               </div>        
                </div>
              </div> 
            </div></div>
      
    
            
          
               
               










</div></div></div></div> </form>
       
<?php  require_once('includes/footer.php');   
   ?>
   <script>
   
     $(document).ready(function(){
     //       alert();
     //  $("#home-left").show();
  
   });
   
   </script>
                  