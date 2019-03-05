<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="en" class="no-js">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">``
        <![endif]-->
        <title>Effect, premium HTML5&AMP;CSS3 template</title>
        <meta name="description" content="Effect, premium HTML5&amp;CSS3 template">
        <meta name="author" content="MosaicDesign">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>frontend/css/theme-style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>frontend/css/ie.style.css">
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->
        <!--[if IE 7]>
          <link rel="stylesheet" href="css/font-awesome-ie7.css">
        <![endif]-->
        <script src="<?php echo base_url(); ?>frontend/js/vendor/modernizr.js"></script>
        <!--[if IE 8]><script src="js/vendor/less-1.3.3.js"></script><![endif]-->
        <!--[if gt IE 8]><!--><script src="<?php echo base_url(); ?>frontend/js/vendor/less.js"></script><!--<![endif]-->

    </head>
    <body>
        <!-- Header-->
        <header id="header">
            <div class="header-top-row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="top-welcome hidden-xs hidden-sm">
                                <p>Welcome Effect Template &nbsp;&nbsp;<i class="fa fa-phone"></i> 707-505-8008 &nbsp; <i class="fa fa-envelope"></i> support@gmail.com</p> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="pull-right">
                                <!-- header - language -->
                                <div id="lang" class="pull-right">
                                    <a href="#" class="lang-title"><img src="<?php echo base_url(); ?>frontend/img/f-gb.png" alt="English" title="English"> English <i class="fa fa-angle-down"></i> </a>
                                    <ul class="list-unstyled lang-item">
                                        <li class="active"><a href=""><img src="<?php echo base_url(); ?>frontend/img/f-gb.png" alt="English" title="English"> Spanish</a></li>
                                        <li><a href=""><img src="<?php echo base_url(); ?>frontend/img/f-fr.png" alt="French" title="French"> French</a></li>
                                    </ul>
                                </div>
                                <!-- /header - language -->

                                <!-- header - currency -->
                                <div id="currency" class="pull-right">
                                    <a href="" class="currency-title">$ USD <i class="fa fa-angle-down"></i> </a>
                                    <ul class="list-unstyled currency-item">
                                        <li><a href="">€ EURO</a></li>
                                        <li><a href="">£ POUND</a></li>
                                    </ul>
                                </div>
                                <!-- /header - currency -->

                                <!-- header-account menu -->
                                <div id="account-menu" class="pull-right">
                                    <a href="" class="account-menu-title"><i class="fa fa-user"></i>&nbsp; Account <i class="fa fa-angle-down"></i> </a>
                                    <ul class="list-unstyled account-menu-item">
                                        <li><a href=""><i class="fa fa-heart"></i>&nbsp; Wishlist</a></li>
                                        <li><a href=""><i class="fa fa-check"></i>&nbsp; Checkout</a></li>
                                        <li><a href=""><i class="fa fa-shopping-cart"></i>&nbsp; Cart</a></li>
                                    </ul>
                                </div>
                                <!-- /header-account menu -->

                                <!-- header - currency -->
                                <div class="socials-block pull-right">
                                    <ul class="list-unstyled list-inline">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /header - currency -->
                            </div>

                        </div>
                    </div>




                </div>
            </div>
            <!-- /header-top-row -->
            <div class="header-bg">
                <div class="header-main" id="header-main-fixed">
                    <div class="header-main-block1">
                        <div class="container">
                            <div id="container-fixed">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="index.html" class="header-logo"> <img src="<?php echo base_url(); ?>frontend/img/logo-big-shop.jpg
                                                                                       " alt=""></a>        
                                    </div>
                                    <div class="col-md-5">
                                        <div class="top-search-form pull-left">
                                            <form action="#" method="post">
                                                <input type="text" placeholder="Search ..." class="form-control">
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                            </form>  
                                        </div>        
                                    </div>
                                    <div class="col-md-4">
                                        <div class="header-mini-cart  pull-right">
                                            <a href="#"  data-toggle="dropdown">
                                                Shopping cart
                                                <span><?php echo $this->cart->total_items();?> item(s)-<?php echo $this->cart->total();?></span>
                                            </a>
                                            <div class="dropdown-menu shopping-cart-content pull-right">
                                                <div class="shopping-cart-items">
                                                   
                                                      <?php foreach ($this->cart->contents() as $val){ ?>
  
                                                    <div class="item pull-left">
                                                        <img src="<?php echo base_url(); ?>uploads/products/<?php echo $val['options']['image']; ?>" alt="Product Name" class="pull-left">
                                                        <div class="pull-left">
                                                            <p><?php echo $val['name'];?></p>
                                                            <p><?php echo $val['price'];?>&nbsp;<strong>x <?php echo $val['qty'];?></strong></p>
                                                        </div>
                                                        <a href="<?php echo base_url().'ListProducts_controller/deleteItemCart/'.$val['rowid'] ?>" class="trash"><i class="fa fa-trash-o pull-left"></i></a>
                                                    </div>
                                                      <?php } ?>
                                                   <div class="total pull-left">
                                                        <table>
                                                            <tbody class="pull-right">
                                                                <tr>
                                                                    <td><b>Sub-Total:</b></td>
                                                                    <td><?php echo $this->cart->total();?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Tax :</b></td>
                                                                    <td>700.00</td>
                                                                </tr>
                                                               
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr><?php $id= $this->cart->total();
                                                                $total=$id-700;
                                                                ?>
                                                                <tr class="color-active">
                                                                    <td><b>Total:</b></td>
                                                                    <td><b><?php echo $total; ?></b></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <a href="#" class="btn-read pull-right">Checkout</a>
                                                        <a href="<?php echo base_url().'ListProducts_controller/Viewcart' ?>" class="btn-read pull-right">View Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /header-mini-cart -->
                                        <div class="top-icons">
                                            <div class="top-icon"><a href="" title="Wishlist"><i class="fa fa-heart"></i></a></div>
                                            <div class="top-icon"><a href="" title="Notification"><i class="fa fa-bell"></i></a><span>12</span></div>
                                            <div class="top-icon"><a href="" title="Login"><i class="fa fa-lock"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="header-main-block2">
                        <nav class="navbar yamm  navbar-main" role="navigation">

                            <div class="container">
                                <div class="navbar-header">
                                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                    <a href="index.html" class="navbar-brand"><i class="fa fa-home"></i></a>
                                </div>
                               
                                                <div id="navbar-collapse-1" class="navbar-collapse collapse ">
                                    <ul class="nav navbar-nav"><li>
                                                    <a  href="<?php echo base_url().'FrontIndex_controller/' ?>"> Home </a>
                                                </li> 
                                 <?php 
                                               $category =   $this->general_model->selectcategory();
                                                  foreach($category as $p){ ?>
                                        <li class="dropdown  yamm-fw"><a href="<?php echo base_url().'ListProducts_controller/Show/'.$p->category_id; ?>" data-toggle="dropdown" class="dropdown-toggle"><?php echo $p->category_name;  ?> <i class="fa fa-caret-right fa-rotate-45"></i> <span>new</span></a>
                                            <ul class="dropdown-menu list-unstyled  fadeInUp animated">
                                                <li>
                                                    <div class="yamm-content">
                                                        <div class="row">  
                                                            <div class="col-md-3">
                                                                <div class="header-menu">
                                                                    <h4><?php echo $p->category_name;  ?></h4>
                                                                </div> <?php
			$id=$p->category_id; 
                     $child_rs = $this->general_model->selectsubcategory($id);
                     
                     if(!empty($child_rs)){
                         
             foreach($child_rs as $p){
			?>
                                                                <ul class="list-unstyled">
                                                                    <li>
                                                                        <a  href="blog-items.html"><?php echo $p->category_name;  ?> </a>
                                                                    </li>
                                                                 
                                                                </ul><?php
             }
                     ?>
                                                            </div>
                                                                            <div class="col-md-3">
                                                                <div class="header-menu">
                                                                    <h4>Product pages<span>Additional</span></h4>
                                                                </div>
                                                                <ul class="list-unstyled">
                                                                    <li>
                                                                        <a href="products-grid.html"><i class="fa fa-angle-right"></i> Product grid </a>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                            <?php
                                                  }
			?>
                                                            <div class="col-md-6">
                                                                <div class="banner">
                                                                    <a href="#">
                                                                        <img src="http://placehold.it/900x1200" class="img-responsive" alt="">
                                                                    </a> 
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
<?php
                                                  }
			?>
                                       
                                   </ul>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>

                            </div>
                        </nav>
                    </div>
                </div>

                <!-- /header-main-menu -->
            </div>
        </header>
        <!-- End header -->
