<section>

    <div class="row">
        <div class="col-md-2"> &nbsp;</div>

        <div class="col-md-8">

            <h2 class="page-header text-center"><?php echo 'Replace Slider Image' ?></h2>



            <div class="row">
                <div class="text-center text-danger">
                    <?php
                    echo validation_errors('<p><b>', '</b></p>');

                    if (strlen($uploaderror['error']) > 0) {
                        echo $uploaderror['error'];
                    }
                    ?>    

                </div> 


                <!-------------------------------image here incase editing--------------------------------------------------------------------------------------------------------------------->
                <div class="row text-center" style="margin-top:3%">
                    Previous Image
                </div>
                <div class="row-fluid" style="margin-bottom:5%">
                    <div class="row text-center">
                        <img src="<?php echo site_url($slide_content->img_url); ?>" alt="" class="img-tthumbnail" height="391px" width="100%" />
                    </div>

                </div>
                <!---------------------------------------------------------------------------------------------------------------------------------------------------->


                <?php echo form_open_multipart('', 'class="form-horizontal" role="form"') ?>

                <div class="form-group ">
                    <label class="col-md-2 control-label">New Slider Image:</label>
                    <div class="col-md-10">
                        <?php echo form_upload('userfile', 'Browse'); ?> 
                    </div>
                </div>

                    <?php
                    echo form_hidden('replaceinspector',true);
                    ?>
                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
<?php echo form_submit('submit', 'Replace Image', 'class="btn btn-primary"') ?>
                    </div>
                </div>
                
            </div>

            <?php echo form_close() ?>   
            
            <div class="row-fluid text-center" style="margin-top:0.3%">
                <a href="<?php echo site_url('admin/slidecont/edit/'.$slide_content->id) ?>"> <button class="btn btn-info">Cancel</button> </a>
            </div>






        </div>
    </div>

    <div class="col-md-2"> &nbsp;</div>
</div>

<script>
    CKEDITOR.replace('editorTextArea');
    //$(function() {
    //		$( "#pubdate" ).datepicker({
    //                    format:'yyyy-mm-dd'
    //                });
    //	});
</script>
</section>
