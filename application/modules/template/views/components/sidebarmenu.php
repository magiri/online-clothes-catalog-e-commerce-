<?php
$this->load->model('products/products_m');
$this->load->model('category/unify');
$categories = $this->unify->get();
?>

<div class="w_sidebar">

    <section  class="sky-form">
        <h4>categories</h4>

        <div class="row1 scroll-pane">
            <div class="col col-4">
                <form>
                    <div class="form-group">
                        <input type="radio" name="category" value="0" ondblclick="sort(this.value)" onfocus="sort(this.value)" onselect="sort(this.value)">
                        <i></i><a href="<?php echo site_url('products/product_specific_cat/0') ?>">All Products</a>

                    </div>


                    <?php foreach ($categories as $category) : ?>
                        <div class="form-group">

                            <input type="radio" name="category" value="<?php echo $category->id ?>" ondblclick="sort(this.value)" onfocus="sort(this.value)" onselect="sort(this.value)">
                            <i></i><a href="<?php echo site_url('products/product_specific_cat/'.$category->id) ?>"><?php echo $category->name ?></a>
                        </div>


                    <?php endforeach; ?>
                </form>
            </div>
        </div>
    </section>

</div>

<script>
    
</script>