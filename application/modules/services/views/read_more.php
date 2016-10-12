<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/gencss/services/service.css') ?>">
<link href="<?PHP echo site_url('assets/gencss/services/read_more.css') ?>" rel="stylesheet">
<div style="width: 100%; margin-left: auto ;  margin-right: auto ;background:whitesmoke">
<div class="row" style="width:98%; margin-left: auto ;  margin-right: auto ;">
<!--<div class="col-md-1" style="background:#ffbad2; display:block; height:100%;"> mmm</div>-->
<div class="row" style="padding: 1%;   " >
    <div class="col-md-8">
  <div class="row" style="margin-top: 0.3%; margin-bottom: 0.3%" >
                    <div  class="col-md-4" style=" display: block; float: top; float: left;">
                        <div class="row-fluid">
                            <a href="#"><img src="<?php echo site_url($service->img_url); ?>" alt="<?php echo $service->title; ?>" height="260px" width="100%"/></a>
                            </div>
                
                                        </div>
                    <div class="col-md-8" style="display: block">
                        <h1 style="text-transform: capitalize;font-weight:bold;"><b><?php echo $service->title; ?></b></h1><br/>
                        <?php echo $service->body; ?>
                        <div style="float: bottom;width:auto; margin-right: auto;margin-left: auto " > 
                        <a href="<?php echo site_url('services'); ?>" class="button">Back to Services</a>
                        </div>
                        
                    </div>
                    </div>
        </div>
    <div class="col-md-4">
            <div style="padding-top: 2%">
                             <div class="row-fluid property-enquire">
                                <h4 class="prop-heading">Enquiries</h4>
                                <div class="row-fluid property-enquire-act">
                                <?php echo form_open('services/enquire','class="form-horizontal"'); ?>
                                    <!--, 'class="form-horizontal"'-->
                                      <div class="row-fluid">
                                <div class="form-group">
                                <div class="col-sm-12">
                                <?php echo form_input('names', set_value('names'), 'class="form-control dropdown-toggle" placeholder="Names"')
                                ?>
                                </div>
                                </div>
                                </div>
                                <div class="row-fluid">
                                <div class="form-group">
                                <div class="col-sm-12">
                                <?php echo form_input('phone_number', set_value('phone_number'), 'class="form-control dropdown-toggle" placeholder="Phone Number"')
                                ?>
                                </div>
                                </div>
                                </div>
                                <div class="row-fluid">
                                <div class="form-group">
                                <div class="col-sm-12">
                                <?php echo form_input('email', set_value('email'), 'class="form-control dropdown-toggle" placeholder="Email"')
                                ?>
                                </div>
                                </div> 
                                </div>
                                <div class="row-fluid">
                                <div class="form-group">
                                <div class="col-sm-12">
                                <?php echo form_input('message', set_value('message'), 'class="form-control dropdown-toggle" placeholder="Message"')
                                ?>
                                </div>
                                </div>
                                </div>
                                <div class="row-fluid">
                                <div class="form-group">
                                <div class="col-sm-12">
                                <?php echo form_submit('submit', 'Enquire', 'class="btn button"') ?>
                                </div>
                                </div>
                                </div>
                                    <?php echo form_hidden('service_id',$service->id);?>
                                <?php echo form_close(); ?>
                                </div>
                                </div>
                        </div>
    </div>
  </div>
<!--<div class="row-fluid">
    
    <div class="col-md-4">&nbsp;</div>
    <div class="col-md-4">&nbsp;</div>
    
</div>-->
<!--<div class="col-md-1" style="background:#101010;  height:100%"">mmm</div>-->
    </div>
    </div>

<!--sdfghjkl-->