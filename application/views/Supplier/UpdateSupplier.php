<?php   
  require_once('includes/header.php');   
require_once('includes/sidebar.php');   
  ?>
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
              
<div class="page-content">
    <div class="content container">
       <div class="row">
        <div class="col-md-12">
          <ol style="margin-bottom: 5px;" class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Supplier</a></li>
                <li class="active">Update Supplier</li>
              </ol>
        </div>
      </div><div id="alert">
            <?php echo $this->session->flashdata('verify'); ?>
        </div>
                <div class="row">
        <div class="col-lg-12">
          
            
          
          <div class="widget">
            <div class="widget-header"> <i class="icon-large icon-user"></i>
              <h3> Update Record</h3>
            </div>
            <div class="widget-content">
              <div class="tabbable tabs-right">
                <ul class="nav nav-tabs" id="myTabright">
                    <li class="active" ><a data-toggle="tab" href=".supplierinfo"><i class="icon-large icon-info-sign"></i> &nbsp;Supplier Info</a></li>
                    <li ><a data-toggle="tab" href="#profile-right"><i class="icon-large  icon-briefcase"></i> &nbsp;Account</a></li>
                  
                </ul><form action="<?php echo base_url(); ?>Supplier_controller/updatesupplier" class="form-horizontal row-border" method="post" />

                <div class="tab-content" id="myTabContentright">
                  <div id="home-right" class="tab-pane fade in active supplierinfo">
                     

                <div class="form-group lable-padd">
                  <label class="col-sm-3">Supplier First Name</label>
                  <div class="col-sm-6">
                    <input type="text" placeholder="Enter First Name" required class="form-control"   name="supplier_fname" id="supplier_fname" value="<?php echo $row->supplier_fname; ?>" />
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Supplier Last Name</label>
                  <div class="col-sm-6">
                    <input type="text" placeholder="Enter First Name" required class="form-control" name="supplier_lname" id="supplier_lname" value="<?php echo $row->supplier_lname; ?>"/>
                  </div>
                </div>
                
                 <div class="form-group lable-padd">
                  <label class="col-sm-3">Supplier Email</label>
                  <div class="col-sm-6">
             <input type="text" data-type="email" placeholder="Enter Email address" value="<?php echo $row->supplier_email; ?>" required class="form-control"  name="supplier_email" id="supplier_email" />
                  </div>
                </div>             
           
                
    
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Phone</label>
                  <div class="col-sm-6">
                    <input type="integer"  data-type="phone" placeholder="XXX XXXXXXX" value="<?php echo $row->supplier_phone; ?>" required class="form-control" name="supplier_phone" id="supplier_phone" />
                  </div>

                </div>
                
                  <div class="form-group lable-padd">
                  <label class="col-sm-3">Cell #</label>
                  <div class="col-sm-6">
                    <input type="integer"  data-type="phone" placeholder="XXXX-XXXXXXX" value="<?php echo $row->supplier_mobile; ?>" required class="form-control" name="supplier_mobile" id="supplier_mobile" />
                  </div>

                </div>
                  <div class="form-group lable-padd">
                          <label class="col-sm-3">Supplier Type</label>
                          <div class="col-sm-6">
                            <select class="form-control required" name="supplier_type" id="supplier_type">
                            <option value="0">Select Type</option>
                              <option value="Raw Material">Raw Material</option>
                              <option value="Finished Material">Finished Material</option>
                              
                            </select>
                          </div>
                        </div>
