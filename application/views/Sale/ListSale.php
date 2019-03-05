<?php   
  require_once('includes/header.php');   
require_once('includes/sidebar.php');   
  ?>
   
   <div class="page-content">
    <div class="content container">
<div class="col-lg-12">
    <div class="col-md-12">
          <ol style="margin-bottom: 5px;" class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>welcome/">Home</a></li>
                <li><a href="#">Sale</a></li>
                <li class="active">List</li>
              </ol>
        </div>
          <div class="widget">
            <div class="widget-header"><i class="icon-large icon-credit-card"></i>
              <h3 class="left">Sales</h3>      
                <button class="btn btn-primary" type="button"> <i class="fa fa-plus-square"></i> 
          <a  href="<?php echo base_url(); ?>Sale_controller/AddSaledata" ><span class="text">More Sale</span> </a>  </button>
   
            </div>
            <div class="widget-content"> 
            
          <div class="widget widget-table action-table">
            
           
  
             
              <table class="table">
                <thead>
                  <tr>
                    <th><i class="icon-large icon-list-ol"></i> </th>
                    <th> <i class="icon-large icon-money"></i> Sale</th>
                    <th><i class="icon-large icon-money"></i> Discount</th>
                     <th> <i class="icon-large icon-calendar"></i>  Date</th>
                    <th> <i class="icon-large icon-plus-sign"></i> Action</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                        <?php   
 if(empty($sale)){
     ?>
           <tr>
                         <td>   </td><td></td><td></td><td><?php  echo "No record found";?></td><td></td><td></td></tr>
                    
      <?php 
      }?> 
                <?php 
                $count = 1;
                foreach($sale as $p){ ?>
                  <tr>
                    <td><?php echo $count;  ?></td>
                    <td><?php echo $p->sale_amount;  ?></td>
                    <td><?php echo $p->sale_discount;  ?></td>
                    <td><?php echo $p->sale_time;  ?></td>
                    <td class="td-actions">
             <a class="btn btn-small btn-info" href="<?php echo base_url(); ?>Sale_controller/generateInvoice/<?php echo $p->sale_id;?>"><i class="icon-large icon-inbox"></i></a>
             <a class="btn btn-info btn-small" href="<?php echo base_url(); ?>Sale_controller/detail/<?php echo $p->sale_id;?>"><i class="icon-large icon-file"></i></a>
             </td>
             <td></td>
             <td></td>
                  </tr>
                     <?php 
                }?>
                </tbody>
              </table>
           
           
          
          </div>
       
     

</div></div></div>














<?php require_once('includes/footer.php');?>

</div></div>