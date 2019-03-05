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
                <li><a href="#">Sale</a></li>
                <li class="active">Detail</li>
              </ol>
        </div>
            <div class="widget-content">
              <div class="tabbable tabs-right">
                <ul class="nav nav-tabs" id="myTabright">
                  <li class="active"><a data-toggle="tab" href="#home-right"><i class="icon-large icon-money"></i><b> Sale</b></a></li>
                  <li><a data-toggle="tab" href="#profile-right"><i class="icon-large fa fa-gift"></i> <b>Item</b></a></li>
                  
                </ul>
                <div class="tab-content" id="myTabContentright">
                  <div id="home-right" class="tab-pane fade in active">
                 
              <table class="table">
                <thead>
                <br> <br>
                  <tr>
                      <th>Sub Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $item[0]->sale_amount;  ?></th>
                    <th></th>
                    <th> </th>
                    <th> </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Discount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $item[0]->sale_discount;  ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Net Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $item[0]->recieved_amount;  ?></td>
                    <td></td>
                    <td></td>
                    <td> </td>
                  </tr>
                  
                  
                 
                  
                </tbody>
              </table>
             
          
                  </div>
                  <div id="profile-right" class="tab-pane fade ">
                 
             <br>
              <table class="table">
                <thead>
                  <tr>
                    <th><i class="icon-large icon-list-ol"></i> </th>
                    <th><i class="icon-large icon-file"></i>  Item Name</th>
                    <th><i class="icon-large icon-file"></i>Image</h3></th>
                    
                    <th> <i class="icon-large icon-money"></i>Unit Price</th>
                    <th> <i class="icon-large icon-tag"></i> Quantity</th>
                    <th><i class="icon-large icon-money"></i> Price</th>
                   
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                                    $count = 1;
                                    foreach ($item As $e) {
                                        ?>
                                        
                  <tr>
                       <td>1</td>
                    <td><?php echo $e->product_itemname;  ?></td>
                    <td> <img src="<?php echo base_url(); ?>uploads/products/<?php echo $e->product_image; ?>" width="100" height="100"></td>
                    <td><?php echo $e->item_unit_price;  ?></td>
                    <td><?php echo $e->item_quantity;  ?></td>
                     <td><?php echo $e->item_total_price;  ?></td>
                    
                    
            
                  </tr>    <?php
                                   }  ?>
                  
                
                  
                  
                </tbody>
              </table>
             
            
          
                  </div>
                  
                </div>
              </div>
            </div>
          </div>



<?php require_once('includes/footer.php');?>
        </div>
      </div>
    
 

















