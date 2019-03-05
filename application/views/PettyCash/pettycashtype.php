
<?php   
  require_once('includes/header.php');   
require_once('includes/sidebar.php');   
  ?>
     
   <link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>font-awesome-4.0.3/css/font-awesome.min.css" rel="stylesheet" media="screen">
 <div class="page-content">
    <div class="content container">
<div class="col-lg-12">
     <div class="col-md-12">
          <ol style="margin-bottom: 5px;" class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>welcome/">Home</a></li>
                <li><a href="#">Petty Cash Type</a></li>
                <li class="active">List</li>
              </ol>
        </div>
      </div><div id="alert">
            <?php echo $this->session->flashdata('verify'); ?>
        </div>
          <div class="widget">
            <div class="widget-header"><i class="icon-large icon-tasks"></i>
              <h3 class="left">Petty Cash Type </h3>    
  <h3 class="right ">     &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                 &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                    &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                       &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                          &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                             &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                   <button class="btn btn-info"  data-toggle="modal" data-target="#myModal"  type="button"> <i class="fa  fa-plus"></i> 
       <span class="text">Add Type</span>  </button>  
                <div class="modal fade" id="myModal" role="dialog">
                   <div class="modal-dialog">
   
     
      <div class="modal-content">
        <div class="modal-header alert-info">
          <button type="button" class="close" data-dismiss="modal"><b>X</b></button>
          <h4 class="modal-title "><i  class="icon-large fa fa-suitcase"></i> &nbsp; Add Type</h4>
        </div>
       <form action="<?php echo base_url(); ?>PettyCashType_controller/Add" method="post" id="form11">

        
       <div class="modal-body">
        <div class="content container"> 
          <div class="row">
               <input type="hidden" name="Store_id" id="Store_id" value="<?php echo $this->session->userdata('store_id'); ?> " />

           <div class="col-lg-3 " >
          
           Petty Cash Type
           </div>
                <div class="col-lg-4 " >
              
                       
                               
        <input type="text"  placeholder="Type" class="form-control" id="petty_cash_type" name="petty_cash_type">
         <input type="hidden" name="created_at" id="created_at" value="<?php echo date('Y-m-d H:i:s'); ?> " />
 
               </div>
             
                <div class="col-lg-4 input-group">
                 <button class ="btn btn-success btn-sm" id="add_image" ><i class=" icon-large icon-ok-sign"></i> &nbsp; &nbsp;</button>
          <button class ="btn btn-danger btn-sm" id="delete_image"><i class="icon-large icon-remove-circle"></i>&nbsp; &nbsp;</button>
          
                </div>
                
            </div>          
		 
        </div>
        <div class="modal-footer">
          <div class="doc-buttons"> 
                 <button class="btn btn-success btn-sm btn-rounded" type="submit" id="save" name="save">Save changes</button>
                  <a type="button" class="btn btn-default btn-sm btn-rounded" data-dismiss="modal">Cancel</a>  
               </div> 
       </div>
       </div></form>
      </div>
   </div>
 </h3>
              
            </div>
            <div class="widget-content"> 
            
         <div class="widget-content">
              <table class="table">
                <thead>
                  <tr>
                     <th><i class="icon-large icon-list-ol"></i> </th>
                    <th><i class="icon-large fa  fa-truck"></i>&nbsp; <b style="font-family:Georgia, 'Times New Roman', Times, serif">Type</b> </th>
                    <th></th>
                    <th> </th>
                  </tr>
                </thead>
                <tbody>
                          <?php   
 if(empty($cash)){
     ?>
           <tr>
                         <td>   </td><td></td><td></td><td><?php  echo "No record found";?></td><td></td><td></td></tr>
                    
      <?php 
      }?> 
                    <?php
                    $count =1;
                    foreach($cash as $c){ ?>
                  <tr>
                    <td><?php echo $count; ?></td>
                    <td> <?php echo $c->petty_cash_type; ?></td>
                    <td></td>
                    <td></td>
                  </tr>
                 <?php $count++;}?>
                </tbody>
              </table>
            </div>
          </div>
          </div>
















</div></div></div></div></div>

<?php  require_once('includes/footer.php');   
   ?>
         