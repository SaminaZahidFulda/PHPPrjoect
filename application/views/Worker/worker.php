<?php   
  require_once('includes/header.php');   
require_once('includes/sidebar.php');   
  ?>
   <div class="page-content">
    <div class="content container">
         <div class="col-md-12">
          <ol style="margin-bottom: 5px;" class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Worker</a></li>
                <li class="active">Add Worker</li>
              </ol>
        </div>
  <div class="row">

          <div class="widget">
            <div class="widget-header"><i class="icon-large icon-user"></i> 
              <h3 class="center">Worker</h3>
            </div>
            <div class="widget-content container">
            <form action="<?php echo base_url(); ?>Worker_controller/addWorkerinfo" method="post" id="form11">
             <div class="col-lg-6">
             <fieldset>
                   
                    <div class="control-group">
                    <div class="col-md-3">
                      <label for="worker-name" class="control-label">Worker Name</label>
                      </div>
                 
                      <div class="input-group "><span class="input-group-addon"><i class="icon-user"></i></span>
                     <input type="text"  class="col-xs-8 form-control" required name="worker_name" id="worker_name">
                      </div>
                     
                    </div>
                    <br> 
                   <div class="control-group">
                    <div class="col-md-3">
                      <label class="control-label" for="salary">Salary </label>
                      </div>
                       <div class="col-md-9">
                      <div class="input-group "><span class="input-group-addon"><i class="icon-list"></i></span>
                      <input type="text" value="" name="worker_salary" class="form-control" id"worker_salary">
                      </div>
                      </div>
                  </div>
                           <br> <br> <br>
                    <div class="control-group">
                    <div class="col-md-3">
                      <label class="control-label" for=" advance salary">Advance Salary </label>
                      </div>
                      <div class="col-md-9">
                      <div class="form-group">
                        <input type="text" value="" name="advance_salary" class="form-control" id"adance_salary">
                      </div>
                      </div>
                      </div>
                    <br> <br> <br>
                    <div class="control-group">
                    <div class="col-md-3">
                      <label class="control-label" for="workinghours">Working Hours </label>
                      </div>
                      <div class="col-md-9">
                       <div class="input-group "><span class="input-group-addon"><i class="icon-cog"></i></span>
                      <input type="text" value="" name="working_hours" class="form-control" id"working_hours">
                      </div>
                      </div>
                    </div>
                     <br> <br> <br>
                    <div class="control-group">
                    <div class="col-md-3">
                      <label for="normal-field" class="control-label">Worker type</label>
                      </div>
                      <div class="col-md-4">
                      <div class="form-group"> 
                    <select class="  form-control required" id="worker_workertype" name="worker_workertype" 
                    <option>Fancy</option>
                    <option>Bridal Dress</option>
                    <option>Lawn</option>
                    <option>Silk</option>
                   </select>
                     </div>
                      </div>
                    </div>
                    
                        
                  </fieldset> 
                   </div>
               
                  <div class="col-lg-6">
                  <fieldset>
                   
                
                    <div class="control-group">
                    <div class="col-md-3">
                      <label class="control-label" for="email" id="worker_email">Email</label>
                      </div>
                      <div class="col-md-12">
                      <div class="form-group">
                        <div class="col-xs-12 col-sm-9">
                          <div class="input-group">
                          <span class="input-group-addon">
                                    <i class="icon-user"></i>
                                </span>
                            <input type="email" name="worker_email" class="form-control parsley-validated" required data-trigger="change" id="worker_email">
                            <span class="input-group-btn">
                            <button type="button" class="btn btn-success">Write an email</button>
                            </span>
                            </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <br><br><br>
                             <input type="hidden" name="Store_id" id="Store_id" value="<?php echo $this->session->userdata('store_id'); ?> " />

                    <div class="control-group">
                    <div class="col-md-3">
                      <label class="control-label" for="phone">Phone </label>
                      </div>
                      <div class="col-md-9">
                      <div class="form-group">
                        <div class="col-xs-12 col-sm-10">
                          <div class="input-group">
                            <input type="text" maxlength="28" name="worker_phone" required class="form-control  mask parsley-validated" id="worker_phone">
                            <span class="input-group-btn">
                            <select data-style="btn-default" class="selectpicker" id="phone-type" style="display: none;">
                              <option>Mobile</option>
                              <option>Home</option>
                              <option>Work</option>
                            </select>
                            <div class="btn-group bootstrap-select">
                              <button data-toggle="dropdown" class="btn dropdown-toggle clearfix btn-default" id="worker_phone-type"><span class="filter-option">Mobile</span>&nbsp;<i class="icon-caret-down"></i></button>
                              <ul role="menu" class="dropdown-menu" style="overflow-y: auto; min-height: 60px; max-height: 14.75px;">
                                <li rel="0"><a class="" href="#" tabindex="-1">Mobile</a></li>
                                <li rel="1"><a class="" href="#" tabindex="-1">Home</a></li>
                                <li rel="2"><a class="" href="#" tabindex="-1">Work</a></li>
                              </ul>
                            </div>
                            </span> </div>
                        </div>
                      </div>
                      </div>
                    </div>
                    <br><br><br>
                    <div class="control-group">
                    <div class="col-md-3">
                      <label class="control-label" for="address" id="worker_address" name ="worker_address">Address </label>
                      </div>
                      <div class="col-md-9">
                          <textarea class="form-control" rows="5" id="address"></textarea>
                            </div>
                            </div>
                  </fieldset>
                    <input type="hidden" name="Store_id" id="Store_id" value="<?php echo $this->session->userdata('store_id'); ?>" />
                          
                   
                    <input type="hidden" name="worker_added" id="worker_added" value="<?php echo date('Y-m-d H:i:s'); ?>" />
              
          </div>
            <div class="form-actions">                  
                    <button class="btn btn-primary" type="submit" id="Add">Add Worker</button>
                    </div> 
              </form>
             
            </div>
          </div>        
      

        </div>        
</div>
  
  </div>
  </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <?php  require_once('includes/footer.php');   
   ?>   
   