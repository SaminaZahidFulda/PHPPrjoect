<?php  require_once('includes/header.php');   
require_once('includes/sidebar.php');   ?>

   <link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>font-awesome-4.0.3/css/font-awesome.min.css" rel="stylesheet" media="screen">
<div class="page-content">
    <div class="content container">
      <div class="row">
          
        <div class="col-lg-12">
          <ol style="margin-bottom: 5px;" class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>welcome/">Home</a></li>
                <li ><a href="#">Personnal</a></li>
                <li class="active"><a href="#">List</a></li>
                
              </ol>
        </div>
           <div id="alert">
            <?php echo $this->session->flashdata('verify'); ?>
        </div>
          &nbsp;
     <div class="row">
        <div class="col-lg-12">
          <div class="widget">
            <div class="widget-header"> <i class="fa fa-list"></i>
              <h3>Personnal Record</h3>
               <button class="btn btn-primary btn-rounded pull-right" type="button"> <i class="fa fa-plus-square"></i> 
          <a  href="AddUser" ><span class="text">Add More User</span> </a>  </button>
          
          
            </div>
            <div class="widget-content">
              <div class="body">
                <table class="table table-striped table-images table-hover">
                  <thead>
                    <tr>
                      
                      <th>Name</th>
                      <th>Type</th>
                      <th>Contact Info</th>
                      <th>Address</th>
                      <th class="hidden-xs">Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                            <?php   
 if(empty($users)){
     ?>
           <tr>
                         <td>   </td><td></td><td></td><td><?php  echo "No record found";?></td><td></td><td></td></tr>
                    
      <?php 
      }?> 
                      <?php 

foreach($users as $row){ ?>
    <tr>
                      <td><?php echo $row->user_firstname; ?></td>
                      <td><?php echo $row->user_type;?></td>
                      <td> <?php echo $row->user_phone.'<br>'.$row->user_mobile; ?></td>
                      <td class="hidden-xs"><p> <small> <?php echo $row->user_address;?> </small> </p></td>
                      
                      <td class="hidden-xs"><a href="updateUser/<?php echo $row->user_id;?>" class="btn btn-sm btn-primary" > Edit </a>
                        
                      <a href="deleteUser/<?php echo $row->user_id;?>" class="btn btn-sm btn-warning" > Delete </a></td>
                    </tr>
                   <?php }?>
                  </tbody>
                </table>
               
              </div>
            </div>
          </div>
        </div>
      </div>
       </div>
      </div>
    </div>
   </div>



<?php  require_once('includes/footer.php');   
  ?>
  
   