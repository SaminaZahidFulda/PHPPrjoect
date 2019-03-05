<?php   
  require_once('includes/header.php');   
require_once('includes/sidebar.php'); 

  ?>
  <link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>font-awesome-4.0.3/css/font-awesome.min.css" rel="stylesheet" media="screen">


<form action="<?php echo base_url(); ?>purchaseController/Addpurchase" enctype="multipart/form-data" method="post" id="form11">
               
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
   <div class="page-content"
    <div class="content container">
     <div class="row">
        <div class="col-md-12">
          <ol style="margin-bottom: 5px;" class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>welcome/">Home</a></li>
                <li><a href="#">Purchase</a></li>
                <li class="active">Add Purchase</li>
              </ol>
        </div>
      </div><div id="alert">
            <?php echo $this->session->flashdata('verify'); ?>
        </div>
                <div class="row">
        <div class="col-lg-12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-briefcase"></i>
              <h3>Purchase</h3>
            </div>

              
         <div class="container">
             <div class="tabbable tabs-left">
               
                 
                  <ul class="nav nav-tabs" id="myTabLeft">
                  <li class="active"><a data-toggle="tab" href="#home-left"<i class="icon-large icon-shopping-cart"></i> <b>&nbsp;Purchase Item</b></a></li>
                  <li ><a data-toggle="tab" href="#profile-left"  <i class="icon-truck"></i> <b>&nbsp; Purchase Material</b></a></li>
                </ul>
                <div id="myTabContentLeft" class="tab-content">
                  <div class="tab-pane fade in active" id="home-left">
                   <div class="purchaseview">
                        <div class="row">
                  <div class="col-lg-12 control-group">
                  
                <div class="col-lg-3 col-lg-offset-1">
                  <label for="normal-field" class="control-label"> Suppliers:</label>
                     <select class="form-control required" id="fpurchase_supplierid" name="fpurchase_supplierid" >
                         <?php  foreach($supplierFinish as $row) {   ?>
                         <option value="<?php echo $row->supplier_id; ?>"><?php echo $row->supplier_fname; ?></option>
                         <?php } ?>
                       </select>
                     </div>
                    
                
                </div>
                </div>
 <br><br>
