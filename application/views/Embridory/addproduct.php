<?php   
  require_once('includes/header.php');   
require_once('includes/sidebar.php');   
  ?>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
   <link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>font-awesome-4.0.3/css/font-awesome.min.css" rel="stylesheet" media="screen">

   
   <div class="page-content">
    <div class="content container">
<div class="col-lg-12">
         <div class="col-md-12">
          <ol style="margin-bottom: 5px;" class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>welcome/">Home</a></li>
                <li><a href="<?php echo base_url(); ?>Embriodary_controller/">Embriodary</a></li>
                <li class="active">Add Product</li>
              </ol>
        </div>
          <div class="widget">
            <div class="widget-header"><i class="icon-large icon-glass"></i> 
              <h3 class="left"> Add Product </h3>    
            </div>
            <div class="widget-content"> 
           <form action="<?php echo base_url(); ?>Embriodary_controller/recieving/<?php echo $embdetail1->embriodary_id; ?>" enctype="multipart/form-data" method="post" class="form-horizontal row-border" name ="addProduct"/>
  
            <div class="content container">
   
        <div class="col-lg-12">
            <div class="row">
              <table class="table ">
               <tr><td class="text" style=" font-size: large "><b >   Category 
                       </b>
                   </td><td><?php echo $embdetail1->category_name; ?></td><td></td><td></td>
                    <input type="hidden" name="category_name" id="category_name" value="<?php echo $embdetail1->category_name; ?>" />
          
           </tr>
            <tr><td class="text" style=" font-size: large "> <b>  Color 
                    </b>
                   </td><td><?php echo $embdetail1->colorname; ?></td><td></td><td></td>
                   <input type="hidden" name="color_name" id="color_name" value="<?php echo $embdetail1->colorname; ?>" />
          
           </tr>
            <tr><td class="text" style=" font-size: large "> <b>  Cost Price</b>
                   </td><td><?php echo $embdetail1->embriodary_payable; ?></td><td></td><td></td>
                    <input type="hidden" name="cost_price" id="cost_price" value="<?php echo $embdetail1->embriodary_payable; ?>" />
          <input type="hidden" name="transaction_type" id="transaction_type" value="Embriodary" />
          
           </tr>
           
              
         
                  </table>
             
            
               
              
            
                <br> <div >  <div class="row">
                        <div class=" col-lg-3">  &nbsp;&nbsp;&nbsp; <b > Sale price </b><br></div>
                 <div class="input-group input-group-md col-lg-3 right">
                      <span class="input-group-addon">
                                    <i class="fa   fa-shopping-cart"></i>
                                </span>
                 <input type="text" required class="form-control"   name="product_saleprice" id="product_saleprice" />
                  </div>  
                
               </div>      
       <div class="row">
           <br>
           <div class=" col-lg-3">   &nbsp;&nbsp;&nbsp; <b > Item Name </b><br></div>
                 <div class="input-group input-group-md col-lg-3 right">
                      <span class="input-group-addon">
                                    <i class="fa   fa-shield"></i>
                                </span>
                <input type="text" required class="form-control"   name="product_itemname" id="product_itemname" />
          </div>  
                
       </div><br><div class="row">
           <div class=" col-lg-3">  &nbsp;&nbsp;&nbsp; <b >Article # </b><br></div>
                 <div class="input-group input-group-md col-lg-3 right">
                      <span class="input-group-addon">
                                    <b> #</b>
                                </span>
                   <input type="text" required class="form-control"   name="product_article" id="product_article" />
       </div>  
                
               </div>
       <br>
                <div class="row">
                    &nbsp;&nbsp;&nbsp;<div class=" col-lg-3">  &nbsp;&nbsp;&nbsp; <b >Product Image  </b><br></div>
                    <div class="col-lg-4">
                         <?php  $upload = Array ("name" => "product_image",'id'=>"product_image", "Class" => "form-control");
                      echo form_upload($upload); ?>
                            </div> 
                 <input type="hidden" name="product_dateAdded" id="product_dateAdded" value="<?php echo date('Y-m-d H:i:s'); ?> " />
          
               </div>
       </div></div></div></div>
       <br>
       
          <div class="doc-buttons center"> 
                 <button class="btn btn-success btn-sm btn-rounded" type="submit" id="save" name="save">Add Prodcut</button>
                  <button class="btn btn-danger btn-sm btn-rounded" id="cancel" name="cancel">Cancel</button>  
               </div>  
       
            </form>
       
       
       
     

</div></div></div>
<?php require_once('includes/footer.php');?>

         <script>
               
       $(document).on('click', '#cancel', function(){
           $("input[type=text]").val(" ");
             $("input[type=file]").val(" ");
            $('#product_image').val(" ");
	});
        </script>