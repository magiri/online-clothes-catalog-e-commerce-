



                <?php foreach ($css_files as $file): ?>
                    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
                <?php endforeach; ?>
                <?php foreach ($js_files as $file): ?>
                    <script src="<?php echo $file; ?>"></script>
                <?php endforeach; ?>
                <style type='text/css'>
                    body
                    {
                        font-family: Arial;
                        font-size: 14px;
                    }
                    a {
                        color: blue;
                        text-decoration: none;
                        font-size: 14px;
                    }
                    a:hover
                    {
                        text-decoration: underline;
                    }
                </style>

  <div class="row alert alert-info"> These are Product Images</div>
                <div>
                    <a href='<?php echo site_url('images/image_manager') ?>'><button class="btn btn-warning"> Upload and Sort</button></a> | 
                    <!--<a href='<?php echo site_url('images/photo_gallery') ?>'><button class="btn btn-warning"> Gallery</button></a>-->
                </div>
              
                <div style='height:20px;'></div>  
                <div>
                    <?php echo $output; ?>
                </div>

           