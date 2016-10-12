
<div class="container">
    <div class="row">
        <div class="col-mod-12">
            <ul class="breadcrumb">
                <li class="active"><?php echo $this->uri->segment(2) ?></li>
            </ul>
        </div>
    </div>

    <?php if (!isset($categories)): ?>
        <div class="row alert alert-info">Sorry <?php echo $this->uri->segment(1); ?>s currently unavailable.</div>
    <?php else: ?>
        <div class="row alert alert-info"><?php echo $message; ?></div>
        <!--  -->
        <?php if (count($categories) > 1): ?>
            <div class="row">
                <div class="col-md-12">

                    <a href="<?php echo site_url('category/admin/edit'); ?>">
                        <button class="btn btn-warning text-capitalize">Add New Category</button>
                    </a>


                    <a href="<?php echo site_url(); ?>" 
                       onclick = "return confirm('You are about to delete  <?php echo $this->uri->segment(2); ?>s Permanently.This action is irreversible.Are you sure?')"
                       ></a>

                    <!--                 <?php echo form_submit('submit', 'Delete', 'class="btn btn-warning text-capitalize pull-right" style="float:right;margin:4px;"') ?>
                    -->
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
                            </h3>
                        </div>
                        <div class="panel-body table-responsive">
                            <table  class="table table-bordered table-hover table-striped display" id="example" >
                                <thead>
                                    <tr>
                                        <!--<th><input type="checkbox" onclick=""></th>-->
                                        <th>Name</th>
                                        <th>Sort Order</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($categories as $category) : ?>

                                        <tr class="odd gradeX">
                                            <!--<td></td>-->
                                            <td><?php echo $category->name; ?></td>
                                            <td><?php echo $category->sort_order; ?></td>
                                            <td><?php echo $category->status; ?></td>

                                            <td>
                                                <a href="<?php echo site_url('category/admin/edit/' . $category->id); ?>">
                                                    <button class="btn btn-warning">Edit</button>
                                                </a>



                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <!--<th></th>-->
                                        <th>Name</th>
                                        <th>Sort Order</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
        <?php else: ?>
            <div class="row alert alert-info">Sorry <?php echo $this->uri->segment(2); ?>s currently unavailable.</div>
        <?php endif; ?>
    <?php endif; ?>

</div>



