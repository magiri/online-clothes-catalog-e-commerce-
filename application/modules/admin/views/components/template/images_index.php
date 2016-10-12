

<div class="row">
    <div class="col-mod-12">
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('admin'); ?>">Dashboard</a></li>
            <li class="active"><?php echo $this->uri->segment(3)?></li>
        </ul>
    </div>
</div>

<h4>&nbsp;</h4>
<!--  -->
<div class="row">
    <div class="col-md-2">
        <a href="<?php echo site_url('admin/image/edit/' . $this->uri->segment(3)); ?>">
            <button class="btn btn-warning text-capitalize">Add <?php echo $this->uri->segment(3); ?></button>
        </a>
    </div>
    <?php if (count($images) > 1): ?>
        <div class="col-md-2">
            <a href="<?php echo site_url('admin/image/deleteall/' . $this->uri->segment(3)); ?>" 
               onclick = "return confirm('You are about to delete all <?php echo $this->uri->segment(3); ?>s Permanently.This action is irreversible.Are you sure?')"
               >
                <button class="btn btn-warning text-capitalize">Delete All <?php echo $this->uri->segment(3); ?>s</button>
            </a>
        </div>
    <?php endif; ?>
</div>

<h4>&nbsp;</h4>

<?php if (count($images)): ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-archon main-graph">
                <div class="panel-heading" style="background-color:#59d1a3;color:#ffffff">
                    <h3 class="panel-title text-capitalize"><?php echo $this->uri->segment(3); ?>
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
                                <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status </th>
                                
                                <?php if ($this->uri->segment(3) == 'portfolio'): ?>
                                    <th>Recent</th>
                                <?php endif; ?>
                                    
                                    <?php if ($this->uri->segment(3) == 'client' || $this->uri->segment(3) == 'service'): ?>
                                    <th>Homepage</th>
                                <?php endif; ?>
                                    
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($images as $image): ?>
                                <tr class="odd gradeX">
                                    <td><img src="<?php echo site_url($image->img_url); ?>" alt="<?php echo $image->title ?>" width="151px" height="99px"></td>
                                    <td><?php echo $image->title ?></td>
                                    <td><?php echo limit_to_numwords($image->description, 5) ?></td>
                                    <td>
                                        <?php if ($image->blocked == 0): ?>
                                            <a href="<?php echo site_url('admin/image/blockopt/block/' . $image->id . '/' . $this->uri->segment(3)) ?>">
                                                <button class="btn btn-warning">Block</button>
                                            </a>
                                        <?php else: ?>
                                            <a href="<?php echo site_url('admin/image/blockopt/unblock/' . $image->id . '/' . $this->uri->segment(3)) ?>">
                                                <button class="btn btn-warning">Unblock</button></a>
                                        <?php endif; ?>
                                    </td>

                                    <?php if ($this->uri->segment(3) == 'portfolio'): ?>
                                        <td>
                                            <?php if ($image->recent == 0): ?>
                                                <a href="<?php echo site_url('admin/image/field/'. $this->uri->segment(3).'/recent/'.'1'.'/' . $image->id) ?>">
                                                    Set as recent
                                                </a>
                                            <?php else: ?>
                                                <a href="<?php echo site_url('admin/image/field/'. $this->uri->segment(3).'/recent/'.'0'.'/' . $image->id) ?>">
                                                    Unset as recent
                                                </a>
                                            <?php endif; ?>
                                        </td>
                                    <?php endif; ?>

                                        <?php if ($this->uri->segment(3) == 'client' || $this->uri->segment(3) == 'service'): ?>
                                         <td>
                                            <?php if ($image->homepage == 0): ?>
                                                <a href="<?php echo site_url('admin/image/field/'. $this->uri->segment(3).'/homepage/'.'1'.'/' . $image->id) ?>">
                                                    Set as viewable in homepage
                                                </a>
                                            <?php else: ?>
                                                <a href="<?php echo site_url('admin/image/field/'. $this->uri->segment(3).'/homepage/'.'0'.'/' . $image->id) ?>">
                                                    Unset as viewable in homepage
                                                </a>
                                            <?php endif; ?>
                                        </td>
                                <?php endif; ?>
                                        

                                    <td>
                                        <a href="<?php echo site_url('admin/image/edit/' . $this->uri->segment(3) . '/' . $image->id); ?>">
                                            <button class="btn btn-warning">Edit</button>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="image-view" imageid="<?php echo $image->id ?>">
                                            <button class="btn btn-warning">View</button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="<?php echo site_url('admin/image/delete/' . $image->id . '/' . $this->uri->segment(3)) ?>"
                                           onclick = "return confirm('You are about to delete this <?php echo $this->uri->segment(3); ?>.This action is irreversible.Are you sure?')"
                                           ><button class="btn btn-warning">Delete</button></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status </th>
                                
                                <?php if ($this->uri->segment(3) == 'portfolio'): ?>
                                    <th>Recent</th>
                                <?php endif; ?>
                                    
                                <?php if ($this->uri->segment(3) == 'client' || $this->uri->segment(3) == 'service'): ?>
                                    <th>Homepage</th>
                                <?php endif; ?>
                                    
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="row alert alert-warning">Sorry <?php echo $this->uri->segment(3); ?>s currently unavailable.Please 
        <a href="<?php echo site_url('admin/image/edit/' . $this->uri->segment(3)); ?>">Click Here</a> to add <?php echo $this->uri->segment(3); ?></div>
