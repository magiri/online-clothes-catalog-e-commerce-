<?php
$this->load->model('category/unify');
?>
<div class="container-fluid">
    <div class="row">
            <div class="col-mod-12">
                <div class="row alert alert-info"><?php echo $message; ?></div>
                
            </div>
        </div>
    <div class="col-md-2">
<?php $this->load->view('products/admin/sidebarmenu') ?>
    </div>
    <div class="col-md-10">
        <div class="container-fluid">
    <div class="row">
            <div class="col-mod-12">
              
                <ul class="breadcrumb">
                    <li class="active"><?php echo $this->uri->segment(2) ?></li>
                   
                </ul>
            </div>
        </div>

        <?php if (!isset($products)): ?>
            <div class="row alert alert-info">Sorry <?php echo $this->uri->segment(1); ?>s currently unavailable.</div>
        <?php else: ?>
            
            <!--  -->
            <?php if (count($products) >= 1): ?>
                <?php $this->load->model('discounts_m'); ?>
                <div class="row">
                    <div class="col-md-12">

                        <a href="<?php echo site_url('products/admin/edit'); ?>">
                            <button class="btn btn-warning text-capitalize">Add New Product</button>
                        </a>
                        <a href="<?php echo site_url('products/admin/viewall'); ?>">
                            <button class="btn btn-warning text-capitalize">All Products</button>
                        </a>
                        <a href="<?php echo site_url('products/admin/make_home'); ?>">
                            <button class="btn btn-info text-capitalize">Home Products</button>
                        </a>
                        <a href="<?php echo site_url('products/admin/new_arrivals'); ?>">
                            <button class="btn btn-info text-capitalize">New Arrivals</button>
                        </a>
                        <a href="<?php echo site_url('products/admin/delete_product'); ?>">
                            <button class="btn btn-info text-capitalize">Deleted Products</button>
                        </a>


                        <a href="<?php echo site_url(); ?>" 
                           onclick = "return confirm('You are about to delete  <?php echo $this->uri->segment(2); ?>s Permanently.This action is irreversible.Are you sure?')"
                           ></a>

                        <?php echo form_submit('submit', 'Delete', 'class="btn btn-warning text-capitalize pull-right" style="float:right;margin:4px;"') ?>

                    </div>

                </div>




                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-archon main-graph">
                            <div class="panel-heading" style="background-color:#59d1a3;color:#ffffff">
                                <h3 class="panel-title text-capitalize"><i class="fa fa-list"></i> <?php echo $head ?>
                                    <span class="pull-right" style="color:#ffffff">
                                        <a  href="#" class="panel-minimize" style="color:#ffffff"><i class="icon-chevron-up"></i></a>
                                        <!--<a  href="#"  class="panel-settings" style="color:#ffffff"><i class="icon-cog"></i></a>-->
                                        <!--<a  href="#"  class="panel-close" style="color:#ffffff"><i class="icon-remove"></i></a>-->
                                    </span>
                                    <a href="<?php
                                    echo site_url('products/admin/viewall/' . $currentoffsetp);
                                    ?>"  class="btn btn-success ">
                                        Previous page </a>
                                    <a href="<?php echo site_url('products/admin/viewall/');
                                    ?>"  class="btn btn-info ">
                                        First Page </a>
                                    <?php if ($cpage != $pages): ?>
                                        <a href="<?php echo site_url('products/admin/viewall/' . $currentoffsetn);
                                        ?>"  class="btn btn-warning ">
                                            Next Page </a>
                                    <?php endif; ?>
                                    Page =( <?php echo $cpage; ?>)of ( <?php echo $pages; ?>)
                                    All =( <?php echo $allresults; ?>)

                                </h3>
                            </div>
                            <div class="panel-body table-responsive">
                                <table  class="table table-bordered table-fluid table-hover table-striped display" id="example" >
                                    <thead>
                                        <tr>
                                            <th> Image</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Display Size and Color</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($products as $product) : ?>

                                            <tr class="odd gradeX">

                                                <td><img src="<?php echo site_url($product->image); ?>" height="20" width="20" alt=""/></td>
                                                <td><?php echo $this->unify->get($product->category_id)->name . '  ' . character_limiter($product->name, 20); ?></td>


                                                <td><?php echo ( $product->price); ?></td>
                                                <td><?php echo( $product->size . '  ' . $product->color); ?></td>

                                                <td>
                                                    <a href="<?php echo site_url('products/admin/edit/' . $product->id); ?>">
                                                        <button class="btn btn-warning">Edit</button>
                                                    </a>
                                                    <a href="<?php echo site_url('products/admin/delete_product/' . $product->id); ?>">
                                                        <button class="btn btn-primary">
                                                            <?php echo $deletebtn ?>
                                                        </button>
                                                    </a>
                                                    <a href="<?php echo site_url('products/admin/make_home/' . $product->id); ?>">
                                                        <button class="btn btn-primary">
                                                            <?php
                                                            if ($product->page_control == '1') {
                                                                echo"Hide";
                                                            } else {
                                                                echo 'Home';
                                                            }
                                                            ?>

                                                        </button>
                                                    </a>
                                                    <a href="<?php echo site_url('products/admin/new_arrivals/' . $product->id); ?>">
                                                        <button class="btn btn-primary">
                                                            <?php
                                                            if ($product->page_control == '2') {
                                                                echo"Old";
                                                            } else {
                                                                echo 'New';
                                                            }
                                                            ?>

                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>

                                            <th>Name</th>
                                            <th>Sort Order</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="panel-footer">
                                <a href="<?php
                                echo site_url('products/admin/viewall/' . $currentoffsetp);
                                ?>"  class="btn btn-success ">
                                    Previous page </a>
                                <a href="<?php echo site_url('products/admin/viewall/');
                                ?>"  class="btn btn-info ">
                                    First Page </a>
                                <?php if ($cpage != $pages): ?>
                                    <a href="<?php echo site_url('products/admin/viewall/' . $currentoffsetn);
                                    ?>"  class="btn btn-warning ">
                                        Next Page </a>
                                <?php endif; ?>
                                Page =( <?php echo $cpage; ?>)of ( <?php echo $pages; ?>)
                                All =( <?php echo $allresults; ?>)

                            </div>
                        </div>
                    </div>
                </div>
                <?php echo form_close(); ?>
            <?php else: ?>
                <div class="row alert alert-info">Sorry <?php echo $this->uri->segment(1); ?>s currently unavailable.</div>
            <?php endif; ?>
        <?php endif; ?>

    </div>
</div>



