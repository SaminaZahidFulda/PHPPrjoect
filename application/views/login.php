
<!DOCTYPE html>
<html>

<head>
<title>Thin Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>css/thin-admin.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>style/style.css" rel="stylesheet">



</head>
<body>
<div class="login-logo">
    
 </div>
    
    
<div class="widget">
   
<div class="login-content">
  <div class="widget-content" style="padding-bottom:0;">
      <form action="<?php echo base_url(); ?>Login/submitlogin" method="post" class="no-margin">
    
              <h3 class="form-title">Login to your account</h3>

                <fieldset>
                    <div class="form-group">
                        <label for="store">Store
                      </label>

                        <div class="input-group input-group-lg">
                            <select class="form-control required" id="store_id" name="store_id"  >
                             <option value="0">Select MSE Branch</option>
                              <?php foreach($store as $e){ 
                ?>
                            
                         <option value="<?php echo $e->storeId ; ?>"><?php echo $e->Store_branch; ?></option>
                                <?php } ?>
               
                        </select>  </div>

                    </div>
                     <div class="form-group">
                        <label for="store">User Type
                      </label>

                        <div class="input-group input-group-lg">
                            <select class="form-control required" id="user_type" name="user_type"  >
                             <option value="0">Select Type</option>
                           
                         <option value="Admin">Admin</option>
                          <option value="Sale Manager">Sale Manager</option>
                        <option value="Accountant">Accountant</option>
                       <option value="Social Media Handler">Social Media Handler</option>
                       
                           <option value="Booking Handler">Booking Handler</option>
                       
                           
                          
                        
               
                        </select>  </div>

                    </div>
                    <div class="form-group no-margin">
                        <label for="User name">User Name</label>

                        <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="icon-user"></i>
                                </span>
                            <input type="text" placeholder="Your Username" required class="form-control input-lg" name='user_username' id="user_username">
                        </div>

                    </div>
 
                    <div class="form-group">
                        <label for="password">Password</label>

                        <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                    <i class="icon-lock"></i>
                                </span>
                            <input type="password" placeholder="Your Password" required="" class="form-control input-lg" id="user_password" name ='user_password'>
                        </div>

                    </div>
                </fieldset>
               <div class="form-actions">
			
				<button class="btn btn-warning pull-right" type="submit" type="submit" id="login" name="login">
				Login <i class="m-icon-swapright m-icon-white"></i>
				</button>
                <div class="forgot"><a href="#" class="forgot">Forgot Username or Password?</a></div>
			</div>


            </form>


  </div>
   </div>
</div>































<script src="<?php echo base_url();?>js/jquery.js"></script>
<script src="<?php echo base_url();?>js/jquery-ui.js"></script>
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>js/smooth-sliding-menu.js"></script>
<script class="include" type="text/javascript" src="<?php echo base_url();?>javascript/jquery191.min.js"></script>
<script class="include" type="text/javascript" src="<?php echo base_url();?>javascript/jquery.jqplot.min.js"></script>
<script src="<?php echo base_url();?>assets/sparkline/jquery.sparkline.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/sparkline/jquery.customSelect.min.js" ></script>
<script src="<?php echo base_url();?>assets/sparkline/sparkline-chart.js"></script>
<!--<script src="<?php echo base_url();?>assets/sparkline/easy-pie-chart.js"></script>-->
<script src="<?php echo base_url();?>js/select-checkbox.js"></script>

<!--switcher html start-->
<!-- <div class="demo_changer active" style="right: 0px;">
    <div class="demo-icon"></div>
  <div class="form_holder">
    <div class="predefined_styles"> <a class="styleswitch" rel="a" href=""><img alt="" src="images/a.jpg"></a> <a class="styleswitch" rel="b" href=""><img alt="" src="images/b.jpg"></a> <a class="styleswitch" rel="c" href=""><img alt="" src="images/c.jpg"></a> <a class="styleswitch" rel="d" href=""><img alt="" src="images/d.jpg"></a> <a class="styleswitch" rel="e" href=""><img alt="" src="images/e.jpg"></a> <a class="styleswitch" rel="f" href=""><img alt="" src="images/f.jpg"></a> <a class="styleswitch" rel="g" href=""><img alt="" src="images/g.jpg"></a> <a class="styleswitch" rel="h" href=""><img alt="" src="images/h.jpg"></a> <a class="styleswitch" rel="i" href=""><img alt="" src="images/i.jpg"></a> <a class="styleswitch" rel="j" href=""><img alt="" src="images/j.jpg"></a> </div>
  </div>
</div> -->

<!--switcher html end-->
<div class="demo_changer active" style="right: 0px;">
                <div class="demo-icon"></div>
                <div class="form_holder">


                    <div class="predefined_styles">
                        <a class="styleswitch" rel="a" href="#"><img alt="" src="<?php echo base_url();?>images/a.jpg"></a>
                        <a class="styleswitch" rel="b" href="#"><img alt="" src="<?php echo base_url();?>images/b.jpg"></a>
                        <a class="styleswitch" rel="c" href="#"><img alt="" src="<?php echo base_url();?>images/c.jpg"></a>
                        <a class="styleswitch" rel="d" href="#"><img alt="" src="<?php echo base_url();?>images/d.jpg"></a>
                        <a class="styleswitch" rel="e" href="#"><img alt="" src="<?php echo base_url();?>images/e.jpg"></a>
                        <a class="styleswitch" rel="f" href="#"><img alt="" src="<?php echo base_url();?>images/f.jpg"></a>
                        <a class="styleswitch" rel="g" href="#"><img alt="" src="<?php echo base_url();?>images/g.jpg"></a>
                        <a class="styleswitch" rel="h" href="#"><img alt="" src="<?php echo base_url();?>images/h.jpg"></a>
                        <a class="styleswitch" rel="i" href="#"><img alt="" src="<?php echo base_url();?>images/i.jpg"></a>
                        <a class="styleswitch" rel="j" href="#"><img alt="" src="<?php echo base_url();?>images/j.jpg"></a>
                    </div>

                </div>
            </div>
<script src="<?php echo base_url();?>assets/switcher/switcher.js"></script>
<script src="<?php echo base_url();?>assets/switcher/moderziner.custom.js"></script>
<link href="<?php echo base_url();?>assets/switcher/switcher.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/switcher/switcher-defult.css" rel="stylesheet">
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/switcher/a.css" title="a" media="all" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/switcher/b.css" title="b" media="all" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/switcher/c.css" title="c" media="all" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/switcher/d.css" title="d" media="all" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/switcher/e.css" title="e" media="all" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/switcher/f.css" title="f" media="all" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/switcher/g.css" title="g" media="all" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/switcher/h.css" title="h" media="all" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/switcher/i.css" title="i" media="all" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets/switcher/j.css" title="j" media="all" />

</body>

</html>
