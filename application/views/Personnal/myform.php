<?php  require_once('includes/header.php');   
require_once('includes/sidebar.php');   ?>
<script src="<?php echo base_url();?>js/jquery.js"></script>

 <div class="page-content">
    <div class="content container">
       
 
      <div class="row">
        <div class="col-md-12">
          <ol style="margin-bottom: 5px;" class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Personnal</a></li>
                <li class="active">Add Personnal</li>
              </ol>
        </div>
      </div>
        <div id="alert">
            <?php echo $this->session->flashdata('verify'); ?>
        </div>
        <div class="row">
        <div  >
          <div class="widget">
            <div class="widget-header"> <i class="icon-align-left"></i>
                <h3 class="center">Add Personnal</h3>
            </div>
            <div class="widget-content">
                <form method="post" action="AddUser" class="form-horizontal">
                <fieldset>
                 

                  <div class="control-group">
                  <div class="col-md-2 col-lg-offset-1">
                    <label for="normal-field" class="control-label">First Name</label>
                    </div>
                    <div class="col-md-5">
                    <div class="form-group">
                      <input type="text" placeholder="Enter your Name." class="form-control" value="<?php echo set_value('user_firstname'); ?>" name="user_firstname" id="user_firstname"><?php echo form_error('user_firstname'); ?>
                    </div>
                    </div>
                      <div class="clearfix">
                      
                  </div>
                  </div>
                  <div class="control-group">
                  <div class="col-md-2 col-lg-offset-1">
                    <label for="normal-field" class="control-label">Last Name</label>
                    </div>
                    <div class="col-md-5">
                    <div class="form-group">
                      <input type="text" placeholder="Enter your Last Name."  class="form-control input-transparent" name="user_lastname" id="user_lastname" value="<?php echo set_value('user_lastname'); ?>"><?php echo form_error('user_lastname'); ?>
                    </div>
                    </div>
                      <div class="clearfix">
                      
                  </div>
                  </div>
                  <div class="control-group">
                  <div class="col-md-2 col-lg-offset-1">
                      <label for="hint-field" class="control-label"> Type </label>
                    </div>
                      <div class="col-md-5">
                    <div class="form-group">
                      <select class="form-control required" id="user_type" name="user_type" >
                        <option value="0">Select Type</option>
                         <option value="Admin">Admin</option>
                            <option value="Accountant">Accountant</option>
                           <option value="Social Media Handler">Social Media Handler</option>
                       <option value="Sale Manager">Sale Manager</option>
                       <option value="Booking Handler">Booking Handler</option>
                      
                       </select>
                    
                    </div>
                  </div> 
                      <div class="clearfix">
                      
                  </div>
                  </div>

 <div class="control-group">
                  <div class="col-md-2 col-lg-offset-1">
                    <label for="hint-field" class="control-label"> Contact # </label>
                    </div>
                    <div class="col-md-5">
                    <div class="form-group">
                      <input type="text" placeholder="XXX-XXXXX" class="form-control" name="user_phone" value="<?php echo set_value('user_phone'); ?>"><?php echo form_error('user_phone'); ?>
                    </div>
                     </div>
     <div class="clearfix">
                      
                  </div>
                  </div>

                  <div class="control-group ">
                  <div class="col-md-2 col-lg-offset-1">
                    <label for="tooltip-enabled" class="control-label ">Cell Phone</label>
                    </div>
                    <div class="col-md-5">
                    <div class="form-group">
                      <input type="text" placeholder="03XX-XXXXXXX" name="user_mobile" required="required" value="<?php echo set_value('user_mobile'); ?>" class="form-control" ><?php echo form_error('user_mobile'); ?>
                    </div>
                    </div>
                      <div class="clearfix">
                      
                  </div>
                  </div>
                 
                  <div class="control-group">
                  <div class="col-md-2 col-lg-offset-1">
                    <label for="max-length" class="control-label ">Residence Address</label>
                    </div>
                    <div class="col-md-5">
                    <div class="form-group">
                      <textarea type="text" class="form-control" id="user_address" name="user_address" rows="3" ><?php echo form_error('user_address'); ?></textarea>
                    </div>
                        <div class="clearfix">
                      
                  </div>
                    </div>
                  </div>
                    <div class="clearfix">
                      
                  </div>
                  <div class="control-group">
                  <div class="col-md-2 col-lg-offset-1">
                    <label for="prepended-input" class="control-label">Username</label>
                    </div>
                    <div class="col-md-5">
                    <div class="form-group">
                      <div class="input-group"> <span class="input-group-addon"><i class="icon-user"></i></span>
                        <input type="text" placeholder="Username" size="16" class="form-control" name="user_username" id="user_username" value="<?php echo set_value('user_username'); ?>"><?php echo form_error('user_username'); ?>
                      </div>
                      </div>
                    </div><div class="clearfix">
                      
                  </div>
                  </div>
                  <div class="control-group">
                  <div class="col-md-2 col-lg-offset-1">
                    <label for="password-field" class="control-label">Password</label>
                    </div>
                    <div class="col-md-5">
                    <div class="form-group">
                      <div class="input-group"> <span class="input-group-addon"><i class="icon-lock"></i></span>
                        <input type="password" placeholder="Password" name="user_password" id="user_password" value="<?php echo set_value('user_password'); ?>" class="form-control"><?php echo form_error('user_password'); ?>
                      </div>
                      </div>
                    </div><div class="clearfix">
                      
                  </div>
                  </div>
                   <div class="control-group">
                  <div class="col-md-2 col-lg-offset-1">
                    <label for="password-field" class="control-label">Confirm Password</label>
                    </div>
                    <div class="col-md-5">
                    <div class="form-group">
                      <div class="input-group"> <span class="input-group-addon"><i class="icon-lock"></i></span>
                        <input type="password" placeholder="Re-enter Password"  name="passconf" value="<?php echo set_value('passconf'); ?>" class="form-control"><?php echo form_error('passconf'); ?>
                      </div>
                      </div>
                    </div><div class="clearfix">
                      
                  </div>
                  </div>
                <input type="hidden" name="store_id" id="store_id" value="<?php echo $this->session->userdata('store_id'); ?> " />


                </fieldset>
                <div class="form-actions">
                  <div>
                    <button class="btn btn-primary" type="submit" id="addData">Add</button>
                    <button class="btn btn-default" type="button" class="addData"
                            >Cancel</button>
                    <input type="hidden" name="date_Added" id="date_Added" value="<?php echo date('Y-m-d H:i:s'); ?> " />


                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>


      </div>
      
       </div>
      </div> </div>
      </div>
        

<?php  require_once('includes/footer.php');   
  ?>

      