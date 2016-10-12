<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/gencss/services/service.css') ?>">
<div style="width: 100%; margin-left: auto ;  margin-right: auto ;background:whitesmoke">
    <div class="row" style="width:92%; margin-left: auto ;  margin-right: auto ;">
        <!--<div class="col-md-1" style="background:#ffbad2; display:block; height:100%;"> mmm</div>-->
        <div class="row" style="padding: 1%; background:whitesmoke  " >

            <?php if (count($services)):foreach ($services as $service): ?>
                    <!--outside catering-->
                    <div class="row" style="margin-top: 0.3%; margin-bottom: 0.3%" >
                        <div  class="col-md-4" style="width: 225px;height: 145px; display: block; float: top; float: left;">
                            <a href="#"><img src="<?php echo site_url($service->img_url); ?>" alt="<?php echo $service->title; ?>" /></a>
                        </div>
                        <div class="col-md-8" style="display: block">
                            <h4><span><h2 style="text-transform: capitalize;font-weight:bold;"><?php echo $service->title; ?></h2></span></h4><br/>
                            <?php echo $service->summary; ?><br/>
                            <a href="<?php echo site_url('services/read_more/' . $service->id); ?>" class="button">Read More</a>
                            <?php if ($this->auth->isadmin()): ?>
                                <a href="<?php echo site_url('services/admin/edit/' . $service->id); ?>" class="button">Edit</a>  
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach;
            else:
                ?>
                <h2>Sorry Currently Unavailable</h2>
<?php endif; ?>

        </div>	
        <!--<div class="col-md-1" style="background:#101010;  height:100%"">mmm</div>-->
    </div>
</div>

<!--sdfghjkl-->


