<?php  require_once('includes/header.php');   
require_once('includes/sidebar.php'); 

   ?>
<link href="<?php echo base_url(); ?>css/morris.css" rel="stylesheet"> 
  <div class="page-content">
    <div class="content container">
      <div class="row">
        <div class="col-lg-12">
       
            
             
             <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Available Products</div>
              <div class="stats-body-alt">
                  &nbsp;&nbsp;&nbsp; <i class="fa  fa-shopping-cart"></i>&nbsp;&nbsp;<?php
                 $rs= $this->general_model->getproductscount();
                 echo $rs->p;
                 ?>
               
               </div> <div class="stats-footer">more info</div>
             
              </a> </div>     
            
            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Shop Amount</div>
              <div class="stats-body-alt">

                <div class="text-center"><span class="text-top">$</span><?php
                 $rs= $this->general_model->getamount();
                 echo $rs->p;
                 ?></div>
                </div>
              <div class="stats-footer">more info</div>
              </a> </div>
            
            
            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Pending Booking</div>
              <div class="stats-body-alt">
                  &nbsp;&nbsp;&nbsp; <i class="fa   fa-tasks"></i>&nbsp;&nbsp;<?php
                 $rs= $this->general_model->getbookingscount();
                 echo $rs->p;
                 ?>
               
               </div> <div class="stats-footer">more info</div>
             
              </a> </div>
            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Facebook Fans</div>
              <div class="stats-body-alt">
                  &nbsp;&nbsp;&nbsp; <i class="fa fa-facebook"></i>
                <span class="text-top"></span>    <?php
                  $url="https://www.facebook.com/Malik-Silk-Emporium-1707247112889505/?ref=aymt_homepage_panel";
               echo $this->general_model->getFacebookpagecount($url);?>
               </div> <div class="stats-footer">more info</div>
             
              </a> </div>
            <a href="<?php echo base_url(); ?>frontindex_controller/">View The Site</a>
        </div>
      </div>
      
   
<div id="morris">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Monthly Sale Report
                </header>
                <div class="panel-heading " style=" color:  white">
                    <div id="hero-bar" class="graph"></div>
                </div>
            </section>
        </div>
    </div>
</div>
  
        <div id="morris1">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Monthly Purchase Report
                </header>
                <div class="panel-heading " >
                    <div id="hero-bar1">
                     
                    
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
    </div>
  </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>js/morris.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>js/raphael-min.js"></script>
               
<?php  require_once('includes/footer.php');   
   ?>


<script>
$(document).ready(function () {
  
    $.getJSON("<?php echo base_url();?>Welcome/sale_graph", function (sale_data) {
        Morris.Bar({
            element: 'hero-bar',
            data: sale_data,
            xkey: 'MONTH',
            ykeys: ['amount'],
            labels: ['Rs'],
            barRatio: 0.4,
            xLabelAngle: 35,
            hideHover: 'auto',
            barColors: ['#3C1780']
        });
        
    });
});
</script>

<script>
$(document).ready(function () {
  
    $.getJSON("<?php echo base_url();?>Welcome/purchase_graph", function (purchase_data) {
        Morris.Bar({
            element: 'hero-bar1',
            data: purchase_data,
            xkey: 'MONTH',
            ykeys: ['amount'],
            labels: ['Rs'],
            barRatio: 0.4,
            xLabelAngle: 35,
            hideHover: 'auto',
            barColors: ['#3C1780']
        });
        
    });
});
</script>