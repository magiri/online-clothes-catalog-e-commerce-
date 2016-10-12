<?php echo $this->load->view('template/components/headerfile'); ?>

<div class="container">
    <div class="women_main">
        <!-- start sidebar -->
        <div class="col-md-3">
            <?php echo $this->load->view('template/components/sidebarmenu'); ?>
        </div>
        <!-- start content -->
        <div class="col-md-9 w_content">
            <div class="women">
                <a href="#"><h4>Enthecwear - <span>4449 itemms</span> </h4></a>
                <ul class="w_nav">
                    <li>Sort : </li>
                    <li><a class="active" href="#">popular</a></li> |
                    <li><a href="#">new </a></li> |
                    <li><a href="#">discount</a></li> |
                    <li><a href="#">price: Low High </a></li> 
                    <div class="clear"></div>	
                </ul>
                <div class="clearfix"></div>	
            </div>
            <!-- grids_of_4 -->
            <div class="grids_of_4">
                <div class="col-md-4">
                    <div class="content_box"><a href="<?php echo site_url('details') ?>">
                            <div class="view view-fifth">
                                <img src="<?php echo site_url('assets/genimages/devimg/motor/001.jpg'); ?>" class="img-responsive" alt=""/>
                                <div class="mask">
                                    <div class="info">Quick View</div>
                                </div>
                        </a>
                    </div>
                    <h4><a href="<?php echo site_url('details') ?>"> Duis autem</a></h4>
                    <p>It is a long established fact that a reader</p>
                    Rs. 499
                </div>
            </div>
            
<div class="clearfix"></div>
</div>





<!-- end grids_of_4 -->


</div>
<div class="clearfix"></div>

<!-- end content -->
</div>
</div>

<?php echo $this->load->view('template/components/footerfile'); ?>

