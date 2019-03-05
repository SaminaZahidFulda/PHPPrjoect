<?php 

      require_once('includes/headerfront.php');   

 
 ?>

        <section>
            <div class="second-page-container">
                <div class="container">
                    <div class="row">

                        <div class="col-md-9">
                            <div class="block-breadcrumb">
                               <ul class="breadcrumb">
                                    <li><a href="<?php echo base_url().'FrontIndex_controller/' ?>">Home</a></li>
                                    <li><a href="<?php echo base_url().'FrontIndex_controller/Show/'.$products->category_name; ?>"><?php echo $products->product_itemname; ?></a></li>
                                    <li class="active">Detail View</li>
                                </ul>
                            </div>

                            <div class="header-for-light">
                                <h1 class="wow fadeInRight animated" data-wow-duration="1s">Dress &nbsp;<span><?php echo $products->product_itemname; ?></span> </h1>

                            </div>

                            <div class="block-product-detail">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="product-image">
                                            <img id="product-zoom"  src='<?php echo base_url(); ?>uploads/products/<?php echo $products->product_image; ?>' data-zoom-image="<?php echo base_url(); ?>uploads/products/<?php echo $products->product_image; ?>" alt="">
                                            
                                        </div>

                                    </div>
                                    <form action='<?php echo base_url(); ?>ListProducts_controller/Addtocart'  method="post" name="form11">
 
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

