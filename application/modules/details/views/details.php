<!-- the jScrollPane script -->
<script type="text/javascript" src="web/js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" id="sourcecode">
    $(function ()
    {
        $('.scroll-pane').jScrollPane();
    });
</script> 
<!-- content -->
<?php if (isset($product)):  ?>
<div class="container">
    <div class="women_main">
        <!-- start content -->
        <div class="row single">
            <div class="col-md-9">
                <div class="single_left">
                    <div class="grid images_3_of_2">
                      <img src="<?php echo site_url($product->image); ?>" class="img-responsive" alt=""/></a>
                        <div class="clearfix"></div>		
                    </div>
                    <div class="desc1 span_3_of_2">
                        <h3><?php echo $product->name?></h3>
                        <p>Ksh. <?php echo $product->price; ?> <a href="#">click for offer</a></p>
                        <div class="det_nav">
                            <h4>related styles :</h4>
                            <ul>
                                <li><a href="#"><img src="<?php echo site_url('assets/genimages/devimg/motor/006.jpg'); ?>" class="img-responsive" alt=""/></a></li>
                                <li><a href="#"><img src="<?php echo site_url('assets/genimages/devimg/motor/008.jpg'); ?>" class="img-responsive" alt=""/></a></li>
                                <li><a href="#"><img src="<?php echo site_url('assets/genimages/devimg/motor/004.jpg'); ?>" class="img-responsive" alt=""/></a></li>
                                <li><a href="#"><img src="<?php echo site_url('assets/genimages/devimg/motor/009.jpg'); ?>" class="img-responsive" alt=""/></a></li>
                            </ul>
                        </div>
                        <div class="det_nav1">
                            <h4>Select a size :</h4>
                            <div class=" sky-form col col-4">
                                <ul>
                                    <li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>L</label></li>
                                    <li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>S</label></li>
                                    <li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>M</label></li>
                                    <li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>XL</label></li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn_form">
                            <a href="buy.html">buy</a>
                        </div>
                        <a href="#"><span>login to save in wishlist </span></a>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="single-bottom1">
                    <h6>Details</h6>
                    <p class="prod-desc"><?php echo $product->description;?></p>
                </div>
                <div class="single-bottom2">
                    <h6>Related Products</h6>
                    <div class="product">
                        <div class="product-desc">
                            <div class="product-img">
                                <img src="<?php echo site_url('assets/genimages/devimg/motor/001.jpg'); ?>" class="img-responsive " alt=""/>
                            </div>
                            <div class="prod1-desc">
                                <h5><a class="product_link" href="#">Excepteur sint</a></h5>
                                <p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>									
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="product_price">
                            <span class="price-access">$597.51</span>								
                            <button class="button1"><span>Add to cart</span></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="product">
                        <div class="product-desc">
                            <div class="product-img">
                                <img src="<?php echo site_url('assets/genimages/devimg/motor/002.jpg'); ?>" class="img-responsive " alt=""/>
                            </div>
                            <div class="prod1-desc">
                                <h5><a class="product_link" href="#">Excepteur sint</a></h5>
                                <p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>									
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="product_price">
                            <span class="price-access">$597.51</span>								
                            <button class="button1"><span>Add to cart</span></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>	
            <div class="col-md-3">
                <?php echo $this->load->view('template/components/sidebarmenu'); ?>
            </div>
            <div class="clearfix"></div>		
        </div>
        <!-- end content -->
    </div>
</div>
<?php endif; ?>



