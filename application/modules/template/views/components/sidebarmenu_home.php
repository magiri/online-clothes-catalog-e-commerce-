<?php
     $this->load->model('products/products_m');
         $this->load->model('category/unify');
         $categories=$this->unify->get();
?>
<style type="text/css">
    .w_sidebar2{
        height: 100%;
    } 
   
</style>
<div class="w_sidebar w_sidebar2">


    <section  class="sky-form sky-form2">
        <h4>categories</h4>
        <div class="row1 scroll-pane">
            <div class="col col-4">
                <a class="checkbox" href="<?php echo site_url('products'); ?>"><input type="checkbox" name="checkbox" checked="checked"><i></i>All Products</a>
            </div>
            <div class="col col-4">
                <?php foreach($categories as $category ) :?>
                <a class="checkbox" href="<?php echo site_url('products/sort/'.$category->id); ?>"><input type="checkbox" name="category" value="<?php echo $category->id ?>"><i></i><?php echo $category->name ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</div>