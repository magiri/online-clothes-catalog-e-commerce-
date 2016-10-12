
<!--<script src="<?php echo site_url("assets/filesManagement/ckeditor/ckeditor.js"); ?>"></script>-->

<section>
    <div class="container-fluid">
        <div class="row">
            <?php
            if (strlen($category->id) > 0) {
                $headingtext = 'Edit Category';
                $btntext = 'Save Changes';
            } else {
                $headingtext = 'Add New New Category';
                $btntext = 'Save';
            }
            ?>

            <div class="panel panel-archon">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <?php echo $headingtext ?>
                    </h3>
                </div>
                <div class="panel-body">
                    <?php echo form_open_multipart('', 'class="form-horizontal" role="form"') ?>
                    <div class="form-group col-md-12">
                        <?php echo $headingtext ?>
                        <?php echo form_submit('submit', $btntext, 'class="btn btn-success" style="float:right;margin:4px;"') ?>
                        <a href="<?php echo site_url('category/admin'); ?>"><button class="btn btn-danger" style="float:right; margin:4px;">Cancel</button></a>

                    </div>
                    <div class="col-md-9">
                        <?php echo form_open_multipart('', 'class="form-horizontal" role="form"') ?>
                        <?php echo form_hidden('date_added', set_value('date_added', $category->date_added)) ?>

                        <div class="form-group">
                            <label class="col-md-2 control-label bt">Name</label>
                            <div class="col-md-10">
                                <?php echo form_error('name'); ?>
                                <?php echo form_input('name', set_value('name', $category->name), 'class="form-control"') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Description</label>
                            <div class="col-md-10">
                                <?php echo form_error('description'); ?>
                                <?php echo form_textarea('description', set_value('description', $category->description), 'class= "form-control" id="editorTextAreaBody" rows="150"  style="overflow: hidden; word-wrap: break-word;  height:500px;"') ?>

                            </div>
                        </div>
                        <?php echo form_submit('submit', $btntext, 'class="btn btn-success" style="float:right;margin:4px;"') ?>
                        <a href="<?php echo site_url('category/admin'); ?>"><button class="btn btn-danger" style="float:right; margin:4px;">Cancel</button></a>

                    </div>
                    <div class="col-md-3" >

                        <div class="panel panel-archon">
                            <div class="panel-heading">Image</div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <?php
                                    if (filter_var($category->image, FILTER_VALIDATE_URL) == FALSE):
                                        $imagelink = site_url($category->image);
                                    else :
                                        $imagelink = $category->image;
                                    endif;
                                    ?>
                                    <img src="<?Php echo $imagelink ?>" width="100%" style="max-height:250px;">
                                </div>
                                <label class="col-md-12 control-label">Paste Image url </label>
                                <div   class="col-md-12">
                                    <?php echo form_input('image', set_value('image', $category->image), 'class="form-control"') ?>
                                </div>
                                <label class="col-md-12 control-label">Or Upload Image </label>
                                <div   class="col-md-12">
                                    <?php echo form_upload('userfile'); ?>  



                                </div>
                               
                            </div>      


                        </div>

                        <div class="col-md-12" >
                            <div class="form-group">
                                <label class="col-md-12 control-label"> Category</label>
                                <div class="col-md-12">
                                    <select  name="parent_id" class="form-control">
                                        <option value="0" <?php echo set_select('post_type', '0'); ?> >A Parent Category</option>
                                        <?php if (isset($parent)): ?>
                                            <?php if (count($parent) > 0): foreach ($parent as $parentcat): ?>
                                        <option value="<?php echo $parentcat->id; ?>" <?php echo set_select('parent_id', $parentcat->id); ?> ><?php echo $parentcat->name ?></option>
                                                <?php
                                                endforeach;
                                            else:
                                                ?>
                                                <option value="0" <?php echo set_select('post_type', '0'); ?> >No Categories</option>                                                                                               
                                            <?php endif; ?>
<?php endif; ?>
                                    </select>
                                </div>
                            </div>    
                        </div>
                    </div>



                </div>
                <div class="col-md-3"> 


                </div>
<?php echo form_submit('submit', $btntext, 'class="btn btn-success" style="float:right;margin:4px;"') ?>
                <a href="<?php echo site_url('category/admin'); ?>"><button class="btn btn-danger" style="float:right; margin:4px;">Cancel</button></a>

<?php echo form_close() ?>

            </div>



            <script>
                CKEDITOR.replace('editorTextAreaBody');

                $(function () {
                    $("#pubdate").datepicker({
                        format: 'yyyy-mm-dd'
                    });
                });

            </script>


            </section>
