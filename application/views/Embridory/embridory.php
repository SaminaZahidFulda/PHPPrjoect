<?php   
  require_once('includes/header.php');   
require_once('includes/sidebar.php');   
  ?>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
   <link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>font-awesome-4.0.3/css/font-awesome.min.css" rel="stylesheet" media="screen">

      <div class="page-content">
    <div class="content container">
     
                <div class="row">
                 <div class="col-md-12">
          <ol style="margin-bottom: 5px;" class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Embriodary</a></li>
                <li class="active">Issue Material</li>
              </ol>
        </div>
        <div class="col-lg-12">
         
            

   <div class="widget">
            <div class="widget-header"> <i class="icon-briefcase"></i>
              <h3>Issue Material</h3>
            </div>
<div class="widget-content">
              
              
             <form action="<?php echo base_url(); ?>Embriodary_controller/add" method="post" class="form-horizontal row-border" name ="embriodary"/>
  
    <input type="hidden" name="a[store_id]" id="store_id" value="<?php echo $this->session->userdata('store_id'); ?> " />

           <div class="content container"> 
             <div class="row">
    <div class="input-group input-group-md col-lg-3">
                                <span class="input-group-addon">
                                    <i class="fa  fa-user"></i>
                                </span>
                    <select class="form-control required" id="worker_id" name="a[worker_id]" >
                   
    <option>Select Worker</option>
                    <?php  foreach($worker as $row) {   ?>
                         <option value="<?php echo $row->worker_ID; ?>"><?php echo $row->worker_name; ?></option>
                         <?php } ?>
                   </select></div></div><br>
            <div class="row">
             
        <div class="input-group col-md-3">
            <select class="form-control required" id="embriodary_colour"  name="a[embriodary_colour]" class="color" >
               
    <option>Select Custom Color</option>
    <?php foreach($color as $c){ ?>
    <option value="<?php echo $c->pcid; ?>"><?php echo $c->colorname; ?></option>
   
    <?php }?>        
                   </select>    </div>
 
                    </span>
                
                
                <div class="input-group input-group-md col-lg-3">
                                <span class="input-group-addon">
                                    <i class="fa fa-dot-circle-o"></i>
                                </span>
                         <input type="integer"  placeholder="Cost of Color"  id="embriodary_colourprice" name="a[embriodary_colourprice]" class="form-control"/>
                 </div>  
               
                
                
                
          </div></div>
      <br><br>
       
           <div class="content container"> 
            
            <div class="row">
             
        
        <div class="col-lg-3">
            <select class="form-control required"  name="a[embriodary_category]" id= "embriodary_category"  class="booking_category">
         <option>Select Category</option>
    <?php foreach($cat as $c){ ?>
    <option value="<?php echo $c->Rmpurchase_catname; ?>"><?php echo $c->category_name; ?></option>
   
    <?php }?> 
    
                  
                   </select>
                </div>
                  <div class="input-group input-group-md col-lg-3">
                                <span class="input-group-addon">
                                    <i class="icon-adjust"></i>
                                </span>
                      <input type="integer" id="embriodary_yard" onkeyup="calculate()" name="a[embriodary_yard]" class="form-control booking_yard"/>
              </div>  
                
             
                 <div class="col-lg-3">
                 <input type="integer"  placeholder="Total amount" id="embriodary_categoryprice" name="a[embriodary_categoryprice]" class="form-control booking_categoryprice"/>
                </div>
                
                
          </div></div>
     <br><br>
                <div class="row">
         
                   <div class="col-lg-6">
                <textarea class="form-control"  placeholder="Description"name="a[embriodary_description]" rows="3" cols="1" id="embriodary_description"></textarea> 
                </div>
                
             
                </div> 
          
                <br><br>
           <div class="content container"> 
            <div class="row"> <div class="col-lg-3"> Payable<div class="input-group input-group-md ">
                                <span class="input-group-addon">
                                    <i class=" fa fa-usd"></i>
                                </span>
               <input type="integer"  class="form-control" id="a[embriodary_payable]" name="a[embriodary_payable]" >  
                </div> </div> <div class="col-lg-3"> Balance<div class="input-group input-group-md ">
                                <span class="input-group-addon">
                                    <i class=" fa fa-money"></i>
                                </span>
             <input type="integer" id="e[embriodary_balance]" name="e[embriodary_balance]"  class="form-control"/>
                  </div></div>
                <div class="col-lg-3">    After days<div class="input-group input-group-md ">
                                <span class="input-group-addon">
                                    <i class="icon-calendar"></i>
                                </span>
             <input type="integer"  id="embriodary_afterdays" name="a[embriodary_afterdays]"  class="form-control"/>
                    </div></div>
               
            </div></div>
            <br>
          <div class="col-md-3"> 
          Payment Type <select class="form-control" id="e[embriodary_typepaid]" name="e[embriodary_typepaid]" >
               
              <option value="Cash"> Cash</option>
              <option value="Checque">Checque </option>
  
     
                  
                   </select>
       </div>
       <div class="col-md-3">
           Amount Paid <input type="integer" id="embriodary_pay" name="e[embriodary_pay]" onkeyup="calculatebalance()" class="form-control"  /></div>
        
            
          <br><br>        
           <input type="hidden" name="a[embriodary_dateAdded]" id="embriodary_dateAdded" value="<?php echo date('Y-m-d H:i:s'); ?> " />
            <input type="hidden" name="e[payment_dateAdded]" id="payment_dateAdded" value="<?php echo date('Y-m-d H:i:s'); ?> " />
          
           <br><br>
                 
        <div class="doc-buttons"> 
                 <button class="btn btn-s-md btn-success btn-rounded" type="submit" id="save" name="save">Save</button>
                  <a class="btn btn-s-md btn-danger btn-rounded" type="submit" id="cancel" name="cancel">Cancel</a>  
               </div>    </div>                
</form>
         
                </div>
              </div>
            </div> 
 
 </div></div></div></div>
<?php  require_once('includes/footer.php');   
   ?>
        <script>
            
      
             $('#embriodary_category').change(function(){
              $.ajax({
                  url:'<?php echo base_url();?>Embriodary_controller/get_yardcost/'+$(this).val(),
             type:'POST',
                success:function(data){
            $('#embriodary_categoryprice').val(data);
        }
                
        });
  
});


 function  calculate(){
         
                 var total = 0;
                   
                     var subtotal= document.getElementById("embriodary_categoryprice").value;
                      var discount= document.getElementById("embriodary_yard").value;
                      total = subtotal*discount;
                         document.getElementById("embriodary_categoryprice").value=total;
               }

 function  calculatebalance(){
          
                     var total = 0;
                     var subtotal= document.getElementById("embriodary_payable").value;
                    
                      var discount= document.getElementById("embriodary_pay").value;
                      total =subtotal-discount;
                      document.getElementById("embriodary_balance").value=total;
               }
     	                

                    
                    
     
</script>