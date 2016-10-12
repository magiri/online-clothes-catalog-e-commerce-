


<div class="row">
    <div class="col-mod-12">
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('admin'); ?>">Dashboard</a></li>
            <li><a href="<?php echo site_url('admin/cat/'.$this->uri->segment(4)); ?>"><?php echo $this->uri->segment(4) ?></a></li>
            
            <?php if(strlen($this->uri->segment(5))>0):?>
            <li class="active">Edit <?php echo $this->uri->segment(4) ?></li>
            <?php else:?>
            <li class="active">Add <?php echo $this->uri->segment(4) ?></li>
            <?php endif;?>
            
        </ul>
    </div>
</div>


<section>

    <div class="row">
        <div class="col-md-2"> &nbsp;</div>

        <div class="col-md-8">
            <div class="text-center text-danger">
                <?php
                echo validation_errors('<p class="validationerrors"><b>', '</b></p>');
                if (strlen($uploaderror['error']) > 0) {
                    echo '<p class="validationerrors">' . $uploaderror['error'] . '</p>';
                }
                ?>    

            </div> 

            <h2 class="page-header text-center"><?php echo $title; ?></h2>



            <div class="row">

                <?php if (strlen($image->id) > 0): ?>
                    <div class="row">
                        <div class="col-md-3">&nbsp;</div>
                        <div class="col-md-3">
                            <?php if ($image->blocked == 0): ?>
                                <a href="<?php echo site_url('admin/image/blockopt/block/' . $image->id . '/' . $this->uri->segment(4)) ?>">
                                    <button class="btn btn-warning">Block</button>
                                </a>
                            <?php else: ?>
                                <a href="<?php echo site_url('admin/image/blockopt/unblock/' . $image->id . '/' . $this->uri->segment(4)) ?>">
                                    <button class="btn btn-warning">Unblock</button></a>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-3">
                            <a href="<?php echo site_url('admin/image/delete/' . $image->id . '/' . $this->uri->segment(4)) ?>"
                               onclick = "return confirm('You are about to delete this portfolio.This action is irreversible.Are you sure?')"
                               ><button class="btn btn-warning">Delete</button></a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="">
                            <h4 class="text-center">&nbsp;</h4>
                            <!-------------------------------image here incase editing--------------------------------------------------------------------------------------------------------------------->
                            <div class="row-fluid" style="margin-bottom:5%">
                                <div class="row text-center">
                                    <img src="<?php echo site_url($image->img_url); ?>" alt="<?php echo $image->title ?>" width="300px" height="200px" class="img-tthumbnail" />
                                </div>
                            </div>
                            <!---------------------------------------------------------------------------------------------------------------------------------------------------->
                        </div>

                    </div>
                <?php endif; ?>



                <?php echo form_open_multipart('', 'class="form-horizontal" role="form"') ?>

                <?php if (strlen($image->id) < 1): ?>
                    <div class="row">
                        <div class="">

                            <div class="form-group">

                                <label class="col-md-3 control-label"><?php echo $this->uri->segment(4) ?> Image:</label>
                                <div class="col-md-9">
                                    <?php echo form_upload('userfile', 'Browse'); ?> 
                                </div>
                            </div>

                        </div>

                    </div>
                <?php endif; ?> 

                <div class="row">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Title:</label>
                        <div class="col-md-10">
                            <?php echo form_input('title', set_value('title', $image->title), 'class="form-control"'); ?> 
                        </div>
                    </div>  
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Description:</label>
                        <div class="col-md-10">
                            <?php echo form_textarea('description', set_value('description', $image->description), 'class="form-control"') ?> 
                        </div>
                    </div> 
                </div>

                <div class="row">
                    <div class="col-md-3">&nbsp;</div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <?php echo form_submit('submit', $title, 'class="btn btn-primary"') ?>
                                <?php echo form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">&nbsp;</div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <a href="<?php echo site_url('admin/cat/' . $this->uri->segment(4)); ?>">
                                    <button class="btn btn-danger"> Cancel</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-2"> &nbsp;</div>
    </div>

</section>