<div id="colour_row">
    <div class="row">
     <div class="col-md-2">
                        <select class="form-control required" id="fDpurchase_catname" name="fDpurchase_catname[]" >
                    
                         <option value="0">Select Category</option>
             
    
  
                       </select>
                </div>
    <div class="col-md-2 col-lg-offset-0">
     
                        <select class="form-control required" id="fDpurchase_color" name="fDpurchase_color[]" >
                             
                         <option value="0">Choose Color</option>
                       <?php  $color= $this->general_model->select_data('color_detail'); 
                       foreach($color as $row) {   ?>
    <option value="<?php echo $row->colorid; ?>"><?php echo $row->ColorName; ?></option>
    
   <?php } ?>
                       </select>
                </div>
    <div class="col-md-1 col-lg-offset-0">
     
                        <select class="form-control required" id="fDpurchase_quantity" name="fDpurchase_quantity[]" class="CQuantity"   >
                             <?php for($i=1;$i<=10;$i++){ ?>
                         <option value="<?php echo $i ; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                       </select>
    </div> <div class="col-md-2 ">
                         
                        <select class="form-control required" id="fDpurchase_reorderlevel" name="fDpurchase_reorderlevel[]"  >
                             <option value="0">Reorder Level</option>
                              <?php for($i=1;$i<=10;$i++){ ?>
                         <option value="<?php echo $i ; ?>"><?php echo $i; ?></option>
                                <?php } ?>
               
                        </select>
       
                
                </div>
        
        
              
                 <div class="input-group input-group-md col-lg-2 right">
                    <span class="input-group-addon">
                                    <i class="fa   fa-shield"></i>
                                </span>
                     <input type="text" class="form-control"  placeholder="Item Name"  name="product_itemname[]" id="product_itemname" />
          </div>  
        <div class="input-group input-group-md col-lg-2 right">
                    <span class="input-group-addon">
                        <b>#</b>
                                </span>
                     <input type="text" class="form-control"  placeholder="Article Number"  name="product_article[]" id="product_article" />
          </div>  
        
    
    </div>
    <br>
    <div class="row">
   <div class="col-md-2 ">
 <input type="text" placeholder="Cost price"  id="fDpurchase_unitprice" class="form-control fDpurchase_unitprice" name="fDpurchase_unitprice[]"  onkeyup="calculate()">
 </div> 
        <div class="col-md-2 ">           
     <input type="text" placeholder="Sale price"  id="fDpurchase_saleprice" name="fDpurchase_saleprice[]" class="form-control">
                </div>
        
        <div class="col-md-2 ">           
            <input type="file" placeholder="Product Image" title="Product Image"   id="product_image" name="product_image[]" >
                </div>
          
  
                      <div class="input-group-btn col-lg-1 col-lg-offset-1" >
                        <button class="btn btn-success" type="button" id="add_image"  ><i class="icon-plus"></i></button>
                        <button class="btn btn-danger" type="button" id="delete_image" ><i class="icon-minus"></i></button>
                            
                      </div>
   
          
</div></div>
 <br>
 <div class="row">
 <br><br><div class="col-lg-3 col-lg-offset-1">
  Sub Total:<input type="text"  id="fpurchase_subtotal" name="fpurchase_subtotal" class="subtotal" class="form-control" >
                    </div>
 <div class="col-lg-3">
  Discount:<input type="text"  id="fpurchase_discount" name="fpurchase_discount" class="fpdiscount" onkeyup="calculatenettotal()" class="form-control" class="fpurchase_discount">
                    </div>
 <div class="col-lg-3">
  Net Total:<input type="text"  id="fpurchase_netTotal" name="fpurchase_netTotal" class="form-control" class="fpurchase_netTotal">
 </div>
 <div class="clearfix"></div>
  <br>
 <div class="col-md-2 col-lg-offset-0">
                         
                        Payment Type:<select class="form-control required" id="payment[fDpurchase_typepaid]" name="payment[fDpurchase_typepaid]"  >
                             
                              
                         <option value="Cash">Cash</option>
                             <option value="Checque">Checque</option>  
               
                        </select>
       
                
                </div>
 <div class="col-lg-2">
  Amount Paid:<input type="text"  id="fpurchase_pay" name="payment[fpurchase_pay]" onkeyup="calculatebalance()" class="form-control" class="fpurchase_pay">
                    </div>
  <div class="col-lg-2">
               Balance :<input type="text" id="fpurchase_balance" name="payment[fpurchase_balance]" class="form-control"  />    </div>
<input type="hidden" name="payment[fpurchase_dateAdded]" id="payment[fpurchase_dateAdded]" value="<?php echo date('Y-m-d H:i:s'); ?> " />
 
<input type="hidden" name="fpurchase_dateAdded" id="fpurchase_dateAdded" value="<?php echo date('Y-m-d H:i:s'); ?> " />
 
   <input type="hidden" name="Store_id" id="Store_id" value="<?php echo $this->session->userdata('store_id'); ?> " />

</div></div>
   
                  </div>
                  <div class="tab-pane fade  profile-left" id="profile-left">
                 
                       <div class="tab-pane  profile-left" id="profile-left">
                   <div class="purchaseRawMaterial">
        <div class="row">
                  <div class="col-lg-12 control-group">
                  
                <div class="col-lg-3 col-lg-offset-1">
                  <label for="normal-field" class="control-label"> Suppliers:</label>
                     <select class="form-control required" id="Rmpurchase_supplierid" name="Rmpurchase_supplierid" >
                         <?php  foreach($supplierRaw as $row) {   ?>
                         <option value="<?php echo $row->supplier_id; ?>"><?php echo $row->supplier_fname; ?></option>
                         <?php } ?>
                       </select>
                     </div>
                    
                
                </div>
                </div>
                       <br>
<div id="colour_row">
   <div class="col-lg-12 control-group">
                  
                <div class="col-lg-3 ">
                    <select class="form-control required" id="Rmpurchase_catname" name="Rmpurchase_catname[]" >
                         <option value="0">Select Category</option>
                        
                       </select>
                     </div>
                    
                
<div class="col-lg-2 ">
    <input type="text" placeholder="Total Yard"  id="Rmpurchase_totalyard" name="Rmpurchase_totalyard" class="Rmpurchase_totalyard" class="form-control" >
                    </div> &nbsp;<div class="col-lg-2 ">
                        <input type="text" placeholder="Amount"  id="Rmpurchase_amount" name="Rmpurchase_amount" class="Rmpurchase_amount" onkeyup="calculateRAWperyardvalue()" class="form-control" >
                    </div>
      
    <div class="col-lg-3 ">
    <input type="text" placeholder="Per Yard"  id="Rmpurchase_amountperyard" name="Rmpurchase_amountperyard[]" class="form-control" class="CRAWunit_price" >
                    </div>
   
   <div class="input-group-btn col-lg-1" >
                        <button class="btn btn-success" type="button" id="add_image"  ><i class="icon-plus"></i></button>
                        <button class="btn btn-danger" type="button" id="delete_image" ><i class="icon-minus"></i></button>
                            
                      </div>
   
   
   </div></div>

     <div class="row">
        
 <br><br><div class=" col-lg-2 col-lg-offset-1">
                              Sub Total:  <input type="text"  id="Rmpurchase_subtotal" name="Rmpurchase_subtotal" class="form-control" class="Rmpurchase_subtotal" >
    
                              
      </div>
 <div class="col-lg-2">
  Discount:<input type="text"  id="Rmpurchase_discount" name="Rmpurchase_discount" class="form-control" class="Rmpurchase_discount">
                    </div>
 <div class="col-lg-2">
  Net Total:<input type="text"  id="Rmpurchase_netTotal" name="Rmpurchase_netTotal" class="form-control" class="Rmpurchase_netTotal">
 </div> 
  <div class="clearfix"></div>
  <br>
 <div class="col-md-2 col-lg-offset-0">
                         
                        Payment Type:<select class="form-control required" id="payment1[fDpurchase_typepaid]" name="payment1[fDpurchase_typepaid]"  >
                             
                              
                         <option value="Cash">Cash</option>
                             <option value="Checque">Checque</option>  
               
                        </select>
       
                
                </div>
<div class="col-lg-2">
  Amount Paid:<input type="text"  id="Rmpurchase_pay" name="payment1[fpurchase_pay]" class="form-control" onkeyup="calculateRAW1()" class="Rmpurchase_pay">
 </div> 
 <div class="col-lg-2">
 Balance :<input type="text"  id="Rmpurchase_balance" name="payment1[fpurchase_balance]" class="form-control" >
 </div> 
 <div class="clearfix"></div>
<input type="hidden" name="payment1[fpurchase_dateAdded]" id="payment1[fpurchase_dateAdded]" value="<?php echo date('Y-m-d H:i:s'); ?> " />
 
     <input type="hidden" name="Rmpurchase_dateadded" id="Rmpurchase_dateadded" value="<?php echo date('Y-m-d H:i:s'); ?> " />
 
    </div>   
   </div>
                  </div>
                  </div>
                  <div class="form-actions">
                
                   <button class="btn btn-s-md btn-success" type="submit"     id="save" name="cancel">Save</button>
                   <button class="btn btn-s-md btn-danger" type="cancel" id="cancel" name="cancel">Cancel</button>
                  
                  </div>
                </div></div>
             </form>
             <?php  require_once('includes/footer.php');   
   ?>

             
             
             
             <script>
          
 $(document).on('click', '#add_image', function(){
    
		var clone = $(this).closest('#colour_row').clone();
		
                clone.find('input,text').val('');
		clone.insertAfter($(this).closest('#colour_row'));
                });
                $(document).on('click', '#delete_image', function(){
                   
		var len = $('#delete_image').length;
               
		if(len >= 1) {
			$(this).closest('#colour_row').remove();
		}
	});
    function  calculate(){
        
                   var total = 0;
                   $('.fDpurchase_unitprice').each(function(index){
                     var qty= $(this).closest("#colour_row").find("#fDpurchase_quantity").val();
                      var price= $(this).closest("#colour_row").find("#fDpurchase_unitprice").val();
                    
                      total = total+price*qty;
                      $('.subtotal').val(total);
                        
                   }); 
               }
               
               
                function  calculatenettotal(){
         
                 var total = 0;
                   
                     var subtotal= document.getElementById("fpurchase_subtotal").value;
                      var discount= document.getElementById("fpurchase_discount").value;
                      total = subtotal-discount;
                         document.getElementById("fpurchase_netTotal").value=total;
               }
                function  calculateRAW(){
         
                   var total = 0;
                   $('.CYard').each(function(index){
                     var qty= $(this).closest("#colour_row").find(".CYard").val();
                      var price= $(this).closest("#colour_row").find(".CRAWunit_price").val();
                      total = total+price*qty;
                         document.getElementById("Rmpurchase_amount").value=total;
                   });
               }
               
               function  calculatebalance(){
         
                 var total = 0;
                   
                     var amount= document.getElementById("fpurchase_netTotal").value;
                      var paid= document.getElementById("fpurchase_pay").value;
                      total = amount-paid;
                         document.getElementById("fpurchase_balance").value=total;
               }
                function  calculateRAWperyardvalue(){
         
                 var total = 0;
                   $('.Rmpurchase_amount').each(function(index){
                         var amount= $(this).closest("#colour_row").find(".Rmpurchase_totalyard").val();
                      var price= $(this).closest("#colour_row").find(".Rmpurchase_amount").val();
                    
                      total = price/amount;
                     
                      
               });
            document.getElementById("Rmpurchase_amountperyard").value=total;}
               function  calculateRAW(){
         
                 var total = 0;
                   
                     var amount= document.getElementById("Rmpurchase_amount").value;
                      var paid= document.getElementById("Rmpurchase_pay").value;
                      total = amount-paid;
                         document.getElementById("Rmpurchase_balance").value=total;
               }
               
    $(document).ready(function(){
      //  $(".purchaseRawMaterial").hide();
      //  $(".purchaseview").show();
   $("input[name='purchase']").change(function(){
      if($(this).val() === 'purchaseFinish'){
          $(".purchaseview").toggle();
           $(".purchaseRawMaterial").hide();
      }
      else if($(this).val() === 'purchaseRaw'){
                  $(".purchaseview").hide();
           $(".purchaseRawMaterial").toggle();
      }
   });
   });
   
 

  $('#fpurchase_supplierid').change(function(){
    $.ajax({
        url:'<?php echo base_url();?>purchaseController/get_category/'+$(this).val(),
        type:'POST',
        success:function(data){
            $('#fDpurchase_catname').html(data);
        }
    });
});


 $('#Rmpurchase_supplierid').change(function(){
    $.ajax({
        url:'<?php echo base_url();?>purchaseController/get_categoryRAW/'+$(this).val(),
        type:'POST',
        success:function(data){
            $('#Rmpurchase_catname').html(data);
        }
    });
});
	                

                    
                    
     
</script>