<!-- start content -->

<div class="text" >

    <?php if (isset($products) & count($products) >= 1): $products = array_chunk($products, 4); ?>
        <?php foreach ($products as $rows) : ?>
            <div class="row">
                <?php foreach ($rows as $product) : ?>
                    <div class="grid_1_of_3 images_1_of_3 col-md-3 ">
                        <div class="grid_1">
                            <a href="<?php echo site_url('products/details/' . $product->slug) ?>"><img src="<?php echo site_url($product->image); ?>" title="continue reading"  style=" max-height:168.3px" alt=""></a>
                            <div class="grid_desc">
                                <p class="title3"> <?php echo ($product->name); ?></p>

                                <p class="title1"><?php echo ($product->color) . '  Size ' . ($product->size); ?></p>
                                <div class="price" >
                                    <span class="reducedfrom">Ksh. <?php echo ($product->price); ?></span>
                                    <span class="actual"></span>
                                </div>
                                <div class="cart-button row">
                                    <div class="">
                                         <a href="<?php echo site_url('products/details/' . $product->slug) ?>" class="button"> Details
                                        </a>
                                        <a href="tel:<?php echo $product->phone_number ?>" class="button" >
                                            <span class="glyphicon glyphicon-earphone"></span>
                                            <?php echo $product->phone_number ?>
                                        </a>

                                       
                                    </div>
                                </div>
                            </div>
                        </div><div class="clear"></div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    <?php else: ?>

        <div class="row alert alert-info">Sorry items currently unavailable.</div>

    <?php endif; ?>



</div>	


<!-- end content -->






<div class="row">

    <?php if (isset($pagination) & strlen($pagination) > 0): ?>
        <?php echo $pagination ?>
    <?php endif; ?>
</div>