<input type="hidden" name="id" id="id" value="<?php echo $products->product_id; ?> " />
                                          
                                        <div class="product-detail-section">
                                            <h3><?php echo $products->product_itemname; ?></h3>
                                            <div class="product-rating">
                                                <div class="stars">
                                                    <span class="star"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span>
                                                </div>
                                                <a href="" class="review">150 Reviews</a> 
                                            </div>

                                            <div class="product-information">
                                                <div class="clearfix"> 
                                                    <label class="pull-left">Brand:</label> <a href="#">Malik Silk Emporium</a><br>
                                                </div>
                                                <div class="clearfix"> 
                                                    <label class="pull-left">Collection:</label> <?php echo $products->cname; ?> Collection
                                                </div>
                                                <div class="clearfix"> 
                                                    <label class="pull-left">Product Code:</label> ID <?php echo $products->product_article; ?>
                                                </div>
                                                
                                                <div class="clearfix">
                                                    <label class="pull-left">Availability:</label>
                                                    <p> <span><?php echo $products->fDpurchase_quantity; ?> </span>in stock</p>
                                                </div>
                                                <div class="clearfix">
                                                    <label class="pull-left">Description:</label>
                                                    <p class="description"> Unique <?php echo $products->cname; ?>
                                                        Collection is available at our Shop.This Dress is Specially made with Pure Shafoon.
                                                        </p>
                                                </div>
                                                <div class="clearfix">
                                                    <label class="pull-left">Price:</label>
                                                    <p class="product-price"><span>PKR.<?php echo $products->product_saleprice; ?></span><?php echo $products->cost_price; ?></p>
                                                 <input type="hidden" id="price" value="<?php echo $products->cost_price; ?>" >
                                             
                                                
                                                </div>
                                                <div class="clearfix">
                                                    <label class="pull-left">Quantity:</label>
                                                    <input type="number" id="qty" class="form-control" onkeyup="calculate()">
                                                </div>
                                                <div class="clearfix">
                                                    <label class="pull-left">Total:</label>
                                                    <p class="product-price"><input readonly="true" id="total"></p>
                                                </div>
                                                <div class="shopping-cart-buttons">

                                                    <button type="submit" class="shoping"><i class="fa fa-shopping-cart"></i> 
                                                            Add to cart</button>
                                                    <a href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" title="Compare"><i class="fa fa-random"></i></a>
                                                </div>



                                            </div>
                                        </div>
                                    </div></form>
                                </div>
                            </div>
                            <div class="box-border block-form">
                                <!-- Nav tabs -->
                                <ul class="nav nav-pills  nav-justified">
                                    <li class="active"><a href="#description" data-toggle="tab">Description</a></li>
                                    <li><a href="#additional" data-toggle="tab" class="disabled">Additional</a></li>
                                    <li><a href="#review" data-toggle="tab">Review</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="description">
                                        <br>
                                        <h3>Product Details</h3>
                                        <hr>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>
                                        <p>
                                            Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="additional">
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h3>Sizes</h3>
                                                <hr>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit ollit anim id est laborum.
                                                </p>

                                            </div>
                                            <div class="col-md-4 block-color">
                                                <h3>Colors</h3>
                                                <hr>
                                                <ul class="colors clearfix list-unstyled">
                                                    <li><a href="" rel="003d71"></a></li>
                                                    <li><a href="" rel="c42c39"></a></li>
                                                    <li><a href="" rel="f4bc08"></a></li>
                                                    <li><a href="" rel="02882c"></a></li>
                                                    <li><a href="" rel="000000"></a></li>
                                                    <li><a href="" rel="caccce"></a></li>
                                                    <li><a href="" rel="ffffff"></a></li>
                                                    <li><a href="" rel="f9e7b6"></a></li>
                                                    <li><a href="" rel="ef8a07"></a></li>
                                                    <li><a href="" rel="5a433f"></a></li>
                                                    <li><a href="" rel="ff9bb5"></a></li>
                                                    <li><a href="" rel="8c56a9"></a></li>
                                                </ul>

                                            </div>
                                            <div class="col-md-4">
                                                <h3>Other</h3>
                                                <hr>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit ollit anim id est laborum.
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane" id="review">
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>Clients review</h3>
                                                <hr>
                                                <div class="review-header">
                                                    <h5>John Smith</h5>
                                                    <div class="product-rating">
                                                        <div class="stars">
                                                            <span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span>
                                                        </div>
                                                    </div>
                                                    <small class="text-muted">26/06/2014</small>
                                                </div>
                                                <div class="review-body">
                                                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

                                                </div>
                                                <hr>
                                                <div class="review-header">
                                                    <h5>Tom Carry</h5>
                                                    <div class="product-rating">
                                                        <div class="stars">
                                                            <span class="star"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span>
                                                        </div>
                                                    </div>
                                                    <small class="text-muted">05/07/2014</small>
                                                </div>
                                                <div class="review-body">
                                                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                        <form role="form" method="post" action="#">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputFirstName" class="control-label">First Name:<span class="text-error">*</span></label>
                                                        <div>
                                                            <input type="text" class="form-control" id="inputFirstName">
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputCompany" class="control-label">Company:</label>
                                                        <div>
                                                            <input type="text" class="form-control" id="inputCompany">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control">    </textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label  class="control-label">Your Rate:</label>
                                                        <div class="product-rating">
                                                            <div class="stars">
                                                                <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="submit"  class="btn-default-1" value="Add Review">
                                        </form>

                                    </div>

                                </div>



                            </div>



                        </div>
                        <div class="col-md-3">
                            <div class="main-category-block ">
                                <div class="main-category-title">
                                    <i class="fa fa-list"></i> Category

                                </div>
                            </div>
                            <div class="widget-block">
                                <ul class="list-unstyled ul-side-category">
                                    <li><a href=""><i class="fa fa-angle-right"></i> Man / 2</a>
                                        <ul class="sub-category">
                                            <li><a href="">Dress / 2</a>
                                                <ul class="sub-category">
                                                    <li><a href="#">Dress 1</a></li>
                                                    <li><a href="#">Dress 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="">Shirt / 2</a>
                                                <ul class="sub-category">
                                                    <li><a href="#">Shirt 1</a></li>
                                                    <li><a href="#">Shirt 2</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href=""><i class="fa fa-angle-right"></i> Woman / 2</a>
                                        <ul class="sub-category">
                                            <li><a href="">Dress / 2 </a>
                                                <ul class="sub-category">
                                                    <li><a href="#">Dress 1</a></li>
                                                    <li><a href="#">Dress 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="">Shirt / 2</a>
                                                <ul class="sub-category">
                                                    <li><a href="#">Shirt 1</a></li>
                                                    <li><a href="#">Shirt 2</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-angle-right"></i> Tablet / 0</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-angle-right"></i> Laptop / 0</a>
                                    </li>

                                </ul>

                            </div>
                            <div class="product light last-sale">
                                <figure class="figure-hover-overlay">                                                                        
                                    <a href="#"  class="figure-href"></a>
                                    <div class="product-sale">Sale <br> 7%</div>
                                    <div class="product-sale-time"><p class="time"></p></div>
                                    <a href="#" class="product-compare"><i class="fa fa-random"></i></a>
                                    <a href="#" class="product-wishlist"><i class="fa fa-heart-o"></i></a>
                                    <img src="http://placehold.it/400x500" class="img-overlay img-responsive" alt="">
                                    <img src="http://placehold.it/400x500" class="img-responsive" alt="">
                                </figure>
                                <div class="product-caption">
                                    <div class="block-name">
                                        <a href="#" class="product-name">Product name</a>
                                        <p class="product-price"><span>$330</span> $320.99</p>

                                    </div>
                                    <div class="product-cart">
                                        <a href="#"><i class="fa fa-shopping-cart"></i> </a>
                                    </div>
                                </div>

                            </div>
                            <div class="widget-title">
                                <i class="fa fa-money"></i> Price range

                            </div>
                            <div class="widget-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" id="price-from" class="form-control" value="0">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" id="price-to" class="form-control" value="500">
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="widget-title">
                                <i class="fa fa-dashboard"></i> Colors

                            </div>
                            <div class="widget-block">
                                <ul class="colors clearfix list-unstyled">
                                    <li><a href="" rel="003d71"></a></li>
                                    <li><a href="" rel="c42c39"></a></li>
                                    <li><a href="" rel="f4bc08"></a></li>
                                    <li><a href="" rel="02882c"></a></li>
                                    <li><a href="" rel="000000"></a></li>
                                    <li><a href="" rel="caccce"></a></li>
                                    <li><a href="" rel="ffffff"></a></li>
                                    <li><a href="" rel="f9e7b6"></a></li>
                                    <li><a href="" rel="ef8a07"></a></li>
                                    <li><a href="" rel="5a433f"></a></li>
                                </ul>
                            </div>
                            <div class="widget-title">
                                <i class="fa fa-thumbs-up"></i> Bestseller
                            </div>
                            <div class="widget-block">
                                <div class="row">
                                    <div class="col-md-4 col-sm-2 col-xs-3">
                                        <img class="img-responsive" src="http://placehold.it/400x500.jpg" alt="" title="">   
                                    </div>
                                    <div class="col-md-8  col-sm-10 col-xs-9">
                                        <div class="block-name">
                                            <a href="#" class="product-name">Product name</a>
                                            <p class="product-price"><span>$330</span> $320.99</p>

                                        </div>
                                        <div class="product-rating">
                                            <div class="stars">
                                                <span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span>
                                            </div>
                                            <a href="" class="review hidden-md">8 Reviews</a>
                                        </div>
                                        <p class="description">Lorem ipsum dolor sit amet, con sec tetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-block">
                                <div class="row">
                                    <div class="col-md-4 col-sm-2 col-xs-3">
                                        <img class="img-responsive" src="http://placehold.it/400x500" alt="" title="">   
                                    </div>
                                    <div class="col-md-8 col-sm-10 col-xs-9">
                                        <div class="block-name">
                                            <a href="#" class="product-name">Product name</a>
                                            <p class="product-price"><span>$330</span> $320.99</p>

                                        </div>
                                        <div class="product-rating">
                                            <div class="stars">
                                                <span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span><span class="star active"></span>
                                            </div>
                                            <a href="" class="review hidden-md">8 Reviews</a>
                                        </div>
                                        <p class="description">Lorem ipsum dolor sit amet, con sec tetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>  
            </div>

        </section>


<?php   
  require_once('includes/footerfront.php');   
 ?>

<script>
 function  calculate(){
         alert();
                 var total = 0;
                   
                     var amount= document.getElementById("price").value;
                     alert(amount);
                      var paid= document.getElementById("qty").value;
                      alert(paid);
                      total = amount*paid;
                         document.getElementById("total").value=total;
               }
               
               </script>