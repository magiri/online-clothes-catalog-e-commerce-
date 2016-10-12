<!-- the jScrollPane script -->
<script type="text/javascript" src="web/js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" id="sourcecode">
    $(function ()
    {
        $('.scroll-pane').jScrollPane();
    });
</script> 
<!-- content -->

<div class="container">
    <div class="women_main">
        <!-- start content -->
        <div class="row single">

            <div class="col-md-9">
                <?php if (count($products) == 1 || isset($products)): ?>
                    <?php foreach ($products as $product): ?>
                        <div class="single_left">
                            <div class="single-top">
                                <h6><?php echo $product->name ?></h6>
                            </div>
                            <div class="grid images_3_of_2">
                                <img src="<?php echo site_url($product->image); ?>" class="img-responsive" alt=""/>
                         
                                <div class="clearfix"></div>		
                            </div>


                            <div class="desc1 span_3_of_2">

                                                                  <!--<p>Ksh. <?php echo $product->price; ?> <a href="#">click for offer</a></p>-->
                                <?php if (isset($sizeandpice)): ?>

                                    <div class="row">
                                        <?php if (isset($cat_name)): ?>

                                            <div class="single-top">
                                                <h6><?php echo $cat_name->name . ' Pricelist' ?>  </h6>
                                            </div>
                                        <?php endif; ?>
                                        <table class="table table-bordered table-hover table-responsive table-striped">


                                            <tr>
                                                <th>Size</th>
                                                <th>Price</th>
                                            </tr>

                                            <?php foreach ($sizeandpice as $price_list): ?>

                                                <tr>   <td><?php echo $price_list->size; ?></td> 
                                                    <td><?php echo $price_list->price; ?></td> </tr>
                                            <?php endforeach; ?>
                                        </table>

                                    </div>

                                <?php endif; ?>
                        <!--                                <a href="#"><span>login to save in wishlist </span></a>-->

                            </div>
                            <div class="grid images_3_of_2">
                                <div class="single-top">
                                    <h6>Call for Quote and Inquiries </h6>
                                </div>

                                <a href="tel:<?php echo $product->phone_number ?>" class="button" >
                                    <span class="glyphicon glyphicon glyphicon-earphone"></span>
                                    <?php echo $product->phone_number ?>

                                </a>
                                <div class="fb-share-button" data-href="http://faithknits.com/products/details/<?php echo $product->slug ?>" data-layout="button_count"></div>
                                <div class="clearfix"></div>		
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="single-bottom1">
                            <h6>Owner Details</h6>
                            <p class="prod-desc">   Name::<?php echo $product->full_name; ?></p>
                            <p class="prod-desc">  Email: <?php echo $product->first_email; ?></p>
                            <p class="prod-desc"> Main phone  <?php echo $product->phone_number; ?></p>
                            <p class="prod-desc"> Other Phones: <?php echo $product->other_phones; ?></p>

                        </div>
                        <div class="single-bottom1">
                            <h6>Details</h6>
                            <p class="prod-desc"><?php echo $product->description; ?></p>


                        </div>
                        <div class="single-bottom1">
                            <h6>Comments</h6>
                            <div class="fb-comments" data-href="http://faithknits.com/products/details/<?php echo $product->slug ?>" data-numposts="5"></div>


                        </div>
                        <div class="single-bottom2">
                            <h6>Similar Products</h6>
                            <?php if (isset($similar)) : foreach ($similar as $product): ?>
                                    <div class="product">
                                        <div class="product-desc">
                                            <div class="product-img">
                                                <img src="<?php echo site_url($product->image); ?>" class="img-responsive " alt=""/>
                                            </div>
                                            <div class="prod1-desc">
                                                <h5><a class="product_link" href="<?php echo site_url('products/details/' . $product->id) ?>"><?php echo $product->name ?></a></h5>
                                                <p class="product_descr">
                                                    <?php echo $product->name ?>
                                                </p>									
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="product_price">
                                            <span class="price-access"><?php echo $product->price ?></span>								

                                            <?php if ($this->auth->isadmin()): ?>
                                                <a href="<?php echo site_url('products/admin/edit/' . $product->id); ?>" class="button button1">Edit</a>  
                                            <?php endif; ?>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <?php
                                endforeach;
                            endif;
                            ?>

                        </div>
                        <?php
                    endforeach;
                else:
                    ?>
                    <div class="row alert alert-info">Sorry Details currently unavailable.</div>
                <?php endif; ?>

            </div>	
            <div class="col-md-3">
                <?php echo $this->load->view('template/components/sidebarmenulinks'); ?>

            </div>
            <div class="clearfix"></div>		
        </div>
        <!-- end content -->
    </div>
</div>




