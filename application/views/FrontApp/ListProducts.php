<?php 

      require_once('includes/headerfront.php');   

  print_r($this->cart->contents());
  
 ?>


 <section>
            <div class="second-page-container">
                <div class="container">
                    <div class="row">

                        <div class="col-md-9">
                            <div class="block-breadcrumb">
                                <ul class="breadcrumb">
                                    <li><a href="<?php echo base_url().'FrontIndex_controller/' ?>">Home</a></li>
                                    <li><a href="<?php echo base_url().'FrontIndex_controller/' ?>"><?php echo $products[0]->cname; ?></a></li>
                                    <li class="active">Products list</li>
                                </ul>
                            </div>

                            <div class="header-for-light">
                                <h1 class="wow fadeInRight animated" data-wow-duration="1s"><?php echo $products[0]->cname; ?> <span>dresses</span> </h1>

                            </div>
                            <div class="block-products-modes color-scheme-2">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <div class="product-view-mode">
                                            <a href="<?php echo base_url().'ListProducts_controller/ShowGrid/'.$products[0]->category_name; ?>"><i class="fa fa-th-large"></i></a>
                                            <a href="<?php echo base_url().'ListProducts_controller/Show/'.$products[0]->category_name; ?>"  class="active"><i class="fa fa-th-list"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                        <div class="row">
                                            <div class="col-md-3 col-md-offset-1">
                                                <label class="pull-right">Sort by</label>
                                            </div>
                                            <div class="col-md-5">
                                                <select name="sort-type" class="form-control">
                                                    <option value="position:asc">--</option>
                                                    <option value="price:asc"  selected="selected">Price: Lowest first</option>
                                                    <option value="price:desc">Price: Highest first</option>
                                                    <option value="name:asc">Product Name: A to Z</option>
                                                    <option value="name:desc">Product Name: Z to A</option>
                                                    <option value="quantity:desc">In stock</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <select name="products-per-page" class="form-control">
                                                    <option value="10" selected="selected">10</option>
                                                    <option value="20">20</option>
                                                    <option value="30">30</option>
                                                    <option value="100">100</option>
                                                    <option value="all">All</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <?php 
                                                 foreach($products as $p){ 
                                                   
                                                   
                                                     ?>
                           
                            <article class="product list">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-md-4 text-center">
                                        <figure class="figure-hover-overlay text-center">                                                                        
                                            <a href="<?php echo base_url().'ListProducts_controller/SingleProduct/'.$p->product_id;?>"  class="figure-href"></a>
                                              <?php   $bar = each($products);
                                                   if($bar['key']<'3'){?>
                                                       <div class="product-new">new</div>
                                           <?php
                                                     }
                                                     ?>
                                            <a href="#" class="product-compare"><i class="fa fa-random"></i></a>
                                            <a href="#" class="product-wishlist"><i class="fa fa-heart-o"></i></a>
                                            <img src="<?php echo base_url(); ?>uploads/products/<?php echo $p->product_image; ?>" class="img-overlay img-responsive" alt="">
                                            <img src="<?php echo base_url(); ?>uploads/products/<?php echo $p->product_image; ?>" class="img-responsive" alt="">
                                        </figure>
                                    </div> <form action="<?php echo base_url(); ?>ListProducts_controller/Addtocart"  method="post" name="form11">
 
                                    <div class="col-xs-12 col-sm-8 col-md-8">
                                        <div class="product-caption">
                                            <div class="block-name">
                                                <a href="#" class="product-name"><?php echo $p->product_itemname; ?></a>
                                                <p class="product-price"><span><?php echo $p->product_saleprice; ?></span> <?php echo $p->product_saleprice; ?></p>
<input type="hidden" name="id" id="id" value="<?php echo $p->product_id; ?> " />
                  
                                            </div>

                                            <div class="product-rating">
                                                <div class="stars">
                                                    <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                                                </div>
                                                <a href="" class="review">8 Reviews</a>
                                            </div>
                                            <p class="description">

                                           Outstanding Shirt designed with Screen print on one side and the other side with Printed fabric all over and mid length kurta.
                                            </p>
                                            <div class="product-cart">
                                                <button type="submit" ><a><i class="fa fa-shopping-cart"></i> Add to cart</a></button>
                                            </div>
                                        </div>
                                    </div></form>
                                </div>
                            </article>
                           
                          <?php 
                                                 }?>
                            <div class="block-pagination">
                                <ul class="pagination">
                                    <li><a href="#">&laquo;</a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                </ul>
                            </div>  

                        </div>
                        <aside class="col-md-3">
                            <div class="main-category-block ">
                                <div class="main-category-title">
                                    <i class="fa fa-list"></i> Category

                                </div>
                            </div>
                            <div class="widget-block">
                                <ul class="list-unstyled ul-side-category">
                                  <?php 
                                                 
                                                 
                                                 $category =   $this->general_model->selectcategory();
                                                  foreach($category as $p){ ?>
                                    <li>
                                        <a href="<?php echo base_url().'ListProducts_controller/Show/'.$p->category_id; ?>"><i class="fa fa-angle-right"></i> <?php echo $p->category_name;  ?></a>
                                    </li>
                                   
<?php 
                                                  }?>
                                </ul>

                            </div>
                            <div class="product light last-sale">
                                <figure class="figure-hover-overlay">                                                                        
                                    <a href="#"  class="figure-href"></a>
                                    <div class="product-sale">Save <br> 7%</div>
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

                        </aside>

                    </div>
                </div>  
            </div>

        </section>


<?php   
  require_once('includes/footerfront.php');   
 ?>
