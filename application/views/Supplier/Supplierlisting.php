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
                <li><a href="#">Supplier</a></li>
                <li class="active">List</li>
              </ol>
        </div>
<div class="col-lg-12">
    <div id="alert">
            <?php echo $this->session->flashdata('verify'); ?>
        </div>
          <div class="widget">
            <div class="widget-header"><i class="icon-large icon-group"></i>
              <h3 class="left">Suppliers</h3>  &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                 &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                    &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                       &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                          &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                             &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;  &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                             &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;    &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;  
            <button class="btn btn-primary" type="button"> <i class="fa fa-plus "></i> 
          <a href="<?php echo base_url(); ?>Supplier_controller/addsupplier"><span class="text">More Supplier</span> </a>  </button>
          



<div class="modal fade" id="myModal" role="dialog">
                   <div class="modal-dialog">
   
     
     
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
                    <th> <i class="icon-large icon-user"></i> Supplier Name</th>
                    <th> <i class="icon-large icon-envelope"></i> Email</th>
                          <th> <i class="icon-large icon-phone"></i> Contact #</th>
                            <th> <i class="icon-large icon-credit-card"></i>Shop Address</th>
                      <th> <i class="icon-large icon-credit-card"></i>Dealing Category</th>
                    <th> <i class="icon-large icon-plus-sign"></i> Action</th>
                  </tr>
                </thead>
                <tbody>
                       <?php   
 if(empty($suppliers)){
     ?>
           <tr>
                         <td>   </td><td></td><td></td><td><?php  echo "No record found";?></td><td></td><td></td></tr>
                    
      <?php 
      }?> 
                                    <?php   
 
$count=1;
foreach($suppliers As $e){
  ?>
                  <tr>
                    <td> <?php  echo $count;?></td>
                    <td><?php  echo $e->supplier_fname." ".$e->supplier_lname;?></td>
                    <td><?php  echo $e->supplier_email;?></td>
                    <td><?php  echo $e->supplier_phone;?></td>
                     <td><?php  echo $e->supplier_shopname;?></td>
                  <td><?php  echo $e->supplier_type;?></td>
             <td class="td-actions">
            <a class="btn btn-small btn-success" href="<?php echo base_url(); ?>Supplier_controller/updatesupplier/<?php echo $e->supplier_id;?>"><i class="btn-icon-only icon-edit"> </i></a>
             <a class="btn btn-danger btn-small" href="<?php echo base_url(); ?>Supplier_controller/deletesupplier/<?php echo $e->supplier_id;?>"><i class="btn-icon-only icon-remove-sign"> </i></a>
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











<?php require_once('includes/footer.php');?>



</div></div>