<div class="form-group lable-padd">
                  <label class="col-sm-3">Category Name</label>
                  <div class="col-sm-6">
                    <input type="text"  placeholder="Enter Category"  required class="form-control" name="category_name" id="category_name" value="<?php echo $row->category_name; ?>"/>
                  </div>

                </div>
                      <div class="form-group lable-padd">
                          <label class="col-sm-3">States</label>
                          <div class="col-sm-6">
                            <select class="form-control required" name="supplier_state" id="supplier_state">
                            <option value="0">Select State</option>
                        <?php    foreach($states as $s) {         ?>
                              <option value="<?php echo $s->state_id; ?>"><?php echo $s->name; ?></option>
                        <?php }?>
                            </select>
                          </div>
                        </div>
                      <div class="form-group lable-padd">
                          <label class="col-sm-3">City</label>
                          <div class="col-sm-6">
                            <select class="form-control required" name="supplier_city" id="supplier_city">
                            <option value="0">Please Wait.</option>
                              
                            </select>
                          </div>
                        </div>
                      <div class="form-group lable-padd">
                  <label class="col-sm-3">Shop name</label>
                  <div class="col-sm-6">
                    <input type="text"  placeholder="Enter Shop Name" value="<?php echo $row->supplier_shopname; ?>" required class="form-control" name="supplier_shopname" id="supplier_shopname"/>
                  </div>

                </div>
                      <div class="form-group lable-padd">
                  <label class="col-sm-3">Shop Address</label>
                  <div class="col-sm-6">
                      <textarea class="form-control" id="supplier_address"  name="supplier_address" rows="2" value="<?php echo $row->supplier_address; ?>"  ><?php echo $row->supplier_address; ?></textarea>

                      </div>
                      </div>
              
              
                 
                
                  </div>
                    <input type="hidden" name="supplier_updated" id="supplier_updated" value="<?php echo date('Y-m-d H:i:s'); ?> " />
       
                  <div id="profile-right" class="tab-pane fade  bankinfo">
                  
                 
                 
              <div class="row ">
               <div id="colour_row">
                
                   <div>
<tr>
<div class="col-lg-3">
    <td > &nbsp; 
           Branch Code <input class="form-control " type="text" id="branch_no" name="branch_no[]"  />
    </td></div>
         <div class="col-lg-3"> <td>  
          
                     
                   Bank Name <input class="form-control col-lg-3" type="text" id="bank_name" name="bank_name[]"   />
          </td></div>
          <div class="col-lg-3"><td>
       
           Account Number <input class="form-control col-lg-3" type="text" id="account_no" name="account_no[]"  />
          </td>  </div>
<div class="col-lg-3"><br> <td>
           <a class ="btn btn-small btn-success add_image" ><i class="btn-icon-only icon-plus-sign"> </i></a>
          <a class ="btn btn-danger btn-small delete_image"><i class="btn-icon-only icon-minus-sign"> </i></a>
                  
          </td>
                        </div>

          </tr>
              </div> </div>
        </div>
                               
       <input type="hidden" name="account_dateAdded" id="account_dateAdded" value="<?php echo date('Y-m-d H:i:s'); ?> " />
               
                
                  
             
                  </div>
                  <br>
                  <div class="col-lg-3">
                </div>
        <div class="doc-buttons"> 
            <button class="btn btn-s-md btn-success btn-rounded" type="submit" id="save" name="save">Save</button>
         <button class="btn btn-s-md btn-danger btn-rounded" type="cancel" id="cancel" name="cancel">Cancel</button>
          </div>
              </div>
            </div>
          </div>
               
</form>
            
            
            
            
            
            
            
            
            
            
            
            
            
 
</div></div></div>

       <?php  require_once('includes/footer.php');   
   ?>
<script>
     
$(document).on('click', '.add_image', function(){
    var clone = $(this).closest('#colour_row').clone();
    clone.find('input,text').val('');
    clone.insertAfter($(this).closest('#colour_row'));
});
 $(document).on('click', '.delete_image', function(){
    var len = $('.delete_image').length;
    if(len >= 1) {
        $(this).closest('#colour_row').remove();
    }
 });
       
$('#supplier_state').change(function(){
    $.ajax({
        url:'<?php echo base_url();?>Supplier_controller/get_cities/'+$(this).val(),
        type:'POST',
        success:function(data){
            $('#supplier_city').html(data);
        }
    });
});




 
  
    </script>