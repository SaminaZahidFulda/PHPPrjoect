<?php   
  require_once('includes/header.php');   
require_once('includes/sidebar.php');   
  ?>
  
   <div class="page-content">
    <div class="content container">
<div class="col-lg-12">
     <div class="col-md-12">
          <ol style="margin-bottom: 5px;" class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Purchase</a></li>
                <li class="active">List</li>
              </ol>
        </div>
    <div id="alert">
            <?php echo $this->session->flashdata('verify'); ?>
        </div>
          <div class="widget">
            <div class="widget-header"><i class="icon-large icon-list-alt"></i>
              <h3 class="left">Purchases </h3>    
  &nbsp;   
                    &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                 &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                    &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                       &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                          &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                             &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;  &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                             &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp; 
                             <button class="btn btn-primary" type="button"> <i class="fa fa-plus-square"></i> 
          <a  href="<?php echo base_url(); ?>purchaseController/Addpurchase" ><span class="text">More Purchase</span> </a>  </button>
            </div>
            <div class="widget-content"> 
            
          <div class="widget widget-table action-table">
            
           
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><i class="icon-large icon-list-ol"></i> </th>
                    <th> <i class="icon-large icon-user"></i> &nbsp; Supplier</th>
                    <th> <i class="icon-large icon-money"></i>&nbsp; Amount</th>
                     <th> <i class="fa fa-dollar  icon-large"></i>&nbsp; Discount</th>
                      <th> <i class="icon-large fa fa-rupee "></i>&nbsp; Balance</th>
                       <th> <i class="icon-large fa fa-calendar"></i>&nbsp; Date</th>
                    <th> <i class="fa fa-pencil-square icon-large"></i> &nbsp;Action</th>
                  </tr>
                </thead>
                <tbody>
                           <?php   
 if(empty($purchase)){
     ?>
           <tr>
                         <td>   </td><td></td><td></td><td><?php  echo "No record found";?></td><td></td><td></td></tr>
                    
      <?php 
      }?> 
                <?php foreach($purchase as $p){ ?>
                  <tr>
                    <td>1</td>
                    <td><?php echo $p->supplier_fname; ?></td>
                    <td><?php echo $p->fpurchase_subtotal; ?> </td>
                    <td><?php echo $p->fpurchase_discount; ?></td>
                    <td><?php echo $p->fpurchase_balance; ?></td>
                   <td><?php echo $p->fpurchase_dateAdded; ?></td>
                    <td class="td-actions">
                    <a class="btn btn-small btn-success" href="<?php echo base_url(); ?>purchaseController/detailpurchase/<?php echo $p->fpurchase_id;?>"><i class="icon-large fa fa-file-text"> </i></a>
                    <a class="btn btn-danger btn-small" href="<?php echo base_url(); ?>purchaseController/deletepurchase/<?php echo $p->fpurchase_id;?>"><i class="btn-icon-only icon-remove"> </i></a>
                    </td>
                  </tr>
                 <?php }?>
                </tbody>
              </table>
            </div>
          
          </div>
       
     

</div></div></div>











<?php require_once('includes/footer.php');?>



</div></div>
