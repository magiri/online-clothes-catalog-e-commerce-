<section>

    <div class="row">
        <div class="col-md-2"> &nbsp;</div>

        <div class="col-md-8">

            <?php
            $headingtext = 'Add Slider Image';
            $btntext = 'Add Slider Image';
            ?>
            <h2 class="page-header text-center"><?php echo $headingtext ?></h2>



            <div class="row">
                <div class="text-center text-danger">
                    <?php
                    echo validation_errors('<p><b>', '</b></p>');

                    if (strlen($uploaderror['error']) > 0) {
                        echo $uploaderror['error'];
                    }
                    ?>    

                </div> 



                <?php echo form_open_multipart('', 'class="form-horizontal" role="form"') ?>

                <!-------------------------------Browse button here incase adding slider--------------------------------------------------------------------------------------------------------------------->
                <div class="form-group">
                    <label class="col-md-2 control-label">Slider Image:</label>
                    <div class="col-md-10">
                        <?php echo form_upload('userfile', 'Browse'); ?> 
                    </div>
                </div>
                <!---------------------------------------------------------------------------------------------------------------------------------------------------->


                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <?php echo form_submit('submit', $btntext, 'class="btn btn-primary"') ?>
                    </div>
                </div>

                <?php echo form_close(); ?>      

            </div>
        </div>

        <div class="col-md-2"> &nbsp;</div>
    </div>

    <script>
        //CKEDITOR.replace('editorTextArea');
        //$(function() {
        //		$( "#pubdate" ).datepicker({
        //                    format:'yyyy-mm-dd'
        //                });
        //	});
    </script>
</section>
