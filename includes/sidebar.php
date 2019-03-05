
<div class="wrapper">
  <div class="left-nav ">
    <div id="side-nav">
      <ul id="nav">
        <li class="current"> <a href="<?php echo base_url(); ?>welcome/"> <i class="icon-dashboard"></i> Dashboard </a> </li>
        
        <?php if($this->session->userdata('user_type')!='Sale Manager' && $this->session->userdata('user_type')!='Accountant' &&
                $this->session->userdata('user_type')!='Social Media Handler' && $this->session->userdata('user_type')!='Booking Handler'){ ?>
        <li> <a href="#"> <i <i class="icon-cog"></i>Setup <span class="label label-info pull-right">3</span> <i class="arrow icon-angle-left"></i></a>
          <ul class="sub-menu">
            <li> <a href="<?php echo base_url(); ?>Store_controller/"> <i class="icon-angle-right"></i> Store Setting </a> </li>
             <li> <a href="<?php echo base_url(); ?>banner_controller/"> <i class="icon-angle-right"></i> Banners </a> </li>
           
            <li> <a href="#"> <i class="icon-angle-right"></i> Categories </a> </li>
            
            <li> <a href="#"> <i class="icon-angle-right"></i> Colors </a> </li>
            
          </ul>
        </li>
        <li> <a href="#"> <i <i class="fa fa-usd"></i>Daily Expense <span class="label label-info pull-right">2</span> <i class="arrow icon-angle-left"></i></a>
          <ul class="sub-menu">
             <li> <a href="<?php echo base_url(); ?>PettyCash_controller/"> <i class="icon-angle-right"></i> Petty Cash</a> </li>
             <li> <a href="<?php echo base_url(); ?>PettyCashType_controller/"> <i class="icon-angle-right"></i> Petty Cash Type</a> </li>
            
          </ul>
        </li><li> <a href="#"> <i class="icon-user"></i>Personnal <span class="label label-info pull-right">4</span> <i class="arrow icon-angle-left"></i></a>
          <ul class="sub-menu">
              <li> <a href="<?php echo base_url(); ?>myfirst/"> <i class="icon-angle-right"></i> Available Personnal </a> </li >
            <li> <a href="<?php echo base_url(); ?>Supplier_controller/"> <i class="icon-angle-right"></i> Suppliers </a> </li>
             <li> <a href="<?php echo base_url(); ?>Worker_controller/"> <i class="icon-angle-right"></i> Worker </a> </li>
             <li> <a href="<?php echo base_url(); ?>Employee_controller/"> <i class="icon-angle-right"></i> Employees </a> </li>
            
            
          </ul>
        </li>
         <li> <a href="#"> <i class="icon-shopping-cart"></i>Purchases <span class="label label-info pull-right">1</span> <i class="arrow icon-angle-left"></i></a>
          <ul class="sub-menu">
            <li> <a href="<?php echo base_url(); ?>purchaseController/"> <i class="icon-angle-right"></i> Add Purchases </a> </li>
            
          </ul>
        </li>
        <li> <a href="#"> <i class=" icon-book"></i>Booking Material <span class="label label-info pull-right">2</span> <i class="arrow icon-angle-left"></i></a>
          <ul class="sub-menu">
            <li> <a href="<?php echo base_url(); ?>Embriodary_controller/"> <i class="icon-angle-right"></i> Embriodary </a> </li>
            <li> <a href="<?php echo base_url(); ?>EmbriodaryBooking_controller/"> <i class="icon-angle-right"></i> Add Booking </a> </li>
            
          </ul>
        </li>
      <li> <a href="#"> <i class="fa fa-facebook-square"></i>Social Media <span class="label label-info pull-right">1</span> <i class="arrow icon-angle-left"></i></a>
          <ul class="sub-menu">
            <li> <a href="<?php echo base_url(); ?>SocialMedia_controller/"> <i class="icon-angle-right"></i> Upload Post  </a> </li>
            
          </ul>
        </li>
        
        
      
        <?php //if($this->session->userdata('user_type')=='Sale Manager'){ ?>
         <li> <a href="#"> <i class="fa fa-briefcase"></i>Sale <span class="label label-info pull-right">1</span> <i class="arrow icon-angle-left"></i></a>
          <ul class="sub-menu">
            <li> <a href="<?php echo base_url(); ?>Sale_controller/"> <i class="icon-angle-right"></i> Add Sale </a> </li>
            
          </ul>
        </li><?php// } ?>
          <?php }?>
        
        <?php if($this->session->userdata('user_type')=='Admin'){ ?>
        <li> <a href="#"> <i class="fa  fa-sitemap"></i>Manage Products <span class="label label-info pull-right">1</span> <i class="arrow icon-angle-left"></i></a>
          <ul class="sub-menu">
            <li> <a href="<?php echo base_url(); ?>Product_controller/"> <i class="icon-angle-right"></i> Products </a> </li>
            
          </ul>
        </li> <?php } ?>
        <li> <a href="#"> <i class="fa  fa-picture-o"></i>Gallery<span class="label label-info pull-right">1</span> <i class="arrow icon-angle-left"></i></a>
          <ul class="sub-menu">
            <li> <a href="<?php echo base_url(); ?>Product_controller/showgallery"> <i class="icon-angle-right"></i> View Products </a> </li>
           
          </ul>
        </li>
        <?php if($this->session->userdata('user_type')=='Sale Manager'){ ?>
         <li> <a href="#"> <i class="fa fa-briefcase"></i>Sale <span class="label label-info pull-right">1</span> <i class="arrow icon-angle-left"></i></a>
          <ul class="sub-menu">
            <li> <a href="<?php echo base_url(); ?>Sale_controller/"> <i class="icon-angle-right"></i> Add Sale </a> </li>
            
          </ul>
        </li><?php } ?>
         <?php if($this->session->userdata('user_type')=='Social Media Handler'){ ?>
         <li> <a href="#"> <i class="fa fa-facebook-square"></i>Social Media <span class="label label-info pull-right">1</span> <i class="arrow icon-angle-left"></i></a>
          <ul class="sub-menu">
            <li> <a href="<?php echo base_url(); ?>SocialMedia_controller/"> <i class="icon-angle-right"></i> Upload Post  </a> </li>
            
          </ul>
        </li><?php } ?> <?php if($this->session->userdata('user_type')=='Accountant'){ ?>
         <li> <a href="#"> <i <i class="fa fa-usd"></i>Daily Expense <span class="label label-info pull-right">2</span> <i class="arrow icon-angle-left"></i></a>
          <ul class="sub-menu">
             <li> <a href="<?php echo base_url(); ?>PettyCash_controller/"> <i class="icon-angle-right"></i> Petty Cash</a> </li>
             <li> <a href="<?php echo base_url(); ?>PettyCashType_controller/"> <i class="icon-angle-right"></i> Petty Cash Type</a> </li>
            
          </ul>
        </li><?php } ?>
      </ul>
    </div>
  </div>