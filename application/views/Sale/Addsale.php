<?php   
  require_once('includes/header.php');   
  require_once('includes/sidebar.php'); 

  
  ?>

<link href="<?php echo base_url(); ?>assets/custom-theme/jquery-ui-1.10.0.custom.css" rel="stylesheet" media="screen">

   
   <div class="page-content">
    <div class="content container">
        <div class="col-md-12">
          <ol style="margin-bottom: 5px;" class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>welcome/">Home</a></li>
                <li><a href="#">Sale</a></li>
                <li class="active">Add </li>
              </ol>
        </div>
<div class="col-lg-9">
          <div class="widget">
            
            <div class="widget-content"> 
            
          <div class="widget widget-table action-table">
        <form action="<?php echo base_url(); ?>Sale_controller/Add"  method="post" id="add_item_form">
 
            <div class="form-group">
                   <div class="col-lg-9">
                   <div class="form-group">
           
                    <div class="input-group">
                       
                      <input type="search" id="item" name='item' class="form-control">
                      <span class="input-group-btn">
                      <button class="btn btn-transparent" type="button">Search</button>&nbsp;&nbsp;&nbsp;&nbsp;<b class="text">Invoice #: 6</b>
                      </span>
                        </div></div>
                  </div>
            </div></form>
           <br><br>

              <table class="table">
                <thead>
                  <tr>
                   
                    <th><i class="icon-large icon-th-large"></i> Item Name</th>
                    <th> <i class="icon-large icon-random"></i> Item#</h3></th>
                    <th> <i class="icon-large icon-money"></i> Price</th>
                    <th> <i class="icon-large icon-tag"></i> Qty</th>
                    <th><i class="icon-large icon-money"></i> Total</th>
                    <th> <i class="icon-large icon-plus-sign"></i> Action</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
              <?php  if($this->cart->total_items() > 0){ 
                  
                foreach ($this->cart->contents() as $items){  
                  
             
?>  
               <tbody>
                  <tr>
                    <td><?php echo $items['name']; ?></td>
                    <td><?php echo $items['options']['article #']; ?></td>
                    <td><?php echo $items['price']; ?></td>
                    <td><?php echo $items['qty']; ?></td>
                     <td><?php echo $items['subtotal']; ?></td>
                     
                    <td class="td-actions">
             <a class="btn btn-danger btn-small" href="<?php echo base_url(); ?>Sale_controller/deleteCart/<?php echo $items['rowid'];  ?>"><i class="btn-icon-only icon-remove"> </i></a>
             </td>
            
                  </tr>
                  
                
                  
                </tbody>
                <?php
                
              } }
             
?> 
              </table>
           
           
          
          </div>
       
     
</div>
</div></div>



  <form action="<?php echo base_url(); ?>Sale_controller/AddSaledata"  method="post" id="form11">
             
             <fieldset>
 <?php  if($this->cart->total_items() > 0){ 
                  
                foreach ($this->cart->contents() as $items){  
                  
             
?>  
               <tbody>
                  <tr>
                       <input type="hidden" name='item_id[]' id="item_id" value="<?php echo $items['id'];  ?>" />
  <input type="hidden" name='item_unit_price[]' id="item_unit_price" value="<?php echo $items['price'];  ?>" />
  <input type="hidden" name='item_quantity[]' id="item_quantity" value="<?php echo $items['qty'];  ?>" />
  <input type="hidden" name='item_total_price[]' id="item_total_price" value="<?php echo $items['qty']*$items['price'];  ?>" />
 <input type="hidden" name='sale_time' id="sale_time" value="<?php echo date('Y-m-d H:i:s');  ?>" />
 
                   
                  </tr>
                  
                
                  
                </tbody>
                <?php
                
              } }
             
?> 
</fieldset> 
   <div class="col-lg-3">
          <div class="widget">
            <div class="widget-header">
                <h3 class="left"><button type="button" class="btn btn-danger btn-sm"><a href="<?php echo base_url(); ?>Sale_controller/destroycart"><b> Cancel Sale x</b></a></button></h3>      

              
            </div>
              <input type="hidden" name="Store_id" id="Store_id" value="<?php echo $this->session->userdata('store_id'); ?> " />

            <div class="widget-content"> 
          <b>  Items in cart: <?php echo $this->cart->total_items();  ?></b>
            <br><br>
           <b> Amount Due: <?php echo $this->cart->total();  ?> </b>
           <input type="hidden" name="b[sale_amount]" id="sale_amount" value="<?php echo $this->cart->total();   ?> " />
 
            <br><br>
            <input type="hidden" name="b[sale_discount]" id="sale_discount" value="" />
 
             <input type="hidden" name="b[Store_id]" id="Store_id" value="<?php echo $this->session->userdata('store_id'); ?> " />

                  
                    <div class="control-group">
                   
                      <div class="col-md-9">
                      <div class="form-group">
     <input type="text"  placeholder="Customer Name" class="form-control" required name="b[customer_name]" id="customer_name">
                      </div>
                      </div>
                    </div>
                   
                   <div class="control-group">
                    
                       <div class="col-md-9">
                      <div class="form-group">
                     <input type="text"  placeholder="Customer Phone"class="form-control" required name="b[customer_phone]" id="customer_phone">
                      </div>
                      </div>
                  </div>
            <input type="hidden" name="b[sale_time]" id="sale_time" value="<?php echo date('Y-m-d H:i:s'); ?> " />
 
             <div class="form-group">
                    
                    <div class="input-group">
                     
                        <input type="text" id="recieved_amount" name="b[recieved_amount]" onkeyup="calculate()" class="form-control" >
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-success"> Add  </button>
                    
                      </div>
                    </div>
                  </div>

                        
                  </fieldset> 
              </form>
          
       
     

</div></div></div>




<?php require_once('includes/footer.php');?>

<script src="<?php echo base_url(); ?>js/jquery-ui.js"></script>

<script>
$(document).ready(function(){
    $("#item").autocomplete({
        source: '<?php echo base_url(); ?>Sale_controller/item_search',
        delay: 500,
        autoFocus: false,
        minLength: 1,
        messages: {
            noResults: '',
            results: function () {
            }
        },
        select: function (event, ui) {
            event.preventDefault();
            $(".ui-menu-item").hide();
            $("#item").val(ui.item.value);
        $("#add_item_form").submit();
        },
        change: function (event, ui) {
            event.preventDefault();
            if ($(this).attr('value') !== '' && $(this).attr('value') !== "Type item name or scan barcode...") {
              $("#add_item_form").submit();
            }

            $(this).attr('value', "Type item name or scan barcode...");
        }
    }); 
});




 function  calculate(){
         
                 var total = 0;
                   
                     var subtotal= document.getElementById("sale_amount").value;
                      var discount= document.getElementById("recieved_amount").value;
                      total = subtotal-discount;
                         document.getElementById("sale_discount").value=total;
               }
               
</script>