<?php   
  require_once('includes/header.php');   
require_once('includes/sidebar.php');   
  ?><script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
       <link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>font-awesome-4.0.3/css/font-awesome.min.css" rel="stylesheet" media="screen">

  

   <div class="page-content">
       
    <div class="content container">
  <div class="row">
      <div id="alert">
            <?php 
            
            echo $this->session->flashdata('verify'); ?>
        </div>
      <form action="<?php echo base_url();?>Store_controller/addstore" enctype="multipart/form-data" class="form-horizontal row-border" method="post" name="store" />
              
<div class="col-lg-6">
          <div class="widget">
            <div class="widget-header"><i class="icon-large icon-cogs"></i>
              <h3 class="center">Store Configuration</h3>
            </div>
              
            <div class="widget-content">
                <div class="widget-content">
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Owner Name</label>
                  <div class="col-sm-7">
                   <div class="input-group"> <span class="input-group-addon"><i class="icon-user"></i></span>
                        <input type="text" placeholder="Username" size="16" class="form-control" value="<?php echo $storefirst['store_Ownername']; ?>" id="store_Ownername" name="store_Ownername">
                      </div>
                  </div>
                </div>
                
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Store Contact</label>
                  <div class="col-sm-7">
                  <div class="input-group"> <span class="input-group-addon"><i class="icon-phone"></i></span>
                        <input type="integer"  data-type="phone" placeholder="XXX XXXXXXX" size="16" class="form-control" value="<?php echo $storefirst['store_phone']; ?>" id="store_phone" name="store_phone">
                      </div>
                  </div>
                </div>
                
           
                      <div class="form-group lable-padd">
                  <label class="col-sm-3">Shop Address</label>
                  <div class="col-sm-7">
                      <textarea class="form-control"  rows="2"  id="store_shopAddress"  name="store_shopAddress"><?php echo $storefirst['store_shopAddress']; ?></textarea>

                      </div>
                      </div>
                      <div class="form-group lable-padd">
                  <label class="col-sm-3">Short Description</label>
                  <div class="col-sm-7">
                      <textarea class="form-control"  rows="2"  id="store_description"   name="store_description"><?php echo $storefirst['store_description']; ?></textarea>

                      </div>
                      </div>                  
                      <div class="form-group lable-padd">
                  <label class="col-sm-3">Cotton Caution</label>
                  <div class="col-sm-7">
                      <textarea class="form-control" rows="2"  id="store_CottonCaution" name="store_CottonCaution"><?php echo $storefirst['store_CottonCaution']; ?></textarea>

                      </div>
                      </div>
                      <div class="form-group lable-padd">
                  <label class="col-sm-3">Silk Caution</label>
                  <div class="col-sm-7">
                      <textarea class="form-control"  rows="2"  id="store_silkcaution"  name="store_silkcaution"><?php echo $storefirst['store_silkcaution']; ?></textarea>

                      </div>
                      </div>
                    <br />
                    
                        <div class="form-group lable-padd">
                          <label class="col-md-3">Background Pic</label>
                          <div class="col-md-9">
                            <div class="fileinput-holder input-group input-medium">
                               </span><?php  $upload = Array ("name" => "storePicture",'id'=>"storePicture", "Class" => "form-control");
                      echo form_upload($upload); ?><?php echo $storefirst['storePicture'];?>
                               <img src="<?php echo base_url(); ?>uploads/<?php echo $storefirst['storePicture'];?>" width="100" height="100">
                             
                            </div>
                            </div>
                           
<input type="hidden" name="Store_Added" id="Store_Added" value="<?php echo date('Y-m-d H:i:s'); ?> " />
 


</div>
                     
                      <div class="doc-buttons"> 
                    <button class="btn btn-s-md btn-success btn-rounded" type="submit" id="save" name="save" value="ok">Save</button>
        
                 </div></div>
                </form>
</div></div></div>
      <form action="<?php echo base_url(); ?>Store_controller/addbank" id="bank"  method="post" />
      
<div class="col-lg-6">
          <div class="widget">
            <div class="widget-header"><i class="icon-large icon-table"></i>
              <h3 class="left">Banks</h3>       
  &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                 &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                    &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   
       <button class="btn btn-success" type="button" data-toggle="modal" data-target="#myModal"> <i class="fa fa-arrow-circle-right"></i> 
          <span class="text"><b>Bank</b></span> </button>
          
 <div class="modal fade" id="myModal" role="dialog">
                   <div class="modal-dialog">
 
     
      <div class="modal-content alert-info">
        <div class="modal-header btn-info">
          <button type="button" class="close" data-dismiss="modal">x</button>
          <h4 class="modal-title"> <i class="icon-large icon-table"></i> Add Bank</h4>
        </div>
       
        
       <div class="modal-body">
        <div class="content container"> 
            <div class="row ">
               <div id="colour_row">
                

<tr>
          <div class="col-sm-2">
     
        <input class="form-control " placeholder=" Branch Code" type="text" id="branch_no" name="branch_no[]"  />
          </div>
        <div class="col-sm-3">  <td>  
                <input class="form-control col-sm-3" placeholder="Bank Name" type="text" id="bank_name" name="bank_name[]"   />
          </div>
         <div class="col-sm-4"> <td>
       
                  <input class="form-control col-sm-3" placeholder="Account Number" type="text" id="account_no" name="account_no[]"  />
             </div>
         <div class="col-sm-3"> 
          <a class ="btn btn-small btn-success add_image" ><i class="btn-icon-only icon-plus-sign"> </i></a>
          <a class ="btn btn-danger btn-small delete_image"><i class="btn-icon-only icon-minus-sign"> </i></a>
                  
                    
          </div>
          
          </tr>
              </div> </div></div>
		<input type="hidden" name="Store_Added" id="Store_Added" value="<?php echo date('Y-m-d H:i:s'); ?> " />
 
        </div>
        <div class="modal-footer">
         <div class="col-lg-9">
                </div>
            <button type="submit" class="btn btn-success btn-sm " name ="save" >Save</button>
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
        </div>
      </div>
      </div>
   </div>
 </h3>
      </form>          
            </div>
            <div class="widget-content"> 
            
          <div class="widget widget-table action-table">
            
           
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><i class="icon-large icon-list-ol"></i> </th>
                    <th> <i class="icon-reorder"></i> Bank Name</th>
                    <th> <i class="icon-large icon-file"></i> Account#</th>
                    <th> <i class="icon-large icon-plus-sign"></i> Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                    $count =1;
                    foreach($storebanks AS $row){?>
                  <tr>
                    <td> <?php echo $count;?> </td>
                    <td><?php echo $row->bank_name; ?></td>
                    <td><?php echo $row->account_no; ?></td>
             <td class="td-actions">
             <a class="btn btn-danger btn-small" href="<?php echo base_url(); ?>Store_controller/deletebank/<?php echo $row->bankInfo_id;?>"><i class="btn-icon-only icon-remove"> </i></a>
             
             </td>
                  </tr>
                    <?php $count++; } ?>
                </tbody>
              </table>
            </div>
          
          </div>
       
     

</div></div></div>
 
</div></div>
    
  
    
    
    
    
    
    
    <?php require_once('includes/footer.php');?></div>

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
        </script>