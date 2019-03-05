<?php   
  require_once('includes/header.php');   
require_once('includes/sidebar.php');   
  ?>
   
   <div class="page-content">
    <div class="content container">
<div class="col-lg-12">
    <div class="col-md-12">
          <ol style="margin-bottom: 5px;" class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>welcome/">Home</a></li>
                <li><a href="#">Petty Cash</a></li>
                <li class="active">List</li>
              </ol>
        </div>
      </div><div id="alert">
            <?php echo $this->session->flashdata('verify'); ?>
        </div>
          <div class="widget">
            <div class="widget-header"><i class="icon-large icon-picture"></i>
              <h3 class="left">Petty Cash </h3>    

 
 <h3 class="right">
             &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                 &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                    &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                       &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                          &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
                             &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;
      <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus-square"></i> <b>Receive</b>
  </button>
           
            <div class="modal fade" id="myModal" role="dialog">
                   <div class="modal-dialog">
   
     
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">x</button>
          <h4 class="modal-title">  Cash Receive</h4>
        </div>
       <form action="<?php echo base_url(); ?>PettyCash_controller/Add"  method="post" id="form1">
 
        
       <div class="modal-body">
        
            
          
       <div class="table-responsive">
               <table class="table">
    <thead>
      
    </thead>
    <tbody>
    <tr>
        <td> 
         <div class="col-lg-4">
                        <label for="amount">Amount</label>
                               
    <input type="integer"  placeholder="Amount" class="form-control" id="petty_cash_amount" name="petty_cash_amount">
                        </div>

                   </td>
       
       
      </tr>
<tr>
        <td> 
         <div class="col-lg-9">
                        <label for="Detail">Detail</label>
                               
    <input type="detail" class="form-control" id="petty_cash_naration" name="petty_cash_naration">
                        </div>

                   </td>
        
      </tr>      
      <input type="hidden" name="store_id" id="store_id" value="<?php echo $this->session->userdata('store_id'); ?> " />

   
    </tbody>
  </table>
  
        

</div>
		 
       </div>
        <div class="modal-footer">
           <input type="hidden" name="created_at" id="created_at" value="<?php echo date('Y-m-d H:i:s'); ?> " />
 
          <button type="submit" class="btn btn-success btn-sm " >Recieved</button>
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
        </div></form>
      </div>
      </div>
            </div>
   <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#pay"> <i class="fa fa-plus-square"></i> <b>Pay</b>
  </button>
   
   <div class="modal fade" id="pay" role="dialog">
                   <div class="modal-dialog">
   
     
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">x</button>
          <h4 class="modal-title">Payment</h4>
        </div>
       
        <form action="<?php echo base_url(); ?>PettyCash_controller/AddPay"  method="post" id="form1">
 
       <div class="modal-body">
        
            
          
       <div class="table-responsive">
               <table class="table">
    <thead>
      
    </thead>
    <tbody>
    <tr>
        <td> 
         <div class="col-lg-6">
              <label for="amount">Type</label>
               <select class="form-control required" id="petty_cash_typeid" name="petty_cash_typeid" >  
                     <?php  foreach($Type as $row) {   ?>
                        
                  <option value="<?php echo $row->petty_cash_type; ?>"><?php echo $row->petty_cash_type; ?></option>
                     <?php  }   ?>
                        
                  </select>       
               </div>

                   </td>
     </tr>
     <input type="hidden" name="store_id" id="store_id" value="<?php echo $this->session->userdata('store_id'); ?> " />

    <tr>
        <td> 
         <div class="col-lg-6">
                        <label for="amount">Amount</label>
                       <input type="hidden" name="created_at" id="created_at" value="<?php echo date('Y-m-d H:i:s'); ?> " />
         
    <input type="integer"  placeholder="Amount"class="form-control" id="petty_cash_amount" name="petty_cash_amount">
                        </div>

                   </td>
      </tr>
<tr>
        <td> 
         <div class="col-lg-9">
                        <label for="Detail">Detail</label>
                               
    <input type="detail" class="form-control" id="petty_cash_naration" name="petty_cash_naration">
                        </div>

                   </td>
      </tr>      
      
   
    </tbody>
  </table>
  
     

</div>
		 
        </div>
        <div class="modal-footer">
         <div class="col-lg-9">
                </div>
          <button type="submit" class="btn btn-success btn-sm " >Pay</button>
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
        </div></form>
      </div>
      </div>
   </div>
   </h3>
   </div>
            <div class="widget-content"> 
            
<div class="widget widget-table action-table">
            
           
<div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><i class="icon-large icon-list-ol"></i> </th>
                    <th> <i class="icon-large  icon-indent-right"></i>  Type</th>
                      <th> <i class="icon-large  icon-gift"></i> Detail</th>
                    <th> <i class="icon-large icon-money"></i> Amount</th>
                    <th> <i class="icon-large icon-calendar"></i> Balance</th>
                       <th> <i class="icon-large icon-calendar"></i> Date</th>
                     <th> <i class="icon-large icon-pencil"></i>Actions</th>
                   
                  </tr>
                </thead>
                <tbody>
                          <?php   
 if(empty($cash)){
     ?>
                           <tr>
                         <td>   </td><td></td><td></td><td><?php  echo "No record found";?></td><td></td><td></td></tr>
                   
      <?php 
      }?> 
     <?php
        $balance= 0;
$count=1;
foreach($cash As $c){
 
    $amount =  (int)($c->petty_cash_amount);
       $balance =$balance + $amount;
     
  ?>
                  <tr>
                    <td> <?php  echo $count;?> </td>
                    <td><?php  echo $c->petty_cash_typeid;?></td>
                    <td><?php  echo $c->petty_cash_naration;?></td>
                    <td><?php  echo $c->petty_cash_amount;?></td>
                    <td><?php  echo $balance;?></td>
                     <td><?php  echo $c->created_at;?></td>
                   <td class="td-actions">
             <a class="btn btn-danger btn-small" href="<?php echo base_url(); ?>PettyCash_controller/delete/<?php echo $c->petty_cash_id;?>"><i class="btn-icon-only icon-remove-sign"> </i></a>
             </td>
                  </tr>
                          <?php
$count++;
}
?>
                </tbody>
              </table>
            </div>            
          
          </div>          
       
     

</div></div></div>












<?php require_once('includes/footer.php');?>


</div></div>
