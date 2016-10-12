
<div class="col-md-3">
    <div class="row">
        <div class="col-mod-12">
            <ul class="breadcrumb">
                <li class="active"><?php echo $this->uri->segment(2) ?></li>
            </ul>
        </div>
    </div>

    <?php if (!isset($prices)): ?>
        <div class="row alert alert-info">Sorry <?php echo $this->uri->segment(1); ?>s currently unavailable.</div>
    <?php else: ?>
        <div class="row alert alert-info"><?php echo $message; ?></div>
        <?php echo $this->load->view('admin/components/sidebarmenu') ?>
        <!--  -->
    </div>
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-12">

                <a href="<?php echo site_url('price_list/admin/edit'); ?>">
                    <button class="btn btn-warning text-capitalize">Add New Category</button>
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
                        <h3 class="panel-title text-capitalize"><i class="fa fa-list"></i> Category List 

                            <span class="pull-right" style="color:#ffffff">
                                <a  href="#" class="panel-minimize" style="color:#ffffff"><i class="icon-chevron-up"></i></a>
                                <!--<a  href="#"  class="panel-settings" style="color:#ffffff"><i class="icon-cog"></i></a>-->
                                <!--<a  href="#"  class="panel-close" style="color:#ffffff"><i class="icon-remove"></i></a>-->
                            </span>
                            <a href="<?php
                            
                            echo site_url('price_list/admin/index/' . $currentoffsetp);
                            ?>"  class="btn btn-success ">
                                Previous page </a>
                            <a href="<?php echo site_url('price_list/admin/index/');
                            ?>"  class="btn btn-info ">
                                First Page </a>
                            <?php if($cpage != $pages): ?>
                            <a href="<?php echo site_url('price_list/admin/index/' . $currentoffsetn);
                            ?>"  class="btn btn-warning ">
                                <?php endif; ?>
                                Next Page </a>
Page =( <?php echo $cpage; ?>)of ( <?php echo $pages; ?>)
All =( <?php echo $allresults; ?>)

                        </h3>


                    </div>
                    <div class="panel-body table-responsive">

                        <table  class="table table-bordered table-hover table-striped display" id="example" >

                            <thead>
                                <tr>
                                    <th><input type="checkbox" onclick=""></th>
                                    <th><a href="<?php echo site_url('price_list/index'); ?>">Category</a></th>
                                    <th><a href="<?php echo site_url('price_list/index'); ?>">Size</a></th>
                                    <th><a href="<?php echo site_url('price_list/index'); ?>">Price</a></th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php echo form_open('price_list/admin/edit', 'class="form-inline"') ?>
                                <tr class="odd gradeX">
                                    <td><input name="<?php echo 'none'; ?>" type="checkbox" value="<?php echo 'none'; ?>"></td>
                                    <td>
                                        <select  name="category_id" class="form-control">
                                            <?php if (isset($parent)): ?>
                                                <?php if (count($parent) > 0): foreach ($parent as $parentcat): ?>
                                                        <option <?php echo set_select('category_id') ?> value="<?php echo $parentcat->id ?>" <?php echo set_select('category_id', NULL); ?> ><?php echo $parentcat->name ?></option>
                                                        <?php
                                                    endforeach;
                                                else:
                                                    ?>
                                                    <option value="0" <?php echo set_select('category_id', '0'); ?> >No Categories</option>                                                                                               
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </select>
                                    </td>
                                    <td><?php echo form_input('size', set_value('size'), 'placeholder="Size"'); ?></td>
                                    <td><?php echo form_input('price', set_value('price'), 'placeholder="Price"'); ?></td>

                                    <td>
                                        <?php echo form_hidden('id', set_value('id', '')); ?>
                                        <?php echo form_submit('submit', 'Add Price', 'class="btn btn-warning"') ?>
                                    </td>
                                </tr>
                                <?php echo form_close(); ?>
                                <?php if (str_word_count(validation_errors())<2):?>
                                <?php foreach ($prices as $price) : ?>
                                    <?php echo form_open('price_list/admin/edit', 'class="form-inline"') ?>
                                    <tr class="odd gradeX">
                                        <td><input name="<?php echo $price->id; ?>" type="checkbox" value="<?php echo $price->id; ?>"></td>
                                        <td>   
                                            <?php
                                            $categoryname = $this->unify->get($price->category_id);
                                            echo $categoryname->name;
                                            ?>

                                        </td>
                                        <td><?php echo form_input('size', set_value('size', $price->size)); ?></td>
                                        <td><?php echo form_input('price', set_value('price', $price->price)); ?></td>

                                        <td>
                                            <?php echo form_hidden('id', set_value('id', $price->id)); ?>
                                            <?php echo form_hidden('category_id', set_value('category_id', $price->category_id)); ?>
                                            <?php echo form_submit('submit', 'Save Changes', 'class="btn btn-warning"') ?>
                                            <?php echo form_submit('delete', 'Delete', 'class="btn btn-warning"') ?>
                                        </td>
                                    </tr>
                                    <?php echo form_close(); ?>
                                <?php endforeach; endif; ?>
                               
                            </tbody>
                            <tfoot>

        <!--                        <tr>
             <th></th>
             <th>Name</th>
             <th>Sort Order</th>
             <th>Status</th>
             <th>Action</th>
         </tr>-->
                            </tfoot>
                        </table>
                        <div class="row alert alert-danger">  <?php echo validation_errors(); ?></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row alert alert-info">Sorry <?php echo $this->uri->segment(2); ?>s currently unavailable.</div>
    <?php  endif; ?>
</div>






