<?php   
  require_once('includes/header.php');   
require_once('includes/sidebar.php');   
  ?>
  <link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>font-awesome-4.0.3/css/font-awesome.min.css" rel="stylesheet" media="screen">
 
   <div class="page-content">
    <div class="content container">
     
                <div class="row">
                      <div class="col-md-12">
          <ol style="margin-bottom: 5px;" class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Purchase</a></li>
                <li class="active">Detail</li>
              </ol>
        </div>
        <div class="col-lg-12">
       <div class="widget">
            <div class="widget-header"><i class="icon-large fa fa-clipboard"></i>
              <h3 class="left">Purchases </h3>    
  <h3 class="right">

              
            </div>

 
<div class="widget-content">
              <div class="tabbable tabs-right">
                <ul class="nav nav-tabs" id="myTabright">
                  <li class="active"><a data-toggle="tab" href="#home-right"<i class="icon-large  fa fa-chain "><b> Material</b></a></li>
                  <li ><a data-toggle="tab" href="#profile-right" <i class="icon-large fa fa-usd "></i> <b>Payment</b></a></li>
                  
                </ul>
                <div class="tab-content" id="myTabContentright">
                  <div id="home-right" class="tab-pane fade in active">
        <br><br>
        <div class="widget widget-table action-table">
      
           
<div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><i class="icon-large icon-list-ol"></i> </th>
                    <th> <i class="icon-large fa  fa-asterisk"> </i> Category</th>
                    <th> <i class="icon-large fa fa-adjust"> </i>  Color</th>
                     <th> <i class="icon-large fa fa-inr"></i> Cost Price</th>
                      <th> <i class="icon-large icon-money"></i> Sale Price</th>
                       <th> <i class="icon-large fa fa-calendar-o"></i> Quantity</th>
                        <th> <i class="icon-large icon-money"></i>  Total Amount</th>
                       <th> <i class="icon-large icon-calendar"></i> Date</th>
                   
                  </tr>
                </thead>
                <tbody>
                     <?php foreach($detail as $p){ ?>
                  <tr>
                    <td> 1 </td>
                    <td><?php echo $p->category_name; ?></td>
                    <td><?php echo $p->ColorName; ?></td>
                    <td><?php echo $p->fDpurchase_unitprice; ?></td>
                     <td><?php echo $p->fDpurchase_saleprice; ?></td>
                    <td> <?php echo $p->fDpurchase_quantity; ?></td>
                     <td><?php echo $p->totalprice; ?></td>
                     <td><?php echo $p->fDpurchase_dateAdded; ?></td>
                  </tr>
                  
                     <?php } ?>
                 
                </tbody>
              </table>
            </div>            
          
          </div>
     
        
        
        
        
        
        
        
        
        
        
        
        
        
        
          </div>
                  
                  <div id="profile-right" class="tab-pane fade ">
                 
                <br>                  
<div class="widget-content">
             <form action="<?php echo base_url(); ?>purchaseController/detailpurchase" method="post" id="form11">
   
<div class="col-lg-12">
              <div class="table-responsive" style="overflow-x:auto">
                <table class="table">
          
                    <tbody class="selects">
                      <tr>
                         
                          <td>Sub Total  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $purchase1->fpurchase_subtotal; ?></td>
                       
                        
                       
                      </tr>
                      <tr>
                        <td>Discount &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $purchase1->fpurchase_discount; ?></td>
                        
                      </tr>
                      <tr>
                        <td>Net Total &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $purchase1->fpurchase_netTotal; ?></td>
                       
                      </tr>
                      <tr >
                        <td><b>Payment</b></td>
                               
                      </tr>
                    
                    <?php 
                    $lastkey= end(array_keys($purchase));
                   
                    foreach ($purchase as $key=> $p){ ?>
                     <tr  >
                        <td>    <?php echo $p->fDpurchase_typepaid;?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $p->fpurchase_pay; ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $p->fpurchase_dateAdded; ?></td>
                    
                      </tr>
 
                     
                      <tr >
                        
                        <td >Balance&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $p->fpurchase_balance; ?>
                        <?php if($key==$lastkey){ 
                            
                        ?>
                            <input type="hidden" name="bal" id="bal" value="<?php echo ($p->fpurchase_balance==0.00)?'':$p->fpurchase_balance; ?>" />

                                                <input type="hidden" name="fpurchase_balance1" id="fpurchase_balance1" value="<?php echo $p->fpurchase_balance; ?> " />
 <?php } ?>
                        </td>
                   
                      </tr>    
              
                    <?php } ?>
              
<input type="hidden" name="fp[purchase_id]" id="fp[purchase_id]" value="<?php echo $purchase1->fpurchase_id; ?> " />

                      
                      <tr>
       
         
          <td id="myDiv" >
          <div class="col-md-3 my1" > 
          Payment Type <select class="form-control" id="fp[fDpurchase_typepaid]" name=" fp[fDpurchase_typepaid]" >
               
              <option value="Cash"> Cash</option>
              <option value="Checque">Checque </option>
  
     
                  
                   </select>
       </div>
       <div class="col-md-3">
           Amount Paid <input type="integer" id="fpurchase_pay" name="fp[fpurchase_pay]" onkeyup="calculate()" class="form-control"  /></div>
        
              <div class="col-md-3 " id="fpurchase_balance">
            Balance <input type="text" name="fp[fpurchase_balance]" id="fpurchase_balance" class="form-control" value="" />
</div>
              <input type="hidden" name="fp[fpurchase_dateAdded]" id="fp[fpurchase_dateAdded]"  value="<?php echo date('Y-m-d H:i:s'); ?> " />
  <br />
           <div class="input-group">
         
          <button class ="btn btn-small btn-success" id="add_image" ><i class="btn-icon-only icon-ok"> </i></button>
          <button class ="btn btn-danger btn-small" id="delete_image"><i class="btn-icon-only icon-remove"> </i></button>
              
              </div>    
          </td>
          <td></td>
          <td></td>
             <td></td>
          </tr>
                    </tbody>

             
               
                </table>
               
        <div class="doc-buttons"> 
                  <button class="btn btn-s-md btn-primary" type="submit" id="paid" name="paid" value="paid">Paid</button>
                   
               </div>     
              </div>


            </div>
             </form>
          </div>
        </div>
      </div>
                
            
            </div>            
          
          
        
                
            </div>
                          
               
                </div>
              </div>
            </div> 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 </div></div> </div></div>
   
   
   
   
   
   
   
   
   
   
   
   
   
<?php require_once('includes/footer.php');?>
  <script>
      
        $(document).ready(function(){
        
    
     if ($("#bal").val() =='') {
        $('#myDiv').hide();
} 
   });         
          
       function  calculate(){
         
                 var total = 0;
                   
                     var bal= document.getElementById("fpurchase_balance1").value;
                      var paid= document.getElementById("fpurchase_pay").value;
                      
                      total = bal-paid;
                         document.getElementById("fpurchase_balance").value=total;
               }
               
           
      </script>