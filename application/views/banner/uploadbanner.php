<?php  require_once('includes/header.php');   
require_once('includes/sidebar.php');   ?>
<link href="<?php echo base_url(); ?>style/dropzone.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>javascript/dropzone.js"></script>
<div class="page-content">
    <div class="content container">
      <div class="row">
          
        <div class="col-lg-12">
          <ol style="margin-bottom: 5px;" class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>welcome/">Home</a></li>
                <li ><a href="#">Banner</a></li>
                <li class="active"><a href="#">Set Image</a></li>
                
              </ol>
        </div>
           <div id="alert">
            <?php echo $this->session->flashdata('verify'); ?>
        </div>
          &nbsp;
     <div class="row">
         
        <div class="col-lg-12">
         <div class="widget">
            <div class="widget-header"> <i class="icon-external-link"></i>
              <h3>Image Upload</h3>
            </div>
            <div class="widget-content">

              	<div class="panel-body">
									
                    <form method="post" action="<?php echo base_url(); ?>banner_controller/Add" enctype="multipart/form-data">
                   
                      <input type="file" placeholder="Product Image" title="Product Image" id="Banner_image" name="Banner_image" >
                     <input type="hidden" name="Store_id" id="Store_id" value="<?php echo $this->session->userdata('store_id'); ?> " />
                     Category : <br> 
                     
               Banner <input type="checkbox" title="category" id="category" name="category" value="banner" >
               SubBanner <input type="checkbox"  title="category" id="category" name="category" value="Subbanner" >
                              <button class="btn btn-s-md btn-success" type="submit"  id="save">Upload</button>
                
                </form>
		</div>


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
  
   