<?php endif; ?>



<?php if (count($images)): ?>
    <?php foreach ($images as $image): ?>

        <div class="images-view" id="image-view-<?php echo $image->id ?>" style="display:none;">
            <hr style="height:7px;background-color:blue;"/>
            <!--  -->
            <div class="row">

                <div class="col-md-5">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:green;color:#ffffff">
                            <h3 class="panel-title text-capitalize"><?php echo $this->uri->segment(3); ?> Image
                                <span class="pull-right">
                                    <a  href="#" class="panel-minimize" style="color:#ffffff"><i class="icon-chevron-up"></i></a>
                                    <!--<a  href="#"  class="panel-settings" style="color:#ffffff"><i class="icon-cog"></i></a>-->
                                    <!--<a  href="#"  class="panel-close"><i class="icon-remove"></i></a>-->
                                </span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="row-fluid">
                                <img src="<?php echo site_url($image->img_url); ?>" alt="<?php echo $image->title ?>" width="100%" height="250px">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:orange;color:#ffffff">
                            <h3 class="panel-title text-capitalize"><?php echo $this->uri->segment(3); ?> Details
                                <span class="pull-right">
                                    <a  href="#" class="panel-minimize" style="color:#ffffff"><i class="icon-chevron-up"></i></a>
                                    <!--<a  href="#"  class="panel-settings" style="color:#ffffff"><i class="icon-cog"></i></a>-->
                                    <!--<a  href="#"  class="panel-close"><i class="icon-remove"></i></a>-->
                                </span>
                            </h3>
                        </div>
                        <div class="panel-body">

                            <div class="row-fluid user-information">
                                <div class="row-fluid">
                                    Title : <?php echo $image->title ?>
                                </div>
                                <div class="row-fluid">
                                    <h4>Description</h4> <br/>
                                    <?php echo $image->description ?>
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="col-md-3">&nbsp;</div>
                                <div class="col-md-3">
                                    <?php if ($image->blocked == 0): ?>
                                        <a href="<?php echo site_url('admin/image/blockopt/block/' . $image->id . '/' . $this->uri->segment(3)) ?>">
                                            <button class="btn btn-warning">Block</button>
                                        </a>
                                    <?php else: ?>
                                        <a href="<?php echo site_url('admin/image/blockopt/unblock/' . $image->id . '/' . $this->uri->segment(3)) ?>">
                                            <button class="btn btn-warning">Unblock</button></a>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-3">
                                    <a href="<?php echo site_url('admin/image/edit/' . $this->uri->segment(3) . '/' . $image->id); ?>">
                                        <button class="btn btn-warning">Edit</button>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="<?php echo site_url('admin/image/delete/' . $image->id . '/' . $this->uri->segment(3)) ?>"
                                       onclick = "return confirm('You are about to delete this <?php echo $this->uri->segment(3); ?>.This action is irreversible.Are you sure?')"
                                       ><button class="btn btn-warning">Delete</button></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    <?php endforeach; ?>
<?php endif; ?>


