<?php   
  require_once('includes/header.php');   
require_once('includes/sidebar.php');   
  ?>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

      <div class="page-content">
    <div class="content container">
     
                <div class="row">
                 <div class="col-md-12">
          <ol style="margin-bottom: 5px;" class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Booking</a></li>
                <li class="active">Material Order</li>
              </ol>
        </div>
        <div class="col-lg-12">
         <div id="alert">
            <?php echo $this->session->flashdata('verify'); ?>        </div>
            

   <div class="widget">
            <div class="widget-header"> <i class="icon-briefcase"></i>
              <h3>Material Booking</h3>
            </div>
<div class="widget-content">
              <div class="tabbable tabs-right">
                <ul class="nav nav-tabs" id="myTabright">
                  <li class="active"><a data-toggle="tab" href="#home-right"<i class="icon-large icon-bookmark"> Booking</a></li>
                  <li ><a data-toggle="tab" href="#profile-right" <i class="icon-large icon-cut"></i> Stiching</a></li>
                  
                </ul>
              
                <div class="tab-content" id="myTabContentright">
                  <div id="home-right" class="tab-pane fade in active">
            <br><br>
             <form action="<?php echo base_url(); ?>EmbriodaryBooking_controller/addbooking" method="post" class="form-horizontal row-border" name ="booking"/>
  

           <div class="content container"> 
            
            <div class="row">
             
        <div class="input-group col-md-3">
            <select class="form-control required" id="Booking[booking_colour]"  name="booking[booking_colour]" class="color" >
               
    <option>Select Custom Color</option>
    <?php foreach($color as $c){ ?>
    <option value="<?php echo $c->pcid; ?>"><?php echo $c->colorname; ?></option>
   
    <?php }?>        
                   </select>   <span class="input-group-btn">
                        <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#myModal"> <i class="btn-icon-only icon-pencil"></i></button>
 </div>
 
                    </span>
                
                
                <div class="input-group input-group-md col-lg-3">
                                <span class="input-group-addon">
                                    <i class="icon-adjust"></i>
                                </span>
                         <input type="integer"  placeholder="Cost of Color"  id="booking[booking_colourprice]" name="booking[booking_colourprice]" class="form-control"/>
                 </div>  
               
                
                
                
          </div></div>
      <br><br>
       
           <div class="content container"> 
            
            <div class="row">
             
        
        <div class="col-lg-3">
            <select class="form-control required"  name="booking[booking_category]" id= "booking_category"  class="booking_category">
         <option>Select Category</option>
    <?php foreach($categories as $c){ ?>
    <option value="<?php echo $c->Rmpurchase_catname; ?>"><?php echo $c->category_name; ?></option>
   
    <?php }?> 
    
                  
                   </select>
                </div>
                   <input type="hidden" name="booking[Store_id]" id="Store_id" value="<?php echo $this->session->userdata('store_id'); ?> " />

                  <div class="input-group input-group-md col-lg-3">
                                <span class="input-group-addon">
                                    <i class="icon-adjust"></i>
                                </span>
                      <input type="integer" id="booking_yard" onkeyup="calculate()" name="booking[booking_yard]" class="form-control booking_yard"/>
              </div>  
                
             
                 <div class="col-lg-3">
                 <input type="integer"  placeholder="Total amount" id="booking_categoryprice" name="booking[booking_categoryprice]" class="form-control booking_categoryprice"/>
                </div>
                
                
          </div></div>
     <br><br>
                <div class="row">
         
                   <div class="col-lg-6">
                <textarea class="form-control"  placeholder="Description"name="booking[booking_description]" rows="3" cols="1" id="booking[booking_description]"></textarea> 
                </div>
                
             
                </div> 
          
                <br><br>
           <div class="content container"> 
            <div class="row"> <div class="col-lg-3"> Receivable<div class="input-group input-group-md ">
                                <span class="input-group-addon">
                                    <i class="icon-adjust"></i>
                                </span>
               <input type="integer"  class="form-control" id="booking[booking_recievable]" name="booking[booking_recievable]" >  
                </div> </div> 
                <div class="col-lg-2"> Discount<div class="input-group input-group-md ">
                                <span class="input-group-addon">
                                    <i class="icon-retweet"></i>
                                </span>
              <input type="integer"  class="form-control" id="booking[booking_discount]" name="booking[booking_discount]" >  
                  </div> </div>
                    <div class="col-lg-2">    Amount Received<div class="input-group input-group-md ">
                                <span class="input-group-addon">
                                    <i class="icon-adjust"></i>
                                </span>
                            <input type="integer" id="booking[booking_amountrecieved]" onkeyup="calculatebalance()" name="booking[booking_amountrecieved]"  class="form-control"/>      </div> </div>
                  <div class="col-lg-2">     Balance
             <input type="integer" id="booking[booking_balance]" name="booking[booking_balance]"  class="form-control"/>
                  </div>
                <div class="col-lg-3">    Afterdays<div class="input-group input-group-md ">
                                <span class="input-group-addon">
                                    <i class="icon-calendar"></i>
                                </span>
             <input type="integer"  id="booking[booking_afterdays]" name="booking[booking_afterdays]"  class="form-control"/>
                    </div></div>
               
            </div></div>
            <br>
           <div class="content container"> 
            <div class="row">
            <div class="col-lg-3">
               Customer  <div class="input-group input-group-md ">
                                <span class="input-group-addon">
                                    <i class="icon-male"></i>
                                </span> <input type="integer"  class="form-control" id="booking[booking_customer]" name="booking[booking_customer]" >  
                </div>  </div>
         <div class="col-lg-3">
               Customer Phone  <div class="input-group input-group-md ">
                                <span class="input-group-addon">
                                    <i class="icon-phone-sign"></i>
                                </span> <input type="integer"  class="form-control" id="booking[booking_customerphone]" name="booking[booking_customerphone]" >  
                </div>   </div>        
            
            </div></div>
            
          <br><br>        
           <input type="hidden" name="booking[booking_dateAdded]" id="booking[booking_dateAdded]" value="<?php echo date('Y-m-d H:i:s'); ?> " />
          </div>
                  
                  <div id="profile-right" class="tab-pane fade ">
                  <br>
         <b> Shirt :</b>
          <br><br >
          <div class="content container"> 
            <div class="row">
 <div class="col-lg-3">
               Shoulder <input type="integer"  class="form-control" id="stiching[stiching_shoulder]" name="stiching[stiching_shoulder]" >  
                </div>           
                <div class="col-lg-3">
               Chest <input type="integer" id="stiching[stiching_chest]" name="stiching[stiching_chest]"  class="form-control"/>  
                </div>
                <div class="col-lg-3">
                  Waist<input type="integer" id="stiching[stiching_waist]" name="stiching[stiching_waist]"  class="form-control"/>
                </div>
                <div class="col-lg-3">
                 Hips <input type="integer" id="stiching[stiching_hips]" name="stiching[stiching_hips]"  class="form-control"/>
                </div>
            </div></div><input type="hidden" name="stiching[Store_id]" id="Store_id" value="<?php echo $this->session->userdata('store_id'); ?> " />

            <br>
            <div class="content container"> 
            <div class="row">
 <div class="col-lg-3">
               Front <input type="integer"  class="form-control" id="stiching[stiching_front]" name="stiching[stiching_front]" >  
                </div>           
                <div class="col-lg-3">
               Sleeves <input type="integer" id="stiching[stiching_sleeves]" name="stiching[stiching_sleeves]"  class="form-control"/>  
                </div>
                <div class="col-lg-3">
                  Round(Moori)<input type="integer" id="stiching[stiching_round]" name="stiching[stiching_round]"  class="form-control"/>
                </div>
                <div class="col-lg-3">
                 Kanda <input type="integer" id="stiching[stiching_kanda]" name="stiching[stiching_kanda]"  class="form-control"/>
                </div>
            </div></div>
            <br>
            <b>Shalwar :<b>
            <br><br >
            <div class="content container"> 
            <div class="row">
 <div class="col-lg-3">
               Bottom <input type="integer"  class="form-control" id="stiching[stiching_bottom]" name="stiching[stiching_bottom]" >  
                </div>           
                <div class="col-lg-3">
               Asan <input type="integer" id="stiching[stiching_asan]" name="stiching[stiching_asan]"  class="form-control"/>  
                </div>
                <div class="col-lg-3">
                  Trouser <input type="integer" id="stiching[stiching_trouser]" name="stiching[stiching_trouser]"  class="form-control"/>
                </div>
                
            </div></div>
            <br>
            <div class="row">
         
                   <div class="col-lg-6">
                Description <textarea class="form-control" name="stiching[stiching_description]" rows="3" id="stiching[stiching_description]"></textarea> 
                </div>
                
             
                </div>
                <br><br>
                              </div>
                  <div class="col-lg-3">
                </div>
        <div class="doc-buttons"> 
                 <button class="btn btn-s-md btn-success btn-rounded" type="submit" id="save" name="save">Save</button>
                  <button class="btn btn-s-md btn-danger btn-rounded" id="cancel" name="cancel">Cancel</button>  
               </div>                  
