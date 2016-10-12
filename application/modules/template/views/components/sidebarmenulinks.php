<?php
     $this->load->model('products/products_m');
         $this->load->model('category/unify');
         $categories=$this->unify->get();
?>
<div class="w_sidebar">
<!--    <div class="w_nav1">
        <h4>All</h4>
        <ul>
            <li><a href="women.html">SChool</a></li>
            <li><a href="#">new arrivals</a></li>
            <li><a href="#">home</a></li>
            <li><a href="#">boys</a></li>
            <li><a href="#">girls</a></li>
            <li><a href="#">Discounts</a></li>
        </ul>	
    </div>
    <h3>filter by</h3>-->
    <section  class="sky-form">
        <h4>catogories</h4>
        <div class="row1 scroll-pane">
            <div class="col col-4">
                <a class="checkbox" href="<?php echo site_url('products'); ?>"><input type="checkbox" name="checkbox" checked="checked"><i></i>All Products</a>
            </div>
            <div class="col col-4">
                <?php foreach($categories as $category ) :?>
                <a class="checkbox" href="<?php echo site_url('products/product_specific_cat/'.$category->id); ?>"><input type="checkbox" name="category" value="<?php echo $category->id ?>"><i></i><?php echo $category->name ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<!--    <section  class="sky-form">
        <h4>catogories</h4>
        <div class="row1 scroll-pane">
            <div class="col col-4">
                <a class="checkbox" href="<?php echo site_url('products'); ?>"><input type="checkbox" name="checkbox" checked="checked"><i></i>All Products</a>
            </div>
            <div class="col col-4">
                <div id = "accordian" >
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
    </section>-->
<!--    <section  class="sky-form">
        <h4>Sizes</h4>
        <div class="row1 scroll-pane">
            
            <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>28</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>29</label>
                
                																							
            </div>
        </div>
    </section>-->
<!--    <section class="sky-form">
        <h4>colours</h4>
        <ul class="w_nav2">
            <li><a class="color1" href="#"></a></li>
            <li><a class="color2" href="#"></a></li>
            <li><a class="color3" href="#"></a></li>
            <li><a class="color4" href="#"></a></li>
            <li><a class="color5" href="#"></a></li>
            <li><a class="color6" href="#"></a></li>
            <li><a class="color7" href="#"></a></li>
            <li><a class="color8" href="#"></a></li>
            <li><a class="color9" href="#"></a></li>
            <li><a class="color10" href="#"></a></li>
            <li><a class="color12" href="#"></a></li>
            <li><a class="color13" href="#"></a></li>
            <li><a class="color14" href="#"></a></li>
            <li><a class="color15" href="#"></a></li>
            <li><a class="color5" href="#"></a></li>
            <li><a class="color6" href="#"></a></li>
            <li><a class="color7" href="#"></a></li>
            <li><a class="color8" href="#"></a></li>
            <li><a class="color9" href="#"></a></li>
            <li><a class="color10" href="#"></a></li>
        </ul>
    </section>
    <section class="sky-form">
        <h4>discount</h4>
        <div class="row1 scroll-pane">
            <div class="col col-4">
                <label class="radio"><input type="radio" name="radio" checked=""><i></i>60 % and above</label>
                <label class="radio"><input type="radio" name="radio"><i></i>50 % and above</label>
                <label class="radio"><input type="radio" name="radio"><i></i>40 % and above</label>
            </div>
            <div class="col col-4">
                <label class="radio"><input type="radio" name="radio"><i></i>30 % and above</label>
                <label class="radio"><input type="radio" name="radio"><i></i>20 % and above</label>
                <label class="radio"><input type="radio" name="radio"><i></i>10 % and above</label>
            </div>
        </div>						
    </section>-->
</div>