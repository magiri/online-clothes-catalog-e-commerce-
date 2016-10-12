

<link href="<?PHP echo site_url('assets/gencss/home.css') ?>" rel="stylesheet">

<div class="women_main">
    <div class="container-fluid">
        <div class="container">
            <div class="row"
                 <div class="row">
                    <div class="col-md-9">
                        <div class="container-fluid">
                            <!--START SLIDER-->
                            <?php $this->load->view('components/slider'); ?>
                            <!--END sLIDER-->
                        </div>   
                    </div>   
                    <div class="col-md-3">

                        <?php
                        $this->load->model('products/products_m');
                        $this->load->model('category/unify');
                        $categories = $this->unify->get_by(array('parent_id' => 0));
                        ?>

                        <div class="categories">
                            <h3>Categories</h3>
                            <ul>        
                                <?php foreach ($categories as $category) : ?>
                                    <li>
                                        <a href = "<?php echo site_url('products/product_specific_cat/' . $category->id); ?>"> 
                                            <h4><?php echo $category->name ?></h4>
                                        </a>
                                    </li>

                                <?php endforeach; ?>

                            </ul>


                        </div>
                    </div>
                </div>  
                <div class="row">
                    <!-- start content -->
                    <div class="content-wrapper">		  

                        <div class="content-top">
                            <div class="box_wrapper"><h1>Featured Clothes</h1>
                            </div>
                            <div class="text"> 	
                                <?php if (isset($products)): ?>
                                    <?php foreach ($products as $product) : ?>
                                        <div class="grid_1_of_3 images_1_of_3">
                                            <div class="grid_1">
                                                <a href="<?php echo site_url('products/details/' . $product->slug) ?>"><img src="<?php echo site_url($product->image); ?>" title="continue reading"  class=""style=" max-height:223px" alt=""></a>
                                                <div class="grid_desc">
                                                    <p class="title3"> <?php echo ($product->name); ?></p>

                                                    <p class="title1"><?php echo ($product->color) . '  Size ' . ($product->size); ?></p>
                                                    <div class="price" >
                                                        <span class="reducedfrom">Ksh. <?php echo ($product->price); ?></span>
                                                        <span class="actual"></span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="cart">
                                                            <a class="button" href="<?php echo site_url('products/details/' . $product->slug) ?>" >
                                                                <span>Details</span>
                                                            </a>
                                                            <a href="tel:<?php echo $product->phone_number ?>" class="button" >
                                                                <span class="glyphicon glyphicon glyphicon-earphone"></span>
                                                                <?php echo $product->phone_number ?>
                                                            </a>


                                                        </div>
                                                    </div>

                                                </div>
                                            </div><div class="clear"></div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php else: ?>

                                    <div class="row alert alert-info">Sorry items currently unavailable.</div>

                                <?php endif; ?>
                                <div class="grid_1_of_3 images_1_of_3">
                                    <div class="grid_1">
                                        <div class="fb-page" data-href="https://www.facebook.com/faithknits/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/faithknits/"><a href="https://www.facebook.com/faithknits/">Faith Knits</a></blockquote></div></div>
                                    </div><div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>	

                    <!-- end content -->

                </div>
                <div class="row">
                    <!-- start content -->
                    <div class="content-wrapper">		  

                        <div class="content-top">
                            <div class="box_wrapper"><h1>New Arrivals</h1>
                            </div>
                            <div class="text"> 	

                                <?php if (isset($newarrivals)): ?>


                                    <?php foreach ($newarrivals as $product) : ?>
                                        <div class="grid_1_of_3 images_1_of_3">
                                            <div class="grid_1">
                                                <a href="<?php echo site_url('products/details/' . $product->slug) ?>"><img src="<?php echo site_url($product->image); ?>" title="continue reading"  class=""style=" max-height:223px" alt=""></a>
                                                <div class="grid_desc">
                                                    <p class="title3"> <?php echo ($product->name); ?></p>

                                                    <p class="title1"><?php echo ($product->color) . '  Size ' . ($product->size); ?></p>
                                                    <div class="price" >
                                                        <span class="reducedfrom">Ksh. <?php echo ($product->price); ?></span>
                                                        <span class="actual"></span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="cart">
                                                            <a class="button" href="<?php echo site_url('products/details/' . $product->slug) ?>" >
                                                                <span>Details</span>
                                                            </a>
                                                            <a href="tel:<?php echo $product->phone_number ?>" class="button" >
                                                                <span class="glyphicon glyphicon glyphicon-earphone"></span>
                                                                <?php echo $product->phone_number ?>
                                                            </a>


                                                        </div>
                                                    </div>

                                                </div>
                                            </div><div class="clear"></div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php else: ?>

                                    <div class="row alert alert-info">Sorry items currently unavailable.</div>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>	

                    <!-- end content -->

                </div>
                <div class="row">
                    <!-- start content -->
                    <div class="content-wrapper">		  

                        <div class="content-top">
                            <div class="box_wrapper"><h1>Sponsored Content</h1>
                            </div>
                            <div class="text"> 	


                                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                <!-- faithknits adverts -->
                                <ins class="adsbygoogle"
                                     style="display:block"
                                     data-ad-client="ca-pub-7368951255305021"
                                     data-ad-slot="6221068593"
                                     data-ad-format="auto"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>

                            </div>
                        </div>
                    </div>	

                    <!-- end content -->

                </div>


            </div>
        </div>
    </div>


