<?php
//$this->load->model('products/products_m');
$this->load->model('category/unify');
$categories = $this->unify->get();
?>
<link type="text/css" rel="stylesheet" href="<?php echo site_url('assets/gencss/admin/sidebar.css'); ?>"/>
<div class="w_sidebar">

    <section  class="sky-form">
        <h4>categories</h4>
        <div class="row1 scroll-pane">
            <div class="col col-4">
                <a class="checkbox" href="<?php echo site_url('price_list/admin/'); ?>"><input type="checkbox" name="category" value=""><i></i>All Categories</a>
            </div>
            <div class="col col-4">
                <?php foreach ($categories as $category) : ?>
                    <a class="checkbox" href="<?php echo site_url('price_list/admin/sort/' . $category->id); ?>"><input type="checkbox" name="category" value="<?php echo $category->id ?>"><i></i><?php echo $category->name ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</div>