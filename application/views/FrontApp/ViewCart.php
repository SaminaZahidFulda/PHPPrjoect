<?php 

      require_once('includes/headerbgfront.php');   

  
 ?>
        <section>
            <div class="second-page-container">
                <div class="block">
                    <div class="container">
                        <div class="header-for-light">
                            <h1 class="wow fadeInRight animated" data-wow-duration="1s">Shopping<span> Cart</span></h1>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="cart-table table wow fadeInLeft" data-wow-duration="1s">
                                    <thead>
                                        <tr>
                                            <th class="card_product_image">Image</th>
                                            <th class="card_product_name">Product Name</th>
                                            <th class="card_product_quantity">Quantity</th>
                                            <th class="card_product_price">Unit Price</th>
                                            <th class="card_product_total">Total</th>
                                                <th class="card_product_total">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>                  <?php 
                                    if(empty($this->cart->contents())){?>
                                            <th class="card_product_name"></th>
                                            <th class="card_product_quantity"></th>
                                            <th class="card_product_total">Empty Cart</th>
                                <?php    } 
                                    foreach ($this->cart->contents() as $val){
                                       ?>
  
                                        <tr>
                                            <td class="card_product_image" data-th="Image"><a href="#"><img title="Product Name" alt="Product Name" src="<?php echo base_url(); ?>uploads/products/<?php echo $val['options']['image']; ?>"></a></td>
                                            
                                            <td class="card_product_name" data-th="Product Name"><a href="#"><?php echo $val['name'];?></a></td>
                                            <td class="card_product_quantity" data-th="Quantity"><input type="number" min="0" value="1" name="" class="styler">
                                                &nbsp;
                                                &nbsp;<a href="#"><i class="icon-trash icon-large"></i> </a>
                                            </td>
                                            <td class="card_product_price" data-th="Unit Price"><?php echo $val['price'];?></td>
                                            <td class="card_product_total" data-th="Total"><?php echo $val['subtotal'];?></td>
                                              <th class="card_product_total">  <a href="<?php echo base_url().'ListProducts_controller/deleteItemCart/'.$val['rowid'] ?>" class="trash"><i class="fa fa-trash-o pull-left"></i></a>
                                                <a href="<?php echo base_url().'ListProducts_controller/UpdateItemCart/'.$val['rowid'] ?>" class="trash"><i class="fa fa-edit-o pull-left"></i></a>
                                               </th>
                                        </tr>
                                    <?php }?>
  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="row">
                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="block-form box-border wow fadeInLeft" data-wow-duration="1s">
                                            <h3><i class="fa fa-truck"></i> Shipping & Taxes</h3>
                                            <hr>
                                            <form action="#" method="post">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Your Country</label>
                                                        <select name="country" class="form-control">
                                                            <option selected="selected">Country 1</option>
                                                            <option>Country 2</option>
                                                            <option>Country 3</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label>Your Region</label>
                                                        <select name="Region" class="form-control">
                                                            <option selected="selected">Region 1</option>
                                                            <option>Region 2</option>
                                                            <option>Region 3</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label>Your Post Code</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="submit"  value="Get Quotes"  class="btn-default-1">
                                                    </div>
                                                </div>                                    
                                            </form>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="row">
                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="block-form box-border wow fadeInLeft" data-wow-duration="1s">
                                            <h3><i class="fa fa-tag"></i> Apply Discount Code</h3>
                                            <hr>
                                            <form action="#" method="post">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Discount Code</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="submit"  value="Apply Coupon"  class="btn-default-1">
                                                    </div>
                                                </div>                                    
                                            </form>
                                        </div>
                                    </article>
                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="block-form box-border wow fadeInLeft" data-wow-duration="1s">
                                            <h3><i class="fa fa-gift"></i> Use Gift Voucher</h3>
                                            <hr>
                                            <form action="#" method="post">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Voucher Code</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="submit"  value="Apply Voucher"  class="btn-default-1">
                                                    </div>
                                                </div>                                    
                                            </form>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="row">
                                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="block-form block-order-total box-border wow fadeInRight" data-wow-duration="1s">
                                            <h3><i class="fa fa-dollar"></i> Total</h3>
                                            <hr>
                                            <ul class="list-unstyled">
                                                <li>Sub Total: <strong>$500.00</strong></li>
                                                <li>Pricing Sharge: <strong>$10.00</strong></li>
                                                <li>Promotion Discound: <strong>$5.00</strong></li>
                                                <li>VAT: <strong>$10.00</strong></li>
                                                <li><hr></li>
                                                <li class="active"><b>Total:</b> <strong>$520.00</strong></li>                                    
                                            </ul>
                                            <input type="submit"  value="Contuine Shoping"  class="btn-default-1">
                                            <a href="#"  class="btn-default-1">Checkout</a>
                                        </div>
                                    </article>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div> 
        </section>






        <section>
            <div class="block color-scheme-white-90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <article class="payment-service">
                                <a href="#"></a>
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <i class="fa fa-thumbs-up"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <h3 class="color-active">Safe Payments</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="payment-service">
                                <a href="#"></a>
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <i class="fa fa-truck"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <h3 class="color-active">Free shipping</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="payment-service">
                                <a href="#"></a>
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <i class="fa fa-fax"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <h3 class="color-active">24/7 Support</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>



                </div>
            </div>
        </section>




<?php 

      require_once('includes/footerfront.php');   

  
 ?>