</form>
            <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
   
        <form action="<?php echo base_url(); ?>EmbriodaryBooking_controller/addcolor" method="post" class="form-horizontal row-border" name ="color"/>
  
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">x</button>
          <h4 class="modal-title">Add Custom Color</h4>
        </div>
       
        
       <div class="modal-body">
        
		 <p> 
             <label>Color</label>
    <input type="text" class="form-control col-md-3" placeholder="Enter Custom Color" id="colorname" name="colorname" /> 
   
           
   
                  </p>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-s-md btn-success ">Save</button>
        </div>
      </div>  </form>
      </div>
                </div>
              </div>
            </div> 
 
 </div></div></div></div>
<?php  require_once('includes/footer.php');   
   ?>
        <script>
            
      
             $('#booking_category').change(function(){
              $.ajax({
                  url:'<?php echo base_url();?>EmbriodaryBooking_controller/get_yardcost/'+$(this).val(),
             type:'POST',
                success:function(data){
            $('#booking_categoryprice').val(data);
        }
                
        });
  
});


 function  calculate(){
         
                 var total = 0;
                   
                     var subtotal= document.getElementById("booking_categoryprice").value;
                      var discount= document.getElementById("booking_yard").value;
                      total = subtotal*discount;
                         document.getElementById("booking_categoryprice").value=total;
               }

 function  calculatebalance(){
         
                 var subtotal = 0;
                     var total = 0;
                     var subtotal= document.getElementById("booking[booking_receivable]").value;
                      var discount= document.getElementById("booking[booking_discount]").value;
                      subtotal =subtotal-discount;
                           var discount1= document.getElementById("booking[booking_amountreceived]").value;
                   
                      total = subtotal-discount1;
                         document.getElementById("booking[booking_balance]").value=total;
               }
     	                

                    
                    $(document).on('click', '#cancel', function(){
           $("input[type=text]").val(" ");
             $("input[type=file]").val(" ");
	});
     
</script>