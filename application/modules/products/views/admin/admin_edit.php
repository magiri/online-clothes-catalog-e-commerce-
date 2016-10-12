<!--<script src="<?php echo site_url("assets/filesManagement/ckeditor/ckeditor.js"); ?>"></script>-->


    <div class="container-fluid">
        <div class="row">
            <?php
            if (strlen($product->id) > 0) {
                $headingtext = 'Edit Product';
                $btntext = 'Save Changes';
            } else {
                $headingtext = 'Add New Product';
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
                    <div class="alert alert-info">
                        1. Remember!  Edit All others Then Select Image being the last || Note Also
                      Clicking SAVE will Save product with the Default image
                    </div>
                    <?php echo form_open_multipart('', 'class="form-horizontal" role="form"') ?>
                    <div class="form-group col-md-12">
                        <?php echo $headingtext ?>
                        
                        <?php echo form_submit('submit', $btntext, 'class="btn btn-success" style="float:right;margin:4px;"') ?>
                        <a href="<?php echo site_url('products/admin'); ?>"><button class="btn btn-danger" style="float:right;margin:4px;" >Cancel</button></a>

                    </div>
                    <div class="col-md-9">

                        <?php echo form_hidden('date_added', set_value('date_added', $product->date_added)) ?>

                        <div class="form-group">
                            <label class="col-md-2 control-label bt">Name</label>
                            <div class="col-md-10">
                                <?php echo form_error('name'); ?>
                                <?php echo form_input('name', set_value('name', $product->name), 'class="form-control"') ?>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-md-2">
                                <label class="col-md-12 control-label"></label>
                            </div>
                            <div class="col-md-4">
                                <label class="col-md-12"> Category</label>
                                <div class="col-md-12">
                                    <select  name="category_id"  class="form-control">
                                        

                                        <?php if (isset($parent)): ?>
                                            <?php if (count($parent) > 0): foreach ($parent as $parentcat): ?>
                                                    <?php if(intval($parentcat->id) == intval($product->category_id)){ $sel = 'selected="selected"'; }else{ $sel = ''; }?>
                                        <option  value="<?php echo $parentcat->id ?>" <?php echo $sel; ?>><?php echo $parentcat->name ;?></option>                                                    <?php
                                                endforeach;
                                            else:
                                                ?>
                                                <option value="0" <?php echo set_select('category_id', '0'); ?> >No Categories</option>                                                                                               
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="col-md-12">Color</label>
                                <div class="col-md-12">
                                    <?php echo form_error('color'); ?>
                                    <?php echo form_input('color', set_value('color', $product->color), 'class="form-control"') ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="col-md-12">Display Size</label>
                                <div class="col-md-12">
                                    <?php echo form_error('size'); ?>
                                    <?php echo form_input('size', set_value('size', $product->size), 'class="form-control"') ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Description</label>
                            <div class="col-md-10">
                                <?php echo form_error('description'); ?>
                                <?php echo form_textarea('description', set_value('description', $product->description), 'class= "form-control" id="editorTextAreaBody"') ?>

                            </div>
                        </div>
                        <?php echo form_submit('submit', $btntext, 'class="btn btn-success" style="float:right;margin:4px;"') ?>
                        <a href="<?php echo site_url('products/admin'); ?>"><button class="btn btn-danger" style="float:right;margin:4px;">Cancel</button></a>

                    </div>
                    <div class="col-md-3" >

                        <div class="panel panel-archon">
                            <div class="panel-heading">Image</div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <?php
                                    if (filter_var($product->image, FILTER_VALIDATE_URL) == FALSE):
                                        $imagelink = site_url($product->image);
                                    else :
                                        $imagelink = $product->image;
                                    endif;
                                    ?>
                                    <img src="<?Php echo $imagelink ?>" width="100%" style="max-height:250px;">
                                    <?php echo form_hidden('image', set_value('image', $product->image), 'class="form-control"') ?>
                                   
                                </div>
                                
                            </div>

                        </div>      




                        <div class="col-md-12 row-fluid" >

                        </div>
                        <div class="col-md-12" >

                        </div>
                        <div class="col-md-12" >

                        </div>


                       <div class="col-md-12">
                                   <?php echo form_submit('selectimage', 'Select Image', 'class="btn btn-primary btn-lg" style="float:right;margin:4px;" ') ?>
                                    

                                </div>
                    </div>

                    <?php echo form_close() ?>

                </div>
            </div>
        </div>
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