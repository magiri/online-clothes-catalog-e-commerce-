

<section>
    
    <div class="row text-center" style="margin-bottom:3%;"><h3>Total Number of Slider Images : <?php echo $noOfslide_content;?></h3></div>
    
    <div class="row">
        <div class="col-md-6 bodyfont">
            <a href="<?php echo site_url('admin/slidecont/edit');?>"><i><span class="fa fa-plus"></span></i> <button class="btn btn-success">+Add Slider Image</button> <i><span class="fa fa-photo"></span></i></a>
        </div>
        <div class="col-md-6">
            <?php if(count($slide_content) > 1):?>
            <a href="<?php echo site_url('admin/slidecont/deleteall');?>"> <button class="btn btn-danger" 
                onclick = "return confirm('You are about to delete all sliders permanently.This action is irreversible.Are you sure?')">Delete All Slider Images</button> </a>
            <?php endif;?>
        </div>
    </div>
    
    
    <?php if(count($slide_content)):foreach($slide_content as $slide_cont): ?>
    <div class="row sliderimagesbackend">
        <div class="col-md-5">
            <img src="<?php echo site_url($slide_cont->img_url);?>" alt="" class="imgg-thumbnail" height="191px" width="100%"/>
        </div>
        <div class="col-md-7">
            <?php if ($slide_cont->blocked == 0 ):?>
            <div class="row">
                Block Slider Image :  <propertyvalue><?php echo btnblock('admin/slidecont/blockopt/block/' . $slide_cont->id, 'Block From Visibility');?></propertyvalue>
            </div>
            <?php else:?>
            <div class="row">
                Unblock Background Image :  <propertyvalue><?php echo btnunblock('admin/slidecont/blockopt/unblock/' . $slide_cont->id, 'Unblock To Be Visible');?></propertyvalue>
            </div>
            <?php endif;?>
            
            <div class="row">
                <a href="<?php echo site_url('admin/slidecont/replace_slider/'.$slide_cont->id);?>"> <button class="btn btn-primary">Replace Image</button> </a>
                <a href="<?php echo site_url('admin/slidecont/delete/'.$slide_cont->id);?>"> <button class="btn btn-warning" 
                onclick = "return confirm('You are about to delete permanently.This action is irreversible.Are you sure?')">Delete</button> </a>
            </div>
        </div>
    </div>
    <?php endforeach;else: ?>
    
    <!---------error message--------------->
    <div class="row unavailableinfo">
       <propertyvalue> Sorry Background images currently unavailable!Please add Background images.</propertyvalue>
    </div>
    <!--------- end of error message--------------->
    
    
    <?php endif; ?>
    
    
    
    
    <!---------pagination comes here--------------->
    <div class="row ">
        
        <!-----------pagination start here-------------->
    <?php
    if (strlen($pagination) > 0) {
        echo $data_info_string = count($slide_content) == 1 ? ($offset_data + 1) . ' OF ' . $noOfslide_content :
        ($offset_data + 1) . ' TO ' . ($offset_data + count($slide_content)) . ' OF ' . $noOfslide_content;
    } else {
        //echo $noOfslide_content;
    }
    ?><br/>
    <?php if (strlen($pagination) > 0): ?>
        <?php echo $pagination ?>
    <?php endif; ?>
    <!----------------pagination ends here------------------------->
    
    </div>
    <!--------- pagination ends here--------------->
    
    
</section>