





<section>

    <div class="col-md-6 bodyfont">
        <a href="<?php echo site_url('services/admin/edit') ?>"><i><span class="fa fa-plus"></span></i><button class="btn btn-info btn-lg"> Add Service </button></a>
    </div>

    <div class="row" style="margin-bottom:3%;">

        <?php if (count($services) > 1): ?>
            <a href="<?php echo site_url('services/admin/deleteall') ?>"> <button class="btn btn-danger btn-lg" 
                                                                                 onclick = "return confirm('You are about to delete All Services.This action is irreversible.Are you sure?')">Delete All Services</button> </a>
            <?php endif; ?>
    </div>


    <?php if (count($services)):foreach ($services as $service): ?>
            <div class="row sliderimagesbackend">

                <div class="row-fluid">

                    <div class="col-md-5">
                        <div class="row-fluid">
                            Title :  <propertyvalue><?php echo $service->title ?></propertyvalue>
                        </div>
                        <div class="row-fluid">
                            <img src="<?php echo site_url($service->img_url); ?>" width="100%" height="191px" alt="<?php echo $service->title ?>">
                        </div>
                    </div>

                    <div class="col-md-7">

                        <div class="col-md-2">
                            <propertyvalue><a href="<?php echo site_url('services/admin/edit/' . $service->id); ?>"><button class="btn btn-primary">Edit</button></a></propertyvalue>

                        </div>

                        <div class="col-md-2">
                            <propertyvalue><a href="<?php echo site_url('services/admin/delete/' . $service->id); ?>"> <button class="btn btn-danger" 
                                                                                                                              onclick = "return confirm('You are about to delete this Service Permanently.This action is irreversible.Are you sure?')">Delete</button> </a>
                            </propertyvalue>
                        </div> 
                        
                        <div class="col-md-2">

                        <?php if ($service->blocked == 0): ?>
                            <a href="<?php echo site_url('services/admin/blockopt/block/' . $service->id); ?>"> <button class="btn btn-warning">Block Service</button> </a>
                        <?php else: ?>
                            <a href="<?php echo site_url('services/admin/blockopt/unblock/' . $service->id); ?>"> <button class="btn btn-success">Unblock Service</button> </a>
                        <?php endif; ?>

                    </div>
                        
                    </div>
                </div>



            </div>
        <?php
        endforeach;
    else:
        ?>

        <!---------error message--------------->
        <div class="row unavailableinfo">
            <propertyvalue> Sorry Services currently unavailable!</propertyvalue>
        </div>
        <!--------- end of error message--------------->


<?php endif; ?>




    <!---------pagination comes here--------------->
    <div class="row ">

        <!-----------pagination start here-------------->
        <?php
        if (strlen($pagination) > 0) {
            echo $data_info_string = count($services) == 1 ? ($offset_data + 1) . ' OF ' . $noOfservices :
            ($offset_data + 1) . ' TO ' . ($offset_data + count($services)) . ' OF ' . $noOfservices;
        } else {
            //echo $noOfservices;
        }
        ?><br/>
        <?php if (strlen($pagination) > 0): ?>
            <?php echo $pagination ?>
<?php endif; ?>
        <!----------------pagination ends here------------------------->

    </div>
    <!--------- pagination ends here--------------->


</section>




