<?php   
  require_once('includes/header.php');   
require_once('includes/sidebar.php');   
//echo '<pre>';
                 //   print_r($embdetail);
                 //   exit;
  ?>
      <link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>font-awesome-4.0.3/css/font-awesome.min.css" rel="stylesheet" media="screen">
 
   <div class="page-content">
    <div class="content container">
     
                <div class="row">
                     <div class="col-md-12">
          <ol style="margin-bottom: 5px;" class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>welcome/">Home</a></li>
                <li><a href="#">Issue Material</a></li>
                <li class="active">Detail</li>
              </ol>
        </div>

        <div class="col-lg-12">
         
 
<div class="widget-content">
              <div class="tabbable tabs-right">
                <ul class="nav nav-tabs" id="myTabright">
                    <li class="active"><a data-toggle="tab" href="#home-right"<i class="icon-large fa   fa-chain "></i><b class="text">&nbsp; &nbsp;Embriodary Detail</b></a></li>
                  <li ><a data-toggle="tab" href="#profile-right" <i class="icon-large fa fa-exchange"></i> <b>Payment Detail</b></a></li>
                  
                </ul>
                <div class="tab-content" id="myTabContentright">
                  <div id="home-right" class="tab-pane fade in active">
     
        <div class="widget widget-table action-table">
      
           
<div class="widget-content">
            <table class="table">
            <br />
                <thead>
                  <tr>
                      <th ><b>Worker Name</b> &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                 &nbsp;   &nbsp;   &nbsp;  
        <?php echo $embdetail1->worker_name; ?></th>
                
                  </tr>
                </thead>
                <tbody>
                     <tr>
                         <th class="text"><b>Category Material</b>&nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                <?php echo $embdetail1->category_name; ?></th>
                   
                  </tr>
                  <tr>
                      <td><b>Total Yard</b> &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                 &nbsp;   &nbsp;   &nbsp;  &nbsp;   &nbsp;   &nbsp; <?php echo $embdetail1->embriodary_yard; ?></td>
                    <td></td>
                     <td></td>
                    <td></td>
                  </tr>
                  <tr>
                      <td><b>Cloth Cost</b> &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                 &nbsp;   &nbsp;   &nbsp;  &nbsp;    <?php echo $embdetail1->embriodary_categoryprice; ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                      <td><b>Color</b>&nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                 &nbsp;   &nbsp;   &nbsp;&nbsp;   &nbsp;&nbsp;   &nbsp;   &nbsp;&nbsp;  &nbsp;  <?php echo $embdetail1->colorname; ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    
                      <td><b>Color Cost</b>&nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                 &nbsp;   &nbsp;   &nbsp;&nbsp;   &nbsp; <?php echo $embdetail1->embriodary_colourprice; ?></td><td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><b>Description</b>&nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                 &nbsp;   &nbsp;   &nbsp;&nbsp;   &nbsp; <?php echo $embdetail1->embriodary_description; ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                 
                  <tr>
                      <td><b>Issue Date</b>&nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                 &nbsp;   &nbsp;   &nbsp;&nbsp;   &nbsp; <?php echo $embdetail1->embriodary_dateAdded; ?></td>
                    <td></td>
                    <td></td>
                    <td> </td>
                  </tr>
                   <tr>
                      <td>  &nbsp;   &nbsp;   &nbsp;</td>
                    <td></td>
                    <td></td>
                    <td> </td>
                  </tr>
                </tbody>
              </table>
            </div>            
          
          </div>
     
        
        
        
        
        
        
        
        
        
        
        
        
        
        
          </div>
                  
                  <div id="profile-right" class="tab-pane fade ">
                 
           
            
         <div class="widget-content">
              <table class="table">
                <thead>
                  <tr>
                     <th>Payable&nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                 &nbsp;   &nbsp;   &nbsp;&nbsp;   &nbsp; <?php echo $embdetail1->embriodary_payable; ?></th>
                    <th></th>
                    <th></th>
                    <th> </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td ><b><font size="+1" >Payment</font></b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <?php 
                    $lastkey= end(array_keys($embdetail));
                    echo $lastkey;
                    
                    foreach ($embdetail as $key=> $e){ ?>
                  <tr>
                    <td><?php echo $e->embriodary_typepaid; ?>&nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                 &nbsp;   &nbsp;   &nbsp;&nbsp;   &nbsp; <?php echo $e->embriodary_pay; ?></td>
                    <td></td>
                    <td></td>
                    <td> </td>
                  </tr>
                 
                  <tr>
                    <td>Balance&nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                 &nbsp;   &nbsp;   &nbsp;&nbsp;   &nbsp; <?php echo $e->embriodary_balance; ?></td>
                    <td></td>
                    <td></td>
                    <?php if($key==$lastkey){ 
                            
                        ?>
                    <input type="hidden" name="bal1" id="bal1" value="<?php echo ($e->embriodary_balance==0.00)?'':$e->embriodary_balance; ?>" />
  <input type="hidden" name="embriodary_balance1" id="embriodary_balance1" value="<?php echo $e->embriodary_balance; ?> " />
 <?php } ?>
                     
            
                  </tr> <?php } ?>
                  
                  
                 <form action="<?php echo base_url(); ?>Embriodary_controller/addpayment" method="post" class="form-horizontal row-border" name ="embriodary"/>
  
                  
                  <tr>
       
         
          <td id="myDiv">
          <div class="col-md-3"> 
          Payment Type <select class="form-control" id="e[embriodary_typepaid]" name="e[embriodary_typepaid]" >
               
              <option value="Cash"> Cash</option>
              <option value="Checque">Checque </option>
  
     
                  
                   </select>
       </div>
<input type="hidden" name="e[embriodary_id]" id="e[embriodary_id]" value="<?php echo $embdetail1->embriodary_id; ?> " />

       <div class="col-md-3">
           Amount Paid <input type="integer" id="embriodary_pay" name="e[embriodary_pay]" onkeyup="calculate()" class="form-control"  /></div>
        
        <div class="col-md-3">
            Balance <input type="text" name="e[embriodary_balance]" id="embriodary_balance" class="form-control " value="" />
</div>
              <input type="hidden" name="e[payment_dateAdded]" id="payment_dateAdded"  value="<?php echo date('Y-m-d H:i:s'); ?> " />
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
                 &nbsp;&nbsp;&nbsp;&nbsp; <button class="btn btn-s-md btn-primary btn-small" type="submit" id="paid" name="paid" value="paid">Paid</button>
                   
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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 </div></div></div></div>
   
   
   
   
   
   
   
   
   
   
   
   
   
<?php require_once('includes/footer.php');?>
  <script>
      
        $(document).ready(function(){
     var condition = document.getElementById("bal1").value;
    // alert(condition);

  if ($("#bal1").val() =='') {
        $('#myDiv').hide();
} 
   }); 
      
      
       function  calculate(){
         
                 var total = 0;
                   
                     var bal= document.getElementById("embriodary_balance1").value;
                      var paid= document.getElementById("embriodary_pay").value;
                      
                      total = bal-paid;
                         document.getElementById("embriodary_balance").value=total;
               }
           
      </script>