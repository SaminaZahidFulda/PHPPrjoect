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
                <li><a href="#">Issue Material</a></li>
                <li class="active">List</li>
              </ol>
        </div> <div id="alert">
            <?php echo $this->session->flashdata('verify'); ?>        </div>
          <div class="widget">
            <div class="widget-header"><i class="icon-large icon-list-alt"></i>
              <h3 class="left">Issued Material</h3>    
   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                 &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                    &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                       &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                          &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                             &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;  &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                             &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp; 
                             <button class="btn btn-primary" type="button"> <i class="fa  fa-plus"></i> 
          <a  href="<?php echo base_url(); ?>Embriodary_controller/add" ><span class="text">Issue More</span> </a>  </button>
    </div>
            <div class="widget-content"> 
            
<div class="widget widget-table action-table">
            
           
<div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><i class="icon-large icon-list-ol"></i> </th>
                    <th> <i class="icon-large icon-user"></i> &nbsp;Worker</th>
                    <th> <i class="icon-large fa fa-shopping-cart"></i>&nbsp;&nbsp;Category</th>
                     <th> <i class="icon-large fa fa-bullseye"></i>&nbsp;Color</th>
                      <th> <i class="icon-large fa fa-sort-amount-asc"></i>&nbsp;Yard</th>
                       <th> <i class="icon-large icon-money"></i>&nbsp;Payable</th>
                       <th> <i class="icon-large fa-calendar"></i>&nbsp;&nbsp;Issue Date</th>
                    <th> <i class="  fa fa-pencil-square-o"></i> &nbsp;Action</th>
                  </tr>
                </thead>
                <tbody>
                    
                    
                      <?php
                      $count=1;
                      foreach($embriodary as $e){ ?>
                  <tr>
                    <td> <?php echo $count; ?> </td>
                    <td><?php echo $e->worker_name; ?></td>
                    <td><?php echo $e->category_name; ?></td>
                    <td><?php echo $e->colorname; ?></td>
                     <td><?php echo $e->embriodary_yard; ?></td>
                    <td> <?php echo $e->embriodary_payable; ?></td>
                     <td> <?php echo $e->embriodary_dateAdded; ?></td>
             <td class="td-actions">
            <div class="message-actions">
                <a href="<?php echo base_url(); ?>Embriodary_controller/recieving/<?php echo $e->embriodary_id;?>" id= "recieve" title="Recieving" ><i style="color: plum"  class="icon-large fa fa-share-square"></i></a> 
               <input type="hidden"  id="bal" value="" />

                
                <a href="<?php echo base_url(); ?>Embriodary_controller/detail/<?php echo $e->embriodary_id;?>" title="Detail Material"><i style="color: #00d2ff "  class="icon-large fa  fa-clipboard"></i></a>  
               <a href="<?php echo base_url(); ?>Embriodary_controller/delete/<?php echo $e->embriodary_id;?>" title="Detail Material"><i style="color: red" class=" icon-large fa   fa-times"></i></a>  </div>
             </div>  </td>
                  </tr>
                      <?php
                      $count++;}
                      ?>
                </tbody>
              </table>
            </div>            
          
          </div>          
       
     

</div></div></div>












<?php require_once('includes/footer.php');?>


</div></div>
<script>
 
 $('#recieve').click(function(){
    alert();
 $(this).find($("i")).removeClass('icon-large fa fa-share-square').addClass('fa-chevron-up');
   });


</script>